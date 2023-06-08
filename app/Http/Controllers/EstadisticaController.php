<?php

namespace App\Http\Controllers;

use App\Models\Estadistica;
use App\Models\Player;
use Illuminate\Http\Request;

class EstadisticaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $estadisticas = Estadistica::orderByRaw("CAST(dorsal AS SIGNED) ASC, dorsal ASC")->get();
        return view('paginas/estadisticas/index', compact('estadisticas'));
    }

    public function createWithDefaultValue($nombre_jugador)
    {
        $estadisticas = Estadistica::where('nombre_jugador', $nombre_jugador)->first();
        $defaultValues = [
            'nombre_jugador' => '',
            'dorsal' => '',
        ];

        return view('paginas/estadisticas/createWithDefaultValue', compact('defaultValues'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $nombreJugador = $request->input('nombre_jugador');
        $dorsal = $request->input('dorsal');

        return view('paginas/estadisticas/create', compact('nombreJugador', 'dorsal'));
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
    public function edit($dorsal)
    {
        $estadistica = Estadistica::where('dorsal', $dorsal)->firstOrFail();
        return view('paginas/estadisticas/edit', compact('estadistica'));
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, $dorsal)
    {
        $estadistica = Estadistica::where('dorsal', $dorsal)->firstOrFail();

        // Actualizar los valores de las estadísticas existentes
        $estadistica->partidos_totales += $request->input('partidos_totales');
        $estadistica->partidos_titular += $request->input('partidos_titular');
        $estadistica->partidos_suplente += $request->input('partidos_suplente');
        $estadistica->goles += $request->input('goles');
        $estadistica->minutos_jugados += $request->input('minutos_jugados');
        $estadistica->tarjetas_amarillas += $request->input('tarjetas_amarillas');
        $estadistica->tarjetas_rojas += $request->input('tarjetas_rojas');

        // Guardar los cambios
        $estadistica->save();

        // Redirigir a la vista deseada o realizar alguna acción adicional
        return redirect()->route('estadisticas.index');
    }


 /*   public function update(Request $request, Estadistica $estadistica, $dorsal)
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

        $estadisticas = Estadistica::findOrFail($dorsal);

        // Actualizar los valores existentes
        $estadisticas->partidos_totales += $request->input('partidos_totales');
        $estadisticas->partidos_titular += $request->input('partidos_titular');
        $estadisticas->partidos_suplente += $request->input('partidos_suplente');
        $estadisticas->goles += $request->input('goles');
        $estadisticas->minutos_jugados += $request->input('minutos_jugados');
        $estadisticas->tarjetas_amarillas += $request->input('tarjetas_amarillas');
        $estadisticas->tarjetas_rojas += $request->input('tarjetas_rojas');

        $estadistica->save();

        return redirect()->route('estadisticas.index');

    }


*/

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Estadistica $estadistica)
    {
        $estadistica->delete();
        return redirect()->route('estadisticas.index');
    }
}
