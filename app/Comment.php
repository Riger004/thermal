<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //name of the table
    protected $table='comments';

    //name of the primaryKey
    protected $table=['gig_id','profile_id'];

    protected $fillable=['comment_description'];

    public function profile(){
    	return $this->belongsTo('App\profiles','id');
    }

    public function gig(){
    	return $this->bolongsTo('App\Gig','id');
    }

}
