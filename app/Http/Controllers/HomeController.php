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
        $dog = $request->input('search'); 
        $allDogs = Dog::all()->pluck('name')->toArray(); 
        
        $rules = ['search' => 'required'];
        $validator = Validator::make($request->all(), $rules); 
        
        //checking dogs with in_array (change to validation regex later)
        if ($validator->fails() || !(in_array($dog, $allDogs))) {
            Session::flash('message', 'The breed <strong>'.$dog. '</strong> was not found. Search for breeds here.'); 
            
            return redirect('/breeds')->withErrors($validator)->withInput(Input::all());   
        }
        else {        
            // create image path
            $imagePath = "images/".str_replace(" ", "_", $dog).".jpg"; 
            
            // get group
            $group = Dog::where('name', 'LIKE', $dog)->pluck('group');
            $group = $group[0]; 
            
            //get 4 similar breeds (based for now only on Group)
            $similarBreeds = Dog::where('name', '!=', $dog)->where('group', 'LIKE', $group)->limit(4)->pluck('name')->toArray();
            $similarBreedImgs = []; 
            foreach ($similarBreeds as $breed) {
                $similarBreedImgs [] = "images/".str_replace(" ", "_", $breed).".jpg";
            }
            
            // get energy
            $energy = Dog::where('name', 'LIKE', $dog)->pluck('energy');
            $energy = (int) $energy[0]; 

            // get social
            $social = Dog::where('name', 'LIKE', $dog)->pluck('social');
            $social = (int) $social[0]; 

            // get intelligence
            $intelligence = Dog::where('name', 'LIKE', $dog)->pluck('intelligence');
            $intelligence = (int) $intelligence[0]; 

            // get cleanliness
            $cleanliness = Dog::where('name', 'LIKE', $dog)->pluck('cleanliness');
            $cleanliness = (int) $cleanliness[0]; 

            // get adventure
            $adventure = Dog::where('name', 'LIKE', $dog)->pluck('adventure');
            $adventure = (int) $adventure[0]; 
            
            return view('dog')->with([
                'dog' => $dog,  
                'group' => $group,
                'energy' => $energy, 
                'social' => $social,
                'intelligence' => $intelligence,
                'cleanliness' => $cleanliness,
                'adventure' => $adventure,
                'imagePath' => $imagePath, 
                'similarBreeds' => $similarBreeds,
                'similarBreedImgs' => $similarBreedImgs
            ]);
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
    
}
