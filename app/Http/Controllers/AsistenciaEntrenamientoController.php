<?php

namespace App\Http\Controllers;

use App\Models\AsistenciaEntrenamiento;
use App\Models\Entrenamiento;
use Illuminate\Http\Request;

class AsistenciaEntrenamientoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $asistencias = AsistenciaEntrenamiento::all();
        return view('paginas/asistencia_entrenamientos.index', compact('asistencias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($numero_sesion)
    {
        $entrenamiento = Entrenamiento::where('numero_sesion', $numero_sesion)->first();
        $defaultValues = [
            'numero_sesion' => $entrenamiento->numero_sesion ?? null,
            'fecha' => $entrenamiento->fecha ?? null,
        ];

        return view('paginas/asistencia_entrenamientos/create', compact('defaultValues'));
    }


    public function createWithDefaultValue($numero_sesion)
    {
        $entrenamiento = Entrenamiento::where('numero_sesion', $numero_sesion)->first();
        $defaultValues = [
            'numero_sesion' => $entrenamiento->numero_sesion ?? null,
            'fecha' => $entrenamiento->fecha ?? null,
        ];

        return view('paginas/asistencia_entrenamientos/createWithDefaultValue', compact('defaultValues'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'numero_sesion' => 'required',
            'dorsal' => 'required',
            'fecha' => 'required',
            'asistencia' => 'required',
            'motivo' => $request->asistencia ? 'nullable' : 'required',
        ]);

        $asistencia = new AsistenciaEntrenamiento();
        $asistencia->numero_sesion = $request->numero_sesion;
        $asistencia->dorsal = $request->dorsal;
        $asistencia->fecha = $request->fecha;
        $asistencia->asistencia = $request->asistencia;
        $asistencia->motivo = $request->motivo;
        $asistencia->save();

        return redirect()->route('asistencia_entrenamientos.index');

    }

    /**
     * Display the specified resource.
     */
    public function show($numero_sesion)
    {
        $asistencia = AsistenciaEntrenamiento::where('numero_sesion', $numero_sesion)->first();

        $entrenamiento = Entrenamiento::where('numero_sesion', $numero_sesion)->first();

        return view('paginas/asistencia_entrenamientos/show', compact('asistencia', 'entrenamiento'));

    }

    public function showByAsistencia($numero_sesion)
    {
        $asistencias = AsistenciaEntrenamiento::where('numero_sesion', $numero_sesion)->get();
        $entrenamiento = Entrenamiento::where('numero_sesion', $numero_sesion)->first();

        return view('paginas/asistencia_entrenamientos.showByAsistencia', compact('asistencias', 'entrenamiento'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AsistenciaEntrenamiento $asistencia)
    {
        return view('paginas/asistencia_entrenamientos/edit', compact('asistencia'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AsistenciaEntrenamiento $entrenamientos)
    {
        $this->validate($request,[
            'numero_sesion'=>'required',
            'dorsal'=>'required',
            'fecha'=> 'required',
            'asistencia'=>'required',
            'motivo' => 'nullable',
        ]);

        $entrenamientos->numero_sesion = $request->numero_sesion;
        $entrenamientos->dorsal = $request->dorsal;
        $entrenamientos->fecha = $request->fecha;
        $entrenamientos->asistencia=$request->asistencia;
        $entrenamientos->motivo=$request->motivo;

        $entrenamientos->save();

        return redirect()->route('asistencia_entrenamientos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AsistenciaEntrenamiento $entrenamientos)
    {
        $entrenamientos->delete();
        return redirect()->route('asistencias_entrenamiento.index');
    }
}
