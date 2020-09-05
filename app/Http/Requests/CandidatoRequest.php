<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CandidatoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>'required',
            'localtrabalho'=>'required',
            'estadocivil'=>'required',
            'casapropria'=>'required',
            'empregoformal'=>'required',
            'tevecredito'=>'required'

        ];
    }
        public function messages()
      {
          return [
          'name.required' => 'Coloca o nome ',
           'localtrabalho.required'  => 'Local de trabalho requerido',
           'estadocivil.required'  => 'Coloca seu local de trabalho',
           'casapropria.required'  => 'Precisa preecher este campo',
           'empregoformal.required'  => 'Onde trabalha?',
           'tevecredito.required'  => 'Precisa de preecher este campo'

          ];
     }
}
