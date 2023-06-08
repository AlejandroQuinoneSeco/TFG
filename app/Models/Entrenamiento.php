<?php

namespace App\Models;

use App\Http\Controllers\AsistenciaEntrenamientoController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entrenamiento extends Model
{

    public function asistencias()
    {
        return $this->hasMany(AsistenciaEntrenamiento::class, 'numero_sesion', 'numero_sesion');
    }

}
