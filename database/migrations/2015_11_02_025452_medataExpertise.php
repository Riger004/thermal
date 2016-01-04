<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MedataExpertise extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('metadata_expertises',function(Blueprint $table){
            $table->increments('id');
            $table->integer('category_id')->index();
            $table->string('expertise_name');
            $table->timeStamps();

            
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('metadata_expertises');
    }
}
