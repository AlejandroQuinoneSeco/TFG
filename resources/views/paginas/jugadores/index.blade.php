<x-zz.base>
    <x-slot:tituloHead>Plantilla</x-slot:tituloHead>
    <x-slot:tituloVisible>Jugadores</x-slot:tituloVisible>

    <head>
        <h1>Plantilla</h1>
        <link href="{{ asset('public/css/custom.css') }}" rel="stylesheet">
    </head>

    <div class="table-responsive">
        <table class="table">
            <tr>
                <th>Nombre Jugador</th>
                <th>Dorsal</th>
                <th>Posicion</th>
                <th>Estadisticas</th>
                <th>Añadir estadisticas</th>
                <th>Eliminar</th>
            </tr>

            @foreach ($players as $player)
                <tr>
                    <td>
                        <a href='{{ route('players.show', $player->dorsal) }}'>{{ $player->nombre_jugador }}</a>
                    </td>
                    <td>
                        <a href='{{ route('players.show', $player->dorsal) }}'>{{ $player->dorsal }}</a>
                    </td>
                    <td>
                        <a href='{{ route('players.show', $player->dorsal) }}'>{{ $player->posicion }}</a>
                    </td>
                    <td>
                        @if ($player->estadisticas->count() > 0)
                            <button class="btn">
                                <a href="{{ route('estadisticas.showByPlayer', ['nombre_jugador' => $player->nombre_jugador]) }}">Ver estadísticas</a>
                            </button>
                        @else
                            <button class="btn" disabled>No hay estadísticas</button>
                        @endif
                    </td>
                    <td>
                        @if (in_array($player->dorsal, $jugadoresConEstadisticas))
                            <button class="btn" disabled>Añadir estadísticas</button>
                        @else
                            <button class="btn">
                                <a href="{{ route('estadisticas.create', ['nombre_jugador' => $player->nombre_jugador, 'dorsal' => $player->dorsal]) }}">Añadir estadística</a>
                            </button>
                        @endif
                    </td>
                    <td>
                        <form action='{{ route('players.destroy', $player->dorsal) }}' method='post'>
                            @method('delete')
                            @csrf
                            <button class="btn" type='submit'>Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    <br><br>
    <button class="btn"><a href="{{ route('players.create') }}">Añadir jugador</a></button>
</x-zz.base>

