<x-zz.base>

    <x-slot:tituloHead>Plantilla</x-slot:tituloHead>
    <x-slot:tituloVisible>Jugadores</x-slot:tituloVisible>

    <h1>Plantilla</h1>

    <table border="1">
        <tr>
            <th>Nombre Jugador</th>
            <th>Dorsal</th>
            <th>Posicion</th>
            <th>Partidos totales</th>
            <th>Partidos titular</th>
            <th>Partidos suplente</th>
            <th>Goles</th>
            <th>Minutos Jugados</th>
            <th>Tarjetas Amarillas</th>
            <th>Tarjetas Rojas</th>
            <th>Eliminar</th>

        </tr>

        @foreach ($estadisticas as $estadistica)
            <tr>
                <td>
                    <a href='{{ route('estadisticas.show', $estadistica->nombre_jugador) }}'> {{ $estadistica->nombre_jugador }} </a>
                </td>

                <td>
                    <a href='{{ route('estadisticas.show', $estadistica->dorsal) }}'> {{ $estadistica->dorsal }} </a>
                </td>

                <td>
                    <a href='{{ route('estadisticas.show', $estadistica->posicion) }}'> {{ $estadistica->posicion }} </a>
                </td>

                <td>
                    <a href='{{ route('estadisticas.show', $estadistica->partidos_totales) }}'>  {{ $estadistica->partidos_totales }} </a>
                </td>

                <td>
                    <a href='{{ route('estadisticas.show', $estadistica->partidos_titular) }}'> {{ $estadistica->partidos_titular }} </a>
                </td>

                <td>
                    <a href='{{ route('estadisticas.show',  $estadistica->partidos_suplente ) }}'>{{ $estadistica->partidos_suplente }} </a>
                </td>

                <td>
                    <a href='{{ route('estadisticas.show', $estadistica->goles) }}'> {{ $estadistica->goles }} </a>
                </td>

                <td>
                    <a href='{{ route('estadisticas.show', $estadistica->minutos_jugados) }}'> {{ $estadistica->minutos_jugados }} </a>
                </td>

                <td>
                    <a href='{{ route('estadisticas.show', $estadistica->tarjetas_amarillas) }}'>  {{ $estadistica->tarjetas_amarillas }} </a>
                </td>

                <td>
                    <a href='{{ route('estadisticas.show', $estadistica->tarjetas_rojas) }}'>  {{ $estadistica->tarjetas_rojas }} </a>
                </td>

        @endforeach

    </table><br><br>
    <button class="boton"><a href='{{ route('estadisticas.create') }}'>Crear estadisticas</a></button><br><br>
    <button class="boton"><a href='{{ route('jugadores.index') }}'>Ver jugadores</a></button>


</x-zz.base>
