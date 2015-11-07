<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Profile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('profiles',function(Blueprint $table){
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('country')->nullable();
            $table->string('language')->nullable();
            $table->string('profile_pic')->nullable();
            $table->time('recent_delivery')->nullable();
            $table->double('avg_response_time')->nullable();
            $table->longText('about')->nullable();
            $table->timestamps();

            //foreign key constrain
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::drop('profiles');
    }
}
