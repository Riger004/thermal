<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GigTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('gigs',function(Blueprint $table){
            $table->increments('id');
            $table->integer('profile_id')->unsigned();
            $table->string('title',250);
            $table->longText('description');
            $table->string('video')->nullable();
            $table->float('rating');
            // within how many days the gig_creator will complete the task
            $table->integer('duration');
            $table->float('amount');
            $table->timestamps();

            $table->foreign('profile_id')->references('id')->on('profiles')->onDelete('cascade');

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
        Schema::drop('gigs');
    }
}
