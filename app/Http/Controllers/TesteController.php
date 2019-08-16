<?php

namespace App\Http\Controllers;

use App\Domains\Casa;
use App\Domains\Services\CasaService;
use Illuminate\Http\Request;

class TesteController extends Controller
{
    protected $service;

    public function __construct(CasaService $casa)
    {
        $this->service = $casa;
    }

    public function teste(){

        return $this->service->getAll();
    }
}
