<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Input; 
use App\Dog; 
use Session; 

class AdminController extends Controller
{
    // default admin page 
    public function main() {
        # get all dog names
        $allDogs = Dog::all()->pluck('name')->toArray(); 
        sort($allDogs); 
        $allDogs = json_encode($allDogs); 
        
        return view('admin')->with([
            'allDogs' => $allDogs
        ]);
    }
    

    // method when user searches for dog to delete/edit 
    public function search(Request $request) {        
        # get all dog names
        $allDogs = Dog::all(); 
        $dogNamesArray = $allDogs->pluck('name')->toArray(); 
        sort($dogNamesArray); 
        $dogNames = json_encode($dogNamesArray); 
        
        # get search term and actionType (edit or delete)
        $searchTerm = ucwords($request->input('adminSearch')); 
        $actionType = $request->input('actionType'); 
        
        # get Dog object (based on search term)
        $dog = $allDogs->where('name', $searchTerm)->first(); 
                
        #validate user input
        $rules = [
            'actionType' => 'in:add,edit,delete',
            'adminSearch' => 'required|regex:/^[\pL\s\-.]+$/u'
        ];
        $validator = Validator::make($request->all(), $rules); 
        
        # redirect back to admin page if validation fails
        if ($validator->fails()) {
            return redirect('/admin')->withErrors($validator)->withInput(Input::all());   
        }
        
        # also redirect to admin page if searched dog is not found
        if (!(in_array($searchTerm, $dogNamesArray))) {
            $errorMessage = '<strong>'.$searchTerm.'</strong> not found in database';  
            Session::flash('errorMessage', $errorMessage);
        }
                   
        return view('admin')->with([
            'dog' => $dog,
            'actionType' => $actionType,
            'allDogs' => $dogNames
        ]); 
    }
    
    
    // edit a dog already existing  
    public function edit(Request $request) {
        # validation rules for required fields
        $rules = [
            'name' => 'required|regex:/^[\pL\s\-.]+$/u',
            'group' => 'required|in:Herding,Hound,Non-Sporting,Sporting,Working,Toy',
            'apartment' => 'required|boolean',
            'size' => 'required|in:tiny,small,medium,large',
            'energy' => 'required|integer|between:1,5',
            'social' => 'required|integer|between:1,5',
            'intelligence' => 'required|integer|between:1,5',
            'cleanliness' => 'required|integer|between:1,5',
            'adventure' => 'required|integer|between:1,5'
        ];
        
        # validation rules for optional fields
        if($request->has('aliasOne'))
            $rules['aliasOne'] = 'regex:/^[\pL\s\-.]+$/u'; 
        if($request->has('aliasTwo'))
            $rules['aliasTwo'] = 'regex:/^[\pL\s\-.]+$/u'; 
        if($request->has('aliasThree'))
            $rules['aliasThree'] = 'regex:/^[\pL\s\-.]+$/u'; 

        # if validation page redirect back to admin page
        $validator = Validator::make($request->all(), $rules); 
        if ($validator->fails()) {
            return redirect('/admin')->withErrors($validator)->withInput(Input::all());   
        }
        
        # find Dog object and update necessary MySQL fields
        $dog = Dog::find($request->id); 
        $dog->name = $request->name; 
        $dog->aliasOne = $request->aliasOne; 
        $dog->aliasTwo = $request->aliasTwo; 
        $dog->aliasThree = $request->aliasThree; 
        $dog->group = $request->group; 
        $dog->apartment = $request->apartment;
        $dog->size = $request->size; 
        $dog->energy = $request->energy;
        $dog->social = $request->social; 
        $dog->intelligence = $request->intelligence; 
        $dog->cleanliness = $request->cleanliness; 
        $dog->adventure = $request->adventure; 
        
        $dog->save();   
        
        # create success message via Session        
        $link = '/breeds/'.$dog->name; 
        $adminMessage = '<a id="successMessage" href="'.$link.'">'.$dog->name.'</a>'.' successfully edited!'; 
                
        Session::flash('adminMessage', $adminMessage);
        return redirect('/admin'); 
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
        return redirect('/admin'); 
    }
    
    
    // add a new dog
    public function add(Request $request) {
        # get all dog names
        $allDogs = Dog::all()->pluck('name')->toArray();  
        
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
            'adventure' => 'required|integer|between:1,5'
        ];
        
        # validation for optional fields
        if($request->has('aliasOne'))
            $rules['aliasOne'] = 'regex:/^[\pL\s\-.]+$/u'; 
        if($request->has('aliasTwo'))
            $rules['aliasTwo'] = 'regex:/^[\pL\s\-.]+$/u'; 
        if($request->has('aliasThree'))
            $rules['aliasThree'] = 'regex:/^[\pL\s\-.]+$/u'; 

        # run validation and redirect if it failed
        $validator = Validator::make($request->all(), $rules); 
        if ($validator->fails()) {
            return redirect('/admin')->withErrors($validator)->withInput(Input::all());   
        }
        
        #ensure that dog name is not being repeated
        if(in_array(ucwords($request->name), $allDogs)) {
            $errorMessage = '<strong>'.$request->name.'</strong> already in database';  
            Session::flash('errorMessage', $errorMessage); 
            return redirect('/admin')->withErrors($validator)->withInput(Input::all()); 
        }
        
        # create a new dog and update required fields
        $dog = new Dog(); 
        $dog->name = $request->name; 
        $dog->group = $request->group; 
        $dog->apartment = $request->apartment;
        $dog->size = $request->size; 
        $dog->energy = $request->energy;
        $dog->social = $request->social; 
        $dog->intelligence = $request->intelligence; 
        $dog->cleanliness = $request->cleanliness; 
        $dog->adventure = $request->adventure; 
        
        # update optional fields if provided
        if($request->has('aliasOne'))
            $dog->aliasOne = $request->aliasOne; 
        if($request->has('aliasTwo'))
            $dog->aliasTwo = $request->aliasTwo; 
        if($request->has('aliasThree'))
            $dog->aliasThree = $request->aliasThree; 
        
        $dog->save();   
        
        # create success message via Sesssion
        $link = '/breeds/'.$dog->name; 
        $adminMessage = '<a id="successMessage" href="'.$link.'">'.$dog->name.'</a>'.' successfully added!'; 
        
        Session::flash('adminMessage', $adminMessage);
        return redirect('/admin'); 
    }
}