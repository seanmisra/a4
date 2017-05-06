<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dog; 

class DictionaryController extends Controller
{
    public function __invoke() {
        $allDogs = Dog::all(); 
         
        // get all dog groups
        $allGroups = $allDogs->pluck('group')->unique()->toArray();            
                
        // create array with groups of dogs 
        $dogMap = []; 
        foreach ($allGroups as $group)
            $dogMap[$group] = $allDogs->where('group', $group)->pluck('name')->toArray(); 
                    
        return view('dictionary')->with([
            'allGroups' => $allGroups,
            'dogMap' => $dogMap
        ]);
    }
}
