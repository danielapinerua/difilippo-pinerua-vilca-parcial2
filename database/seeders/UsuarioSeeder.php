<?php

namespace Database\Seeders;

use App\Models\Usuario;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Usuario::insert([
            [
                'nombre' => 'Admin User',
                'email' => 'admin@test.com',
                'password' => Hash::make('1111'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Tecnico Juan',
                'email' => 'juan@test.com',
                'password' => Hash::make('1111'),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
