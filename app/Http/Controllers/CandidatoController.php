<?php

namespace App\Http\Controllers;

use App\Candidado;
use App\Candidato;
use App\Gestor;
use Carbon\Carbon;
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
        $candidatos = Candidato::all();
        return view('candidato.index',compact('candidatos'));
    }
    public function aprovados()
    {
        $candidatos = Candidato::where('status', 1)->get();
        return view('candidato.aprovados',compact('candidatos'));
    }
    public function reprovados()
    {
        $candidatos = Candidato::where('status', 0)->get();
        return view('candidato.aprovados',compact('candidatos'));
    }
    public function pedentes()
    {
        $candidatos = Candidato::where('status', null)->get();
        return view('candidato.aprovados',compact('candidatos'));
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
//        $request->validate([
//            'nome'          => 'required|min:2|max:50',
//            'telefone'   => 'nullable|min:5'  ,
//            'naturaldade'          => 'required|min:2|max:50',
//            'estado_civil'   => 'nullable|min:5',
//            'residencia'   => 'nullable|min:5',
//            'data_nascimento'   => 'nullable|min:5'
//        ]);

        $candidato = new Candidato();

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
     * @param  \App\Candidato  $candidato
     * @return \Illuminate\Http\Response
     */
    public function show(Candidato $candidato)
    {
        return view('candidato.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Candidato  $candidato
     * @return \Illuminate\Http\Response
     */
    public function edit(Candidato $candidato)
    {
        $gestores = Gestor::all();
        return view('candidato.edit',compact('candidato','gestores'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Candidato  $candidato
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Candidato $candidato)
    {
        $request->validate([
            'nome'         => '',
            'telefone'       => '',
            'local_trabalho'   => '',
            'casapropria'    => '',
            'credito_requesitado'         => '',
            'salario'  => '',
            'naturaldade'      => '',
            'gestor_id'    => '',
            'status' => '',
            'data_pagamento' => '',
        ]);
        $current = Carbon::now();

        $current->addMonths(60);
        // 2015-12-19

        if ($request->status == 1){

            if ($request->credito_requesitado > $request->salario){
                return redirect()->back()->with(['message' => 'Candidado ('.$candidato->nome.') Nao pode ser aprovado']);
            }elseif ( $request->salario > $request->credito_requesitado){
                $candidato->data_pagamento = $current;
                Candidato::where('id', $candidato->id)
                    ->update($request->only(['status','data_pagamento','nome', 'telefone', 'local_trabalho', 'casapropria', 'credito_requesitado', 'salario', 'naturaldade', 'gestor_id']));
                $candidato->update(['data_pagamento' => $current]);
                return redirect()->back()->with(['message' => 'Candidado ('.$candidato->nome.') actualizada com sucesso.']);
            }

        }
        Candidato::where('id', $candidato->id)
            ->update($request->only(['status','data_pagamento','nome', 'telefone', 'local_trabalho', 'casapropria', 'credito_requesitado', 'salario', 'naturaldade', 'gestor_id']));

        return redirect()->back()->with(['message' => 'Candidado ('.$candidato->nome.') actualizada com sucesso.']);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Candidato  $candidato
     * @return \Illuminate\Http\Response
     */
    public function destroy(Candidato $candidato)
    {
        $message = 'candidato \'' . $candidato->nome . '\' deletada com sucesso.';

        $candidato->delete();

        return redirect()->to('/candidato')->with(['message' => $message]);
    }
}
