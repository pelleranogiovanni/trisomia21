<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreHealthinsurance extends FormRequest
{
<<<<<<< HEAD

=======
>>>>>>> 1b0842a8b6217b787a2d915e1b86e45dd856467d
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
<<<<<<< HEAD
            'obrasocial' => 'required|min:6|unique:healthinsurances',
=======
            'obrasocial' => 'required|min:3|unique:healthinsurances',
>>>>>>> 1b0842a8b6217b787a2d915e1b86e45dd856467d
        ];
    }
}
