<x-zz.base>
    <x-slot:tituloHead>Mostrar Persona</x-slot:tituloHead>
    <x-slot:tituloVisible>Mostrar la asistencia</x-slot:tituloVisible>

    <table border="1">
        <tr>
            <th>Numero Sesion</th>
            <th>Dorsal</th>
            <th>Fecha</th>
            <th>Asistencia</th>
            <th>Motivo</th>
            <th>Eliminar</th>
        </tr>

        <tr>
            <td>{{ $entrenamiento->numero_sesion }}</td>
            <td>{{ $entrenamiento->dorsal}}</td>
            <td>{{ $entrenamiento->fecha }}</td>
            <td>{{($entrenamiento->asistencia ?? '') ? 'Si' : 'No' }}</td>
            <td>{{ $entrenamiento->motivo}}</td>
        </tr>

    </table>
    <br><br>

    <br/><br/>


    <button class="btn"><a href='{{ route('asistencia_entrenamientos.index') }}'>Volver al listado de jugadores.</a></button>
</x-zz.base>
