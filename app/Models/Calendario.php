<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calendario extends Model
{
    public function jornada()
    {
        return $this->belongsTo(Jornada::class, 'jornada_id', 'id');
    }
}
