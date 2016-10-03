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
Route::get('/cliente/adicionar', ['uses'=>'ClienteController@adicionar','as'=>'cliente.adicionar']);
Route::get('/cliente/editar/{id}', ['uses'=>'ClienteController@editar','as'=>'cliente.editar']);
Route::post('/cliente/salvar', ['uses'=>'ClienteController@salvar','as'=>'cliente.salvar']);
Route::put('/cliente/atualizar/{id}', ['uses'=>'ClienteController@atualizar','as'=>'cliente.atualizar']);
Route::get('/cliente/deletar/{id}', ['uses'=>'ClienteController@deletar','as'=>'cliente.deletar']);

Route::get('/empresa', ['uses'=>'EmpresaController@index','as'=>'empresa.index']);