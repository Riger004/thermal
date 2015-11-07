<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hire extends Model
{
    //name of the table
    protected $table='hires';

    //primary key
	protected $primaryKey='id';


	protected $fillable=['job_description'];


	public function profile(){
		return $this->belongsTo('App\profiles','id');
	}

	public function gig(){
		return $this->belongsTo('App\Gig','id');
	}

}
