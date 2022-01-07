<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class OrdersController extends Controller
{
    public function create() 
    {
    	return view ('admin.orderss.create');
    }




     public function store(Request $Request) 
    {
    	$order = new Order;

		$order->costumer_id = $Request->costumer_id;
		$order->product_id= $Request->product_id;
		$order->num_of_product= $Request->num_of_product;
		$order->date= $Request->date;
		$order->save();
		return back();
    }	

}
