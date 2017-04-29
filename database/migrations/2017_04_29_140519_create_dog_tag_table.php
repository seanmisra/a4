<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDogTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dog_tag', function (Blueprint $table) {
            
            $table->increments('id'); 
            $table->timestamps(); 
            
            $table->integer('dog_id')->unsigned(); 
            $table->integer('tag_id')->unsigned(); 
            
            # make foreign keys
            $table->foreign('dog_id')->references('id')->on('dogs');
            $table->foreign('tag_id')->references('id')->on('tags'); 
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('dog_tag'); 
    }
}
