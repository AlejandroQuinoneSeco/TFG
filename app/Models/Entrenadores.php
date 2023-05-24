<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Equipos;

class Entrenadores extends Model
{
    use HasFactory;

    public function equipos(){
        return $this -> belongsTo(Equipos::class);
    }
}
