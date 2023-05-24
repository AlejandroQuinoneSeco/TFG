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
            <th>Posicion</th>
        </tr>
        @foreach ($jugadores as $jugador)
            <tr>
                <td>
                    {{ $jugador->dorsal }}
                </td>

                <td>
                    {{ $jugador->nombre_jugador }}
                </td>
        @endforeach
    </table><br><br>

</x-zz.base>
