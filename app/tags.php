<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tags extends Model
{
    //name of the table
    protected $table='tags';


    //primaryKey
    protected $primaryKey='id';

    protected $fillable=['names'];

    public function gig(){
		return $this->belongsTo('App\Gig','id');    	
    }
}
