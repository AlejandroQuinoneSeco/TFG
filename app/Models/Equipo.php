<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model{

    public function jornadas()
    {
        return $this->hasMany(Jornada::class, 'equipo_id', 'id_equipo');
    }


}

