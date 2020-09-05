<?php

namespace App\Http\Controllers;

use App\Gestor;
use Illuminate\Http\Request;

class GestorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gestores = Gestor::all();
        return view('gestor.index',compact('gestores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gestor.create');
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
            'nome'         => '',
            'telefone'       => '',
            'naturaldade'   => '',
            'estado_civil'    => '',
            'residencia'         => '',
            'data_nascimento'  => '',
        ]);

        $gestor = new Gestor();

        $gestor->nome         = $request->nome;
        $gestor->telefone  = $request->telefone;
        $gestor->naturaldade         = $request->naturaldade;
        $gestor->estado_civil  = $request->estado_civil;
        $gestor->residencia  = $request->residencia;
        $gestor->data_nascimento  = $request->data_nascimento;
//        $gestor->user_id      = auth()->id();

        $gestor->save();

        return redirect()->back()->with(['message' => 'Gestor adicionado com sucesso.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gestor  $gestor
     * @return \Illuminate\Http\Response
     */
    public function show(Gestor $gestor)
    {
        return view('gestor.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gestor  $gestor
     * @return \Illuminate\Http\Response
     */
    public function edit(Gestor $gestor)
    {
        return  view('gestor.edit',compact('gestor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gestor  $gestor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gestor $gestor)
    {
        $request->validate([
            'nome'         => '',
            'telefone'       => '',
            'naturaldade'   => '',
            'estado_civil'    => '',
            'residencia'         => '',
            'data_nascimento'  => '',
        ]);

        Gestor::where('id', $gestor->id)
            ->update($request->only(['nome', 'telefone', 'naturaldade', 'estado_civil', 'residencia', 'data_nascimento']));


        return redirect()->back()->with(['message' => 'Gestor ('.$gestor->nome.') actualizada com sucesso.']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gestor  $gestor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gestor $gestor)
    {
        $message = 'Gestor \'' . $gestor->nome . '\' deletada com sucesso.';

        $gestor->delete();

        return redirect()->to('/gestor')->with(['message' => $message]);
    }
}
