<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entregador extends Model
{
	
	public $timestamps = false;
	
	
    public function empresa()
    {
    	return $this->belongsTo('App\Empresa');
    }

     public function pedidos()
    {
    	return $this->hasMany('App\Pedido');
    }
}