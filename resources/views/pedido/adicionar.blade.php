@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">                
                <ol class="breadcrumb panel-heading">
                    <li><a href="{{ route('cliente.index') }}">Pedido</a></li>
                    <li class="active">Novo Pedido</li>
                </ol>

                <div class="panel-body">                                    
                    <form action="{{ route('cliente.salvar') }}" method="post">
                        {{ csrf_field() }}


                         <div class="row">
                          <div class="col-md-10">
                        <div class="form-group">
                         <div class="controls form-inline">
                       
  							

                 
                        


                <div class="col-sm-6">
                  <label for="sel1">Selecione o Cliente</label>
                    <select class="form-control input-xxlarge">
                    <option></option>
                    @foreach($clientes as $cliente)
                      <option>{{ $cliente->nome_cliente }}</option>
                     @endforeach
     
                    </select>
            </div>

             
                       <div class="col-sm-6">
                            <label for="data_nasc_cliente">Data do Pedido</label>
                            <input type="datetime-local" name="data_nasc_cliente" class="form-control" placeholder="Data de Nascimento">
                        </div>

                  </div>
  				
           </div>
  				</div>

          
          </div>
                 <hr>


                     <h4>Dados do Pedido</h4>


                    


        <div class="form-group">
                 <div class="controls form-inline">
                        
              <div class="col-sm-6">
                  <label for="sel1">Selecione o Produto</label>
                    <select class="form-control input-xxlarge controls form-inline">
                    <option></option>
                    @foreach($produtos as $produto)
                      <option>{{ $produto->nome_produto }} - {{ $produto->descricao }} - {{ $produto->valor }} </option>
                     @endforeach
     
                    </select>
            </div>


            <div class="col-sm-2">
                     <label for="quantidade">Quantidade.:</label>
                            <input type="number"  name="quantidade" class="form-control" placeholder="Quantidade" required="required" value="1">
            </div>


            <div class="col-sm-2">
                     <label for="quantidade">SubTotal.:</label>
                            <input type="number"  name="quantidade" class="form-control" placeholder="SubTotal" required="required">
            </div>
                       
            </div>

            </div>

             

</form>

            
           


                 <div class="form-group">
                 <div class="row">
                          <div class="col-md-10">
                  


                  <h4>Dados da Entrega</h4>

                   
              <div class="col-sm-8">
                  <label for="sel1">Selecione o Entregador disponível</label>
                    <select class="form-control input-xxlarge controls form-inline">
                    <option></option>
                    @foreach($entregadores as $entregador)
                      <option>{{ $entregador->nome_entregador }} - Fone: {{ $entregador->rg_telefone }} </option>
                     @endforeach
     
                    </select>
            </div>

             <div class="col-sm-2">
                     <label for="quantidade">Taxa de Entrega.:</label>
                            <input type="number"  name="quantidade" class="form-control" placeholder="Quantidade" required="required" value="4.50">
            </div>

            <div class="col-sm-2">
                     <label for="quantidade">Total.:</label>
                            <input type="number"  name="quantidade" class="form-control" placeholder="Total" required="required">
            </div>
                    
</div>
</div>
<hr>
                      
                       <div class="col-sm-12">
                        <button class="btn btn-info">Adicionar</button>
                        
                        </div>
                    </form>
                    

                </div>
            </div>
        </div>
    </div>
</div>
@endsection