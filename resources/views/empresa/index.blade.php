@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">View Empresa - DiskMarmitex</div>

                <div class="panel-body">
                    
 					@foreach($empresas as $empresa)
                    
                    <li>{{ $empresa->nome_empresa }} </li>
                    
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
