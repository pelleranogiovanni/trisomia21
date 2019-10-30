<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateHealthinsurance extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function messages()
    {
        return [
            'obrasocial.required' => 'Ingrese una obra social',
            'obrasocial.unique' => 'Ingrese una obra social que no esté en la lista',
            'obrasocial.min' => 'Ingrese al menos 6 caracteres para la obra social',
        ];
    }

    public function rules()
    {
        return [
            'obrasocial' => 'required|min:6|unique:healthinsurances',
        ];
    }
}
