<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    //table name
    protected $table='categories';

    //primaryKey
    protected $primaryKey='id';

    protected $fillable=['main_cat','sub_cat','platform'];


    public function gig(){
    	return $this->belongsTo('App\Gig','id');
    }

    public function expertise(){
    	return $this->hasOne('App\metadata_expertise','category_id');
    }

    public function service(){
    	return $this->hasMany('App\metadata_service','category_id');
    }

    public function deliver(){
    	return $this->hasMany('App\metadata_alsodeliver','category_id');
    }


}
