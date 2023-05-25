<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estadistica extends Model
{
    use HasFactory;

    protected $primaryKey = 'nombre_jugador';

    public function jugador()
    {
        return $this->belongsTo(Player::class, 'dorsal', 'dorsal');
    }
}
