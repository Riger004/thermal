<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //name of the table
    protected $table='comments';

    //primary key
    protected $primaryKey='comment_id';


    public function comment_byProfile(){
    	return $this->belongsTo('App\Profile','f_profile_id');
    }

    public function comment_onGig(){
    	return $this->belongsTo('App\Gig_Table','f_gig_id');
    }
}
