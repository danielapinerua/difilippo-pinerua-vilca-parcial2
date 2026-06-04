<?php

namespace Database\Seeders;

use App\Models\Celular;
use App\Models\Cliente;
use App\Models\Reparacion;
use App\Models\Usuario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReparacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $carlos = Cliente::where('nombre', 'Carlos Perez')->first()->id;
        $ana = Cliente::where('nombre', 'Ana Gomez')->first()->id;
        $luis = Cliente::where('nombre', 'Luis Martinez')->first()->id;

        $admin = Usuario::where('email', 'admin@test.com')->first()->id;
        $tecnico = Usuario::where('email', 'juan@test.com')->first()->id;

        $galaxy = Celular::where('modelo', 'Galaxy S21')->first()->id;
        $iphone = Celular::where('modelo', 'iPhone 13')->first()->id;
        $redmi = Celular::where('modelo', 'Redmi Note 10')->first()->id;

        Reparacion::insert([
            [
                'descripcion_falla' => 'Pantalla rota',
                'fecha_ingreso' => '2026-06-01 10:00:00',
                'estado' => 'Ingresado',
                'celular_id' => $galaxy,
                'cliente_id' => $carlos,
                'usuario_id' => $tecnico,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'descripcion_falla' => 'Batería no dura',
                'fecha_ingreso' => '2026-06-02 11:30:00',
                'estado' => 'Reparando',
                'celular_id' => $iphone,
                'cliente_id' => $ana,
                'usuario_id' => $tecnico,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'descripcion_falla' => 'No enciende',
                'fecha_ingreso' => '2026-06-03 09:15:00',
                'estado' => 'Reparado',
                'celular_id' => $redmi,
                'cliente_id' => $luis,
                'usuario_id' => $admin,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
