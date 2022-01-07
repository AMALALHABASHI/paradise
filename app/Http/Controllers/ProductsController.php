<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductsController extends Controller
{
    puplic function create(){
   	return view('admin.products.create');

   }
    puplic function store(Request $request){
   	$product = new Product;
   	$product->name=$request->name ;
   	$product->save();
   	return back();
   }
}
