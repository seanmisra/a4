<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DogController extends Controller
{
    public function __invoke($dog) {
        $dogBreed = $dog; 
        
        return view('dog')->with([
            'dog' => $dog
        ]);
    }
}
