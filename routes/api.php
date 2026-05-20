<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\MenuController;
use App\Http\Controllers\Api\ClienteController;
use App\Http\Controllers\Api\ReservacionController;

Route::get('/menu', [MenuController::class, 'index']);
Route::get('/clientes', [ClienteController::class, 'index']);
Route::get('/reservaciones', [ReservacionController::class, 'index']);