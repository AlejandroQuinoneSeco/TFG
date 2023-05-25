<x-zz.base>

    <x-slot:tituloHead>Plantilla</x-slot:tituloHead>
    <x-slot:tituloVisible>Jugadores</x-slot:tituloVisible>

    <h1>Entrenamientos</h1>

    <table border="1">

        <tr>
            <th>Numero Sesion</th>
            <th>Dorsal</th>
            <th>Fecha</th>
            <th>Asistencia</th>
            <th>Motivo</th>
        </tr>

        @foreach ($entrenamientos as $entrenamiento)
            <tr>
                <td>
                    {{ $entrenamiento->numero_sesion }}
                </td>

                <td>
                    {{$entrenamiento->dorsal}}
                </td>

                <td>
                    {{ $entrenamiento->fecha }}
                </td>

                <td>
                    {{ ($entrenamiento->asistencia ?? '') ? 'Si' : 'No' }}

                </td>

                <td>
                    {{ $entrenamiento->motivo}}
                </td>

        @endforeach


    </table><br><br>
    <button><a href="{{route('asistencia_entrenamientos.create')}}">Añadir Asistencias</a></button>
    <button><a href="{{route('entrenamientos.index')}}">Volver a entrenamientos</a></button>


</x-zz.base>
