<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\belongsTo;

use App\Cliente;
use App\Entregador;

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
