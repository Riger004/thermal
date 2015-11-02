<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class metaData_service extends Model
{
    //name of the table
    protected $table='metadata_service';

    //primary key
    protected $primaryKey='service_id';

    public function category_service(){
		return $this->belongsTo('App\Category','f_category_id');    	
    }
}
