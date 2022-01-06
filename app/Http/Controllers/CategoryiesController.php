<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryiesController extends Controller
{
   puplic function test(){
   	return "test";
   }
   puplic function create(){
   	return view('admin.categories.create');
   }
}
