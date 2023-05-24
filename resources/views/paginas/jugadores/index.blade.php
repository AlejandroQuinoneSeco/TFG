<x-zz.base>

    <x-slot:tituloHead>Plantilla</x-slot:tituloHead>
    <x-slot:tituloVisible>Jugadores</x-slot:tituloVisible>

    <h1>Plantilla</h1>

    <table border="1">
        <tr>
            <th>Nombre Jugador</th>
            <th>Dorsal</th>
            <th>Posicion</th>
        </tr>

        @foreach ($jugadores as $jugador)
            <tr>
                <td>
                    {{ $jugador->nombre_jugador }}
                </td>

                <td>
                    {{ $jugador->dorsal }}
                </td>

                <td>
                    {{ $jugador->posicion }}
                </td>

        @endforeach

    </table><br><br>

    <button><a href="{{route('estadisticas.index')}}">Ver estadisticas</a></button>
    <button><a href="{{route('jugadores.create')}}">Añadir jugador</a></button>

</x-zz.base>
