<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');

Route::get('/reparaciones', [PageController::class, 'index'])->name('reparaciones.index');
Route::get('/reparaciones/create', [PageController::class, 'create'])->name('reparaciones.create');
Route::post('/reparaciones/store', [PageController::class, 'store'])->name('reparaciones.store');