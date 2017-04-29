<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConnectFactsAndDogs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('facts', function(Blueprint $table) {
            $table->integer('dog_id')->unsigned();
            $table->foreign('dog_id')->references('id')->on('dogs'); 
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('facts', function(Blueprint $table) {
            $table->dropForeign('facts_dog_id_foreign');   
            $table->dropColumn('dog_id'); 
        }); 
    }
}
