<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    puplic function products(){
    	return $this->hasMany('App\Product','order_id');
    }

    puplic function delivery(){
    	return $this->belongsTo('App\delivery','order_id');
    }
}
