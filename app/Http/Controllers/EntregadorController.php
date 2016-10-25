<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class EntregadorController extends Controller
{
public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {      

    	$entregadors = \App\Entregador::paginate(5);
       // dd($entregadors);

    	return view('entregador.index', compact('entregadors'));
    }
    
    public function adicionar($id)
    {
    	$empresa = \App\Empresa::find($id);
    	
    	return view('entregador.adicionar',compact('empresa'));
    	
    }
    
    public function detalhe($id)
    {
    	$entregador = \App\Entregador::find($id);
    	return view('entregador.detalhe',compact('entregador'));
    }
    
    public function salvar(Request $request, $id) {
    	
    	$entregador = new \App\Entregador;
    	$entregador->nome_entregador = $request->input('nome_entregador');
    	$entregador->cpf_entregador = $request->input('cpf_entregador');
    	$entregador->rg_entregador = $request->input('rg_entregador');
    	$entregador->rg_telefone = $request->input('rg_telefone');
    	
    	\App\Empresa::find($id)->add_entregador($entregador);
    	
    	\Session::flash('flash_message',[
    			'msg'=>"Entregador cadastrado com sucesso?",
    			'class'=>"alert-success"
    	]);
    	return redirect()->route('empresa.detalhe',$id);
    	
    	
    	
    	
    	\App\Entregador::create($request->all());
    	
    	\Session::flash('flash_message',[
    			'msg'=>"Entregador adicionado com Sucesso!",
    			'class'=>"alert-success"
    	]);
    	
    	return redirect()->route('entregador.adicionar');
    }
    
    public function editar($id){
    	
    	$entregador = \App\Entregador::find($id);
    	if(!$entregador){
    		\Session::flash('flash_message',[
    				'msg'=>"Entregador não Cadastrado! Deseja Cadastrar?",
    				'class'=>"alert-success"
    		]);
    		return redirect()->route('entregador.adicionar');
    		
    	}
    	return view('entregador.editar',compact('entregador'));
    }
    
    public function atualizar(Request $request,$id){
    	 
    	\App\Entregador::find($id)->update($request->all());
    	 
    		\Session::flash('flash_message',[
    				'msg'=>"Entregador atualizado com sucesso?",
    				'class'=>"alert-success"
    		]);
    		return redirect()->route('entregador.index');
    
    	}
    	
   
    public function deletar($id)
    
    {
    	$entregador = \App\Entregador::find($id);
    	$entregador->delete();
    	\Session::flash('flash_message',[
    			'msg'=>"Entregador excluído com sucesso?",
    			'class'=>"alert-success"
    	]);
    	return redirect()->route('entregador.index');
    }
    
    	
    
    
}
