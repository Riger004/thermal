<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //name of the table
	protected $table='category';

    //primary key
	protected $primaryKey='category_id';

	public function gig_table(){
		return $this->belongsTo('App\Gig_table','f_gig_id');
	}


	public function metadata_expertise(){
		return $this->hasOne('App\metaData_expertise','f_category_id');    	
	}


	public function metadata_service(){
		return $this->hasOne('App\metaData_service','f_category_id');    	
	}

	public function metadata_alsoDeliver(){
		return $this->hasOne('App\metadata_alsodeliver','f_category_id');    	
	}

}
