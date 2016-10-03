<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entregador extends Model
{
	
	public $timestamps = false;
	
	protected $table ='entregadores';
	protected $fillable =['empresa_id','nome_entregador','cpf_entregador','rg_entregador','rg_telefone'];
	
    public function empresa()
    {
    	return $this->belongsTo('App\Empresa');
    }

     public function pedidos()
    {
    	return $this->hasMany('App\Pedido');
    }
}