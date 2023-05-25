<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Equipo;

class Trainer extends Model
{
    public function entrenamientos()
    {
        return $this->hasMany(Entrenamiento::class, 'entrenador_id', 'id_entrenador');
    }
}
