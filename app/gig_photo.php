<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gig_photo extends Model
{
    //name of the table
    protected $table='gig_photos';

    protected $primaryKey='id';

    protected $fillable=['path'];


    public function gig_gal(){
		return $this->belongsTo('App\Gig','id');    	
    }

}
