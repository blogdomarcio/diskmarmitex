@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">                
                <ol class="breadcrumb panel-heading">
                    <li><a href="{{ route('empresa.index') }}">Empresa</a></li>
                    <li class="active">Editar</li>
                </ol>

                <div class="panel-body">                                    
                    <form action="{{ route('empresa.atualizar',$empresa->id) }}" method="post">
                        {{ csrf_field() }}
                        
                        <input type="hidden" name="_method" value="put">

                        <div class="form-group">
                        <div class="controls form-inline">
                            <label for="nome_empresa">Nome Fantasia .:</label>
                            <input type="text" size="135" name="nome_empresa" class="form-control" placeholder="Nome do empresa" value="{{ $empresa->nome_empresa }}">
                        </div>
                        
                        <br>
                        
                         <div class="row">
                         <div class="form-group">
                          <div class="controls form-inline">
                          <div class="col-sm-6">
                         
                            <label for="email_empresa">Email .:</label>
                            <input type="email" size="50" name="email_empresa" class="form-control" placeholder="Email" value="{{ $empresa->email_empresa }}">
                                                 
                        </div>
                        
                       <div class="col-sm-3">
                           <label for="nome_empresa">CNPJ .:</label>
                            <input type="text" name="cnpj_empresa" class="form-control" placeholder="CNPJ" value="{{ $empresa->cnpj_empresa }}">
                        </div>
                       <div class="col-sm-3">
                            <label for="telefone_empresa">Telefone .:</label> 
                            <input type="text" name="telefone_empresa" class="form-control" placeholder="Telefone do empresa" value="{{ $empresa->telefone_empresa }}">
                        </div>
                        </div>
                        </div>
                        </div>
                        
                        <br>
                        
                        <div class="form-group">
                         <div class="controls form-inline">
                            <label for="endereco_empresa">Endereço .:</label>
                            <input type="text" size="97" name="endereco_empresa" class="form-control" placeholder="Endereço do empresa" value="{{ $empresa->endereco_empresa }}">
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