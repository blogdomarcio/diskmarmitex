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

      <a class="btn btn-primary" href="{{ route('cliente.adicionar') }}">Adicionar Novo</a>  

      
    </div>

    <hr>


    <div class="panel-body">
      
      
      
      <p>
        
       <table class="table table-bordered">
        <thead>
          <tr>
            <th>#</th>
            <th>Nome</th>
            
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
          
          <td>{{ $cliente->telefone_cliente }} </td>
          <td>{{ $cliente->endereco_cliente }} </td>
          <td>{{ $cliente->ponto_ref }} </td>
          <td> <a class="btn btn-warning" href="{{ route('cliente.editar',$cliente->id) }}">Editar</a> 
            <a class="btn btn-danger" href="javascript:(confirm('Deletar esse cliente?') ? window.location.href='{{ route('cliente.deletar',$cliente->id)}}' : false)">Deletar</a> 
            <a class="btn btn-warning" href="{{ route('cliente.detalhe',$cliente->id) }}">Lista Pedidos</a> 
            <a class="btn btn-primary" href="{{ route('cliente.detalhe',$cliente->id) }}">Novo Pedido</a>
          </td>

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
