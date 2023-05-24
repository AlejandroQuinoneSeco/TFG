<?php

namespace App\Http\Controllers;

use App\Models\Calendarios;
use Illuminate\Http\Request;

class CalendarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $calendario = Calendarios::orderBy('Numero_Jornada')->get();
        return view('paginas/calendarios/index', compact('calendario'));

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
            'Rival' => 'required',
            'Resultado' => 'required',
        ]);

        $calendario = new Calendarios();
        $calendario->Numero_Jornada = $request->Numero_Jornada;
        $calendario->Rival = $request->Rival;
        $calendario->Resultado = $request->Resultado;
        $calendario->save();

        return redirect()->route('calendarios.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Calendarios $calendario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Calendarios $calendario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Calendarios $calendario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Calendarios $calendario)
    {
        //
    }
}
