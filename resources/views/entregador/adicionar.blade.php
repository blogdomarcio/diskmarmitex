@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">                
                <ol class="breadcrumb panel-heading">
                    <li><a href="{{ route('empresa.index') }}">Empresa</a></li>
                     <li><a href="{{ route('empresa.detalhe', $empresa->id) }}">Empresa - Detalhe</a></li>
                    <li class="active">Adicionar Entregador</li>
                </ol>

                <div class="panel-body">                                    
                    <form action="{{ route('entregador.salvar', $empresa->id) }}" method="post">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="nome_entregador">Entregador </label>
                            <input type="text" name="nome_entregador" class="form-control" placeholder="Nome da entregador">
                            
                        </div>
                        
                         <div class="form-group">
                            <label for="email_entregador">CPF</label>
                            <input type="text" name="cpf_entregador" class="form-control" placeholder="CPF">
                            
                            
                        </div>
                        
                         <div class="form-group">
                           <label for="nome_entregador">RG</label>
                            <input type="text" name="rg_entregador" class="form-control" placeholder="RG">
                        </div>
                        
                        
                            <div class="form-group">
                            <label for="rg_telefone">Telefone</label>
                            <input type="text" name="rg_telefone" class="form-control" placeholder="Telefone">
                        </div>
                        
                         
                        <button class="btn btn-info">Adicionar</button>
                        
                    </form>
                    

                </div>
            </div>
        </div>
    </div>
</div>
@endsection