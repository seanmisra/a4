<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Input;
use App\Dog; 

class HomeController extends Controller
{
    public function search(Request $request) {
        $dog = $request->input('search'); 
        $allDogs = Dog::all()->pluck('name')->toArray(); 
        
        // get group
        $group = Dog::where('name', 'LIKE', $dog)->pluck('group')->toArray();
        $group = $group[0]; 
        
        // get energy
        $energy = Dog::where('name', 'LIKE', $dog)->pluck('energy')->toArray();
        $energy = (int) $energy[0]; 
        
        // get social
        $social = Dog::where('name', 'LIKE', $dog)->pluck('social')->toArray();
        $social = (int) $social[0]; 
        
        // get intelligence
        $intelligence = Dog::where('name', 'LIKE', $dog)->pluck('intelligence')->toArray();
        $intelligence = (int) $intelligence[0]; 
        
        // get cleanliness
        $cleanliness = Dog::where('name', 'LIKE', $dog)->pluck('cleanliness')->toArray();
        $cleanliness = (int) $cleanliness[0]; 
        
        // get adventure
        $adventure = Dog::where('name', 'LIKE', $dog)->pluck('adventure')->toArray();
        $adventure = (int) $adventure[0]; 
        
        
        $rules = ['search' => 'required'];
        $validator = Validator::make($request->all(), $rules); 
        
        //checking dogs with in_array (change to validation regex later)
        if ($validator->fails() || !(in_array($dog, $allDogs)))
            return redirect('/breeds')->withErrors($validator)->withInput(Input::all());       
        else {
            return view('dog')->with([
                'dog' => $dog,  
                'group' => $group,
                'energy' => $energy, 
                'social' => $social,
                'intelligence' => $intelligence,
                'cleanliness' => $cleanliness,
                'adventure' => $adventure
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
