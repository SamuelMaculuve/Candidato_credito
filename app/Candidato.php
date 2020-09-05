<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidato extends Model
{
    protected $fillable = ['status','data_pagamento','nome', 'telefone', 'local_trabalho', 'casapropria', 'credito_requesitado', 'salario', 'naturaldade', 'gestor_id'];

    public function gestor()
    {
        return $this->belongsTo('App\Gestor');
    }
}
