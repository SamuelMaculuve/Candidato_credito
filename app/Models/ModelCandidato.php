<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelCandidato extends Model
{
    protected $table ='candidato';
    protected $fillable =['id_user','name','localtrabalho','estadocivil','casapropria','empregoformal','tevecredito'];

    public function relUsers()
    {

        return $this -> hasOne('App\User', 'id','id_user');
    }
}
