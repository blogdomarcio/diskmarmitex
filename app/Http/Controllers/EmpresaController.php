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

    	$empresas = \App\Empresa::paginate(5);
    	 
    	
       // dd($empresas);

    	return view('empresa.index', compact('empresas', 'entregador'));
    }
    
    public function adicionar()
    {
    	return view('empresa.adicionar');
    	
    }
    
    public function detalhe($id)
    {
    	$empresa = \App\Empresa::find($id);
       	return view('empresa.detalhe',compact('empresa','entregador'));
    }
    
    public function salvar(Request $request) {
    	\App\Empresa::create($request->all());
    	
    	\Session::flash('flash_message',[
    			'msg'=>"Empresa adicionada com Sucesso!",
    			'class'=>"alert-success"
    	]);
    	
    	return redirect()->route('empresa.adicionar');
    }
    
    public function editar($id){
    	
    	$empresa = \App\Empresa::find($id);
    	if(!$empresa){
    		\Session::flash('flash_message',[
    				'msg'=>"Empresa não Cadastrado! Deseja Cadastrar?",
    				'class'=>"alert-success"
    		]);
    		return redirect()->route('empresa.adicionar');
    		
    	}
    	return view('empresa.editar',compact('empresa'));
    }
    
    public function atualizar(Request $request,$id){
    	 
    	\App\Empresa::find($id)->update($request->all());
    	 
    		\Session::flash('flash_message',[
    				'msg'=>"Empresa atualizada com sucesso?",
    				'class'=>"alert-success"
    		]);
    		return redirect()->route('empresa.index');
    
    	}
    	
   
    public function deletar($id)
    
    {
    	$empresa = \App\Empresa::find($id);
    	$empresa->delete();
    	\Session::flash('flash_message',[
    			'msg'=>"Empresa excluída com sucesso?",
    			'class'=>"alert-success"
    	]);
    	return redirect()->route('empresa.index');
    }
    
    	
    
    
 }
    
