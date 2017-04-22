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
        
        
        $rules = ['search' => 'required'];
        $validator = Validator::make($request->all(), $rules); 
        
        //checking dogs with in_array (change to validation regex later)
        if ($validator->fails() || !(in_array($dog, $allDogs)))
            return redirect('/breeds')->withErrors($validator)->withInput(Input::all());       
        else {
            return view('dog')->with([
                'dog' => $dog    
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
