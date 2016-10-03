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

                        <div class="form-group">
                            <label for="nome_cliente">Nome</label>
                            <input type="text" name="nome_cliente" class="form-control" placeholder="Nome do cliente">
                        </div>
                        <div class="form-group">
                            <label for="data_nasc_cliente">DT.Nasc</label>
                            <input type="date" name="data_nasc_cliente" class="form-control" placeholder="Data de Nascimento">
                        </div>
                        <div class="form-group">
                            <label for="telefone_cliente">Telefone</label>
                            <input type="text" name="telefone_cliente" class="form-control" placeholder="Telefone do cliente">
                        </div>
                        <div class="form-group">
                            <label for="endereco_cliente">Endereço</label>
                            <input type="text" name="endereco_cliente" class="form-control" placeholder="Endereço do cliente">
                        </div>
                        <div class="form-group">
                            <label for="ponto_ref">Ponto de Referência</label>
                            <input type="text" name="ponto_ref" class="form-control" placeholder="Ponto de Referencia">
                        </div>
                        <button class="btn btn-info">Adicionar</button>
                        
                    </form>
                    

                </div>
            </div>
        </div>
    </div>
</div>
@endsection