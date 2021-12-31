<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   puplic function categories(){
    	return $this->hasMany('App\Category','category_id');
    }

puplic function raw_materials(){
    	return $this->hasMany('App\Raw_material','product_id');
    }

puplic function orders(){
    	return $this->hasMany('App\Order','order_id');
    }
}
