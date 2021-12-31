<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Raw_material extends Model
{
    puplic function products(){
    	return $this->hasMany('App\Product','product_id');
    }
}
