<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class player extends Model
{
    protected $primaryKey = 'dorsal';

    public function estadisticas()
    {
        return $this->hasOne(Estadistica::class, 'nombre_jugador', 'nombre_jugador');
    }
}
