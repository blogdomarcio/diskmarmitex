@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">                
                <ol class="breadcrumb panel-heading">
                    <li><a href="{{ route('cliente.index') }}">Clientes</a></li>
                    <li class="active">Editar</li>
                </ol>

                <div class="panel-body">                                    
                    <form action="{{ route('cliente.atualizar',$cliente->id) }}" method="post">
                        {{ csrf_field() }}
                        
                        <input type="hidden" name="_method" value="put">

                        <div class="form-group">
                            <label for="nome_cliente">Nome</label>
                            <input type="text" name="nome_cliente" class="form-control" placeholder="Nome do cliente" value="{{ $cliente->nome_cliente }}">
                        </div>
                        <div class="form-group">
                            <label for="data_nasc_cliente">DT.Nasc</label>
                            <input type="date" name="data_nasc_cliente" class="form-control" placeholder="Data de Nascimento" value="{{ $cliente->data_nasc_cliente }}">
                        </div>
                        <div class="form-group">
                            <label for="telefone_cliente">Telefone</label> 
                            <input type="text" name="telefone_cliente" class="form-control" placeholder="Telefone do cliente" value="{{ $cliente->telefone_cliente }}">
                        </div>
                        <div class="form-group">
                            <label for="endereco_cliente">Endereço</label>
                            <input type="text" name="endereco_cliente" class="form-control" placeholder="Endereço do cliente" value="{{ $cliente->endereco_cliente }}">
                        </div>
                        <div class="form-group">
                            <label for="ponto_ref">Ponto de Referência</label>
                            <input type="text" name="ponto_ref" class="form-control" placeholder="Ponto de Referencia" value="{{ $cliente->ponto_ref }}">
                        </div>
                        <button class="btn btn-info">Salvar</button>
                        
                    </form>
                    

                </div>
            </div>
        </div>
    </div>
</div>
@endsection