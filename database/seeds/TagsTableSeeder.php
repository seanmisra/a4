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
        $tags = ['sensitive', 'family-friendly', 'guide dog', 'lazy', 'loud', 'protective', 'high-energy'];
        
        // for each item in array, create a new row in the database 
        foreach($tags as $tagName) {
            $tag = new Tag(); 
            $tag->name = $tagName; 
            $tag->save(); 
        }
    }
}
