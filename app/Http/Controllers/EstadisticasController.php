<?php

namespace App\Http\Controllers;

use App\Models\Estadisticas;
use Illuminate\Http\Request;

class EstadisticasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $estadisticas = Estadisticas::orderBy('dorsal')->get();
        return view('paginas/estadisticas/index', compact('estadisticas'));
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
            'dorsal'=> 'required',
            'posicion'=>'required',
            'partidos_totales'=>'required',
            'partidos_titular'=>'required',
            'partidos_suplente'=>'required',
            'goles'=>'required',
            'minutos_jugados'=>'required',
            'tarjetas_amarillas'=>'required',
            'tarjetas_rojas'=>'required',
        ]);

        $estadistica = new Estadisticas();
        $estadistica->nombre_jugador = $request->nombre_jugador;
        $estadistica->dorsal = $request->dorsal;
        $estadistica->posicion=$request->posicion;
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
    public function show(Estadisticas $estadisticas)
    {
        return view('paginas/estadisticas/show', compact('estadisticas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Estadisticas $estadisticas)
    {
        return view('paginas/estadisticas/edit', compact('estadisticas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Estadisticas $estadisticas)
    {
        $estadistica = Estadisticas::where('dorsal', $estadisticas)
            ->first();

        $this->validate($request, [
            'nombre_jugador'=>'required',
            'dorsal'=> 'required',
            'posicion'=>'required',
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
        $estadistica->posicion=$request->posicion;
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
    public function destroy(Estadisticas $estadisticas)
    {
        $estadisticas->delete();
        return redirect()->route('estadisticas.index');
    }
}
