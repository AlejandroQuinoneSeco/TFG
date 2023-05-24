<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquipoController;
use App\Http\Controllers\JugadoresController;
use App\Http\Controllers\JornadaController;
use App\Http\Controllers\EntrenadoresController;
use App\Http\Controllers\EntrenamientosController;
use App\Http\Controllers\AsistenciaEntrenamientosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::resource('equipos', \App\Http\Controllers\EquipoController::class);
Route::resource('jugadores', \App\Http\Controllers\JugadoresController::class);
Route::resource('jornadas', \App\Http\Controllers\JornadaController::class);
Route::resource('entrenadores', \App\Http\Controllers\EntrenadoresController::class);
Route::resource('entrenamientos', \App\Http\Controllers\EntrenamientosController::class);
Route::resource('asistencia_entrenamientos', \App\Http\Controllers\AsistenciaEntrenamientosController::class);
Route::resource('calendarios', \App\Http\Controllers\CalendarioController::class);
Route::resource('estadisticas', \App\Http\Controllers\EstadisticasController::class);


Route::get('/', function () {
    return view('welcome');
});
