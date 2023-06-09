<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $players = Player::orderBy('nombre_jugador')->get();
        return view('paginas/jugadores/index', compact('players'));
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

        $players = new Player();
        $players->nombre_jugador = $request->nombre_jugador;
        $players->dorsal = $request->dorsal;
        $players->posicion = $request->posicion;
        $players->save();

        return redirect()->route('players.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Player $player)
    {
       return view('paginas/jugadores/show', compact('player'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Player $player)
    {
        return view('paginas/jugadores/edit', compact('player'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Player $player)
    {
        $this->validate($request, [
            'nombre_jugador' => 'required',
            'dorsal' => 'required',
            'posicion' => 'required',
        ]);

        $player->nombre_jugador = $request->nombre_jugador;
        $player->dorsal = $request->dorsal;
        $player->posicion = $request->posicion;
        $player->save();

        return redirect()->route('players.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Player $player)
    {
        $player->delete();
        return redirect()->route('players.index');
    }
}
