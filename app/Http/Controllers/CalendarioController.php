<?php

namespace App\Http\Controllers;

use App\Models\Calendario;
use Illuminate\Http\Request;

class CalendarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $calendarios = Calendario::orderBy('numero_jornada')->get();
        return view('paginas/calendarios/index', compact('calendarios'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('paginas/calendarios/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'numero_jornada' => 'required',
            'rival' => 'required',
            'resultado' => 'required',
        ]);

        $calendarios = new Calendario();
        $calendarios->numero_jornada = $request->numero_jornada;
        $calendarios->rival = $request->rival;
        $calendarios->resultado = $request->resultado;
        $calendarios->save();

        return redirect()->route('calendarios.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Calendario $calendario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Calendario $calendario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Calendario $calendario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Calendario $calendario)
    {
        //
    }
}
