<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ProdutoController extends Controller
{
 public function index()
    {      

   	$produtos = \App\Produto::all();
   	
   	return view('produto.index', compact('produtos'));
    
 }
	
}
