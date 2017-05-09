<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Input;
use App\Dog; 
use App\Tag; 
use Session; 

class HomeController extends Controller
{
    // for homepage load
    public function start() {
        # get all Dog names
        $allDogs = Dog::all()->pluck('name')->toArray(); 
        sort($allDogs); 
        $allDogs = json_encode($allDogs); 
        
        # get all positive Dog tags
        $allTags = Tag::all()->where('positive', 'LIKE', true)->pluck('name')->toArray();    
        shuffle($allTags); 
        $allTagsJSON = json_encode($allTags); 
        
        return view('home')->with([
            'allDogs' => $allDogs,
            'allTags' => $allTags,
            'allTagsJSON' => $allTagsJSON
        ]);
    }
    
    
    // process homepage search bar queries
    public function search(Request $request) {
        # format query
        $dog = ucwords($request->input('search')); 
        
        # get dog names and aliases
        $allDogs = Dog::all(); 
        $dogNames = $allDogs->pluck('name')->toArray();
        $aliasOne = $allDogs->pluck('aliasOne')->toArray();
        $aliasTwo = $allDogs->pluck('aliasTwo')->toArray(); 
        $aliasThree = $allDogs->pluck('aliasThree')->toArray();  
        
        # check if query is alias -- if so, convert to regular name
        $dog = (array_search($dog, $aliasOne)) ? $dogNames[array_search($dog, $aliasOne)] : $dog; 
        $dog = (array_search($dog, $aliasTwo)) ? $dogNames[array_search($dog, $aliasTwo)] : $dog; 
        $dog = (array_search($dog, $aliasThree)) ? $dogNames[array_search($dog, $aliasThree)] : $dog;         
        
        # query must be alpha, w/ spaces, dashes, commas allowed
        $rules = ['search' => 'required|regex:/^[\pL\s\-.]+$/u'];
        $validator = Validator::make($request->all(), $rules); 
                
        # check validation and if dog name is valid
        if ($validator->fails() || !(in_array($dog, $dogNames))) {
            Session::flash('invalidSearchMessage', 'The breed <strong>'
                .$dog.'</strong> was not found. Search for breeds here.'); 
            return redirect('/breeds')->withErrors($validator)->withInput(Input::all());   
        }
        # if validation passes, redirect to a dog view
        else {   
            return redirect('/breeds/'.$dog);
        }
    }
    
    
    // process homepage match queries 
    public function match(Request $request) {
        
        # validate user input
        $this->validate($request, [
            'size' => 'required|between:0,100', 
            'keywords' => 'required'
        ]); 
        
        # get input variables
        $size = $request->input('size'); 
        $keywords = $request->input('keywords'); 
        $lifestyle = ($request->input('lifestyle')) ? true : false; 
        
        # parse input keywords
        $keywordList = explode(",", str_replace(" ", "", $keywords)); 
        
        # parse preferred size 
        $preferredSize; 
        if ($size >= 75):
            $preferredSize = "large";
        elseif ($size >= 50):
            $preferredSize = "medium"; 
        elseif ($size >= 25):
            $preferredSize = "small";
        else:
            $preferredSize = "tiny"; 
        endif; 
        
        # get collection of potential dogs
        if ($lifestyle)
            $potentialDogs = Dog::all()->where('size', 'LIKE', $preferredSize)
            ->where('apartment', 'LIKE', true); 
        else 
            $potentialDogs = Dog::all()->where('size', 'LIKE', $preferredSize);      

        # score each potential dog
        $dogScores = [];  
        $matchedTraits = []; 
        foreach ($potentialDogs as $dog) {
            $dogScores[$dog->name] = 0;
            $matchedTraits[$dog->name] = [];
            foreach ($dog->tags->pluck('name')->toArray() as $tag) {
                if (in_array($tag, $keywordList)) {
                        $dogScores[$dog->name]++; 
                        array_push($matchedTraits[$dog->name], $tag);  
                }
            }       
        }        
        
        # out of potential dogs, pick one with most matchedTraits
        if (sizeof($dogScores) > 0){
            $selectedDog = array_search(max($dogScores), $dogScores); 
            $selectedTraits = $matchedTraits[$selectedDog]; 
        }
        # if all potential dogs have 0 matched traits, pick a random one 
        else {
            $potentialDogs = $potentialDogs->pluck('name')->toArray(); 
            shuffle($potentialDogs); 
            $selectedDog = array_pop($potentialDogs); 
        }
        
        # build explanation for picking dog 
        $explanation = "The <strong>".$selectedDog.
        "</strong> was selected! The ".$selectedDog." is a ".$preferredSize." dog";
        if ($lifestyle)
            $explanation .= ", who will fit well in your apartment. ";
        else 
            $explanation .= ', which suits what you\'re looking for. ';
        
        $traitExplanation= ""; 
        foreach(array_unique($selectedTraits) as $trait) 
            $traitExplanation .= $trait.", ";
            
        if ($selectedTraits) {   
            $explanation .= "Matched traits for this breed include: <strong>";
            $explanation .=$traitExplanation; 
            $explanation = substr($explanation, 0, -2); 
            $explanation .= "</strong>";
        }
        else 
            $explanation .= "Try entering more keywords next time for better results";
        
        $explanation .= ".";
        
        # store explanation in Session
        Session::flash('explanation', $explanation); 
        
        # return view of selected dog
        return redirect('/breeds/'.$selectedDog);        
    }
    
}
