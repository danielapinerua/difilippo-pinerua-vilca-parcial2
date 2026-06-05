<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CelularRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'marca_id' => 'required|exists:marcas,id',
            'modelo' => 'required|string'
        ];
    }

    public function messages()
    {
        return [
            'marca_id.required' => 'La marca del celular es obligatoria.',
            'marca_id.exists' => 'La marca del celular seleccionado no existe.',
            'modelo.required' => 'El modelo del celular es obligatorio.',
            'modelo.string' => 'El modelo del celular debe ser texto.'
        ];
    }
}
