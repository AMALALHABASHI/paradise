<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class deliveriesController extends Controller
{
    public function create() 
    {
    	return view ('admin.deliveries.create');
    }




}
