<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Raw_material;

class rawMaterialsController extends Controller
{
    //
     public function create() 
    {
    	return view ('admin.raw_materials.create');
    }




     public function store(Request $Request) 
    {
    	$raw_material = new Raw_material;

		$raw_material->price = $Request->price;
		$raw_material->type= $Request->type;
		$raw_material->save();
		return back();
    }	

}
