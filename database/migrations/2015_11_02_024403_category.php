<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Category extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('categories',function(Blueprint $table){
            $table->increments('id');
            $table->integer('gig_id')->unsigned();
            $table->string('main_cat');
            $table->string('sub_cat');
            $table->string('platform');
            $table->timestamps();


            $table->foreign('gig_id')->references('id')->on('gigs')->onDelete('cascade');
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
        Schema::drop('categories');
    }
}
