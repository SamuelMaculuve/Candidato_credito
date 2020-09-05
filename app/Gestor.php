<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gestor extends Model
{
    public function candidado()
    {
        return $this->hasOne('App\Candidado');
    }
}
