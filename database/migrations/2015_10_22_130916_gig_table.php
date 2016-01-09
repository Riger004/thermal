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
            $table->integer('user_id')->index();
            $table->string('title',80);
            $table->longText('description',250);
            $table->string('gig_photo');
            $table->string('main_category');
            $table->string('sub_category');
            $table->string('tag');

            $table->float('rating')->nullable();
            // within how many days the gig_creator will complete the task
            $table->integer('duration');
            $table->float('amount');

            $table->integer('quick_delivery')->nullable();

            $table->float('quick_amount')->nullable();
            
            $table->string('requirements');

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
