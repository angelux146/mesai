<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('welcome');
});

use App\Http\Controllers\ClienteController;

Route::get('/menu', [ClienteController::class, 'menu']);

Route::get('/reservacion', [
  ClienteController::class,
  'reservacion'
]);

Route::post('/reservacion', [
  ClienteController::class,
  'guardarReservacion'
])->name('reservacion.guardar');
