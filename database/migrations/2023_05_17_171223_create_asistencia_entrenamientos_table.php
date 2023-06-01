<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('asistencia_entrenamientos', function (Blueprint $table) {
            $table->unsignedBigInteger('numero_sesion');
            $table->string('dorsal');
            $table->date('fecha');
            $table->boolean('asistencia');
            $table->string('motivo')->nullable();
            // Agrega otros campos necesarios

            $table->foreign('numero_sesion')->references('numero_sesion')->on('entrenamientos');
            // $table->foreign('dorsal')->references('dorsal')->on('players');
            $table->foreign('dorsal')->references('dorsal')->on('players')->onDelete('cascade')->onUpdate('cascade');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('asistencia_entrenamientos');
    }
};
