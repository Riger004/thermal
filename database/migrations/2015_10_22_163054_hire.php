<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Hire extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('hires',function(Blueprint $table){
            $table->increments('id');

            //the person who has been hired
            $table->integer('gig_id')->index();
            
            //the person who has hired the above person
            $table->integer('profile_id')->index();
            
            $table->longText('job_description');
            $table->timestamps();
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
        Schema::drop('hires');
    }
}
