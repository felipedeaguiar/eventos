<?php

namespace App\Domains\Repositories;

use App\Domains\Casa;

class CasaRepository{

    public function getAll(){
        return Casa::all();
    }

}
