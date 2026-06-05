<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMarcaRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nombre' => 'required|string|unique:marcas,nombre,' . $this->route('marca')
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'El nombre de la marca es obligatorio.',
            'nombre.string' => 'El nombre de la marca debe ser una cadena de texto.',
            'nombre.unique' => 'El nombre de la marca ya existe en la base de datos.'
        ];
    }
}
