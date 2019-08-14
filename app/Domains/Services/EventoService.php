<?php

namespace App\Domains\Services;

use App\Domains\Repositories\EventoRepository;

class EventoService{

    protected $eventoRepository;

    public function __construct(EventoRepository $eventoRepository)
    {
        $this->eventoRepository = $eventoRepository;
    }

    public function add(array $data)
    {
        return $this->eventoRepository->add($data);
    }


}
