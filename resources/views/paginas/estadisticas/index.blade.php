<x-zz.base>

    <x-slot:tituloHead>Plantilla</x-slot:tituloHead>
    <x-slot:tituloVisible>Jugadores</x-slot:tituloVisible>

    <h1>Plantilla</h1>

    <table border="1">
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
            </tr>
        @endforeach



    </table><br><br>
    <button><a href='{{ route('estadisticas.create') }}'>Crear estadisticas</a></button><br><br>
    <button><a href='{{ route('players.index') }}'>Ver jugadores</a></button>


</x-zz.base>
