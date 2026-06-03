<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReparacionController;

Route::resource('reparaciones', ReparacionController::class);
