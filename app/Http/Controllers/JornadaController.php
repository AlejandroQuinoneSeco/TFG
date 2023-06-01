<?php

namespace App\Http\Controllers;

use App\Models\Jornada;
use Illuminate\Http\Request;

class JornadaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ultimaJornada = Jornada::orderBy('numero_jornada', 'desc')->first();
        return view('paginas/jornadas/index', compact('ultimaJornada'));
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
            'numero_jornada' => 'required',
            'lugar' => 'required',
            'fecha' => 'required',
            'hora' => 'required',
            'proximo_rival' => 'required',
            'jugadores_disponibles' => 'required',
        ]);

        $jornada = new Jornada();
        $jornada->numero_jornada = $request->numero_jornada;
        $jornada->lugar = $request->lugar;
        $jornada->fecha = $request->fecha;
        $jornada->hora = $request->hora;
        $jornada->proximo_rival = $request->proximo_rival;
        $jornada->jugadores_disponibles = $request->jugadores_disponibles;
        $jornada->save();

        return redirect()->route('jornadas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Jornada $jornada)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jornada $jornada)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Jornada $jornada)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jornada $jornada)
    {
        //
    }
}
