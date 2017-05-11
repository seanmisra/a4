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
     */
    public function run()
    {
        // SIZE: 
        // tiny: 15 pounds and below
        // small: 15 - 40 pounds
        // medium: 40 - 85 pounds
        // large: 85 pounds and above

        Dog::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Collie',
            'group' => 'Herding',
            'size' => 'medium', 
            'energy' => 3, 
            'social' => 5,
            'intelligence' => 4, 
            'cleanliness' => 2, 
            'adventure' => 3
        ]);
        
        Dog::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'German Shepherd',
            'group' => 'Herding',
            'size' => 'medium', 
            'energy' => 5, 
            'social' => 4,
            'intelligence' => 5, 
            'cleanliness' => 4, 
            'adventure' => 5
        ]);
        
        Dog::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Basenji',
            'group' => 'Hound',
            'size' => 'small', 
            'apartment' => true, 
            'energy' => 5, 
            'social' => 5,
            'intelligence' => 4, 
            'cleanliness' => 4, 
            'adventure' => 4
        ]);
        
        Dog::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Basset Hound',
            'alias_one' => 'Basset',
            'group' => 'Hound',
            'size' => 'medium', 
            'apartment' => true, 
            'energy' => 2, 
            'social' => 5,
            'intelligence' => 4, 
            'cleanliness' => 3, 
            'adventure' => 2
        ]);
        
        Dog::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Beagle',
            'group' => 'Hound',
            'size' => 'small', 
            'energy' => 4, 
            'social' => 5,
            'intelligence' => 4, 
            'cleanliness' => 4, 
            'adventure' => 5
        ]);
        
        Dog::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Bloodhound',
            'group' => 'Hound',
            'size' => 'large', 
            'energy' => 5, 
            'social' => 5,
            'intelligence' => 4, 
            'cleanliness' => 1, 
            'adventure' => 4
        ]);
        
        Dog::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Dachshund',
            'group' => 'Hound',
            'size' => 'small',
            'apartment' => true, 
            'energy' => 3, 
            'social' => 3,
            'intelligence' => 4, 
            'cleanliness' => 3, 
            'adventure' => 4
        ]);
        
        Dog::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Greyhound',
            'group' => 'Hound',
            'size' => 'medium', 
            'apartment' => true,
            'energy' => 5, 
            'social' => 5,
            'intelligence' => 5, 
            'cleanliness' => 3, 
            'adventure' => 5
        ]);
        
        Dog::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Whippet',
            'group' => 'Hound',
            'size' => 'small', 
            'apartment' => true,
            'energy' => 5, 
            'social' => 5,
            'intelligence' => 4, 
            'cleanliness' => 5, 
            'adventure' => 5
        ]);
        
        Dog::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'American Eskimo Dog',
            'group' => 'Non-Sporting',
            'size' => 'small', 
            'apartment' => true,
            'energy' => 5, 
            'social' => 5,
            'intelligence' => 4, 
            'cleanliness' => 3, 
            'adventure' => 5
        ]);
        
        Dog::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Boston Terrier',
            'group' => 'Non-Sporting',
            'apartment' => true, 
            'size' => 'tiny',
            'energy' => 4, 
            'social' => 5,
            'intelligence' => 4, 
            'cleanliness' => 5, 
            'adventure' => 5
        ]);
        
        Dog::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Bulldog',
            'group' => 'Non-Sporting',
            'size' => 'small', 
            'apartment' => true, 
            'energy' => 2, 
            'social' => 4,
            'intelligence' => 2, 
            'cleanliness' => 3, 
            'adventure' => 4
        ]);
        
        Dog::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Chinese Shar-Pei',
            'group' => 'Non-Sporting',
            'size' => 'medium',
            'energy' => 2, 
            'social' => 2,
            'intelligence' => 2, 
            'cleanliness' => 3, 
            'adventure' => 2
        ]);
        
        Dog::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Chow Chow',
            'alias_one' => 'Chow',
            'group' => 'Non-Sporting',
            'size' => 'medium', 
            'energy' => 2, 
            'social' => 1,
            'intelligence' => 1, 
            'cleanliness' => 3, 
            'adventure' => 2
        ]);
        
        Dog::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Dalmatian',
            'group' => 'Non-Sporting',
            'size' => 'medium', 
            'energy' => 5, 
            'social' => 4,
            'intelligence' => 4, 
            'cleanliness' => 4, 
            'adventure' => 5
        ]);
        
        Dog::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'French Bulldog',
            'group' => 'Non-Sporting',
            'size' => 'small', 
            'apartment' => true, 
            'energy' => 3, 
            'social' => 4,
            'intelligence' => 3, 
            'cleanliness' => 3, 
            'adventure' => 4
        ]);
        
        Dog::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Poodle',
            'group' => 'Non-Sporting',
            'size' => 'medium', 
            'apartment' => true,
            'energy' => 4, 
            'social' => 5,
            'intelligence' => 5, 
            'cleanliness' => 4, 
            'adventure' => 5
        ]);
        
        Dog::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Brittany',
            'group' => 'Sporting',
            'size' => 'small', 
            'energy' => 5, 
            'social' => 5,
            'intelligence' => 5, 
            'cleanliness' => 2, 
            'adventure' => 5
        ]);
        
        Dog::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Chesapeake Bay Retriever',
            'group' => 'Sporting',
            'size' => 'medium', 
            'energy' => 5, 
            'social' => 3,
            'intelligence' => 4, 
            'cleanliness' => 3, 
            'adventure' => 5
        ]);
        
        Dog::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Cocker Spaniel',
            'group' => 'Sporting',
            'size' => 'small',
            'apartment' => true, 
            'energy' => 4, 
            'social' => 4,
            'intelligence' => 4, 
            'cleanliness' => 3, 
            'adventure' => 4
        ]);
        
        Dog::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'English Setter',
            'group' => 'Sporting',
            'size' => 'medium', 
            'energy' => 4, 
            'social' => 5,
            'intelligence' => 5, 
            'cleanliness' => 3, 
            'adventure' => 5
        ]);
        
        Dog::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Golden Retriever',
            'alias_one' => 'Golden',
            'group' => 'Sporting',
            'size' => 'medium', 
            'energy' => 5, 
            'social' => 5,
            'intelligence' => 5, 
            'cleanliness' => 2, 
            'adventure' => 5
        ]);
        
        Dog::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Irish Setter',
            'group' => 'Sporting',
            'size' => 'medium', 
            'energy' => 5, 
            'social' => 5,
            'intelligence' => 5, 
            'cleanliness' => 3, 
            'adventure' => 5
        ]);
        
        Dog::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Labrador Retriever',
            'alias_one' => 'Labrador',
            'alias_two' => 'Lab',
            'alias_three' => 'Nala', //Easter egg, as my late dog (a chocolate lab), is named Nala
            'group' => 'Sporting',
            'size' => 'medium', 
            'energy' => 5, 
            'social' => 5,
            'intelligence' => 5, 
            'cleanliness' => 3, 
            'adventure' => 5
        ]);
        
        Dog::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Pointer',
            'group' => 'Sporting',
            'size' => 'medium', 
            'energy' => 5, 
            'social' => 5,
            'intelligence' => 5, 
            'cleanliness' => 4, 
            'adventure' => 5
        ]);
        
        Dog::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Akita',
            'group' => 'Working',
            'size' => 'large', 
            'energy' => 4, 
            'social' => 2,
            'intelligence' => 3, 
            'cleanliness' => 1, 
            'adventure' => 5
        ]);
        
        Dog::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Alaskan Malamute',
            'alias_one' => 'Malamute',
            'group' => 'Working',
            'size' => 'medium', 
            'energy' => 5, 
            'social' => 4,
            'intelligence' => 4, 
            'cleanliness' => 2, 
            'adventure' => 5
        ]);
        
        Dog::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Bernese Mountain Dog',
            'alias_one' => 'Bernese',
            'group' => 'Working',
            'size' => 'large', 
            'energy' => 4, 
            'social' => 5,
            'intelligence' => 4, 
            'cleanliness' => 2, 
            'adventure' => 4
        ]);
        
        Dog::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Boxer',
            'group' => 'Working',
            'size' => 'medium', 
            'apartment' => true, 
            'energy' => 5, 
            'social' => 4,
            'intelligence' => 4, 
            'cleanliness' => 3, 
            'adventure' => 5
        ]);
        
        Dog::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Bullmastiff',
            'group' => 'Working',
            'size' => 'large', 
            'energy' => 2, 
            'social' => 4,
            'intelligence' => 3, 
            'cleanliness' => 4, 
            'adventure' => 4
        ]);
        
        Dog::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Chinook',
            'group' => 'Working',
            'size' => 'medium', 
            'energy' => 3, 
            'social' => 5,
            'intelligence' => 5, 
            'cleanliness' => 3, 
            'adventure' => 4
        ]);
        
        Dog::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Doberman Pinscher',
            'size' => 'medium', 
            'group' => 'Working',
            'energy' => 3, 
            'social' => 3,
            'intelligence' => 5, 
            'cleanliness' => 3, 
            'adventure' => 4
        ]);
        
        Dog::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Great Dane',
            'group' => 'Working',
            'size' => 'large', 
            'apartment' => true, # apparently they are very lazy
            'energy' => 5, 
            'social' => 5,
            'intelligence' => 3, 
            'cleanliness' => 3, 
            'adventure' => 5
        ]);
        
        Dog::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Mastiff',
            'group' => 'Working',
            'size' => 'large', 
            'energy' => 3, 
            'social' => 4,
            'intelligence' => 2, 
            'cleanliness' => 2, 
            'adventure' => 4
        ]);
        
        Dog::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Rottweiler',
            'alias_one' => 'Rottie', 
            'alias_two' => 'Rott',
            'group' => 'Working',
            'size' => 'large', 
            'energy' => 4, 
            'social' => 4,
            'intelligence' => 5, 
            'cleanliness' => 3, 
            'adventure' => 5
        ]);
        
        Dog::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Siberian Husky',
            'alias_one' => 'Husky',
            'group' => 'Working',
            'size' => 'medium', 
            'energy' => 5, 
            'social' => 5,
            'intelligence' => 3, 
            'cleanliness' => 2, 
            'adventure' => 5
        ]);
        
        Dog::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'St.Bernard',
            'alias_one' => 'Bernard',
            'alias_two' => 'Saint',
            'alias_three' => 'Saint Bernard',
            'group' => 'Working',
            'size' => 'large', 
            'energy' => 3, 
            'social' => 5,
            'intelligence' => 4, 
            'cleanliness' => 2, 
            'adventure' => 3
        ]);
        
        Dog::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Chihuahua',
            'group' => 'Toy',
            'size' => 'tiny', 
            'apartment' => true,
            'energy' => 3, 
            'social' => 4,
            'intelligence' => 4, 
            'cleanliness' => 5, 
            'adventure' => 3
        ]);
        
        Dog::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'English Toy Spaniel',
            'group' => 'Toy',
            'size' => 'tiny', 
            'energy' => 3, 
            'social' => 4,
            'intelligence' => 3, 
            'cleanliness' => 3, 
            'adventure' => 3
        ]);
        
        Dog::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Maltese',
            'group' => 'Toy',
            'size' => 'tiny', 
            'apartment' => true,
            'energy' => 3, 
            'social' => 4,
            'intelligence' => 4, 
            'cleanliness' => 2, 
            'adventure' => 3
        ]);
        
        Dog::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Pomeranian',
            'group' => 'Toy',
            'size' => 'tiny', 
            'apartment' => true, 
            'energy' => 3, 
            'social' => 3,
            'intelligence' => 4, 
            'cleanliness' => 3, 
            'adventure' => 3
        ]);
        
        Dog::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Shih Tzu',
            'group' => 'Toy',
            'apartment' => true, 
            'size' => 'tiny', 
            'energy' => 3, 
            'social' => 3,
            'intelligence' => 4, 
            'cleanliness' => 3, 
            'adventure' => 3
        ]);
        
        Dog::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Yorkshire Terrier',
            'group' => 'Toy',
            'size' => 'tiny', 
            'apartment' => true, 
            'energy' => 3, 
            'social' => 3,
            'intelligence' => 4, 
            'cleanliness' => 3, 
            'adventure' => 3
        ]);
    }
}
