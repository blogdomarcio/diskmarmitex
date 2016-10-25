@extends('layouts.app')


@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-12">
        <div class="panel panel-default">
                <ol class="breadcrumb panel-heading">                    
                    <li class="active">Clientes</li>
                </ol>
               

                <div class="col-md-10">
               <div class="painel-heading">
               <form action="#" method="get" id="frmsearch" class="form-horizontal">
                    <div class="input-group">
                        <input type="text" name="search" class="form-control" placeholder="Pesquise por Nome ou Telefone" id="seach">
                        <span class="input-group-btn">
                           <button type="submit" class="btn btn-default"> <i class="glyphicon glyphicon-search" aria-hidden="true"></i></button>
                        </span>

                    </div>
               </form>

               </div>

               </div>

                <div class="col-md-2">

<a class="btn btn-primary" href="{{ route('pedido.adicionar') }}">Adicionar Novo</a>  

<p>
<p>

</div>

                <div class="panel-body">
                   <div class="col-md-12">                  
                   	
                    <p>
                    
                  	<table class="table table-bordered">
                    <thead>
                    <tr>
                    <th>#</th>
                     <th>Cliente</th>
                    
                    <th>Data do Pedido</th>
                    
                    <th>Status</th>
                    <th>Entregador</th>
                    <th>Valor Total</th>
                    <th>Ação</th>
                    
                    </tr>
                    
                    
                    </thead>
                    
                    <tbody>
                    
                     @foreach($pedidos as $pedido)
                     
                  	<tr>
                    
                    <th scope="row"> {{ $pedido->id }} </th>

                    <td>{{ $pedido->cliente->nome_cliente }} </td>
                    
                    
                    <td><a href="{{ route('pedido.editar',$pedido->id) }}">{{ $pedido->datapedido }}</a></td>
                   
                    <td>{{ $pedido->status }} </td>
                    <td>{{ $pedido->entregador->nome_entregador }} </td>
                    <td> R$ {{ $pedido->valortotal }} </td>
                    <td> <a class="btn btn-warning" href="{{ route('pedido.editar',$pedido->id) }}">Editar</a> 
                    <a class="btn btn-danger" href="javascript:(confirm('Deletar esse pedido?') ? window.location.href='{{ route('pedido.deletar',$pedido->id)}}' : false)">Deletar</a> 
                    <a class="btn btn-warning" href="{{ route('pedido.detalhe',$pedido->id) }}">Lista Pedidos</a> 
         <a class="btn btn-primary" href="{{ route('pedido.detalhe',$pedido->id) }}">Novo Pedido</a>
                    </td>

                    </tr>
             
                  
                    @endforeach
                                 
                    
                    </tbody>
                    
                    </table>
                    
                    <div align="center">
                    
                    {!! $pedidos->links() !!}
                   
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


