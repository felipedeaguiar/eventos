<?php

namespace App\Domains\Repositories;

use App\Domains\Evento;

class EventoRepository{


    public function add(array $data)
    {
        $e = new Evento();
        $e->nome = $data['nome'];
        $e->data_evento = $data['data'];
        $e->id_casa = $data['id_casa'];
        $e->save();

        return $e;
    }

    public function getAll()
    {
        return Evento::all();
    }

    public function getListas($id){

        return Evento::find($id)->listas;
    }


}
