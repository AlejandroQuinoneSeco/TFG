<x-zz.base>
    <x-slot:tituloHead>Asistencia al Entrenamiento</x-slot:tituloHead>
    <x-slot:tituloVisible>Asistencia al Entrenamiento</x-slot:tituloVisible>

    <div class="table-responsive">
    <table class="table">
        <tr>
            <th>Numero Sesion</th>
            <th>Dorsal</th>
            <th>Fecha</th>
            <th>Asistencia</th>
            <th>Motivo</th>
        </tr>
        @foreach ($asistencias as $asistencia)
            <tr>
                <td>{{ $asistencia->numero_sesion }}</td>
                <td>{{ $asistencia->dorsal }}</td>
                <td>{{ $asistencia->fecha }}</td>
                <td>{{ $asistencia->asistencia ? 'Si' : 'No' }}</td>
                <td>{{ $asistencia->motivo }}</td>
            </tr>
        @endforeach
    </table>
    </div>
    <button class="btn"><a href="{{ route('entrenamientos.index') }}">Volver a entrenamientos</a></button>
    <button class="btn"><a href="{{ route('asistencia_entrenamientos.createWithDefaultValue', $entrenamiento->numero_sesion) }}">Crear asistencia</a></button>
</x-zz.base>
