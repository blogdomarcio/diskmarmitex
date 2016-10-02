@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"> View de Clientes - DiskMarmitex</div>

                <div class="panel-body">
                   
                    
                    @foreach($clientes as $cliente)
                    
                    <li>{{ $cliente->nome_cliente }} </li>
                    
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
