<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dog; 
use App\Fact;
use Session; 

class DogController extends Controller
{
    public function __invoke($dog) {        
        // create image path
        $imagePath = "/images/".str_replace(" ", "_", $dog).".jpg"; 

        // get group
        $group = Dog::where('name', 'LIKE', $dog)->pluck('group');
        $group = $group[0]; 
        
        
        // get facts
        $dogID = Dog::where('name', 'LIKE', $dog)->pluck('id');
        $facts = Dog::find($dogID)->facts->toArray();
        $tags = Dog::find($dogID)->tags->pluck('name')->toArray(); 
        
        //get 4 similar breeds (based for now only on Group)
        $similarBreeds = Dog::where('name', '!=', $dog)->where('group', 'LIKE', $group)->pluck('name')->toArray();
        shuffle($similarBreeds); 
        
        $similarBreedImgs = []; 
        foreach ($similarBreeds as $breed) {
            $similarBreedImgs [] = "/images/".str_replace(" ", "_", $breed).".jpg";
        }

        // get energy
        $energy = Dog::where('name', 'LIKE', $dog)->pluck('energy');
        $energy = (int) $energy[0]; 

        // get social
        $social = Dog::where('name', 'LIKE', $dog)->pluck('social');
        $social = (int) $social[0]; 

        // get intelligence
        $intelligence = Dog::where('name', 'LIKE', $dog)->pluck('intelligence');
        $intelligence = (int) $intelligence[0]; 

        // get cleanliness
        $cleanliness = Dog::where('name', 'LIKE', $dog)->pluck('cleanliness');
        $cleanliness = (int) $cleanliness[0]; 

        // get adventure
        $adventure = Dog::where('name', 'LIKE', $dog)->pluck('adventure');
        $adventure = (int) $adventure[0]; 
        
        return view('dog')->with([
            'dog' => $dog,  
            'group' => $group,
            'energy' => $energy, 
            'social' => $social,
            'intelligence' => $intelligence,
            'cleanliness' => $cleanliness,
            'adventure' => $adventure,
            'imagePath' => $imagePath, 
            'similarBreeds' => $similarBreeds,
            'similarBreedImgs' => $similarBreedImgs,
            'facts' => $facts,
            'tags' => $tags
        ]);  
        
    }
}
