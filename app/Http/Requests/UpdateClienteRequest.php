<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateClienteRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nombre' => 'required|string|unique:clientes,nombre,' . $this->route('cliente'),
            'telefono' => 'nullable|string'
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'El nombre del cliente es obligatorio.',
            'nombre.string' => 'El nombre del cliente debe ser una cadena de texto.',
            'telefono.required' => 'El teléfono del cliente es obligatorio.',
            'telefono.string' => 'El teléfono del cliente debe ser una cadena de texto.',
            'telefono.unique' => 'El teléfono del cliente ya existe en la base de datos.'
        ];
    }
}
