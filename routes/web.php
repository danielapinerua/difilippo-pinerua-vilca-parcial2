<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ReparacionController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\CelularController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\Auth\LoginController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    // Rutas para Reparaciones
    Route::get('reparaciones', [ReparacionController::class, 'index'])->name('reparaciones.index');
    Route::get('reparaciones/create', [ReparacionController::class, 'create'])->name('reparaciones.create');
    Route::post('reparaciones', [ReparacionController::class, 'store'])->name('reparaciones.store');
    Route::get('reparaciones/{reparacion}', [ReparacionController::class, 'show'])->name('reparaciones.show');
    Route::get('reparaciones/{reparacion}/edit', [ReparacionController::class, 'edit'])->name('reparaciones.edit');
    Route::put('reparaciones/{reparacion}', [ReparacionController::class, 'update'])->name('reparaciones.update');
    Route::delete('reparaciones/{reparacion}', [ReparacionController::class, 'destroy'])->name('reparaciones.destroy');

    // Rutas para Marcas
    Route::get('marcas', [MarcaController::class, 'index'])->name('marcas.index');
    Route::get('marcas/create', [MarcaController::class, 'create'])->name('marcas.create');
    Route::post('marcas', [MarcaController::class, 'store'])->name('marcas.store');
    Route::get('marcas/{marca}', [MarcaController::class, 'show'])->name('marcas.show');
    Route::get('marcas/{marca}/edit', [MarcaController::class, 'edit'])->name('marcas.edit');
    Route::put('marcas/{marca}', [MarcaController::class, 'update'])->name('marcas.update');
    Route::delete('marcas/{marca}', [MarcaController::class, 'destroy'])->name('marcas.destroy');

    // Rutas para Celulares
    Route::get('celulares', [CelularController::class, 'index'])->name('celulares.index');
    Route::get('celulares/create', [CelularController::class, 'create'])->name('celulares.create');
    Route::post('celulares', [CelularController::class, 'store'])->name('celulares.store');
    Route::get('celulares/{celular}', [CelularController::class, 'show'])->name('celulares.show');
    Route::get('celulares/{celular}/edit', [CelularController::class, 'edit'])->name('celulares.edit');
    Route::put('celulares/{celular}', [CelularController::class, 'update'])->name('celulares.update');
    Route::delete('celulares/{celular}', [CelularController::class, 'destroy'])->name('celulares.destroy');

    // Rutas para Clientes
    Route::get('clientes', [ClienteController::class, 'index'])->name('clientes.index');
    Route::get('clientes/create', [ClienteController::class, 'create'])->name('clientes.create');
    Route::post('clientes', [ClienteController::class, 'store'])->name('clientes.store');
    Route::get('clientes/{cliente}', [ClienteController::class, 'show'])->name('clientes.show');
    Route::get('clientes/{cliente}/edit', [ClienteController::class, 'edit'])->name('clientes.edit');
    Route::put('clientes/{cliente}', [ClienteController::class, 'update'])->name('clientes.update');
    Route::delete('clientes/{cliente}', [ClienteController::class, 'destroy'])->name('clientes.destroy');
});