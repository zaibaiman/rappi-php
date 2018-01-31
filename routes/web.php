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

Route::get('/', "StoresController@showAll");
Route::get('/stores/{id}', "StoresController@showSingle");
Route::get('/checkout', "CheckoutController@index");
Route::post('/checkout', "CheckoutController@makeOrder");
Route::get('/success', "OrderSuccessController@index");

Auth::routes();
