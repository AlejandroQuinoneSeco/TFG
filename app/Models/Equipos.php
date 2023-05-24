<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipos extends Model{

    use HasFactory;

    public function Jugadores(){

    return $this->hasMany(Jugadores::class);

    }

    public function Jornada(){

        return $this->hasMany(Jornadas::class);
    }


}

