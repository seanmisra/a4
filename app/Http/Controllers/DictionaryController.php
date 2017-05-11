<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dog; 

class DictionaryController extends Controller
{
    // default function for Dictionary
    public function __invoke() {
        # query all dogs
        $allDogs = Dog::select(array('group', 'name'))->get();      
        
        # get all dog groups
        $allGroups = $allDogs->pluck('group')->unique()->toArray(); 
        
        # map each dog to a group 
        $dogMap = []; 
        foreach ($allGroups as $group) {
            $dogMap[$group] = $allDogs->where('group', $group)->pluck('name')->toArray(); 
            sort($dogMap[$group]); 
        }

            
        return view('dictionary')->with([
            'allGroups' => $allGroups,
            'dogMap' => $dogMap
        ]);
    }
}
