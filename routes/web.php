<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ReparacionController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\CelularController;
use App\Http\Controllers\ClienteController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

Route::resource('reparaciones', ReparacionController::class);
Route::resource('marcas', MarcaController::class);
Route::resource('celulares', CelularController::class);
Route::resource('clientes', ClienteController::class);
