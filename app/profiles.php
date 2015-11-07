<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profiles extends Model
{
    //name of the table
    protected $table='profiles';

    //primary key of the table
    protected $primaryKey='id';


    protected $fillable = ['country', 'language','profile_pic','recent_delivery','avg_response_time','about'];

    public function users(){
    	return $this->belongsTo('App\User','id');
    }

    public function gigs(){
    	return $this->hasMany('App\Gig','profile_id');
    }

    public function comments(){
    	return $this->hasMany('App\Comment','profile_id');
    }

    public function hire(){
    	return $this->hasMany('App\hire','profile_id');
    }



}
