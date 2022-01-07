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
   	$product->product_name=$request->product_name ;
   	$product->description=$request->description ;
   	$product->price=$request->price ;
   	$product->is_sale=$request->is_sale ;
   	$product->sales=$request->sales ;
   	$product->size=$request->size ;
   	$product->color=$request->color ;
   	$product->img=$request->img;
   	$product->category_id=$request->category_id ;
   	$product->material_id=$request->material_id ;
   	$product->save();
   	return back();
   }
   puplic function index(){
   	$products = Product::all();
    return view('admin.products.index',compact('products'));
   }
}
