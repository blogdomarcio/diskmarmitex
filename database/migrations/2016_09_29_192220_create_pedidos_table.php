<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cliente_id')->unsigned();
            $table->datetime('datapedido');   
            $table->integer('entregador_id')->unsigned();
            $table->double('taxaentrega');
            $table->double('valortotal');
            $table->string('status');

            
        });

        Schema::table('pedidos', function (Blueprint $table)
        {
            $table->foreign('cliente_id')->references('id')->on('clientes');

            $table->foreign('entregador_id')->references('id')->on('entregadores');
        });

        


    
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidos');
    }
}
