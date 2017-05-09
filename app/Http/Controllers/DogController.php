<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dog; 
use App\Fact;
use Session; 

class DogController extends Controller
{
    // default function for Dog Page
    public function __invoke($dog) {        
        # query dog
        $myDog = Dog::where('name', 'LIKE', $dog)->first();         
        
        # create image path
        $imagePath = "/images/".str_replace(" ", "_", $dog).".jpg"; 

        # get dog's group        
        $group = $myDog->group; 
        
        # get dog's facts
        $facts = $myDog->facts->toArray();
        $factsJSON = json_encode($facts);
        
        # get dog's tags
        $tags = $myDog->tags->pluck('name')->toArray(); 
        
        # get dog's "star scores"
        $energy = $myDog->energy; 
        $social = $myDog->social; 
        $intelligence = $myDog->intelligence; 
        $cleanliness = $myDog->cleanliness;
        $adventure = $myDog->adventure;
        
        # get 4 similar breeds (based for now only on Group)
        $similarBreeds = Dog::where('name', '!=', $dog)->where('group', 'LIKE', $group)->pluck('name')->toArray();
        shuffle($similarBreeds); 
        
        # create similar breed image paths
        $similarBreedImgs = []; 
        foreach ($similarBreeds as $breed) {
            $similarBreedImgs [] = "/images/".str_replace(" ", "_", $breed).".jpg";
        }

        # star html (passing as php for readability sake in view)
        $fiveStar = '<span class="glyphicon glyphicon-star five-star"></span>'; 
        $badStar = '<span class="glyphicon glyphicon-star bad-star"></span>';
        $regularStar = '<span class="glyphicon glyphicon-star regular-star"></span>'; 
        
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
            'tags' => $tags,
            'fiveStar' => $fiveStar, 
            'badStar' => $badStar, 
            'regularStar' => $regularStar
        ]);     
    }
}
