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

//HOTEL GETROOMHOTEL
Route::get('/api/v1/gethotel/{hotel}','HotelController@gethotel');

//HOTEL SHOW
Route::get('/api/v1/hotels/{hotel}','HotelController@show');

//HOTEL UPDATE
Route::put('/api/v1/hotels/{hotel}','HotelController@update');

//HOTEL DESTROY
Route::patch('/api/v1/hotels/{hotel}','HotelController@destroy');

//ROOM INDEX
Route::get('/api/v1/rooms','RoomController@index');

//City
Route::get('/api/v1/city','CityController@getcities');

//ROOMHOTEL
Route::post('/api/v1/roomhotel','RoomHotelController@store');


//GET ROOM BY ID
Route::get('/api/v1/getroom/{hotel}','RoomHotelController@getroom');