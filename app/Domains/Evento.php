<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    public function casa()
    {
        return $this->hasOne('App\Domains\Casa');
    }
}
