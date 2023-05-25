<?php

namespace App\Http\Controllers;

use App\Models\AsistenciaEntrenamiento;
use Illuminate\Http\Request;

class AsistenciaEntrenamientoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $entrenamientos = AsistenciaEntrenamiento::orderBy('numero_sesion')->get();
        return view('paginas/asistencia_entrenamientos/index', compact('entrenamientos'));
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
            'numero_sesion'=>'required',
            'dorsal'=>'required',
            'fecha'=> 'required',
            'asistencia'=>'required',
            'motivo',
        ]);

        $entrenamientos = new AsistenciaEntrenamiento();
        $entrenamientos->numero_sesion = $request->numero_sesion;
        $entrenamientos->dorsal = $request->dorsal;
        $entrenamientos->fecha = $request->fecha;
        $entrenamientos->asistencia=$request->asistencia;
        $entrenamientos->motivo=$request->motivo;
        $entrenamientos->save();

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
