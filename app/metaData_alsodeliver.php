<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class metadata_alsodeliver extends Model
{
     //table name
    protected $table='metadata_alsodelivers';

    //primaryKey
    protected $primaryKey='id';

    protected $fillable=['deliver_name'];

    public function category(){
    	return $this->belongsTo('App\category','id');
    }
}
