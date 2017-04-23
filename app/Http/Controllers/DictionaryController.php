<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dog; 

class DictionaryController extends Controller
{
    public function __invoke() {
        // get all dog groups
        $allGroups = Dog::all()->pluck('group')->toArray(); 
        $allGroups = array_unique($allGroups);
        
        // get all dogs
        $allDogs = Dog::all()->toArray(); 

        
        return view('dictionary')->with([
            'allGroups' => $allGroups,
            'allDogs' => $allDogs
        ]);
    }
}
