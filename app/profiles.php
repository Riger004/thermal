<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profiles extends Model
{
    //name of the table
    protected $table='profiles';

    //primary key of the table
    protected $primaryKey='id';


    protected $fillable = ['country', 'language','phone_num','profile_pic','recent_delivery','avg_response_time','about','short_info'];

    public function users(){
    	return $this->belongsTo('App\User','id');
    }

   



}
