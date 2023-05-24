<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estadisticas extends Model
{
    use HasFactory;
    public function Jugadores(){ //$estadisticas->categoria->nombre
        return $this->belongsTo(Jugadores::class); //Pertenece a un jugador.
    }
}
