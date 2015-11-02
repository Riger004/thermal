<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tags extends Model
{
    //name of the table
    protected $table='tag';

    //name of the primary key
    protected $primaryKey='tag_id';
}
