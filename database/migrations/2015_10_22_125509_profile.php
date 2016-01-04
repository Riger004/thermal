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
            $table->integer('user_id')->index();
            $table->string('country')->nullable();
            $table->string('language')->nullable();
            $table->bigInteger('phone_num')->nullable();
            $table->string('profile_pic')->nullable();
            $table->time('recent_delivery')->nullable();
            $table->double('avg_response_time')->nullable();
            $table->longText('about')->nullable();
            $table->string('short_info')->nullable();
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
        Schema::drop('profiles');
    }
}
