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
                   
                   <a class="btn btn-info" href="{{ route('cliente.adicionar') }}">Adicionar Novo</a>  
                   	
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
                    
                    <td>{{ $cliente->nome_cliente }}</td>
                    <td>{{ $cliente->data_nasc_cliente }}</td>
                    <td>{{ $cliente->telefone_cliente }} </td>
                    <td>{{ $cliente->endereco_cliente }} </td>
                    <td>{{ $cliente->ponto_ref }} </td>
                    <td> <a class="btn btn-default" href="#">Editar</a> 
                    <a class="btn btn-danger" href="#">Deletar</a> </td>
                    
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
