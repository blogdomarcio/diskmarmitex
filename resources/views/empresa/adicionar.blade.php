@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">                
                <ol class="breadcrumb panel-heading">
                    <li><a href="{{ route('empresa.index') }}">Empresas</a></li>
                    <li class="active">Adicionar</li>
                </ol>

                <div class="panel-body">                                    
                    <form action="{{ route('empresa.salvar') }}" method="post">
                        {{ csrf_field() }}

                                 <div class="form-group">
                        <div class="controls form-inline">
                            <label for="nome_empresa">Empresa .:</label>
                            <input type="text" size="142" name="nome_empresa" class="form-control" placeholder="Nome do empresa" required="required">
                        </div>
                        
                        <br>
                        
                         <div class="row">
                         <div class="form-group">
                          <div class="controls form-inline">
                          <div class="col-sm-6">
                         
                            <label for="email_empresa">Email .:</label>
                            <input type="email" size="50" name="email_empresa" class="form-control" placeholder="Email" required="required">
                                                 
                        </div>
                        
                       <div class="col-sm-3">
                           <label for="nome_empresa">CNPJ .:</label>
                            <input type="text" name="cnpj_empresa" class="form-control" placeholder="CNPJ">
                        </div>
                       <div class="col-sm-3">
                            <label for="telefone_empresa">Telefone .:</label> 
                            <input type="text" name="telefone_empresa" class="form-control" placeholder="Telefone do empresa" required="required">
                        </div>
                        </div>
                        </div>
                        </div>
                        
                        <br>
                        
                        <div class="form-group">
                         <div class="controls form-inline">
                            <label for="endereco_empresa">Endereço .:</label>
                            <input type="text" size="97" name="endereco_empresa" class="form-control" placeholder="Endereço do empresa">
                        </div>
                        
                        <hr>
                         
                        <button class="btn btn-info">Adicionar</button>
                        
                    </form>
                    

                </div>
            </div>
        </div>
    </div>
</div>
@endsection