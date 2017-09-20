<?php

namespace mambo\Http\Requests;

use mambo\Http\Requests\Request;

class ProjetoRequest extends Request
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nome' => 'required|min:3',
            'data_inicio' => 'required',
            'data_fim' => 'required',
            'valor'=>'required',
            'horas'=>'required'
        ];
    }
    public function messages() {
      return [
        'required' => 'O :attribute é obrigatório!'
      ];
    }
}
