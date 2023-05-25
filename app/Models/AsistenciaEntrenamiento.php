<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AsistenciaEntrenamiento extends Model
{
    public function entrenamiento()
    {
        return $this->belongsTo(Entrenamiento::class, 'numero_sesion', 'numero_sesion');
    }

    public function jugador()
    {
        return $this->belongsTo(Player::class, 'nombre_jugador', 'nombre_jugador');
    }
}
