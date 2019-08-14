<?php

namespace App\Domains;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $table = 'evento';

    public function casa()
    {
        return $this->hasOne('App\Domains\Casa');
    }

    public function listas()
    {
        return $this->hasMany('App\Domains\ListaBonus', 'id_evento');
    }
}
