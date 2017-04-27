<?php

use Illuminate\Database\Seeder;
use App\Dog; 

class DogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     *
     * to update, run: php artisan migrate:refresh --seed
     */
    public function run()
    {
        // SIZE: 
        // lap: 15 pounds and below
        // small: 15 - 40 pounds
        // medium: 40 - 85 pounds
        // large: 85 pounds and above
        
        
        //added
        Dog::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Collie',
            'group' => 'Herding',
            'size' => 'medium', 
            'energy' => 4, 
            'social' => 5,
            'intelligence' => 4, 
            'cleanliness' => 2, 
            'adventure' => 4
        ]);
        
        //added
        Dog::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'German Shepherd',
            'group' => 'Herding',
            'size' => 'medium', 
            'energy' => 4, 
            'social' => 5,
            'intelligence' => 4, 
            'cleanliness' => 2, 
            'adventure' => 4
        ]);
        
        //added
        Dog::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Basenji',
            'group' => 'Hound',
            'size' => 'small', 
            'energy' => 4, 
            'social' => 5,
            'intelligence' => 4, 
            'cleanliness' => 2, 
            'adventure' => 4
        ]);
        
        //added
        Dog::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Basset Hound',
            'group' => 'Hound',
            'size' => 'medium', 
            'energy' => 4, 
            'social' => 5,
            'intelligence' => 4, 
            'cleanliness' => 2, 
            'adventure' => 4
        ]);
        
        //added
        Dog::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Beagle',
            'group' => 'Hound',
            'size' => 'small', 
            'energy' => 4, 
            'social' => 5,
            'intelligence' => 4, 
            'cleanliness' => 2, 
            'adventure' => 4
        ]);
        
        //added
        Dog::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Bloodhound',
            'group' => 'Hound',
            'size' => 'large', 
            'energy' => 4, 
            'social' => 5,
            'intelligence' => 4, 
            'cleanliness' => 2, 
            'adventure' => 4
        ]);
        
        //added
        Dog::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Dachshund',
            'group' => 'Hound',
            'size' => 'small', 
            'energy' => 4, 
            'social' => 5,
            'intelligence' => 4, 
            'cleanliness' => 2, 
            'adventure' => 4
        ]);
        
        //added
        Dog::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Greyhound',
            'group' => 'Hound',
            'size' => 'medium', 
            'energy' => 4, 
            'social' => 5,
            'intelligence' => 4, 
            'cleanliness' => 2, 
            'adventure' => 4
        ]);
        
        //added
        Dog::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Whippet',
            'group' => 'Hound',
            'size' => 'small', 
            'energy' => 4, 
            'social' => 5,
            'intelligence' => 4, 
            'cleanliness' => 2, 
            'adventure' => 4
        ]);
        
        //added 
        Dog::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'American Eskimo Dog',
            'group' => 'Non-Sporting',
            'size' => 'small', 
            'energy' => 4, 
            'social' => 5,
            'intelligence' => 4, 
            'cleanliness' => 2, 
            'adventure' => 4
        ]);
        
        //added
        Dog::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Boston Terrier',
            'group' => 'Non-Sporting',
            'size' => 'tiny', 
            'energy' => 4, 
            'social' => 5,
            'intelligence' => 4, 
            'cleanliness' => 2, 
            'adventure' => 4
        ]);
        
        //added
        Dog::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Bulldog',
            'group' => 'Non-Sporting',
            'size' => 'small', 
            'energy' => 4, 
            'social' => 5,
            'intelligence' => 4, 
            'cleanliness' => 2, 
            'adventure' => 4
        ]);
        
        //added
        Dog::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Chinese Shar-Pei',
            'group' => 'Non-Sporting',
            'size' => 'medium', 
            'energy' => 4, 
            'social' => 5,
            'intelligence' => 4, 
            'cleanliness' => 2, 
            'adventure' => 4
        ]);
        
        //added
        Dog::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Chow Chow',
            'group' => 'Non-Sporting',
            'size' => 'medium', 
            'energy' => 4, 
            'social' => 5,
            'intelligence' => 4, 
            'cleanliness' => 2, 
            'adventure' => 4
        ]);
        
        //added
        Dog::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Dalmatian',
            'group' => 'Non-Sporting',
            'size' => 'medium', 
            'energy' => 4, 
            'social' => 5,
            'intelligence' => 4, 
            'cleanliness' => 2, 
            'adventure' => 4
        ]);
        
        //added
        Dog::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'French Bulldog',
            'group' => 'Non-Sporting',
            'size' => 'small', 
            'energy' => 4, 
            'social' => 5,
            'intelligence' => 4, 
            'cleanliness' => 2, 
            'adventure' => 4
        ]);
        
        //added
        Dog::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Poodle',
            'group' => 'Non-Sporting',
            'size' => 'medium', 
            'energy' => 4, 
            'social' => 5,
            'intelligence' => 4, 
            'cleanliness' => 2, 
            'adventure' => 4
        ]);
        
        //added
        Dog::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Brittany',
            'group' => 'Sporting',
            'size' => 'small', 
            'energy' => 4, 
            'social' => 5,
            'intelligence' => 4, 
            'cleanliness' => 2, 
            'adventure' => 4
        ]);
        
        //added
        Dog::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Chesapeake Bay Retriever',
            'group' => 'Sporting',
            'size' => 'medium', 
            'energy' => 4, 
            'social' => 5,
            'intelligence' => 4, 
            'cleanliness' => 2, 
            'adventure' => 4
        ]);
        
        //added
        Dog::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Cocker Spaniel',
            'group' => 'Sporting',
            'size' => 'small', 
            'energy' => 4, 
            'social' => 5,
            'intelligence' => 4, 
            'cleanliness' => 2, 
            'adventure' => 4
        ]);
        
        //added
        Dog::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'English Setter',
            'group' => 'Sporting',
            'size' => 'medium', 
            'energy' => 4, 
            'social' => 5,
            'intelligence' => 4, 
            'cleanliness' => 2, 
            'adventure' => 4
        ]);
        
        //added
        Dog::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Golden Retriever',
            'aliasOne' => 'Golden',
            'group' => 'Sporting',
            'size' => 'medium', 
            'energy' => 4, 
            'social' => 5,
            'intelligence' => 4, 
            'cleanliness' => 2, 
            'adventure' => 4
        ]);
        
        //added
        Dog::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Irish Setter',
            'group' => 'Sporting',
            'size' => 'medium', 
            'energy' => 4, 
            'social' => 5,
            'intelligence' => 4, 
            'cleanliness' => 2, 
            'adventure' => 4
        ]);
        
        //added
        Dog::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Labrador Retriever',
            'aliasOne' => 'Labrador',
            'aliasTwo' => 'Lab',
            'aliasThree' => 'Nala', //Easter egg, as my late dog (a chocolate lab), is named Nala
            'group' => 'Sporting',
            'size' => 'medium', 
            'energy' => 4, 
            'social' => 5,
            'intelligence' => 4, 
            'cleanliness' => 2, 
            'adventure' => 4
        ]);
        
        //added
        Dog::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Pointer',
            'group' => 'Sporting',
            'size' => 'medium', 
            'energy' => 4, 
            'social' => 5,
            'intelligence' => 4, 
            'cleanliness' => 2, 
            'adventure' => 4
        ]);
        
        //added
        Dog::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Akita',
            'group' => 'Working',
            'size' => 'large', 
            'energy' => 4, 
            'social' => 5,
            'intelligence' => 4, 
            'cleanliness' => 2, 
            'adventure' => 4
        ]);
        
        //added
        Dog::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Alaskan Malamute',
            'aliasOne' => 'Malamute',
            'group' => 'Working',
            'size' => 'medium', 
            'energy' => 4, 
            'social' => 5,
            'intelligence' => 4, 
            'cleanliness' => 2, 
            'adventure' => 4
        ]);
        
        //added
        Dog::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Bernese Mountain Dog',
            'aliasOne' => 'Bernese',
            'group' => 'Working',
            'size' => 'large', 
            'energy' => 4, 
            'social' => 5,
            'intelligence' => 4, 
            'cleanliness' => 2, 
            'adventure' => 4
        ]);
        
        //added
        Dog::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Boxer',
            'group' => 'Working',
            'size' => 'medium', 
            'energy' => 4, 
            'social' => 5,
            'intelligence' => 4, 
            'cleanliness' => 2, 
            'adventure' => 4
        ]);
        
        //added
        Dog::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Bullmastiff',
            'group' => 'Working',
            'size' => 'large', 
            'energy' => 4, 
            'social' => 5,
            'intelligence' => 4, 
            'cleanliness' => 2, 
            'adventure' => 4
        ]);
        
        //added
        Dog::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Chinook',
            'group' => 'Working',
            'size' => 'medium', 
            'energy' => 4, 
            'social' => 5,
            'intelligence' => 4, 
            'cleanliness' => 2, 
            'adventure' => 4
        ]);
        
        //added
        Dog::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Doberman Pinscher',
            'size' => 'medium', 
            'group' => 'Working',
            'energy' => 4, 
            'social' => 5,
            'intelligence' => 4, 
            'cleanliness' => 2, 
            'adventure' => 4
        ]);
        
        //added
        Dog::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Greate Dane',
            'group' => 'Working',
            'size' => 'large', 
            'energy' => 4, 
            'social' => 5,
            'intelligence' => 4, 
            'cleanliness' => 2, 
            'adventure' => 4
        ]);
        
        //added
        Dog::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Mastiff',
            'group' => 'Working',
            'size' => 'large', 
            'energy' => 4, 
            'social' => 5,
            'intelligence' => 4, 
            'cleanliness' => 2, 
            'adventure' => 4
        ]);
        
        //added
        Dog::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Rottweiler',
            'group' => 'Working',
            'size' => 'large', 
            'energy' => 4, 
            'social' => 5,
            'intelligence' => 4, 
            'cleanliness' => 2, 
            'adventure' => 4
        ]);
        
        //added
        Dog::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Siberian Husky',
            'aliasOne' => 'Husky',
            'group' => 'Working',
            'size' => 'medium', 
            'energy' => 4, 
            'social' => 5,
            'intelligence' => 4, 
            'cleanliness' => 2, 
            'adventure' => 4
        ]);
        
        //added
        Dog::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'St.Bernard',
            'aliasOne' => 'Bernard',
            'group' => 'Working',
            'size' => 'large', 
            'energy' => 4, 
            'social' => 5,
            'intelligence' => 4, 
            'cleanliness' => 2, 
            'adventure' => 4
        ]);
        
        //added
        Dog::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Chihuahua',
            'group' => 'Toy',
            'size' => 'tiny', 
            'energy' => 4, 
            'social' => 5,
            'intelligence' => 4, 
            'cleanliness' => 2, 
            'adventure' => 4
        ]);
        
        //added
        Dog::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'English Toy Spaniel',
            'group' => 'Toy',
            'size' => 'tiny', 
            'energy' => 4, 
            'social' => 5,
            'intelligence' => 4, 
            'cleanliness' => 2, 
            'adventure' => 4
        ]);
        
        //added
        Dog::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Maltese',
            'group' => 'Toy',
            'size' => 'tiny', 
            'energy' => 4, 
            'social' => 5,
            'intelligence' => 4, 
            'cleanliness' => 2, 
            'adventure' => 4
        ]);
        
        //added
        Dog::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Pomeranian',
            'group' => 'Toy',
            'size' => 'tiny', 
            'energy' => 4, 
            'social' => 5,
            'intelligence' => 4, 
            'cleanliness' => 2, 
            'adventure' => 4
        ]);
        
        //added
        Dog::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Shih Tzu',
            'group' => 'Toy',
            'size' => 'tiny', 
            'energy' => 4, 
            'social' => 5,
            'intelligence' => 4, 
            'cleanliness' => 2, 
            'adventure' => 4
        ]);
        
        //added
        Dog::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Yorkshire Terrier',
            'group' => 'Toy',
            'size' => 'tiny', 
            'energy' => 4, 
            'social' => 5,
            'intelligence' => 4, 
            'cleanliness' => 2, 
            'adventure' => 4
        ]);
    }
}
