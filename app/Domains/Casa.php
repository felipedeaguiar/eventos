<?php

namespace App\Domains;

use Illuminate\Database\Eloquent\Model;

class Casa extends Model
{
    protected $table = 'casa';

    public function eventos()
    {
        return $this->hasMany('App\Domains\Evento', 'id_casa', 'id');
    }
}
