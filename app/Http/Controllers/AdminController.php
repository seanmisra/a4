<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Input; 
use App\Dog; 

class AdminController extends Controller
{
    public function main() {
        return view('admin');
    }
    
    public function search(Request $request) {
        $dog = ucwords($request->input('adminSearch')); 
        
        $dogFull = Dog::all()->where('name', 'LIKE', $dog)->first(); 
        
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
        
    
        //validate user input
        $rules = ['adminSearch' => 'required|regex:/^[\pL\s\-.]+$/u'];
        $validator = Validator::make($request->all(), $rules); 
        
        //checking dogs with in_array (change to validation regex later)
        if ($validator->fails() || !(in_array($dog, $allDogs))) {
            return redirect('/admin')->withErrors($validator)->withInput(Input::all());   
        }
                
        return view('admin')->with([
            'dog' => $dogFull
        ]); 
    }
}
