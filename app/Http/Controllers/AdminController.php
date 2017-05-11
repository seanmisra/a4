<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule; 
use Validator;
use Input; 
use Session; 
use Image; 
use App\Dog; 
use App\Tag; 
use App\Fact;
use Config; 

class AdminController extends Controller
{
    // default admin page 
    public function main() {
        # get all Dog names as JSON string
        $allDogs = Dog::namesForDropdown(); 

        # get all Tags, sorted 
        $allTags = Tag::sortedTags(); 
        
        return view('admin')->with([
            'allDogs' => $allDogs,
            'allTags' => $allTags
        ]);
    }
    

    // method when user searches for dog to delete/edit 
    public function search(Request $request) {                
        #validate user input
        $rules = [
            'actionType' => 'in:add,edit,delete',
            'adminSearch' => 'required|regex:/^[\pL\s\-.]+$/u'
        ];
        $validator = Validator::make($request->all(), $rules); 
        
        # redirect back to admin page if validation fails
        if ($validator->fails()) {
            return redirect('/'.Config::get("app.key").'/admin')->withErrors($validator)->withInput(Input::all());   
        }
        
        # get Dog names
        $dogNamesArray = Dog::names(); 
        $dogNames = json_encode($dogNamesArray); 
                
        # get all tags, sorted
        $allTags = Tag::sortedTags(); 
        
        # get search term and actionType (edit or delete)
        $searchTerm = ucwords($request->input('adminSearch')); 
        $actionType = $request->input('actionType'); 
        
        # redirect to admin page if searched dog is not in database
        if (!(in_array($searchTerm, $dogNamesArray))) {
            $errorMessage = '<strong>'.$searchTerm.'</strong> not found in database';  
            Session::flash('errorMessage', $errorMessage);
            return redirect('/'.Config::get("app.key").'/admin')->withErrors($validator)->withInput(Input::all());
        }
        
        # get Dog object (based on search term)
        $dog = Dog::where('name', $searchTerm)->first(); 
        
        # get tags for specific dog
        $tagsForThisDog = [];
        foreach($dog->tags as $tag) {
            $tagsForThisDog[] = $tag->name;
        }
        
        # get facts
        $facts = []; 
        foreach($dog->facts as $fact) {
            $facts[] = $fact; 
        }
                         
        return view('admin')->with([
            'dog' => $dog,
            'actionType' => $actionType,
            'facts' => $facts,
            'allDogs' => $dogNames,
            'allTags' => $allTags,
            'tagsForThisDog' => $tagsForThisDog
        ]); 
    }
    
    
    // add a new dog
    public function add(Request $request) {
        # get all dog names
        $allDogs = Dog::names(); 
        
        # validation for required fields                    
        $rules = [
            'name' => 'required|regex:/^[\pL\s\-.]+$/u',
            'group' => 'required|in:Herding,Hound,Non-Sporting,Sporting,Working,Toy',
            'apartment' => 'required|boolean',
            'size' => 'required|in:tiny,small,medium,large',
            'energy' => 'required|integer|between:1,5',
            'social' => 'required|integer|between:1,5',
            'intelligence' => 'required|integer|between:1,5',
            'cleanliness' => 'required|integer|between:1,5',
            'adventure' => 'required|integer|between:1,5',
        ];
        
        # validation for optional fields
        if($request->has('aliasOne'))
            $rules['aliasOne'] = 'regex:/^[\pL\s\-.]+$/u'; 
        if($request->has('aliasTwo'))
            $rules['aliasTwo'] = 'regex:/^[\pL\s\-.]+$/u'; 
        if($request->has('aliasThree'))
            $rules['aliasThree'] = 'regex:/^[\pL\s\-.]+$/u'; 
        if($request->hasFile('dogImg')) {
            $rules['dogImg'] = Rule::dimensions()->maxWidth(1200)
            ->maxHeight(1000)->minWidth(350)->minHeight(200);
        }
        
        # run validation and redirect if it failed
        $validator = Validator::make($request->all(), $rules); 
        if ($validator->fails()) {
            return redirect('/'.Config::get("app.key").'/admin')->withErrors($validator)->withInput(Input::all());   
        }
        
        #ensure that dog name is not being repeated
        if(in_array(ucwords($request->name), $allDogs)) {
            $errorMessage = '<strong>'.$request->name.'</strong> already in database';  
            Session::flash('errorMessage', $errorMessage); 
            return redirect('/'.Config::get("app.key").'/admin')->withErrors($validator)->withInput(Input::all()); 
        }
           
        # collect tags, facts, and fact sources
        $tags = ($request->tags) ? $request->tags : []; 
        $facts = ($request->facts) ? $request->facts : []; 
        $sources = ($request->sources) ? $request->sources : []; 
        
        # create a new dog and update fields
        $dog = new Dog(); 
        $dog->name = $request->name; 
        $dog->alias_one = $request->aliasOne; 
        $dog->alias_two = $request->aliasTwo; 
        $dog->alias_three = $request->aliasThree; 
        $dog->group = $request->group; 
        $dog->apartment = $request->apartment;
        $dog->size = $request->size; 
        $dog->energy = $request->energy;
        $dog->social = $request->social; 
        $dog->intelligence = $request->intelligence; 
        $dog->cleanliness = $request->cleanliness; 
        $dog->adventure = $request->adventure; 
                
        # save to create id, sync tags, and save again
        $dog->save();   
        $dog->tags()->sync($tags); 
        $dog->save();   
        
        # create facts and associate with dog's id
        if($request->facts) {
            for($x = 0; $x<sizeof($facts); $x++) {
                if ($facts[$x] != null) {
                    $newFact = new Fact(); 
                    $newFact->content = $facts[$x]; 
                    if($sources[$x] != null)
                        $newFact->source = $sources[$x]; 

                    $newFact->dog_id = $dog->id;  
                    $newFact->save(); 
                }
            }
        }
        

        # create and save Image object 
        if($request->hasFile('dogImg')) {
            $img = Image::make($request->file('dogImg')); 
            $imgName = str_replace(" ", "_", $request->name).".jpg";  
            $img->save('images/'.$imgName); 
        }
        
        # create success message via Sesssion
        $link = '/breeds/'.$dog->name; 
        $adminMessage = '<a id="successMessage" href="'.$link.'">'.$dog->name.
        '</a>'.' successfully added!'; 
        Session::flash('adminMessage', $adminMessage);
        
        return redirect('/'.Config::get("app.key").'/admin'); 
    }
    
    
    // edit a dog already existing  
    public function edit(Request $request) {
        # validation rules for required fields
        $rules = [
            'groupEdit' => 'required|in:Herding,Hound,Non-Sporting,Sporting,Working,Toy',
            'apartmentEdit' => 'required|boolean',
            'sizeEdit' => 'required|in:tiny,small,medium,large',
            'energyEdit' => 'required|integer|between:1,5',
            'socialEdit' => 'required|integer|between:1,5',
            'intelligenceEdit' => 'required|integer|between:1,5',
            'cleanlinessEdit' => 'required|integer|between:1,5',
            'adventureEdit' => 'required|integer|between:1,5'
        ];
                
        # validation rules for optional fields
        if($request->has('aliasOneEdit'))
            $rules['aliasOneEdit'] = 'regex:/^[\pL\s\-.]+$/u'; 
        if($request->has('aliasTwoEdit'))
            $rules['aliasTwoEdit'] = 'regex:/^[\pL\s\-.]+$/u'; 
        if($request->has('aliasThreeEdit'))
            $rules['aliasThreeEdit'] = 'regex:/^[\pL\s\-.]+$/u'; 
        
        # if validation fails, redirect back to same editing page
        $validator = Validator::make($request->all(), $rules); 
        if ($validator->fails()) {
            
            #create redirect link
            $dog = Dog::find($request->id); 
            $dogName = $dog->name; 
                        
            $redirectLink = '/'.Config::get("app.key").'/admin/search?actionType=edit&adminSearch='.$dogName; 
            
            return redirect($redirectLink)->withErrors($validator)->withInput(Input::all());   
        }
        
        # if there are tags/facts, collect them in an array
        $tags = ($request->tags) ? $request->tags : []; 
        $facts = ($request->facts) ? $request->facts : []; 
        $sources = ($request->sources) ? $request->sources : []; 
        $factIds = ($request->factIds) ? $request->factIds : [];
        
        # find Dog object and update necessary MySQL fields
        $dog = Dog::with('tags')->find($request->id); 
        $dog->alias_one = $request->aliasOneEdit; 
        $dog->alias_two = $request->aliasTwoEdit; 
        $dog->alias_three = $request->aliasThreeEdit; 
        $dog->group = $request->groupEdit; 
        $dog->apartment = $request->apartmentEdit;
        $dog->size = $request->sizeEdit; 
        $dog->energy = $request->energyEdit;
        $dog->social = $request->socialEdit; 
        $dog->intelligence = $request->intelligenceEdit; 
        $dog->cleanliness = $request->cleanlinessEdit; 
        $dog->adventure = $request->adventureEdit; 
        
        #resync tags and save
        $dog->tags()->sync($tags); 
        $dog->save();   
                        
        # edit facts and create them as needed
        if($request->facts) {
            for($x = 0; $x<sizeof($facts); $x++) {
                if ($facts[$x] != null) {
                    # for existing facts
                    if(isset($factIds[$x])) {
                        $currentFact = Fact::find($factIds[$x]);
                        $currentFact->content = $facts[$x]; 
                        if($sources[$x] != null)
                            $currentFact->source = $sources[$x];

                        $currentFact->save(); 
                    }
                    # for new facts
                    else {
                        $newFact = new Fact(); 
                        $newFact->content = $facts[$x]; 
                        if($sources[$x] != null)
                            $newFact->source = $sources[$x]; 
                        $newFact->dog_id = $dog->id;  
                        $newFact->save(); 
                    }
                }
            }
        }
        
        # create success message via Session        
        $link = '/breeds/'.$dog->name; 
        $adminMessage = '<a id="successMessage" href="'.$link.'">'.$dog->name.
        '</a>'.' successfully edited!'; 
                
        Session::flash('adminMessage', $adminMessage);
        
        return redirect('/'.Config::get("app.key").'/admin'); 
    }
    
    
    // delete a dog
    public function delete(Request $request) {                
        # find Dog to delete
        $dog = Dog::find($request->id);
    
        # delete Dog, as well as all associated tags
        $dog->tags()->detach(); 
        $dog->delete(); 
        
        # create success message via Sesssion
        $adminMessage = '<strong>'.$dog->name.'</strong> successfully deleted!'; 
        Session::flash('adminMessage', $adminMessage);
        return redirect('/'.Config::get("app.key").'/admin'); 
    }

}