<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Input;

class HomeController extends Controller
{
    public function search(Request $request) {
        $dog = $request->input('search'); 
        
        $rules = ['search' => 'required|in:Labrador,Bulldog,German Shepherd,Golden Retriever,Beagle,Rottweiler,Poodle'];
        $validator = Validator::make($request->all(), $rules); 
        
        if ($validator->fails())
            return redirect('/breeds')->withErrors($validator)->withInput(Input::all());       
        else {
            return view('dog')->with([
                'dog' => $dog    
            ]);
        }
    }
    
    public function start() {
        return view('home');
    }
    
}
