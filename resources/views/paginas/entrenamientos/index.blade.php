<x-zz.base>

    <x-slot:tituloHead>Plantilla</x-slot:tituloHead>
    <x-slot:tituloVisible>Jugadores</x-slot:tituloVisible>

    <h1>Entrenamientos</h1>

    <table border="1">

        <tr>
            <th>Numero Sesion</th>
            <th>Fecha</th>
            <th>Jugadores Disponibles</th>
            <th>Descripcion</th>
        </tr>

        @foreach ($entrenamiento as $entrenamientos)
            <tr>
                <td>
                    {{ $entrenamientos->numero_sesion }}
                </td>

                <td>
                    {{ $entrenamientos->fecha }}
                </td>

                <td>
                    {{ $entrenamientos->jugadores_disponibles}}
                </td>

                <td>
                    {{ $entrenamientos->descripcion}}
                </td>

        @endforeach


    </table><br><br>
    <button><a href="{{route('entrenamientos.create')}}">Añadir Entreno</a></button>
    <button><a href="{{route('asistencia_entrenamientos.index')}}">Ver asistencia</a></button>


</x-zz.base>
