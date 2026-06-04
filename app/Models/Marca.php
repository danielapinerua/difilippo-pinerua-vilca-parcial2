<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    protected $table = 'marcas';

    protected $fillable = [
        'nombre',
    ];

    public function celulares()
    {
        return $this->hasMany(Celular::class, 'marca_id');
    }
}
