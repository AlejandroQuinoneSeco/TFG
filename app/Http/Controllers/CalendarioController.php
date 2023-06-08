<?php

namespace App\Http\Controllers;

use App\Models\Calendario;
use App\Models\Jornada;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


class CalendarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jornadas = Jornada::orderBy('numero_jornada')->get();
        $calendarios = Calendario::whereIn('numero_jornada', $jornadas->pluck('numero_jornada'))->get();


        return view('paginas/calendarios.index', compact('jornadas', 'calendarios'));
    }




    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $numero_jornada = $request->input('numero_jornada');
        $proximo_rival = $request->input('proximo_rival');

        return view('paginas/calendarios.create', compact('numero_jornada', 'proximo_rival'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'numero_jornada' => 'required',
            'proximo_rival' => 'required',
            'resultado' => 'required',
        ]);

        $calendario = new Calendario();
        $calendario->numero_jornada = $request->numero_jornada;
        $calendario->rival = $request->proximo_rival;
        $calendario->resultado = $request->resultado;
        $calendario->save();

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
