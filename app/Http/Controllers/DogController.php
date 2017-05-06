<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dog; 
use App\Fact;
use Session; 

class DogController extends Controller
{
    public function __invoke($dog) {        
        //get dog
        $myDog = Dog::where('name', 'LIKE', $dog)->first();         
        
        // create image path
        $imagePath = "/images/".str_replace(" ", "_", $dog).".jpg"; 

        // get group        
        $group = $myDog->group; 
        
        // get facts
        $facts = $myDog->facts->toArray();
        $factsJSON = json_encode($facts);
        
        // get tags
        $tags = $myDog->tags->pluck('name')->toArray(); 
        
        //get 4 similar breeds (based for now only on Group)
        $similarBreeds = Dog::where('name', '!=', $dog)->where('group', 'LIKE', $group)->pluck('name')->toArray();
        shuffle($similarBreeds); 
        
        $similarBreedImgs = []; 
        foreach ($similarBreeds as $breed) {
            $similarBreedImgs [] = "/images/".str_replace(" ", "_", $breed).".jpg";
        }

        // get energy
        $energy = $myDog->energy; 

        // get social
        $social = $myDog->social; 

        // get intelligence
        $intelligence = $myDog->intelligence; 

        // get cleanliness
        $cleanliness = $myDog->cleanliness;

        // get adventure
        $adventure = $myDog->adventure;
        
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
            'factsJSON' => $factsJSON,
            'tags' => $tags
        ]);  
        
    }
}
