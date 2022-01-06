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
Route::get('/ deliveries/create', ' deliveriesController@create')->name('create-delivery');
