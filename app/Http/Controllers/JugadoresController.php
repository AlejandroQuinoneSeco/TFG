<?php

namespace App\Http\Controllers;

use App\Models\Jugadores;
use Illuminate\Http\Request;

class JugadoresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jugadores = Jugadores::orderBy('dorsal')->get();
        return view('paginas/jugadores/index', compact('jugadores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('paginas/jugadores/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nombre_jugador' => 'required',
            'dorsal' => 'required',
            'posicion' => 'required',
        ]);

        $jugador = new Jugadores();
        $jugador->nombre_jugador = $request->nombre_jugador;
        $jugador->dorsal = $request->dorsal;
        $jugador->posicion = $request->posicion;
        $jugador->save();

        return redirect()->route('jugadores.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Jugadores $jugadores)
    {
        $jugadores = DB::table('jugadores')
            ->select('*')
            ->get();

        return view('paginas/jugadores/show', compact('jugadores'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jugadores $jugadores)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Jugadores $jugadores)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jugadores $jugadores)
    {
        //
    }
}
