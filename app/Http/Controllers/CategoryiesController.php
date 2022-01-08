<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;

class CategoryiesController extends Controller
{
   puplic function create(){
   	return view('admin.categories.create');
   }
   puplic function store(Request $request){
   	$category = new Category;
   	$category->category_name=$request->category_name ;
   	$category->save();
   	return back();
   }
   puplic function index(){
   	$categories = Category::all();
    return view('admin.categories.index',compact('categories'));
   }
}
