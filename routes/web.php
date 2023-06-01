<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquipoController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\JornadaController;
use App\Http\Controllers\TrainerController;
use App\Http\Controllers\EntrenamientoController;
use App\Http\Controllers\AsistenciaEntrenamientoController;

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
Route::resource('players', \App\Http\Controllers\PlayerController::class);
Route::resource('jornadas', \App\Http\Controllers\JornadaController::class);
Route::resource('trainers', \App\Http\Controllers\TrainerController::class);
Route::resource('entrenamientos', \App\Http\Controllers\EntrenamientoController::class);
Route::resource('asistencia_entrenamientos', \App\Http\Controllers\AsistenciaEntrenamientoController::class);
Route::resource('calendarios', \App\Http\Controllers\CalendarioController::class);
Route::resource('estadisticas', \App\Http\Controllers\EstadisticaController::class);


Route::get('/estadisticas', [\App\Http\Controllers\EstadisticaController::class, 'index'])->name('estadisticas.index');
Route::get('/estadisticas/{nombre_jugador}', [\App\Http\Controllers\EstadisticaController::class, 'showByPlayer'])->name('estadisticas.showByPlayer');




Route::get('/', function () {
    return view('welcome');
});
