<?php

namespace App\Http\Controllers;

use App\Domains\Services\CasaService;
use Illuminate\Http\Request;
use App\Domains\Casa;
use App\Domains\Services\EventoService;

class EventoController extends Controller
{

    protected $casaService;

    function __construct(CasaService $casaService, EventoService $eventoService)
    {
        $this->casaService = $casaService;
        $this->eventoService = $eventoService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eventos = $this->eventoService->getAll();

        return view('admin.evento.index', array('eventos' => $eventos));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $casas = Casa::all();

        return view('admin.evento.create', array('casas' => $casas));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = \Validator::make($request->all(),[
            'nome' => 'required',
            'data' => 'required',
            'id_casa' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        $this->eventoService->add($request->all());

        return redirect()->back()->withSuccess('Sucesso!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getListas($id)
    {
       $listas = $this->eventoService->getListas($id);
       return view('admin.evento.listas', array('listas' => $listas));
    }
}
