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
                            <th>Data do Pedido</th>
                            <th>Status</th>
                            <th>Valor Total</th>
                            <th>Entregador</th>
                            <th>Ação</th>
                            
                        </tr>
                        
                        
                    </thead>
                    
                    <tbody>
                        
                        @foreach($pedidos as $pedido)
                        
                        <tr>
                            
                            <th scope="row"> {{ $pedido->id }} </th>
                            
                            <td>{{ $pedido->datapedido }}</td>
                            <td>{{ $pedido->status }} </td>
                            <td>R$ {{ $pedido->valortotal }} </td>
                            <td>{{ $pedido->entregador_id }} </td>
                            <td> <a class="btn btn-default" href="{{ route('cliente.editar',$cliente->id) }}">Editar</a> 
                                <a class="btn btn-danger" href="javascript:(confirm('Deletar esse cliente?') ? window.location.href='{{ route('cliente.deletar',$cliente->id)}}' : false)">Deletar</a> </td>
                                
                            </tr>
                            

                            @endforeach
                            
                        </tbody>
                        
                    </table>
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
