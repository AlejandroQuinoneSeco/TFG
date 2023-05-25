<x-zz.base>

    <x-slot:tituloHead>Plantilla</x-slot:tituloHead>
    <x-slot:tituloVisible>Jugadores</x-slot:tituloVisible>

    <h1>Plantilla</h1>

    <table border="1">
        <tr>
            <th>Nombre Jugador</th>
            <th>Dorsal</th>
            <th>Posicion</th>
            <th>Eliminar</th>
            <th>Estadisticas</th>
        </tr>



        @foreach ($players as $player)
            <tr>
                <td>
                    <a href='{{ route('players.show', $player->dorsal) }}'>{{ $player->nombre_jugador }}</a>
                </td>

                <td>
                    <a href='{{ route('players.show', $player->dorsal) }}'>{{ $player->dorsal }} </a>
                </td>
                <td>
                    <a href='{{ route('players.show', $player->dorsal) }}'>{{ $player->posicion }} </a>
                </td>

                <td>
                    <form action='{{ route('players.destroy', $player->dorsal) }}' method='post'>
                        @method('delete')
                        @csrf

                        <button type='submit'>Eliminar</button>
                    </form>
                </td>
                <td>
                <button><a href="{{ route('estadisticas.index', ['nombre_jugador' => $player->nombre_jugador]) }}">Ver estadísticas</a></button>
                </td>
            </tr>
        @endforeach

    </table>
    <br><br>

    <button><a href="{{route('players.create')}}">Añadir jugador</a></button>

</x-zz.base>


