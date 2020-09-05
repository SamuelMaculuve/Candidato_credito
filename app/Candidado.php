<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidado extends Model
{
    public function gestor()
    {
        return $this->hasMany('App\Gestor');
    }
}
