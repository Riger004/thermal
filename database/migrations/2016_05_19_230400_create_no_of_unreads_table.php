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
            $table->string('user_email');
            $table->integer('no_notifications')->default(0);
            $table->integer('no_messages')->default(0);
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
