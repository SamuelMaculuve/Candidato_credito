<?php

namespace App\Http\Controllers;

use App\Candidado;
use App\Gestor;
use Illuminate\Http\Request;

class CandidatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $candidatos = Candidado::all();
        return view('candidato.index',compact('candidatos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $gestores = Gestor::all();
        return view('candidato.create',compact('gestores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'nome'          => 'required|min:2|max:50',
            'telefone'   => 'nullable|min:5'  ,
            'naturaldade'          => 'required|min:2|max:50',
            'estado_civil'   => 'nullable|min:5',
            'residencia'   => 'nullable|min:5',
            'data_nascimento'   => 'nullable|min:5'
        ]);

        $candidato = new Candidado();

        $candidato->nome         = $request->nome;
        $candidato->telefone  = $request->telefone;
        $candidato->data_nascimento  = $request->data_nascimento;
        $candidato->local_trabalho         = $request->local_trabalho;
        $candidato->casapropria  = $request->casapropria;
        $candidato->naturaldade  = $request->naturaldade;
        $candidato->credito_requesitado  = $request->credito_requesitado;
        $candidato->salario  = $request->salario;
        $candidato->gestor_id  = $request->gestor_id;

//        $candidato->user_id      = auth()->id();
        $candidato->save();

        return redirect()->back()->with(['message' => 'cadidato adicionado com sucesso.']);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Candidado  $candidado
     * @return \Illuminate\Http\Response
     */
    public function show(Candidado $candidado)
    {
        return view('candidato.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Candidado  $candidado
     * @return \Illuminate\Http\Response
     */
    public function edit(Candidado $candidado)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Candidado  $candidado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Candidado $candidado)
    {
        //
    }
}
