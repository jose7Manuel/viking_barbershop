<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ReservaController;

Route::get('/', [ServicioController::class, 'index'])->name('blog');

Route::resource('servicios', ServicioController::class)->only(['index','show']);
Route::resource('clientes', ClienteController::class)->only(['create','store']);
Route::resource('reservas', ReservaController::class)->only(['create','store']);
