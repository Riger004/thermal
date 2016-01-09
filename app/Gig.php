<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gig extends Model
{
    //name of the talbe
	protected $table='gigs';

	//primary key
	protected $primaryKey='id';


	protected $fillable = ['title','description', 'gig_photo','main_category','sub_category',
							'tag','duration','amount','quick_delivery','quick_amount','requirements'];

	
	//creating the relationship
	public function user(){
		return $this->belongsTo('App\User','id');
	}

	


}
