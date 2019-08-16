<?php

namespace App\Domains\Repositories;

use App\Domains\Casa;

class CasaRepository{

    protected $model;

    public function __construct(Casa $casa)
    {
        $this->model = $casa;
    }
    public function getAll()
    {
        return $this->model::all();
    }
    public function paginate($pages)
    {

        return $this->paginate($pages);
    }


}
