<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jornada extends Model
{
    protected $primaryKey = 'numero_jornada';


    public function equipo()
    {
        return $this->belongsTo(Equipo::class, 'equipo_id', 'id_equipo');
    }

    public function calendarios()
    {
        return $this->hasMany(Calendario::class, 'numero_jornada', 'numero_jornada');
    }

}
