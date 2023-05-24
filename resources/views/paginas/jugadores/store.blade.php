<x-zz.base>

    <x-slot:tituloHead>Plantilla</x-slot:tituloHead>
    <x-slot:tituloVisible>Jugadores</x-slot:tituloVisible>

    <h1>Plantilla</h1>

    <table border="1">
        <tr>
            <th>Nombre Jugador</th>
            <th>Dorsal</th>
        </tr>
        <tr>
            <td>
                {{ $jugadores->dorsal }}
            </td>

            <td>
                {{ $jugadores->nombre_jugador }}
            </td>

    </table><br><br>

</x-zz.base>
