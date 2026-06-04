<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reparacion extends Model
{
    protected $table = 'reparaciones';
    
    protected $fillable = [
        'descripcion_falla',
        'fecha_ingreso',
        'estado',
        'celular_id',
        'cliente_id',
        'usuario_id'
    ];

    public function celular()
    {
        return $this->belongsTo(Celular::class, 'celular_id');
    }

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'cliente_id');
    }

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'usuario_id');
    }
}