<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class metaData_alsodeliver extends Model
{
    //name of the table
    protected $table='metadata_alsodeliver';

    //primary key
    protected $primaryKey='deliver_id';

    public function category_alsoDeliver(){
		return $this->belongsTo('App\Category','f_category_id');    	
    }
}
