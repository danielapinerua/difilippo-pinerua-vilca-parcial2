<?php

namespace Database\Seeders;

use App\Models\Cliente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cliente::insert([
            ['nombre' => 'Carlos Perez', 'telefono' => '123456789', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Ana Gomez', 'telefono' => '987654321', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Luis Martinez', 'telefono' => '456123789', 'created_at' => now(), 'updated_at' => now()]
        ]);
    }
}
