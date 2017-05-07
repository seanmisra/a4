<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dog; 

class DictionaryController extends Controller
{
    // default function for Dictionary
    public function __invoke() {
        # query all dogs
        $allDogs = Dog::all();       
        
        # get all dog groups
        $allGroups = $allDogs->pluck('group')->unique()->toArray();            
                
        # map each dog to a group 
        $dogMap = []; 
        foreach ($allGroups as $group)
            $dogMap[$group] = $allDogs->where('group', $group)->pluck('name')->toArray(); 
                    
        return view('dictionary')->with([
            'allGroups' => $allGroups,
            'dogMap' => $dogMap
        ]);
    }
}
