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

Route::get('/{code}','VehiculoController@index');
Route::get('/Registro/create','VehiculoController@create');
Route::get('/Registro/store','VehiculoController@store');
Route::get('/Registro/show','VehiculoController@show');
Route::get('/Registro/estadisticas','VehiculoController@estadisticas');

