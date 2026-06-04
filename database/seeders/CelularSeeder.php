<?php

namespace Database\Seeders;

use App\Models\Celular;
use App\Models\Marca;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CelularSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $samsung = Marca::where('nombre', 'Samsung')->first()->id;
        $apple = Marca::where('nombre', 'Apple')->first()->id;
        $xiaomi = Marca::where('nombre', 'Xiaomi')->first()->id;
        $motorola = Marca::where('nombre', 'Motorola')->first()->id;

        Celular::insert([
            ['marca_id' => $samsung, 'modelo' => 'Galaxy S21', 'created_at' => now(), 'updated_at' => now()],
            ['marca_id' => $apple, 'modelo' => 'iPhone 13', 'created_at' => now(), 'updated_at' => now()],
            ['marca_id' => $xiaomi, 'modelo' => 'Redmi Note 10', 'created_at' => now(), 'updated_at' => now()],
            ['marca_id' => $motorola, 'modelo' => 'Moto G100', 'created_at' => now(), 'updated_at' => now()]
        ]);
    }
}
