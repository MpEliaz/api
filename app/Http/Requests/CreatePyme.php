<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreatePyme extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre' => 'required',
            'telefono' => 'required | number',
            'direccion' => 'required',
            'email' => 'required | email',
            'url_imagen' => 'required',
            'descripcion_corta' => 'required',
            'descripcion_larga' => 'required',
            'estado' => 'required'
        ];
    }
}
