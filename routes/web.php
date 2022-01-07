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

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/test','CategoryiesController@test')->name('Test');

Route::get('/test','OrdersController@test')->name('Test');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/deliveries/create', ' deliveriesController@create')->name('create-delivery');
Route::post('/deliveries/create', ' deliveriesController@store')->name('store-delivery');
Route::get('/deliveries', 'deliveriesController@index')->name('index-delivery');


Route::get('/categories/create', 'CategoryiesController@create')->name('create-category');
Route::post('/categories/create', 'CategoryiesController@store')->name('store-category');
Route::get('/products/create', 'ProductsController@create')->name('create-product');
Route::post('/products/create', 'ProductsController@store')->name('store-product');
Route::get('/products', 'ProductsController@index')->name('index-product');
Route::get('/categories', 'CategoryiesController@index')->name('index-category');



Route::get('/orders/create', ' OrdersController@create')->name('create-order');
Route::post('/orders/create', ' OrdersController@store')->name('store-order');
Route::get('/orders', 'OrdersController@index')->name('index-order');


Route::get('/rawMaterial/create', ' rawMaterialsController@create')->name('create-raw-material');
Route::post('/rawMaterial/create', ' rawMaterialsController@store')->name('store-raw-material');
Route::get('/rawMaterial', 'rawMaterialsController@index')->name('index-raw-material');

