<?php

use Illuminate\Database\Seeder;
use App\Dog; 
use App\Tag; 

//GOAL: 12 traits per dog

class DogTagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dogs = [
            'Collie' => ['Sensitive', 'Intelligent', 'Loyalty', 'Family-friendly', 'Kid-friendly', 'Shedder', 'Protective', 'Playful', 'Gentle', 'Pampered', 'Therapy dog', 'Watchdog'],
            'German Shepherd' => ['Intelligent', 'Working dog', 'Police dog', 'Guide dog', 'Loyalty', 'Family-friendly', 'Kid-friendly', 'Shedder', 'Intelligent', 'Energetic', 'Barker', 'Jogging dog'],
            'Basenji' => ['Hunting dog', 'Apartment dog', 'Family-friendly', 'Kid-friendly', 'Less shedding', 'Energetic', 'Less barking', 'Stubborn', 'Clean', 'Watchdog', 'Show dog', 'Catlike'],
            'Basset Hound' => ['Hunting dog', 'Family-friendly', 'Kid-friendly', 'Slow-paced', 'Lap dog', 'Strong nose', 'Lazy', 'Apartment dog', 'Likes other pets', 'Hearty eater', 'Gentle', 'Even-tempered'],
            'Beagle' => ['Family-friendly', 'Kid-friendly', 'Merry', 'Stubborn', 'Outgoing', 'Hunting dog', 'Gentle', 'Barker', 'Naughty', 'Intense', 'Playful', 'Jogging dog'],
            'Bloodhound' => ['Energetic', 'Strong nose', 'Hunting dog', 'Family-friendly', 'Kid-friendly', 'Drooler', 'Gentle', 'Smelly', 'Stubborn', 'Jogging dog', 'Intelligent', 'Likes other pets'],
            'Dachshund' => ['Hunting dog', 'Show dog', 'Apartment dog', 'Kid-friendly', 'Playful', 'Lively', 'Partial to one person', 'Therapy dog', 'Family-friendly', 'Funny', 'Brave', 'Clever'],
            'Greyhound' => ['Race dog', 'Graceful', 'Gentle', 'Sensitive', 'Family-friendly', 'Kid-friendly', 'Drooler', 'Hunting dog', 'Energetic', 'Catlike', 'Intelligent', 'Sleek'],
            'Whippet' => ['Therapy dog', 'Show dog', 'Apartment dog', 'Sensitive', 'Family-friendly', 'Kid-friendly', 'Energetic', 'Sleek', 'Playful', 'Warm weather dog', 'Long life', 'Hunting dog'],
            'American Eskimo Dog' => [],
            'Boston Terrier' => [],
            'Bulldog' => [],
            'Chinese Shar-Pei' => [],
            'Chow Chow' => [],
            'Dalmatian' => [],
            'French Bulldog' => [],
            'Poodle' => [],
            'Brittany' => [],
            'Chesapeake Bay Retriever' => [],
            'Cocker Spaniel' => [],
            'English Setter' => [],
            'Golden Retriever' => [],
            'Irish Setter' => [],
            'Labrador Retriever' => [],
            'Pointer' => [],
            'Akita' => [],
            'Alaskan Malamute' => [],
            'Bernese Mountain Dog' => [],
            'Boxer' => [],
            'Bullmastiff' => [],
            'Chinook' => [],
            'Doberman Pinscher' => [],
            'Great Dane' => [],
            'Mastiff' => [],
            'Rottweiler' => [],
            'Siberian Husky' => [],
            'St.Bernard' => [],
            'Chihuahua' => [],
            'English Toy Spaniel' => [],
            'Maltese' => [],
            'Pomeranian' => [],
            'Shih Tzu' => [],
            'Yorkshire Terrier' => []
        ]; 
        
        
        foreach($dogs as $dog => $tags) {
            
            $dog = Dog::where('name', 'like', $dog)->first(); 
            
            foreach($tags as $tagName) {
                $tag = Tag::where('name', 'LIKE', $tagName)->first(); 
                
                $dog->tags()->save($tag); 
            }
            
        }
        
        
    }
}
