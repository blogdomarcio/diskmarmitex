@extends('layouts.app')



@section('content')




<div class="container">
    <div class="row">
        <div class="col-md-12">
        <div class="panel panel-default">
                <ol class="breadcrumb panel-heading">                    
                    <li class="active">Produtos</li>
                </ol>
               
 

                <div class="col-md-10">
               <div class="painel-heading">
               <form action="#" method="get" id="frmsearch" class="form-horizontal">
                    <div class="input-group">
                        <input type="text" name="search" class="form-control" placeholder="Pesquise por Código ou Produto" id="seach">
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
                     <th>Produto</th>
                    
                    <th>Descrição</th>
                    
                    <th>Valor</th>
                     
                    <th>Ação</th>
                    
                    </tr>
                    
                    
                    </thead>
                    
                    <tbody>
                    
                     @foreach($produtos as $produto)
                     
                  	<tr>
                    
                    <th scope="row"> {{ $produto->id }} </th>

                    <td>{{ $produto->nome_produto }} </td>
                    <td>{{ $produto->descricao }} </td>
                    <td>{{ $produto->valor }} </td>
                    
                    <td> <a class="btn btn-warning" href="{{ route('pedido.editar',$produto->id) }}">Editar</a> 
                    <a class="btn btn-danger" href="javascript:(confirm('Deletar esse pedido?') ? window.location.href='{{ route('pedido.deletar',$produto->id)}}' : false)">Deletar</a> 
                   
                    </td>
                    
                    
                  	
             
                    
            
                    
                    @endforeach
                    
                   
                    
                    </tbody>
                    
                    </table>
                    
                    <div align="center">
                    
                    
                   
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


