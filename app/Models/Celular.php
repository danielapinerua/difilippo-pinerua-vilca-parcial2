<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Celular extends Model
{
    protected $table = 'celulares';

    protected $fillable = [
        'marca_id',
        'modelo',
    ];

    public function marca()
    {
        return $this->belongsTo(Marca::class, 'marca_id');
    }

    public function reparaciones()
    {
        return $this->hasMany(Reparacion::class, 'celular_id');
    }
}
