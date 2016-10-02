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

    	$clientes = \App\Cliente::all();
        

    	return view('cliente.index', compact('clientes'));
    }
}
