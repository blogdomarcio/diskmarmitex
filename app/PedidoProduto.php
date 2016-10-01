<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PedidoProduto extends Model

{
	public $timestamps = false;
	
	public function pedido()
    {
    	return $this->hasMany('App\Pedido');
    }

     public function produto()
    {
    	return $this->hasMany('App\Produto');
    }
}
