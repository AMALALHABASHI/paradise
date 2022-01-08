<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class viewsController extends Controller
{
            public function index()
            {
                return view ('index');
            }

            public function blog()
            {
                return view ('blog');
            }
            public function blog2()
            {
                return view ('blog2');
            }
            
            public function buttonsboxesimages()
            {
                return view ('buttons-boxes-images');
            }
            public function contact()
            {
                return view ('contact');
            }
            
            public function index2()
            {
                return view ('index2');
            }
            public function index3()
            {
                return view ('index3');
            }
            
            public function portfoliopost()
            {
                return view ('portfolio-post');
            }
            public function portfolio()
            {
                return view ('portfolio');
            }
             public function portfolio2()
            {
                return view ('portfolio2');
            }
             public function portfolio3()
            {
                return view ('portfolio3');
            }
             public function portfolio4()
            {
                return view ('portfolio4');
            }
            
            public function post()
            {
                return view ('post');
            }
            
            public function post2()
            {
                return view ('post2');
            }
             public function serviceicons()
            {
                return view ('service-icons');
            }
             public function tabstoggletable()
            {
                return view ('tabs-toggle-table');
            }
             public function testimonials()
            {
                return view ('testimonials');
            }
             public function typography()
            {
                return view ('typography');
            }
              public function welcome()
            {
                return view ('welcome');
            }
}
