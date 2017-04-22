<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dogs', function(Blueprint $table) {
            $table->increments('id'); 
            
            $table->timestamps(); 
            
            $table->string('name'); 
            $table->string('group'); 
            $table->enum('energy', array(1, 2, 3, 4, 5)); 
            $table->enum('social', array(1, 2, 3, 4, 5)); 
            $table->enum('intelligence', array(1, 2, 3, 4, 5)); 
            $table->enum('cleanliness', array(1, 2, 3, 4, 5)); 
            $table->enum('adventure', array(1, 2, 3, 4, 5)); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('dogs'); 
    }
}
