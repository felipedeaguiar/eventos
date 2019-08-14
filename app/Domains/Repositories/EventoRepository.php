<?php

namespace App\Domains\Repositories;

class EventoRepository{


    public function add(array $data)
    {
        return Evento::create($data);
    }


}
