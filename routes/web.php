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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('/home', ['uses'=>'HomeController@index','as'=>'home.index']);

Route::get('/cliente', ['uses'=>'ClienteController@index','as'=>'cliente.index']);

Route::get('/empresa', ['uses'=>'EmpresaController@index','as'=>'empresa.index']);