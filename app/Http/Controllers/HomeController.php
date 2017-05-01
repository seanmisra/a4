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
    public function search(Request $request) {
        $dog = ucwords($request->input('search')); 
        $allDogs = Dog::all()->pluck('name')->toArray(); 
        $aliasOne = Dog::all()->pluck('aliasOne')->toArray(); 
        $aliasTwo = Dog::all()->pluck('aliasTwo')->toArray(); 
        $aliasThree = Dog::all()->pluck('aliasThree')->toArray(); 
        
        // check if alias was entered
        for ($i = 0; $i<count($allDogs); $i++) {
            if ($dog == $aliasOne[$i]) {
                $dog = $allDogs[$i];
                break; 
            }
            else if ($dog == $aliasTwo[$i]) {
                $dog = $allDogs[$i];
                break; 
            }
            else if ($dog == $aliasThree[$i]) {
                $dog = $allDogs[$i];
                break; 
            }
        }
        
        $rules = ['search' => 'required'];
        $validator = Validator::make($request->all(), $rules); 
        
        //checking dogs with in_array (change to validation regex later)
        if ($validator->fails() || !(in_array($dog, $allDogs))) {
            Session::flash('message', 'The breed <strong>'.$dog. '</strong> was not found. Search for breeds here.'); 
            
            return redirect('/breeds')->withErrors($validator)->withInput(Input::all());   
        }
        else {   
            return redirect('/breeds/'.$dog);
        }
    }
    
    public function start() {
        $allDogs = Dog::all()->pluck('name')->toArray(); 
        sort($allDogs); 
        $allDogs = json_encode($allDogs); 
        
        $allTags = Tag::all()->pluck('name')->toArray(); 
        shuffle($allTags); 
        $allTagsJSON = json_encode($allTags); 
        
        return view('home')->with([
            'allDogs' => $allDogs,
            'allTags' => $allTags,
            'allTagsJSON' => $allTagsJSON
        ]);
    }
    
    public function match(Request $request) {
        $rules = ['size' => 'required|between:0,100', 'keywords' => 'required'];        
        
        //validate user input
        $validator = Validator::make($request->all(), $rules); 
        if ($validator->fails()) {
            dd("validation failed!");  
        }
    
        $size = $request->input('size'); 
        $keywords = $request->input('keywords'); 
        $lifestyle = ($request->input('lifestyle')) ? true : false; 
        
        
        // parse keywords
        $keywords = str_replace(" ", "", $keywords); 
        $keywordList = explode(",", $keywords); 
        
        
        $preferredSize; 
        if ($size >= 75) {
            $preferredSize = "large";
        }
        else if ($size >= 50) {
            $preferredSize = "medium"; 
        }
        else if ($size >= 25) {
            $preferredSize = "small";
        }
        else {
            $preferredSize = "tiny"; 
        }
        
        
        // if lifestyle is apartment, need to make sure dogs are apartment-compatible
        if ($lifestyle)
            $potentialDogs = Dog::all()->where('size', 'LIKE', $preferredSize)->where('apartment', 'LIKE', true); 
        else 
            $potentialDogs = Dog::all()->where('size', 'LIKE', $preferredSize);      

           
        $dogScores = [];  
        
        // go through each potential dog
        foreach ($potentialDogs as $dog) {
            foreach ($dog->tags->pluck('name')->toArray() as $tag) {
                if (in_array($tag, $keywordList))
                    if (isset($dogScores[$dog->name]))
                        $dogScores[$dog->name]++; 
                    else 
                        $dogScores[$dog->name] = 1; 
                
            }
                
        }
                
        $selectedDog = array_search(max($dogScores), $dogScores); 
        
        return redirect('/breeds/'.$selectedDog);        
    }
    
}
