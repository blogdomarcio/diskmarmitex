@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
           
       <div class="panel panel-default">
                <ol class="breadcrumb panel-heading">
                    <li><a href="{{ route('cliente.index') }}">Clientes</a></li>
                    <li class="active">Pedidos por Cliente</li>
                </ol>
               

                <div class="panel-body">
                   
                    <p><b>Cliente: </b> {{ $cliente->nome_cliente }}</p>
                   	
                    
                    
                    <table class="table table-bordered">
                    <thead>
                    <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>DT.Nasc</th>
                    <th>Telefone</th>
                    <th>Endereço</th>
                    <th>Ponto REF.</th>
                    <th>Ação</th>
                    
                    </tr>
                    
                    
                    </thead>
                    
                    <tbody>
                    
                       
                      <tr>
                    
                    <th scope="row"> {{ $cliente->id }} </th>
                    
                    <td>{{ $cliente->nome_cliente }}</td>
                    <td>{{ $cliente->data_nasc_cliente }}</td>
                    <td>{{ $cliente->telefone_cliente }} </td>
                    <td>{{ $cliente->endereco_cliente }} </td>
                    <td>{{ $cliente->ponto_ref }} </td>
                    <td> <a class="btn btn-default" href="{{ route('cliente.editar',$cliente->id) }}">Editar</a> 
                    <a class="btn btn-danger" href="javascript:(confirm('Deletar esse cliente?') ? window.location.href='{{ route('cliente.deletar',$cliente->id)}}' : false)">Deletar</a> </td>
                    
                    </tr>
                             
                   
                    </tbody>
                    
                    </table>
                    
                     
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
