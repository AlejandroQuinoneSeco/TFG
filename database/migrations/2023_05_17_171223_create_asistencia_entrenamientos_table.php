<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('asistencia_entrenamientos', function (Blueprint $table) {
            $table->id('Numero_Sesion');
            $table->string('Nombre_Jugador');
            $table->date('fecha');
            $table->string('Asistencia', 2);
            $table->string('motivo', 40);
            $table->timestamps();

        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asistencia_entrenamientos');
    }
};
