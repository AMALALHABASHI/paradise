<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class rawMaterialsController extends Controller
{
    //
     public function create() 
    {
    	return view ('admin.raw_materials.create');
    }
}
