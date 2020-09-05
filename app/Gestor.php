<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gestor extends Model
{
    public function candidato()
    {
        return $this->hasOne('App\Candidato');
    }
}
