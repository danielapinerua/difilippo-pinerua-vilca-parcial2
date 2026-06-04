<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reparaciones', function (Blueprint $table) {
            $table->id();
            $table->text('descripcion_falla');
            $table->dateTime('fecha_ingreso')->default(now());
            $table->enum('estado', ['Ingresado', 'Reparando', 'Reparado', 'Entregado'])->default('Ingresado');
            
            $table->foreignId('celular_id')->constrained('celulares');
            $table->foreignId('cliente_id')->constrained('clientes');
            $table->foreignId('usuario_id')->constrained('usuarios');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reparaciones');
    }
};
