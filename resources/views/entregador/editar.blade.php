@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">                
                <ol class="breadcrumb panel-heading">
                    <li><a href="{{ route('entregador.index') }}">Entregador</a></li>
                    <li class="active">Editar</li>
                </ol>

                <div class="panel-body">                                    
                    <form action="{{ route('entregador.atualizar',$entregador->id) }}" method="post">
                        {{ csrf_field() }}
                        
                        <input type="hidden" name="_method" value="put">

                        <div class="form-group">
                       
                            <label for="nome_entregador">Entregador</label>
                            <input type="text" name="nome_entregador" class="form-control" placeholder="Nome do entregador" value="{{ $entregador->nome_entregador }}">
                        </div>
                         
                        
                         <div class="form-group">
                         <div class="controls form-inline">
                         <div class="row">
  							<div class="col-sm-4">
                            <label for="cpf_entregador" >CPF .:</label>
                            
                            <input type="text" name="cpf_entregador" class="form-control" placeholder="Email" value="{{ $entregador->cpf_entregador }}">              
                         
                         	</div>
                         	<div class="col-sm-4">
                            <label for="rg_entregador">RG .:</label>
                             
                            <input type="text" name="rg_entregador" class="form-control" placeholder="RG" value="{{ $entregador->rg_entregador }}">
                            </div>                
                         
                        	<div class="col-sm-4">
                       
                        
                            <label for="telefone_entregador">Telefone .:</label> 
                            <input type="text" name="rg_telefone" class="form-control" placeholder="Telefone do entregador" value="{{ $entregador->rg_telefone }}">
                        </div>
                        </div>
                        </div>
                        </div>
                        
                        <hr>
                        
                         
                        <button class="btn btn-info">Salvar</button>
                        
                    </form>
                    

                </div>
            </div>
        </div>
    </div>
</div>
@endsection