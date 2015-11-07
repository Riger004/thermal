<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gig extends Model
{
    //name of the talbe
	protected $table='gigs';

	//primary key
	protected $primaryKey='id';


	protected $fillable = ['profile_id', 'title','description', 'video','gig_gallery','duration','amount'];

	
	//creating the relationship
	public function profiles(){
		return $this->belongsTo('App\profiles','id');
	}

	public function comments_gig(){
		return $this->hasMany('App\Comment','gig_id');
	}


	public function hire_gig(){
		return $this->hasMany('App\hire','gig_id');
	}

	public function tag(){
		return $this->hasMany('App\tags','gig_id');
	}

	public function category(){

        return $this->hasOne('App\category','gig_id');
    }


    public function photo(){
		return $this->hasMany('App\gig_photo','gig_id');    	
    }


}
