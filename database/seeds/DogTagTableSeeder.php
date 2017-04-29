<?php

use Illuminate\Database\Seeder;
use App\Dog; 
use App\Tag; 

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
            'Labrador Retriever' => ['family-friendly', 'guide dog'] 
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
