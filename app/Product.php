<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   puplic function categories(){
    	return $this->hasMany('App\Category','category_id');
    }
}
