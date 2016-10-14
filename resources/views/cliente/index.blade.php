@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
           
       <div class="panel panel-default">
                <ol class="breadcrumb panel-heading">                    
                    <li class="active">Clientes</li>
                </ol>
               

                <div class="panel-body">
                   
                   <a class="btn btn-primary" href="{{ route('cliente.adicionar') }}">Adicionar Novo</a>  
                   	
                    <p>
                    
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
                    
                     @foreach($clientes as $cliente)
                     
                      <tr>
                    
                    <th scope="row"> {{ $cliente->id }} </th>
                    
                    <td><a href="{{ route('cliente.editar',$cliente->id) }}">{{ $cliente->nome_cliente }}</a></td>
                    <td>{{ $cliente->data_nasc_cliente }}</td>
                    <td>{{ $cliente->telefone_cliente }} </td>
                    <td>{{ $cliente->endereco_cliente }} </td>
                    <td>{{ $cliente->ponto_ref }} </td>
                    <td> <a class="btn btn-warning" href="{{ route('cliente.editar',$cliente->id) }}">Editar</a> 
                    <a class="btn btn-danger" href="javascript:(confirm('Deletar esse cliente?') ? window.location.href='{{ route('cliente.deletar',$cliente->id)}}' : false)">Deletar</a> 
                    <a class="btn btn-primary" href="{{ route('cliente.detalhe',$cliente->id) }}">Pedidos</a> </td>
                    </tr>
             
                    
            
                    
                    @endforeach
                    
                   
                    
                    </tbody>
                    
                    </table>
                    
                    <div align="center">
                    
                    {!! $clientes->links() !!}
                   
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
