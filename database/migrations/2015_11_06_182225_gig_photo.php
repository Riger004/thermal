<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GigPhoto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('gig_photos',function(Blueprint $table){
            $table->increments('id');
            $table->integer('gig_id')->unsigned();

            //relation constrain
            $table->foreign('gig_id')->references('id')->on('gigs')->onDelete('cascade');

            $table->string('path');
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
        Schema::drop('gig_photos');
    }
}
