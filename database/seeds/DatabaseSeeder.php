<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(DogsTableSeeder::class);
        $this->call(FactsTableSeeder::class);
        $this->call(TagsTableSeeder::class);
        $this->call(DogTagTableSeeder::class);
    }
}
