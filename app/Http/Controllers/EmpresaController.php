<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class EmpresaController extends Controller
{
 public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {

    	$empresas = \App\Empresa::all();
        dd($empresas);

    	return view('empresa.index');
    }
}
