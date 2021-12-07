<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SeriesFormRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        // O nome dos campos são os mesmos definidos pelo atributo name do input
        return [
            'serieName' => 'required|min:3',
            'serieSeason' => 'required|gt:0'
        ];
    }

    // Caso eu queria personalizar as mensagens de erro, 
    // Crio esse método 'messages' que possui como retorno um array com o nome do campo seguido da regra 
    // E logo ápos a mensagem de erro customizada
    // public function messages() 
    // {
    //     return [
    //         'nome.required' => 'O campo Nome é obrigatório',
    //         'nome.min' => 'O campo Nome deve conter pelo menos 3 caracteres',
    //         'required' => 'O campo :attribute é obritatório'
    //     ];
    // }
}
