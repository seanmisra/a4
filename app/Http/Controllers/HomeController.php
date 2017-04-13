<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function search(Request $request) {
        $dog = $request->input('search'); 
        
        $this->validate($request, [
            'search' => 'required|in:Labrador,Bulldog,German Shepherd,Golden Retriever,Beagle,Rottweiler,Poodle',
        ]);
        
        return view('dog')->with([
            'dog' => $dog    
        ]);
    }
    
    public function start() {
        return view('home');
    }
    
}
