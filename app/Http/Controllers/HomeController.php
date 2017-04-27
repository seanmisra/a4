<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Input;
use App\Dog; 
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
        
        return view('home')->with([
            'allDogs' => $allDogs  
        ]);
    }
    
    public function match(Request $request) {
        $rules = ['size' => 'required|between:0,100', 'keywords' => 'required', 'zipcode' => 'digits:5'];
        $validator = Validator::make($request->all(), $rules); 
        
        //validate user input
        if ($validator->fails()) {
            dump("validation failed!");   
        }
    
    
        $size = $request->input('size'); 
        $keywords = $request->input('keywords'); 
        $zipcode = $request->input('zipcode'); 

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
        
        
        dump($preferredSize); 
        dump($keywordList);
        dump($zipcode);   
    }
    
}
