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
            $table->integer('profile_id')->index();
            $table->string('title',250);
            $table->longText('description');
            $table->string('video')->nullable();
            $table->float('rating');
            // within how many days the gig_creator will complete the task
            $table->integer('duration');
            $table->float('amount');
            $table->string('main_cat');
            $table->string('sub_cat');
            $table->string('expertise');
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
        Schema::drop('gigs');
    }
}
