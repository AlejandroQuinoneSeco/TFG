<x-zz.base>

    <x-slot:tituloHead>Plantilla</x-slot:tituloHead>
    <x-slot:tituloVisible>Jugadores</x-slot:tituloVisible>

    <h1>Entrenamientos</h1>

    <table border="1">

        <tr>
            <th>Numero Sesion</th>
            <th>Nombre Jugador</th>
            <th>Fecha</th>
            <th>Asistencia</th>
            <th>Motivo</th>
        </tr>

        @foreach ($entrenamiento as $entrenamientos)
            <tr>
                <td>
                    {{ $entrenamientos->Numero_Sesion }}
                </td>

                <td>
                    {{$entrenamientos->Nombre_Jugador}}
                </td>

                <td>
                    {{ $entrenamientos->fecha }}
                </td>

                <td>
                    {{ $entrenamientos->Asistencia}}
                </td>

                <td>
                    {{ $entrenamientos->motivo}}
                </td>

        @endforeach


    </table><br><br>
    <button><a href="{{route('asistencia_entrenamientos.create')}}">Añadir Asistencias</a></button>
    <button><a href="{{route('entrenamientos.index')}}">Volver a entrenamientos</a></button>


</x-zz.base>
