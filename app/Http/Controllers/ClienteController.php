<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ClienteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {

    	$clientes = \App\Cliente::paginate(5);
        

    	return view('cliente.index', compact('clientes'));
    }
    
    public function adicionar()
    {
    	return view('cliente.adicionar');
    	
    }
    
    public function salvar(Request $request) {
    	\App\Cliente::create($request->all());
    	
    	\Session::flash('flash_message',[
    			'msg'=>"Cliente adicionado com Sucesso!",
    			'class'=>"alert-success"
    	]);
    	
    	return redirect()->route('cliente.adicionar');
    }
}
    
