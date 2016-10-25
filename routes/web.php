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
Route::get('/cliente/detalhe/{id}', ['uses'=>'ClienteController@detalhe','as'=>'cliente.detalhe']);


Route::get('/empresa', ['uses'=>'EmpresaController@index','as'=>'empresa.index']);
Route::get('/empresa/adicionar', ['uses'=>'EmpresaController@adicionar','as'=>'empresa.adicionar']);
Route::get('/empresa/editar/{id}', ['uses'=>'EmpresaController@editar','as'=>'empresa.editar']);
Route::put('/empresa/atualizar/{id}', ['uses'=>'EmpresaController@atualizar','as'=>'empresa.atualizar']);
Route::get('/empresa/deletar/{id}', ['uses'=>'EmpresaController@deletar','as'=>'empresa.deletar']);
Route::get('/empresa/detalhe/{id}', ['uses'=>'EmpresaController@detalhe','as'=>'empresa.detalhe']);
Route::post('/empresa/salvar', ['uses'=>'EmpresaController@salvar','as'=>'empresa.salvar']);


Route::get('/entregador', ['uses'=>'EntregadorController@index','as'=>'entregador.index']);
Route::get('/entregador/adicionar/{id}', ['uses'=>'EntregadorController@adicionar','as'=>'entregador.adicionar']);
Route::get('/entregador/editar/{id}', ['uses'=>'EntregadorController@editar','as'=>'entregador.editar']);
Route::put('/entregador/atualizar/{id}', ['uses'=>'EntregadorController@atualizar','as'=>'entregador.atualizar']);
Route::get('/entregador/deletar/{id}', ['uses'=>'EntregadorController@deletar','as'=>'entregador.deletar']);
Route::get('/entregador/detalhe/{id}', ['uses'=>'EntregadorController@detalhe','as'=>'entregador.detalhe']);
Route::post('/entregador/salvar/{id}', ['uses'=>'EntregadorController@salvar','as'=>'entregador.salvar']);


Route::get('/pedido', ['uses'=>'PedidoController@index','as'=>'pedido.index']);
Route::get('/pedido/adicionar', ['uses'=>'PedidoController@adicionar','as'=>'pedido.adicionar']);
Route::get('/pedido/editar/{id}', ['uses'=>'PedidoController@editar','as'=>'pedido.editar']);
Route::get('/pedido/deletar/{id}', ['uses'=>'PedidoController@deletar','as'=>'pedido.deletar']);
Route::get('/pedido/detalhe/{id}', ['uses'=>'PedidoController@detalhe','as'=>'pedido.detalhe']);


Route::get('/produto', ['uses'=>'ProdutoController@index','as'=>'produto.index']);