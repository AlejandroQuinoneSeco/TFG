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
            <th>Partidos totales</th>
            <th>Partidos titular</th>
            <th>Partidos suplente</th>
            <th>Goles</th>
            <th>Minutos Jugados</th>
            <th>Tarjetas Amarillas</th>
            <th>Tarjetas Rojas</th>
            <th>Actualizar</th>

        </tr>

        @foreach ($estadisticas as $estadistica)
            <tr>
                <td>{{ $estadistica->jugador->nombre_jugador }}</td>
                <td>{{ $estadistica->jugador->dorsal }}</td>
                <td>{{ $estadistica->partidos_totales }}</td>
                <td>{{ $estadistica->partidos_titular }}</td>
                <td>{{ $estadistica->partidos_suplente }}</td>
                <td>{{ $estadistica->goles }}</td>
                <td>{{ $estadistica->minutos_jugados }}</td>
                <td>{{ $estadistica->tarjetas_amarillas }}</td>
                <td>{{ $estadistica->tarjetas_rojas }}</td>
                <td>
                    <button><a href="{{ route('estadisticas.edit', ['estadistica' => $estadistica->dorsal]) }}">Editar</a></button>
                </td>
            </tr>
        @endforeach



    </table>
    </div>
    <button><a href='{{ route('players.index') }}'>Ver jugadores</a></button>


</x-zz.base>
