<?php

namespace App\Http\Controllers;

use App\Domains\ListaBonus;
use Illuminate\Http\Request;

class ListaBonusClientesController extends Controller
{
    public function getClientes($id){

        $clientes = ListaBonus::find($id)->clientes;
        return view('admin.clientes.index', array('clientes'=>$clientes));
    }
}
