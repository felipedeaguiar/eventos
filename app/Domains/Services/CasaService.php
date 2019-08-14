<?php

namespace App\Domains\Services;

use App\Domains\Repositories\CasaRepository;

class CasaService{

    protected $casaRepository;

    public function __construct(CasaRepository $casaRepository)
    {
        $this->casaRepository = $casaRepository;
    }

    public function inserir(array $data)
    {

    }

    public function getAll()
    {
        return $this->casaRepository->getAll();
    }

}
