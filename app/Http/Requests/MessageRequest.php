<?php

namespace Chat\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MessageRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'text' => 'required|max:15|min:12'
        ];
    }

    public function messages()
    {
        return [
            'text.required' => 'Obrigatório!',
            'text.max' => 'Tamanho máximo 15 caracteres!',
            'text.min' => 'Tamanho minimo 12 caracteres!',
        ];
    }

}
