<?php

namespace App\Http\Controllers;

use App\Models\AsistenciaEntrenamientos;
use Illuminate\Http\Request;

class AsistenciaEntrenamientosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $entrenamiento= AsistenciaEntrenamientos::orderBy('Numero_Sesion')->get();
        return view('paginas/asistencia_entrenamientos/index', compact('entrenamiento'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('paginas/asistencia_entrenamientos/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'Numero_Sesion'=>'required',
            'Nombre_Jugador'=>'required',
            'fecha'=> 'required',
            'Asistencia'=>'required',
            'motivo',
        ]);

        $entrenamiento = new AsistenciaEntrenamientos();
        $entrenamiento->Numero_Sesion = $request->Numero_Sesion;
        $entrenamiento->Nombre_Jugador = $request->Nombre_Jugador;
        $entrenamiento->fecha = $request->fecha;
        $entrenamiento->Asistencia=$request->Asistencia;
        $entrenamiento->motivo=$request->motivo;
        $entrenamiento->save();

        return redirect()->route('asistencia_entrenamientos.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
