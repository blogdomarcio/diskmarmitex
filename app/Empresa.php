<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
	
	public $timestamps = false;
	
     public function entregadores()
    {
    	return $this->hasMany('App\Entregador');
    	
    	
    }
}
