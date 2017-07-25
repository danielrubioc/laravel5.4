<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class UserRequest extends FormRequest
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
            //
                'name' => 'min:4|max:120|required',
                'email' => 'email|required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'El campo nombre es requerido',
            'name.min' => 'El campo debe tener un mínimo de 4 caracteres',
            'email.required' => 'El campo nombre es requerido',
            'email.email' => 'El campo email debe ser una dirección de correo electrónico válida !',
        ];
    }
}
