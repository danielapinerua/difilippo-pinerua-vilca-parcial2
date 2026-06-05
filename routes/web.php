<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

use App\Http\Controllers\ReparacionController;
Route::resource('reparaciones', ReparacionController::class);

use App\Http\Controllers\MarcaController;
Route::resource('marcas', MarcaController::class);

use App\Http\Controllers\CelularController;
Route::resource('celulares', CelularController::class);