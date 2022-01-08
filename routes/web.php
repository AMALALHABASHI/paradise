<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//views route..
Route::get('/index', 'viewsController@index')->name('index');
Route::get('/blog', 'viewsController@blog')->name('blog');
Route::get('/blog2', 'viewsController@blog2')->name('blog2');
Route::get('/buttonsboxesimages', 'viewsController@buttonsboxesimages')->name('buttons-boxes-images');
Route::get('/contact', 'viewsController@contact')->name('contact');
Route::get('/index2', 'viewsController@index2')->name('index2');
Route::get('/index3', 'viewsController@index3')->name('index3');
Route::get('/portfoliopost', 'viewsController@portfoliopost')->name('portfolio-post');
Route::get('/portfolio', 'viewsController@portfolio')->name('portfolio');
Route::get('/portfolio2', 'viewsController@portfolio2')->name('portfolio2');
Route::get('/portfolio3', 'viewsController@portfolio3')->name('portfolio3');
Route::get('/portfolio4', 'viewsController@portfolio4')->name('portfolio4');
Route::get('/post', 'viewsController@post')->name('post');
Route::get('/post2', 'viewsController@post2')->name('post2');
Route::get('/serviceicons', 'viewsController@serviceicons')->name('service-icons');
Route::get('/tabstoggletable', 'viewsController@tabstoggletable')->name('tabs-toggle-table');
Route::get('/testimonials', 'viewsController@testimonials')->name('testimonials');
Route::get('/typography', 'viewsController@typography')->name('typography');
Route::get('/welcome', 'viewsController@welcome')->name('welcome');

//Auth route
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

//Admin side
Route::get('/deliveries/create', ' deliveriesController@create')->name('create-delivery');
Route::post('/deliveries/create', ' deliveriesController@store')->name('store-delivery');
Route::get('/deliveries', 'deliveriesController@index')->name('index-delivery');
Route::get('/deliveries/edit', 'deliveriesController@edit/{id}')->name('edit-delivery');



Route::get('/categories/create', 'CategoryiesController@create')->name('create-category');
Route::post('/categories/create', 'CategoryiesController@store')->name('store-category');
Route::get('/products/create', 'ProductsController@create')->name('create-product');
Route::post('/products/create', 'ProductsController@store')->name('store-product');
Route::get('/products', 'ProductsController@index')->name('index-product');
Route::get('/categories', 'CategoryiesController@index')->name('index-category');
Route::get('/categories/edit', 'CategoryiesController@edit/{id}')->name('edit-category');




Route::get('/orders/create', ' OrdersController@create')->name('create-order');
Route::post('/orders/create', ' OrdersController@store')->name('store-order');
Route::get('/orders', 'OrdersController@index')->name('index-order');
Route::get('/orders/edit', 'OrdersController@edit/{id}')->name('edit-order');
Route::post('/orders/edit/{id}', 'OrdersController@update/{id}')->name('update-order');


Route::get('/rawMaterial/create', ' rawMaterialsController@create')->name('create-raw-material');
Route::post('/rawMaterial/create', ' rawMaterialsController@store')->name('store-raw-material');
Route::get('/rawMaterial', 'rawMaterialsController@index')->name('index-raw-material');
Route::get('/rawMaterial/edit', 'rawMaterialsController@edit/{id}')->name('edit-raw-material');
