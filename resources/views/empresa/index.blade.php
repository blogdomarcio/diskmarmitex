@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <div class="panel panel-default">
                <ol class="breadcrumb panel-heading">                    
                    <li class="active">Empresas</li>
                </ol>

 <div class="col-md-10">
               <div class="painel-heading">
               <form action="#" method="get" id="frmsearch" class="form-horizontal">
                    <div class="input-group">
                        <input type="text" name="search" class="form-control" placeholder="Pesquise por CPNJ ou Nome Fantasia" id="seach">
                        <span class="input-group-btn">
                           <button type="submit" class="btn btn-default"> <i class="glyphicon glyphicon-search" aria-hidden="true"></i></button>
                        </span>

                    </div>
               </form>

               </div>

               </div>
               
                <div class="col-md-2">
                
                 <a class="btn btn-primary" href="{{ route('empresa.adicionar') }}">Adicionar Nova</a>  
                 </div>
                 <hr>
               
               <div class="panel-body">
                   
                  
                    <p>
                    
                    <table class="table table-bordered">
                    <thead>
                    <tr>
                    <th>#</th>
                    <th>Nome Fantasia</th>
                     <th>Telefone</th>
                     
                  
                    <th>Ação</th>
                    
                    </tr>
                    
                    
                    </thead>
                    
                    <tbody>
                    
                    
 					@foreach($empresas as $empresa)
                   
                   <tr>
                    <th scope="row"> {{ $empresa->id }} </th>
                    
                    
                    <td><a href="{{ route('empresa.editar',$empresa->id) }}">{{ $empresa->nome_empresa }}</a></td>
                     <td><a href="{{ route('empresa.editar',$empresa->id) }}">{{ $empresa->telefone_empresa }}</a></td>
                   
                    <td> <a class="btn btn-warning" href="{{ route('empresa.editar',$empresa->id) }}">Editar</a> 
                    <a class="btn btn-danger" href="javascript:(confirm('Deletar esse Empresa?') ? window.location.href='{{ route('empresa.deletar',$empresa->id)}}' : false)">Deletar</a> 
                    <a class="btn btn-primary" href="{{ route('empresa.detalhe',$empresa->id) }}">Gerenciar Entregadores</a> </td>
                    </tr>
                    
                  
                    @endforeach
                    
                    </tbody>
                    
                    </table>
                    
                    <div align="center">
                    
                    {!! $empresas->links() !!}
                   
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
