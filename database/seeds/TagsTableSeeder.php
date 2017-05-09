<?php

use Illuminate\Database\Seeder;
use App\Tag; 

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    // positive and neutral traits are "true"
    // negative traits are "false" 
    
    public function run()
    {
        $tags = ['Sensitive' => true, 
                 'Intelligent' => true, 
                 'Loyal' => true, 
                 'Family-friendly' => true, 
                 'Kid-friendly' => true, 
                 'Shedder' => false, 
                 'Protective' => true, 
                 'Playful' => true, 
                 'Gentle' => true, 
                 'Pampered' => false, 
                 'Therapy Dog' => true, 
                 'Watchdog' => true, 
                 'Working dog' => true, 
                 'Police dog' => true, 
                 'Guide dog' => true, 
                 'Energetic' => true, 
                 'Barker' => true, 
                 'Jogging dog' => true, 
                 'Hunting dog' => true, 
                 'Apartment dog' => true, 
                 'Less shedding' => true, 
                 'Less barking' => true, 
                 'Stubborn' => false, 
                 'Clean' => true, 
                 'Show dog' => true, 
                 'Catlike' => true, 
                 'Slow-paced' => true, 
                 'Lap dog' => true, 
                 'Strong nose' => true, 
                 'Lazy' => true, // argue this is neutral 
                 'Likes other pets' => true, 
                 'Hearty eater' => true, 
                 'Even-tempered' => true, 
                 'Merry' => true, 
                 'Naughty' => false, 
                 'Intense' => true, 
                 'Outgoing' => true, 
                 'Drooler' => false, 
                 'Smelly' => false, 
                 'Lively' => true, 
                 'Partial to one person' => true, 
                 'Funny' => true, 
                 'Brave' => true, 
                 'Clever' => true, 
                 'Race dog' => true,
                 'Graceful' => true, 
                 'Sleek' => true , 
                 'Warm weather dog' => true, 
                 'Long life' => true, 
                 'Peppy' => true, 
                 'Trick guru' => true, 
                 'Vocal' => true, 
                 'Scrappy' => true, //argue this is neutral
                 'Unique appearance' => true, 
                 'Guard dog' => true, 
                 'Fighting dog' => true, 
                 'Wrinkly' => true, 
                 'Independent' => true, 
                 'Strong-willed' => true, 
                 'Calm' => true, 
                 'Cuddly' => true, 
                 'Lionlike' => true, 
                 'Dignified' => true, 
                 'Territorial' => true, 
                 'Proud' => true, 
                 'Aloof' => false, // could be argued as neutral
                 'Homebody' => true, 
                 'Athletic' => true, 
                 'Heat adverse' => true, 
                 'Elegant' => true, 
                 'Regal' => true, 
                 'Loves outdoors' => true, 
                 'Strong work ethic' => true, 
                 'Swimmer' => true, 
                 'Sweet' => true, 
                 'Snuggler' => true, 
                 'Likes fetch' => true, 
                 'Mischievous' => false, 
                 'Angelic' => true, 
                 'Assistance dog' => true, 
                 'Wolf-like' => true, 
                 'Digger' => false, 
                 'Cold weather dog' => true, 
                 'Farm dog' => true, 
                 'Beautiful' => true, 
                 'Affectionate' => true, 
                 'Snorer' => false, 
                 'Mellow' => true, 
                 'Strong' => true, 
                 'Hiking dog' => true, 
                 'Alpha' => true, 
                 'Noble' => true, 
                 'Massive' => true, 
                 'Spunky' => true, 
                 'Tiny' => true, 
                 'Big personality' => true, 
                 'Easy to groom' => true, 
                 'Foxy' => true, 
                 'Feisty' => false
                ];
    
        // for each item in array, create a new row in the database 
        foreach($tags as $tagName => $sentiment) {
            $tag = new Tag(); 
            $tag->name = $tagName; 
            $tag->positive = $sentiment;
            $tag->save(); 
        }
    }
}
