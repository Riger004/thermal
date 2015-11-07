<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class metadata_expertise extends Model
{
    //table name
    protected $table='metadata_expertises';

    //primaryKey
    protected $primaryKey='id';

    protected $fillable=['expertise_name'];

    public function category(){
    	return $this->belongsTo('App\category','id');
    }
}
