<?php

use Illuminate\Support\Facades\Route;



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



Route::get('/pizzas', 'App\Http\Controllers\PizzaController@index');
Route::post('/pizzas', 'App\Http\Controllers\PizzaController@index');
Route::get('/pizzaprofile', 'App\Http\Controllers\PizzaController@getUserPizzaView');
Route::get('/orderprofile', 'App\Http\Controllers\OrderController@getUserOrdersView');
Route::post('/orderprofile', 'App\Http\Controllers\OrderController@getUserOrdersView');
Route::get('/orders', 'App\Http\Controllers\OrderController@getOrderView');
Route::post('/orders', 'App\Http\Controllers\OrderController@getOrderView');
