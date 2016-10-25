@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">                
                <ol class="breadcrumb panel-heading">
                    <li><a href="{{ route('cliente.index') }}">Clientes</a></li>
                    <li class="active">Adicionar</li>
                </ol>

                <div class="panel-body">                                    
                    <form action="{{ route('cliente.salvar') }}" method="post">
                        {{ csrf_field() }}

                         <div class="row">
                        <div class="form-group">
                         <div class="controls form-inline">
                       
  							<div class="col-sm-9">
  							
                            <label for="nome_cliente">Nome .:</label>
                            <input type="text" size="100" name="nome_cliente" class="form-control" placeholder="Nome do cliente" required="required">
                        </div>
                        <div class="col-sm-3">
                       
                            <label for="data_nasc_cliente">DT.Nasc .:</label>
                            <input type="date" name="data_nasc_cliente" class="form-control" placeholder="Data de Nascimento">
                        </div>
                        </div>
                        </div>
                        </div>
                       <br>
                        <div class="row">
                        <div class="form-group">
                        <div class="controls form-inline">
                        
                         <div class="col-sm-7">
                            <label for="endereco_cliente">Endereço .:</label>
                            <input type="text" size="60" name="endereco_cliente" class="form-control" placeholder="Endereço do cliente" required="required">
                        </div>
                        
                         <div class="col-sm-5">
                            <label for="ponto_ref">Ponto de Referência .:</label>
                            <input type="text" size="35" name="ponto_ref" class="form-control" placeholder="Ponto de Referencia">
                        </div>
                        
                        </div>
                        </div>
                         </div>
                         <br>
                         
                          <div class="form-group">
                        <div class="controls form-inline">
                            <label for="telefone_cliente">Telefone .:</label>
                            <input type="text" size="20" name="telefone_cliente" class="form-control" placeholder="Telefone do cliente" required="required">
                        </div>
                         <hr>
                          <div class="form-group">
                        <div class="col-sm-4">
                        
                        <button class="btn btn-info">Adicionar</button>
                        
                        </div>
                    </form>
                    

                </div>
            </div>
        </div>
    </div>
</div>
@endsection