<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //name of the table
    protected $table='profile';

    //primary of the table
    protected $primaryKey='profile_id';


    protected $fillable=['user_id','about','country','language','profile_pic','recent_delivery','avg_response_time'];

    public function user(){
    	return $this->belongsTo('App\User','user_id');
    }

    public function gig_Table(){
    	return $this->hasMany('App\Gig_Table','f_profile_id');
	}

	public function comment_profile(){
    	return $this->hasOne('App\Comment','f_profile_id');
	}

	public function hire_from_profile(){
    	return $this->hasOne('App\Hire','f_profile_id');
	}
}
