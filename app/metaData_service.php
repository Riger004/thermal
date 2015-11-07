<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class metadata_service extends Model
{
     //table name
    protected $table='metadata_services';

    //primaryKey
    protected $primaryKey='id';

    protected $fillable=['service_name'];

    public function category(){
    	return $this->belongsTo('App\category','id');
    }

    
}
