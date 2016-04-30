<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Carts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::create('cart',function(Blueprint $table){
            $table->increments('id');

            //this cart belongs to this particular person id
            $table->integer('user_id')->index();

            //which gig has been dropped into the cart
            $table->integer('gig_id')->index();

            $table->integer('gig_quantity')->default(1);

            //whether the use has confirmed the carts or not
            $table->boolean('confirmed')->default(false);

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
        Schema::drop('cart');
    }
}
