<?php

namespace App\Http\Controllers;

use App\Models\Estadistica;
use Illuminate\Http\Request;

class EstadisticaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $estadisticas = Estadistica::all();
        return view('paginas/estadisticas/index', compact('estadisticas'));
    }

    public function showByPlayer($nombre_jugador)
    {
        $jugador = Player::where('nombre_jugador', $nombre_jugador)->first();
        $estadisticas = $jugador->estadisticas;
        return view('paginas/estadisticas/show', compact('estadisticas'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('paginas/estadisticas/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nombre_jugador'=>'required',
            'partidos_totales'=>'required',
            'partidos_titular'=>'required',
            'partidos_suplente'=>'required',
            'goles'=>'required',
            'minutos_jugados'=>'required',
            'tarjetas_amarillas'=>'required',
            'tarjetas_rojas'=>'required',
        ]);

        $estadistica = new Estadistica();
        $estadistica->nombre_jugador = $request->nombre_jugador;
        $estadistica->dorsal = $request->dorsal;
        $estadistica->partidos_totales=$request->partidos_totales;
        $estadistica->partidos_titular=$request->partidos_titular;
        $estadistica->partidos_suplente=$request->partidos_suplente;
        $estadistica->goles=$request->goles;
        $estadistica->minutos_jugados=$request->minutos_jugados;
        $estadistica->tarjetas_amarillas=$request->tarjetas_amarillas;
        $estadistica->tarjetas_rojas=$request->tarjetas_rojas;

        $estadistica->save();

        return redirect()->route('estadisticas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Estadistica $estadistica)
    {
        return view('paginas/estadisticas/show', compact('estadistica'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Estadistica $estadistica)
    {
        return view('paginas/estadisticas/edit', compact('estadistica'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Estadistica $estadistica)
    {

        $this->validate($request, [
            'nombre_jugador'=>'required',
            'dorsal'=>'required',
            'partidos_totales'=>'required',
            'partidos_titular'=>'required',
            'partidos_suplente'=>'required',
            'goles'=>'required',
            'minutos_jugados'=>'required',
            'tarjetas_amarillas'=>'required',
            'tarjetas_rojas'=>'required',
        ]);


        $estadistica->nombre_jugador = $request->nombre_jugador;
        $estadistica->dorsal = $request->dorsal;
        $estadistica->partidos_totales=$request->partidos_totales;
        $estadistica->partidos_titular=$request->partidos_titular;
        $estadistica->partidos_suplente=$request->partidos_suplente;
        $estadistica->goles=$request->goles;
        $estadistica->minutos_jugados=$request->minutos_jugados;
        $estadistica->tarjetas_amarillas=$request->tarjetas_amarillas;
        $estadistica->tarjetas_rojas=$request->tarjetas_rojas;

        $estadistica->save();

        return redirect()->route('estadisticas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Estadistica $estadistica)
    {
        $estadistica->delete();
        return redirect()->route('estadisticas.index');
    }
}
