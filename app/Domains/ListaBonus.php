<?php

namespace App\Domains;

use Illuminate\Database\Eloquent\Model;

class ListaBonus extends Model
{
    protected $table = 'lista_bonus';

    public function clientes()
    {
        return $this->belongsToMany('App\Domains\Cliente', 'lista_cliente', 'lista_id', 'cliente_id');
    }
}
