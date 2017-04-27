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
     *
     * COMMAND-LINE: php artisan migrate:refresh --seed
     */
    public function up()
    {
        Schema::create('dogs', function(Blueprint $table) {
            $table->increments('id'); 
            
            $table->timestamps(); 
            
            $table->string('name'); 
            $table->string('aliasOne')->nullable(); 
            $table->string('aliasTwo')->nullable(); 
            $table->string('aliasThree')->nullable(); 
            $table->string('group')->nullable(); 
            $table->enum('size', array("tiny", "small", "medium", "large"))->nullable(); 
            $table->enum('energy', array(1, 2, 3, 4, 5))->default(3); 
            $table->enum('social', array(1, 2, 3, 4, 5))->default(3); 
            $table->enum('intelligence', array(1, 2, 3, 4, 5))->default(3); 
            $table->enum('cleanliness', array(1, 2, 3, 4, 5))->default(3); 
            $table->enum('adventure', array(1, 2, 3, 4, 5))->default(3); 
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
