<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

//HOTEL INDEX
Route::get('/api/v1/hotels','HotelController@index');

//HOTEL STORE
Route::post('/api/v1/hotels','HotelController@store');

//HOTEL ROOMHOTEL
Route::post('/api/v1/roomhotel','HotelController@roomhotel');

//HOTEL SHOW
Route::get('/api/v1/hotels/{hotel}','HotelController@show');

//HOTEL UPDATE
Route::put('/api/v1/hotels/{hotel}','HotelController@update');

//HOTEL DESTROY
Route::patch('/api/v1/hotels/{hotel}','HotelController@destroy');