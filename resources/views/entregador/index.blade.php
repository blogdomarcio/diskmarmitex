@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <div class="panel panel-default">
                <ol class="breadcrumb panel-heading">                    
                    <li class="active">Entregadores</li>
                </ol>
                <div class="painel-heading">
                <div class="col-md-10">
		
			<form action="#" method="get" id="frmsearch"
				class="form-horizontal">
				<div class="input-group">
					<input type="text" name="search" class="form-control"
						placeholder="Pesquise por Nome ou Telefone" id="seach"> <span
						class="input-group-btn">
						<button type="submit" class="btn btn-default">
							<i class="glyphicon glyphicon-search" aria-hidden="true"></i>
						</button>
					</span>
				</div>
			</form>
			</div>
			
			
			<div class="col-md-2">
			
			 <a class="btn btn-primary" href="{{ route('empresa.index') }}">Empresas</a>  
			
			</div>
			 <hr>
		</div>
	 
	
	 <div class="painel-heading">

               <div class="panel-body">
                   
                  
                   	
                    <p>
                    
                    <table class="table table-bordered">
                    <thead>
                    <tr>
                    <th>#</th>
                    <th>Entregador</th>
                     <th>Telefone</th>
                     <th>Empresa</th>
                     
                  
                    <th>Ação</th>
                    
                    </tr>
                    
                    
                    </thead>
                    
                    <tbody>
                    
                    
 					@foreach($entregadors as $entregador)
                   
                   <tr>
                    <th scope="row"> {{ $entregador->id }} </th>
                    
                    
                    <td><a href="{{ route('entregador.editar',$entregador->id) }}">{{ $entregador->nome_entregador }}</a></td>
                     <td> {{ $entregador->rg_telefone}} </td>
                      <td> {{ $entregador->empresa->nome_empresa}} </td>
                   
                    <td> <a class="btn btn-warning" href="{{ route('entregador.editar',$entregador->id) }}">Editar</a> 
                    <a class="btn btn-danger" href="javascript:(confirm('Deletar esse Empresa?') ? window.location.href='{{ route('entregador.deletar',$entregador->id)}}' : false)">Deletar</a> 
                    <a class="btn btn-primary" href="{{ route('entregador.detalhe',$entregador->id) }}">Pedidos</a> </td>
                    </tr>
                    
                  
                    @endforeach
                    
                    </tbody>
                    
                    </table>
                    
                    <div align="center">
                    
                    {!! $entregadors->links() !!}
                   
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
