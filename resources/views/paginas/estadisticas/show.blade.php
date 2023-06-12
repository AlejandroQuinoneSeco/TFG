<x-zz.base>
    <x-slot:tituloHead>Mostrar Persona</x-slot:tituloHead>
    <x-slot:tituloVisible>Mostrar los detalles de la persona</x-slot:tituloVisible>

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
            <th>Eliminar</th>
        </tr>

        <tr>
            <td>{{ $estadistica->jugador->nombre_jugador }}</td>
            <td>{{ $estadistica->dorsal }}</td>
            <td>{{ $estadistica->partidos_totales }}</td>
            <td>{{ $estadistica->partidos_titular }}</td>
            <td>{{ $estadistica->partidos_suplente }}</td>
            <td>{{ $estadistica->goles }}</td>
            <td>{{ $estadistica->minutos_jugados }}</td>
            <td>{{ $estadistica->tarjetas_amarillas }}</td>
            <td>{{ $estadistica->tarjetas_rojas }}</td>
            <td>
                <form id='{{ $estadistica->nombre_jugador }}' action='{{ route('estadisticas.destroy', $estadistica) }}'
                      method='post'>
                    @method('delete')

                    <input class="btn" type='submit' name='crear' value='Eliminar' />
                </form>
            </td>
        </tr>
    </table>
    <br><br>

    <button class="btn"><a href='{{ route('estadisticas.edit', $estadistica) }}'>Editarla</a></button>

    <br/><br/>


    <button class="btn"><a href='{{ route('players.index') }}'>Volver al listado de jugadores.</a></button>
</x-zz.base>
