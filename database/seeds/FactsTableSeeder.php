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
            'dog_id' => Dog::where('name', 'LIKE', 'Labrador Retriever')->pluck('id')->first(), 
            'content' => 'Labradors nearly went extinct in the 1880s. And blah blah blah. And lorem ipsum candy sugar dogs and cats forever more lenore.',
            'source' => 'http://www.mnn.com/family/pets/stories/5-surprising-facts-about-labrador-retrievers'
        ]);
    }
}
