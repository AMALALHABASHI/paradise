<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Delivery;

class deliveriesController extends Controller
{
    public function create() 
    {
    	return view ('admin.deliveries.create');
    }

     public function store(Request $Request) 
    {
    	$delivery = new Delivery;

		$delivery->costumer_id = $Request->costumer_id;
		$delivery->orderer_id= $Request->orderer_id;
		$delivery->date= $Request->date;
		$delivery->save();
		return back();
    }	




}
