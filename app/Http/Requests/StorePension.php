<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePension extends FormRequest
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

    public function messages()
    {
        return [
            'pension.required' => 'Ingrese una pension',
            'pension.unique' => 'Ingrese una pension que no esté en la lista',
            'pension.min' => 'Ingrese al menos 6 caracteres para la pension',
        ];
    }

    public function rules()
    {
        return [
            'pension' => 'required|min:6|max:225|unique:pensions',
        ];
    }
}
