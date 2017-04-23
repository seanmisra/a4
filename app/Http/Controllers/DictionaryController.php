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
        
        // create array with groups of dogs 
        $dogMap = []; 
        foreach ($allGroups as $group) 
            $dogMap[$group] = Dog::where('group', 'LIKE', $group)->pluck('name');
        
        return view('dictionary')->with([
            'allGroups' => $allGroups,
            'dogMap' => $dogMap
        ]);
    }
}
