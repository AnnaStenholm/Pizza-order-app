<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//api/greeting/
Route::post('/greeting', function(Request $request){
    return "Hej på dig" .$request->input('name');
});
//welcome?name=Elefanten
Route::post('/welcome', function(Request $request){
    return "Hej på dig " .$request->input('name');
    });