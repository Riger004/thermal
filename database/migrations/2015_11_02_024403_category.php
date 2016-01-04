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
            $table->integer('gig_id')->index();
            $table->string('main_cat');
            $table->string('sub_cat');
            $table->string('platform');
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
        Schema::drop('categories');
    }
}
