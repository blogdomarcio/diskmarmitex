<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
	
	public $timestamps = false;
	
	protected $table ='empresas';
	protected $fillable =['nome_empresa','cnpj_empresa','endereco_empresa','telefone_empresa','email_empresa'];
	
     public function entregadores()
    {
    	return $this->hasMany('App\Entregador');
    	
    }
    
    public function add_entregador(Entregador $ent)
    {
    	return $this->entregadores()->save($ent);
    }
}
