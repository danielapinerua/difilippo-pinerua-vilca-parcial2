<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReparacionRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'celular_id' => 'required|exists:celulares,id',
            'cliente_id' => 'required|exists:clientes,id',
            'descripcion_falla' => 'required|string',
            'fecha_ingreso' => 'sometimes|required|date',
            'estado' => 'sometimes|required|in:Ingresado,Reparando,Reparado,Entregado'
        ];
    }

    public function messages()
    {
        return [
            'celular_id.required' => 'El celular es obligatorio.',
            'celular_id.exists' => 'El celular seleccionado no existe.',
            'cliente_id.required' => 'El cliente es obligatorio.',
            'cliente_id.exists' => 'El cliente seleccionado no existe.',
            'descripcion_falla.required' => 'La descripción de la falla es obligatoria.',
            'descripcion_falla.string' => 'La descripción de la falla debe ser una cadena de texto.',
            'fecha_ingreso.required' => 'La fecha de ingreso es obligatoria.',
            'fecha_ingreso.date' => 'La fecha de ingreso debe ser una fecha.',
            'estado.required' => 'El estado es obligatorio.',
            'estado.in' => 'El estado debe ser uno de los siguientes: Ingresado, Reparando, Reparado, Entregado.'
        ];
    }
}
