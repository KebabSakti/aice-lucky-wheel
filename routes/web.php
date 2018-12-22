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

//REST Service
Route::prefix('REST')->group(function(){
	//auth portal
	Route::post('api/auth', 'AuthController@auth');
	
	//api group
	Route::prefix('api')->group(function(){

	});
});
