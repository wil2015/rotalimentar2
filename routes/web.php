<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
/*
Route::get('/', function () {
    return view('welcome'); 
  return view('rota.index');


});
*/
Route::get('/', 'Rota_controller@index');
Route::post('index', 'Rota_controller@upload');
Route::get('upload', 'Rota_controller@upload2');
//Route::post('rota.upload', 'Rota_controller@upload');
Route::delete('index/{id}', 'Rota_controller@destroy');
