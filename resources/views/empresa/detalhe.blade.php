@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
           
       <div class="panel panel-default">
                <ol class="breadcrumb panel-heading">
                    <li><a href="{{ route('empresa.index') }}">Empresa</a></li>
                    <li class="active">Lista de Entregadores</li>
                </ol>
               

                <div class="panel-body">
                   
                    <p><b>Empresa: </b> {{ $empresa->nome_empresa }}</p>
                   	
                    
                    
                    <table class="table table-bordered">
                    <thead>
                    <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>RG</th>
                    <th>Telefone</th>
                    
                    <th>Ação</th>
                    
                    </tr>
                    
                    
                    </thead>
                    
                    <tbody>
                    
                    @foreach($empresa->entregadores as $entregador)
                     
                      <tr>
                    
                    <th scope="row"> {{ $entregador->id }} </th>
                    
                    <td>{{ $entregador->nome_entregador }}</td>
                    <td>{{ $entregador->cpf_entregador }}</td>
                    <td>{{ $entregador->rg_entregador }} </td>
                    <td>{{ $entregador->rg_telefone }} </td>
                     
                    <td> <a class="btn btn-default" href="{{ route('entregador.editar',$entregador->id) }}">Editar</a> 
                    <a class="btn btn-danger" href="javascript:(confirm('Deletar essa empresa?') ? window.location.href='{{ route('empresa.deletar',$empresa->id)}}' : false)">Deletar</a> </td>
                    
                    </tr>
                    @endforeach
                             
                   
                    </tbody>
                    
                    </table>
                    
                    <td> <a class="btn btn-default" href="{{ route('entregador.adicionar',$empresa->id) }}">Adicionar Entregador</a> 
                     
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
