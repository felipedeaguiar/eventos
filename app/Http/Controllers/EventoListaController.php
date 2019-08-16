<?php

namespace App\Http\Controllers;

use App\Domains\Services\EventoService;
use Illuminate\Http\Request;

class EventoListaController extends Controller
{
    public function __construct(EventoService $eventoService)
    {
        $this->eventoService = $eventoService;
    }

    public function getListas($idEvento)
    {
       $listas = $this->eventoService->getListas($idEvento);
       return view('admin.evento.listas', array('listas' => $listas));
    }
}
