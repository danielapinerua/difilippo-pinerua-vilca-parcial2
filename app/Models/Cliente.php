<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';

    protected $fillable = [
        'nombre',
        'telefono',
    ];

    public function reparaciones()
    {
        return $this->hasMany(Reparacion::class, 'cliente_id');
    }
}
