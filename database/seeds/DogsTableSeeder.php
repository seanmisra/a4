<?php

use Illuminate\Database\Seeder;
use App\Dog; 

class DogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //added
        Dog::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Collie',
            'group' => 'Herding',
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
            'energy' => 4, 
            'social' => 5,
            'intelligence' => 4, 
            'cleanliness' => 2, 
            'adventure' => 4
        ]);
    }
}
