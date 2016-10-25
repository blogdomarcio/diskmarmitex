<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Cliente;

class PedidoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {      

   	$pedidos = \App\Pedido::paginate(5);
   	 
    
    	return view('pedido.index', compact('pedidos'));
    }

    public function adicionar()
    {
   		$clientes = \App\Cliente::all();
   		$produtos = \App\Produto::all();
   		$entregadores = \App\Entregador::all();
   		
    	return view('pedido.adicionar',compact('clientes','produtos','entregadores'));
    	 
    }
    
    public function consulta() {

      
    }
}