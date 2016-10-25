<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

use App\Pedido;


class Cliente extends Model
{
    
	protected $table ='clientes';
	protected $fillable =['nome_cliente','data_nasc_cliente','telefone_cliente','endereco_cliente','ponto_ref'];

	public $timestamps = false;



	public function pedido(): HasOne
    {
        return $this->hasOne(Pedido::class);
    }

    
}

