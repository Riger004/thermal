<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNoOfUnreadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('no_of_unreads', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->integer('no_notifications');
            $table->integer('no_messages');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('no_of_unreads');
    }
}
