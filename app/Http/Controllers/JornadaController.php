<?php

namespace App\Http\Controllers;

use App\Models\Jornadas;
use Illuminate\Http\Request;

class JornadaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jornada = Jornadas::orderBy('Numero_jornada')->get();
        return view('paginas/jornadas/index', compact('jornada'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('paginas/jornadas/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'Numero_jornada' => 'required',
            'Lugar' => 'required',
            'Fecha' => 'required',
            'Hora' => 'required',
            'Proximo_rival' => 'required',
            'Anterior_rival' => 'required',
            'Jugadores_disponibles' => 'required',
        ]);

        $jornada = new Jornadas();
        $jornada->Numero_jornada = $request->Numero_jornada;
        $jornada->Lugar = $request->Lugar;
        $jornada->Fecha = $request->Fecha;
        $jornada->Hora = $request->Hora;
        $jornada->Proximo_rival = $request->Proximo_rival;
        $jornada->Anterior_rival = $request->Anterior_rival;
        $jornada->Jugadores_disponibles = $request->Jugadores_disponibles;
        $jornada->save();

        return redirect()->route('jornadas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Jornadas $jornada)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jornadas $jornada)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Jornadas $jornada)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jornadas $jornada)
    {
        //
    }
}
