<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App/category;

class CategoryiesController extends Controller
{
   puplic function test(){
   	return "test";
   }
   puplic function create(){
   	return view('admin.categories.create');
   }
   puplic function store(Request $request){
   	$category = new Category;
   	$category->name=$request->name ;
   	$category->save();
   	return back();
   }
}
