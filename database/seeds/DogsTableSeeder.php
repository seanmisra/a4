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
        Dog::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Labrador',
            'group' => 'Retrievers',
            'energy' => 4, 
            'social' => 5,
            'intelligence' => 4, 
            'cleanliness' => 2, 
            'adventure' => 4
        ]);
    }
}
