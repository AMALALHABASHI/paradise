<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
     puplic function orders(){
    	return $this->hasMany('App\Order','order_id');
    }
}
