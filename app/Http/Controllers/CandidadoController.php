<?php

namespace App\Http\Controllers;

use App\Candidado;
use App\Gestor;
use Illuminate\Http\Request;

class CandidadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Candidado  $candidado
     * @return \Illuminate\Http\Response
     */
    public function show(Candidado $candidado)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Candidado  $candidado
     * @return \Illuminate\Http\Response
     */
    public function edit(Candidado $candidado)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Candidado  $candidado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Candidado $candidado)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Candidado  $candidado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Candidado $candidado)
    {
        $message = 'Candidado \'' . $candidado->nome . '\' deletada com sucesso.';

        $candidado->delete();

        return redirect()->to('/Candidado')->with(['message' => $message]);
    }
}
