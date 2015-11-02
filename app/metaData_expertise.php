<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class metaData_expertise extends Model
{
    //name of the table
    protected $table='metadata_expertise';

    //primary key
    protected $primaryKey='expertise_id';

    public function category_expertise(){
		return $this->belongsTo('App\Category','f_category_id');    	
    }
}
