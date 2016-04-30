<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class carts extends Model
{
    //name of the table
    protected $table='cart';

    //name of the primaryKey
    protected $primaryKey='id';


    //this cart belongs to
    public function user_cart(){
		return $this->belongsTo('App\User','id');    	
    }

}
