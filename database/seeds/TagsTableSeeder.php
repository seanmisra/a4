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
    public function run()
    {
        $tags = ['Sensitive', 'Intelligent', 'Loyalty', 'Family-friendly', 'Kid-friendly', 'Shedder', 'Protective', 'Playful', 'Gentle', 'Pampered', 'Therapy Dog', 'Watchdog', 'Working dog', 'Police dog', 'Guide dog', 'Energetic', 'Barker', 'Jogging dog', 'Hunting dog', 'Apartment dog', 'Less shedding', 'Less barking', 'Stubborn', 'Clean', 'Show dog', 'Catlike', 'Slow-paced', 'Lap dog', 'Strong nose', 'Lazy', 'Likes other pets', 'Hearty eater', 'Even-tempered', 'Merry', 'Naughty', 'Intense', 'Outgoing', 'Drooler', 'Smelly', 'Lively', 'Partial to one person', 'Funny', 'Brave', 'Clever', 'Race dog', 'Graceful', 'Sleek', 'Warm weather dog', 'Long life'];
    
        // for each item in array, create a new row in the database 
        foreach($tags as $tagName) {
            $tag = new Tag(); 
            $tag->name = $tagName; 
            $tag->save(); 
        }
    }
}
