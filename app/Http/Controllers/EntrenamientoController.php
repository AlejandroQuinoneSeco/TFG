<?php

namespace App\Http\Controllers;

use App\Models\Entrenamiento;
use Illuminate\Http\Request;

class EntrenamientoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $entrenamiento= Entrenamiento::orderBy('Numero_Sesion')->get();
        return view('paginas/entrenamientos/index', compact('entrenamiento'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('paginas/entrenamientos/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'Numero_Sesion'=>'required',
            'fecha'=> 'required',
            'jugadores_disponibles'=>'required',
            'descripcion'=>'required',
        ]);

        $entrenamiento = new Entrenamiento();
        $entrenamiento->Numero_Sesion = $request->Numero_Sesion;
        $entrenamiento->fecha = $request->fecha;
        $entrenamiento->jugadores_disponibles=$request->jugadores_disponibles;
        $entrenamiento->descripcion=$request->descripcion;
        $entrenamiento->save();

        return redirect()->route('entrenamientos.index');


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
