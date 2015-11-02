<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hire extends Model
{
    //name of the table
    protected $table='hire';

    //primary Key
    protected $table='hire_id';

    public function hire_by_profile(){
    	return $this->belongsTo('App\Profile','f_profile_id');
    }

    public function hire_of_gig(){
    	return $this->belongsTo('App\Gig_Table','f_gig_id');
    }
}
