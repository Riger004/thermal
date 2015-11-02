<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gig_Table extends Model
{
    //name of hte table
	protected $table='gig_table';

	//primary key
	protected $primaryKey='gig_id'


	public function profile(){
		return $this->belongsTo('App\Profile','f_profile_id');
	}

	public function category(){
		return $this->hasOne('App\Category','gig_id');
	}

	public function comment_gigTable(){
		return $this->hasMany('App\Comment','f_gig_id');
	}

	public function hire_from_gigTable(){
    	return $this->hasOne('App\Hire','f_gig_id');
	}


}
