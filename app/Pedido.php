<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
	
	public $timestamps = false;
	
    public function cliente()
    {
    	return $this->belongsTo('App\Cliente');
    }

    public function entregador()
    {
    	return $this->belongsTo('App\Entregador');
    }
}
