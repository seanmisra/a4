<?php

use Illuminate\Database\Seeder;
use App\Fact; 
use App\Dog; 

class FactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Fact::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'dog_id' => Dog::where('name', 'LIKE', 'Collie')->pluck('id')->first(), 
            'content' => 'Labradors retrievers have water-resistant coats and webbed toes, making them ideal water dogs.',
            'source' => 'http://mentalfloss.com/article/63891/12-friendly-facts-about-labrador-retrievers'
        ]);
        
        Fact::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'dog_id' => Dog::where('name', 'LIKE', 'German Shepherd')->pluck('id')->first(), 
            'content' => 'Labradors retrievers have water-resistant coats and webbed toes, making them ideal water dogs.',
            'source' => 'http://mentalfloss.com/article/63891/12-friendly-facts-about-labrador-retrievers'
        ]);
        
        Fact::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'dog_id' => Dog::where('name', 'LIKE', 'Basenji')->pluck('id')->first(), 
            'content' => 'Labradors retrievers have water-resistant coats and webbed toes, making them ideal water dogs.',
            'source' => 'http://mentalfloss.com/article/63891/12-friendly-facts-about-labrador-retrievers'
        ]);
        
        Fact::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'dog_id' => Dog::where('name', 'LIKE', 'Basset Hound')->pluck('id')->first(), 
            'content' => 'Labradors retrievers have water-resistant coats and webbed toes, making them ideal water dogs.',
            'source' => 'http://mentalfloss.com/article/63891/12-friendly-facts-about-labrador-retrievers'
        ]);  
        
        Fact::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'dog_id' => Dog::where('name', 'LIKE', 'Beagle')->pluck('id')->first(), 
            'content' => 'Labradors retrievers have water-resistant coats and webbed toes, making them ideal water dogs.',
            'source' => 'http://mentalfloss.com/article/63891/12-friendly-facts-about-labrador-retrievers'
        ]); 
        
        Fact::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'dog_id' => Dog::where('name', 'LIKE', 'Bloodhound')->pluck('id')->first(), 
            'content' => 'Labradors retrievers have water-resistant coats and webbed toes, making them ideal water dogs.',
            'source' => 'http://mentalfloss.com/article/63891/12-friendly-facts-about-labrador-retrievers'
        ]); 
        
        Fact::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'dog_id' => Dog::where('name', 'LIKE', 'Dachshund')->pluck('id')->first(), 
            'content' => 'Labradors retrievers have water-resistant coats and webbed toes, making them ideal water dogs.',
            'source' => 'http://mentalfloss.com/article/63891/12-friendly-facts-about-labrador-retrievers'
        ]); 
        
        Fact::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'dog_id' => Dog::where('name', 'LIKE', 'Greyhound')->pluck('id')->first(), 
            'content' => 'Labradors retrievers have water-resistant coats and webbed toes, making them ideal water dogs.',
            'source' => 'http://mentalfloss.com/article/63891/12-friendly-facts-about-labrador-retrievers'
        ]); 
        
        Fact::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'dog_id' => Dog::where('name', 'LIKE', 'Whippet')->pluck('id')->first(), 
            'content' => 'Labradors retrievers have water-resistant coats and webbed toes, making them ideal water dogs.',
            'source' => 'http://mentalfloss.com/article/63891/12-friendly-facts-about-labrador-retrievers'
        ]); 
        
        Fact::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'dog_id' => Dog::where('name', 'LIKE', 'American Eskimo Dog')->pluck('id')->first(), 
            'content' => 'Labradors retrievers have water-resistant coats and webbed toes, making them ideal water dogs.',
            'source' => 'http://mentalfloss.com/article/63891/12-friendly-facts-about-labrador-retrievers'
        ]); 
        
        Fact::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'dog_id' => Dog::where('name', 'LIKE', 'Boston Terrier')->pluck('id')->first(), 
            'content' => 'Labradors retrievers have water-resistant coats and webbed toes, making them ideal water dogs.',
            'source' => 'http://mentalfloss.com/article/63891/12-friendly-facts-about-labrador-retrievers'
        ]); 
        
        Fact::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'dog_id' => Dog::where('name', 'LIKE', 'Bulldog')->pluck('id')->first(), 
            'content' => 'Labradors retrievers have water-resistant coats and webbed toes, making them ideal water dogs.',
            'source' => 'http://mentalfloss.com/article/63891/12-friendly-facts-about-labrador-retrievers'
        ]); 
        
        Fact::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'dog_id' => Dog::where('name', 'LIKE', 'Chinese Shar-Pei')->pluck('id')->first(), 
            'content' => 'Labradors retrievers have water-resistant coats and webbed toes, making them ideal water dogs.',
            'source' => 'http://mentalfloss.com/article/63891/12-friendly-facts-about-labrador-retrievers'
        ]); 
        
        Fact::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'dog_id' => Dog::where('name', 'LIKE', 'Chow Chow')->pluck('id')->first(), 
            'content' => 'Labradors retrievers have water-resistant coats and webbed toes, making them ideal water dogs.',
            'source' => 'http://mentalfloss.com/article/63891/12-friendly-facts-about-labrador-retrievers'
        ]); 
        
        Fact::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'dog_id' => Dog::where('name', 'LIKE', 'Dalmatian')->pluck('id')->first(), 
            'content' => 'Labradors retrievers have water-resistant coats and webbed toes, making them ideal water dogs.',
            'source' => 'http://mentalfloss.com/article/63891/12-friendly-facts-about-labrador-retrievers'
        ]); 
        
        Fact::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'dog_id' => Dog::where('name', 'LIKE', 'French Bulldog')->pluck('id')->first(), 
            'content' => 'Labradors retrievers have water-resistant coats and webbed toes, making them ideal water dogs.',
            'source' => 'http://mentalfloss.com/article/63891/12-friendly-facts-about-labrador-retrievers'
        ]); 
        
        Fact::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'dog_id' => Dog::where('name', 'LIKE', 'Poodle')->pluck('id')->first(), 
            'content' => 'Labradors retrievers have water-resistant coats and webbed toes, making them ideal water dogs.',
            'source' => 'http://mentalfloss.com/article/63891/12-friendly-facts-about-labrador-retrievers'
        ]); 
        
        Fact::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'dog_id' => Dog::where('name', 'LIKE', 'Brittany')->pluck('id')->first(), 
            'content' => 'Labradors retrievers have water-resistant coats and webbed toes, making them ideal water dogs.',
            'source' => 'http://mentalfloss.com/article/63891/12-friendly-facts-about-labrador-retrievers'
        ]); 
        
        Fact::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'dog_id' => Dog::where('name', 'LIKE', 'Chesapeake Bay Retriever')->pluck('id')->first(), 
            'content' => 'Labradors retrievers have water-resistant coats and webbed toes, making them ideal water dogs.',
            'source' => 'http://mentalfloss.com/article/63891/12-friendly-facts-about-labrador-retrievers'
        ]); 
        
        Fact::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'dog_id' => Dog::where('name', 'LIKE', 'Cocker Spaniel')->pluck('id')->first(), 
            'content' => 'Labradors retrievers have water-resistant coats and webbed toes, making them ideal water dogs.',
            'source' => 'http://mentalfloss.com/article/63891/12-friendly-facts-about-labrador-retrievers'
        ]); 
        
        Fact::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'dog_id' => Dog::where('name', 'LIKE', 'English Setter')->pluck('id')->first(), 
            'content' => 'Labradors retrievers have water-resistant coats and webbed toes, making them ideal water dogs.',
            'source' => 'http://mentalfloss.com/article/63891/12-friendly-facts-about-labrador-retrievers'
        ]); 
        
        Fact::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'dog_id' => Dog::where('name', 'LIKE', 'Golden Retriever')->pluck('id')->first(), 
            'content' => 'Labradors retrievers have water-resistant coats and webbed toes, making them ideal water dogs.',
            'source' => 'http://mentalfloss.com/article/63891/12-friendly-facts-about-labrador-retrievers'
        ]); 
        
        Fact::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'dog_id' => Dog::where('name', 'LIKE', 'Irish Setter')->pluck('id')->first(), 
            'content' => 'Labradors retrievers have water-resistant coats and webbed toes, making them ideal water dogs.',
            'source' => 'http://mentalfloss.com/article/63891/12-friendly-facts-about-labrador-retrievers'
        ]); 
        
        Fact::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'dog_id' => Dog::where('name', 'LIKE', 'Labrador Retriever')->pluck('id')->first(), 
            'content' => 'Labradors retrievers have water-resistant coats and webbed toes, making them ideal water dogs.',
            'source' => 'http://mentalfloss.com/article/63891/12-friendly-facts-about-labrador-retrievers'
        ]);

        Fact::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'dog_id' => Dog::where('name', 'LIKE', 'Pointer')->pluck('id')->first(), 
            'content' => 'Labradors retrievers have water-resistant coats and webbed toes, making them ideal water dogs.',
            'source' => 'http://mentalfloss.com/article/63891/12-friendly-facts-about-labrador-retrievers'
        ]); 
      
        Fact::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'dog_id' => Dog::where('name', 'LIKE', 'Akita')->pluck('id')->first(), 
            'content' => 'Labradors retrievers have water-resistant coats and webbed toes, making them ideal water dogs.',
            'source' => 'http://mentalfloss.com/article/63891/12-friendly-facts-about-labrador-retrievers'
        ]);
        
        Fact::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'dog_id' => Dog::where('name', 'LIKE', 'Alaskan Malamute')->pluck('id')->first(), 
            'content' => 'Labradors retrievers have water-resistant coats and webbed toes, making them ideal water dogs.',
            'source' => 'http://mentalfloss.com/article/63891/12-friendly-facts-about-labrador-retrievers'
        ]);
        
        Fact::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'dog_id' => Dog::where('name', 'LIKE', 'Bernese Mountain Dog')->pluck('id')->first(), 
            'content' => 'Labradors retrievers have water-resistant coats and webbed toes, making them ideal water dogs.',
            'source' => 'http://mentalfloss.com/article/63891/12-friendly-facts-about-labrador-retrievers'
        ]);
        
        Fact::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'dog_id' => Dog::where('name', 'LIKE', 'Boxer')->pluck('id')->first(), 
            'content' => 'Labradors retrievers have water-resistant coats and webbed toes, making them ideal water dogs.',
            'source' => 'http://mentalfloss.com/article/63891/12-friendly-facts-about-labrador-retrievers'
        ]);
        
        Fact::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'dog_id' => Dog::where('name', 'LIKE', 'Bullmastiff')->pluck('id')->first(), 
            'content' => 'Labradors retrievers have water-resistant coats and webbed toes, making them ideal water dogs.',
            'source' => 'http://mentalfloss.com/article/63891/12-friendly-facts-about-labrador-retrievers'
        ]);
        
        Fact::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'dog_id' => Dog::where('name', 'LIKE', 'Chinook')->pluck('id')->first(), 
            'content' => 'Labradors retrievers have water-resistant coats and webbed toes, making them ideal water dogs.',
            'source' => 'http://mentalfloss.com/article/63891/12-friendly-facts-about-labrador-retrievers'
        ]);
        
        Fact::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'dog_id' => Dog::where('name', 'LIKE', 'Doberman Pinscher')->pluck('id')->first(), 
            'content' => 'Labradors retrievers have water-resistant coats and webbed toes, making them ideal water dogs.',
            'source' => 'http://mentalfloss.com/article/63891/12-friendly-facts-about-labrador-retrievers'
        ]);
        
        Fact::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'dog_id' => Dog::where('name', 'LIKE', 'Great Dane')->pluck('id')->first(), 
            'content' => 'Labradors retrievers have water-resistant coats and webbed toes, making them ideal water dogs.',
            'source' => 'http://mentalfloss.com/article/63891/12-friendly-facts-about-labrador-retrievers'
        ]);
        
        Fact::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'dog_id' => Dog::where('name', 'LIKE', 'Mastiff')->pluck('id')->first(), 
            'content' => 'Labradors retrievers have water-resistant coats and webbed toes, making them ideal water dogs.',
            'source' => 'http://mentalfloss.com/article/63891/12-friendly-facts-about-labrador-retrievers'
        ]);
        
        Fact::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'dog_id' => Dog::where('name', 'LIKE', 'Rottweiler')->pluck('id')->first(), 
            'content' => 'Labradors retrievers have water-resistant coats and webbed toes, making them ideal water dogs.',
            'source' => 'http://mentalfloss.com/article/63891/12-friendly-facts-about-labrador-retrievers'
        ]);
        
        Fact::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'dog_id' => Dog::where('name', 'LIKE', 'Siberian Husky')->pluck('id')->first(), 
            'content' => 'Labradors retrievers have water-resistant coats and webbed toes, making them ideal water dogs.',
            'source' => 'http://mentalfloss.com/article/63891/12-friendly-facts-about-labrador-retrievers'
        ]);
        
        Fact::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'dog_id' => Dog::where('name', 'LIKE', 'St.Bernard')->pluck('id')->first(), 
            'content' => 'Labradors retrievers have water-resistant coats and webbed toes, making them ideal water dogs.',
            'source' => 'http://mentalfloss.com/article/63891/12-friendly-facts-about-labrador-retrievers'
        ]);
        
        Fact::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'dog_id' => Dog::where('name', 'LIKE', 'Chihuahua')->pluck('id')->first(), 
            'content' => 'Labradors retrievers have water-resistant coats and webbed toes, making them ideal water dogs.',
            'source' => 'http://mentalfloss.com/article/63891/12-friendly-facts-about-labrador-retrievers'
        ]);
        
        Fact::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'dog_id' => Dog::where('name', 'LIKE', 'English Toy Spaniel')->pluck('id')->first(), 
            'content' => 'Labradors retrievers have water-resistant coats and webbed toes, making them ideal water dogs.',
            'source' => 'http://mentalfloss.com/article/63891/12-friendly-facts-about-labrador-retrievers'
        ]);
        
        Fact::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'dog_id' => Dog::where('name', 'LIKE', 'Maltese')->pluck('id')->first(), 
            'content' => 'Labradors retrievers have water-resistant coats and webbed toes, making them ideal water dogs.',
            'source' => 'http://mentalfloss.com/article/63891/12-friendly-facts-about-labrador-retrievers'
        ]);
        
        Fact::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'dog_id' => Dog::where('name', 'LIKE', 'Pomeranian')->pluck('id')->first(), 
            'content' => 'Labradors retrievers have water-resistant coats and webbed toes, making them ideal water dogs.',
            'source' => 'http://mentalfloss.com/article/63891/12-friendly-facts-about-labrador-retrievers'
        ]);
        
        Fact::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'dog_id' => Dog::where('name', 'LIKE', 'Shih Tzu')->pluck('id')->first(), 
            'content' => 'Labradors retrievers have water-resistant coats and webbed toes, making them ideal water dogs.',
            'source' => 'http://mentalfloss.com/article/63891/12-friendly-facts-about-labrador-retrievers'
        ]);
        
        Fact::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'dog_id' => Dog::where('name', 'LIKE', 'Yorkshire Terrier')->pluck('id')->first(), 
            'content' => 'Labradors retrievers have water-resistant coats and webbed toes, making them ideal water dogs.',
            'source' => 'http://mentalfloss.com/article/63891/12-friendly-facts-about-labrador-retrievers'
        ]);
    }
}
