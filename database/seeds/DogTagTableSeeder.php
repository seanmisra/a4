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
            'Collie' => ['Sensitive', 'Intelligent', 'Loyal', 'Family-friendly', 'Kid-friendly', 'Shedder', 'Protective', 'Playful', 'Gentle', 'Pampered', 'Therapy dog', 'Watchdog'],
            'German Shepherd' => ['Intelligent', 'Working dog', 'Police dog', 'Guide dog', 'Loyal', 'Family-friendly', 'Kid-friendly', 'Shedder', 'Intelligent', 'Energetic', 'Barker', 'Jogging dog'],
            'Basenji' => ['Hunting dog', 'Apartment dog', 'Family-friendly', 'Kid-friendly', 'Less shedding', 'Energetic', 'Less barking', 'Stubborn', 'Clean', 'Watchdog', 'Show dog', 'Catlike'],
            'Basset Hound' => ['Hunting dog', 'Family-friendly', 'Kid-friendly', 'Slow-paced', 'Lap dog', 'Strong nose', 'Lazy', 'Apartment dog', 'Likes other pets', 'Hearty eater', 'Gentle', 'Even-tempered'],
            'Beagle' => ['Family-friendly', 'Kid-friendly', 'Merry', 'Stubborn', 'Outgoing', 'Hunting dog', 'Gentle', 'Barker', 'Naughty', 'Intense', 'Playful', 'Jogging dog'],
            'Bloodhound' => ['Energetic', 'Strong nose', 'Hunting dog', 'Family-friendly', 'Kid-friendly', 'Drooler', 'Gentle', 'Smelly', 'Stubborn', 'Jogging dog', 'Intelligent', 'Likes other pets'],
            'Dachshund' => ['Hunting dog', 'Show dog', 'Apartment dog', 'Kid-friendly', 'Playful', 'Lively', 'Partial to one person', 'Therapy dog', 'Family-friendly', 'Funny', 'Brave', 'Clever'],
            'Greyhound' => ['Race dog', 'Graceful', 'Gentle', 'Sensitive', 'Family-friendly', 'Kid-friendly', 'Drooler', 'Hunting dog', 'Energetic', 'Catlike', 'Intelligent', 'Sleek'],
            'Whippet' => ['Therapy dog', 'Show dog', 'Apartment dog', 'Sensitive', 'Family-friendly', 'Kid-friendly', 'Energetic', 'Sleek', 'Playful', 'Warm weather dog', 'Long life', 'Hunting dog'],
            'American Eskimo Dog' => ['Family-friendly', 'Kid-friendly', 'Apartment dog', 'Shedder', 'Energetic', 'Playful', 'Watchdog', 'Likes other pets', 'Intelligent', 'Peppy', 'Trick guru', 'Vocal'],
            'Boston Terrier' => ['Apartment dog', 'Kid-friendly', 'Sensitive', 'Playful', 'Intelligent', 'Sleek', 'Lively', 'Gentle', 'Smelly', 'Scrappy', 'Stubborn', 'Even-tempered'],
            'Bulldog' => ['Apartment dog', 'Family-friendly', 'Drooler', 'Gentle', 'Brave', 'Protective', 'Lazy', 'Smelly', 'Hearty eater', 'Watchdog', 'Kid-friendly', 'Playful'],
            'Chinese Shar-Pei' => ['Apartment dog', 'Unique appearance', 'Watchdog', 'Guard dog', 'Clean', 'Stubborn', 'Loyal', 'Fighting dog', 'Wrinkly', 'Independent', 'Strong-willed', 'Calm'],
            'Chow Chow' => ['Catlike', 'Long life', 'Lionlike', 'Dignified', 'Partial to one person', 'Protective', 'Territorial', 'Proud', 'Intelligent', 'Stubborn', 'Aloof', 'Homebody'],
            'Dalmatian' => ['Family-friendly', 'Shedder', 'Energetic', 'Jogging dog', 'Intelligent', 'Kid-friendly', 'Athletic', 'Intelligent', 'Clever', 'Watchdog', 'Unique appearance', 'Stubborn'],
            'French Bulldog' => ['Apartment dog', 'Family-friendly', 'Playful', 'Even-tempered', 'Intelligent', 'Stubborn', 'Homebody', 'Territorial', 'Watchdog', 'Heat adverse', 'Gentle', 'Lazy'],
            'Poodle' => ['Elegant', 'Clever', 'Show dog', 'Apartment dog', 'Family-friendly', 'Kid-friendly', 'Intelligent', 'Playful', 'Long life', 'Regal', 'Loyal', 'Trick guru'],
            'Brittany' => ['Hunting dog', 'Sensitive', 'Family-friendly', 'Kid-friendly', 'Drooler', 'Intelligent', 'Energetic', 'Playful', 'Elegant', 'Likes other pets', 'Athletic', 'Loves outdoors'],
            'Chesapeake Bay Retriever' => ['Hunting dog', 'Energetic', 'Shedder', 'Brave', 'Stubborn', 'Intelligent', 'Family-friendly', 'Loves outdoors', 'Territorial', 'Funny', 'Strong work ethic', 'Swimmer'],
            'Cocker Spaniel' => ['Apartment dog', 'Family-friendly', 'Long life', 'Gentle', 'Show dog', 'Sweet', 'Sensitive', 'Playful', 'Merry', 'Therapy dog', 'Homebody', 'Snuggler'],
            'English Setter' => ['Hunting dog', 'Family-friendly', 'Kid-friendly', 'Intelligent', 'Playful', 'Even-tempered', 'Gentle', 'Watchdog', 'Athletic', 'Therapy dog', 'Show dog', 'Lively'],
            'Golden Retriever' => ['Sensitive', 'Family-friendly', 'Kid-friendly', 'Shedder', 'Intelligent', 'Energetic', 'Playful', 'Loyal', 'Jogging dog', 'Hearty eater', 'Sweet', 'Likes fetch'],
            'Irish Setter' => ['Mischievous', 'Energetic', 'Family-friendly', 'Kid-friendly', 'Likes other pets', 'Playful', 'Therapy dog', 'Intelligent', 'Watchdog', 'Show dog', 'Hunting dog', 'Long life'],
            'Labrador Retriever' => ['Family-friendly', 'Kid-friendly', 'Shedder', 'Energetic', 'Playful', 'Loyal', 'Intelligent', 'Angelic', 'Assistance dog', 'Therapy dog', 'Sensitive', 'Sweet'],
            'Pointer' => ['Show dog', 'Energetic', 'Family-friendly', 'Kid-friendly', 'Intelligent', 'Playful', 'Long life', 'Watchdog', 'Mischievous', 'Jogging dog', 'Even-tempered', 'Hunting dog'],
            'Akita' => ['Brave', 'Protective', 'Loyal', 'Sensitive', 'Family-friendly', 'Shedder', 'Drooler', 'Playful', 'Stubborn', 'Aloof', 'Intelligent', 'Catlike'],
            'Alaskan Malamute' => ['Shedder', 'Energetic', 'Playful', 'Long life', 'Wolf-like', 'Intelligent', 'Athletic', 'Hunting dog', 'Digger', 'Barker', 'Cold weather dog', 'Intense'],
            'Bernese Mountain Dog' => ['Watchdog', 'Farm dog', 'Cold weather dog', 'Family-friendly', 'Kid-friendly', 'Shedder', 'Gentle', 'Beautiful', 'Calm', 'Intelligent', 'Loyal', 'Affectionate'],
            'Boxer' => ['Family-friendly', 'Energetic', 'Intense', 'Playful', 'Lively', 'Drooler', 'Snorer', 'Guard dog', 'Loyal', 'Mischievous', 'Brave', 'Police dog'],
            'Bullmastiff' => ['Drooler', 'Brave', 'Guard dog', 'Energetic', 'Apartment dog', 'Mellow', 'Therapy dog', 'Funny', 'Protective', 'Strong', 'Watchdog', 'Smelly'],
            'Chinook' => ['Sensitive', 'Family-friendly', 'Kid-friendly', 'Shedder', 'Intelligent', 'Long life', 'Athletic', 'Jogging dog', 'Hiking dog', 'Digger', 'Gentle', 'Likes other pets'],
            'Doberman Pinscher' => ['Guard Dog', 'Sleek', 'Regal', 'Intelligent', 'Energetic', 'Police dog', 'Protective', 'Playful', 'Sensitive', 'Loyal', 'Alpha', 'Family-friendly'],
            'Great Dane' => ['Noble', 'Sensitive', 'Family-friendly', 'Kid-friendly', 'Likes other pets', 'Shedder', 'Gentle', 'Sleek', 'Elegant', 'Beautiful', 'Even-tempered', 'Protective'],
            'Mastiff' => ['Drooler', 'Family-friendly', 'Kid-friendly', 'Massive', 'Even-tempered', 'Brave', 'Homebody', 'Smelly', 'Snorer', 'Lazy', 'Shedder', 'Funny'],
            'Rottweiler' => ['Police dog', 'Family-friendly', 'Intelligent', 'Playful', 'Aloof', 'Protective', 'Loyal', 'Snorer', 'Shedder', 'Guard dog', 'Calm', 'Brave'],
            'Siberian Husky' => ['Wolf-like', 'Athletic', 'Intelligent', 'Independent', 'Cold weather dog', 'Family-friendly', 'Kid-friendly', 'Energetic', 'Playful', 'Beautiful', 'Stubborn', 'Long life'],
            'St.Bernard' => ['Show dog', 'Cold weather dog', 'Family-friendly', 'Kid-friendly', 'Drooler', 'Gentle', 'Massive', 'Sweet', 'Even-tempered', 'Shedder', 'Snuggler', 'Intelligent'],
            'Chihuahua' => ['Sensitive', 'Family-friendly', 'Kid-friendly', 'Long life', 'Intelligent', 'Partial to one person', 'Watchdog', 'Apartment dog', 'Spunky', 'Tiny', 'Big personality', 'Easy to groom'],
            'English Toy Spaniel' => ['Family-friendly', 'Shedder', 'Gentle', 'Sweet', 'Partial to one person', 'Dignified', 'Mischievous', 'Apartment dog', 'Lazy', 'Independent', 'Loyal', 'Tiny'],
            'Maltese' => ['Gentle', 'Brave', 'Regal', 'Therapy dog', 'Lively', 'Apartment dog', 'Family-friendly', 'Long life', 'Elegant', 'Sweet', 'Regal', 'Playful'],
            'Pomeranian' => ['Tiny', 'Foxy', 'Apartment dog', 'Family-friendly', 'Shedder', 'Long life', 'Big personality', 'Feisty', 'Loyal', 'Energetic', 'Lively', 'Watchdog'],
            'Shih Tzu' => ['Homebody', 'Apartment dog', 'Family-friendly', 'Long life', 'Lionlike', 'Regal', 'Kid-friendly', 'Beautiful', 'Tiny', 'Big personality', 'Playful', 'Affectionate'],
            'Yorkshire Terrier' => ['Apartment dog', 'Elegant', 'Feisty', 'Sensitive', 'Family-friendly', 'Energetic', 'Playful', 'Long life', 'Tiny', 'Mischievous', 'Spunky', 'Loyal']
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
