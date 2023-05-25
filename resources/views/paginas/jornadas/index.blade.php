<x-zz.base>

    <x-slot:tituloHead>Jornadas</x-slot:tituloHead>
    <x-slot:tituloVisible>Mi equipo</x-slot:tituloVisible>

    <table border= '1'>
        <tr>
            <th>Equipo</th>
            <th>Proximo Rival</th>
        </tr>

        @foreach($jornada as $jornadas)
            <tr>
                <td>
                    mi equipo
                </td>
                <td>
                    {{ $jornadas->proximo_rival }}
                </td>
            </tr>
        @endforeach
    </table>

    <h1>Informacion del partido de esta semana</h1>

    <table border="1">
        <tr>
            <th>Numero Jornada</th>
            <th>Lugar</th>
            <th>Fecha</th>
            <th>Hora</th>
            <th>Jugadores Disp.</th>
        </tr>

        @foreach ($jornada as $jornadas)
            <tr>
                <td>
                    {{ $jornadas->numero_jornada }}
                </td>
                <td>
                    {{ $jornadas->lugar }}
                </td>

                <td>
                    {{ $jornadas->fecha }}
                </td>
                <td>
                    {{ $jornadas->hora }}
                </td>

                <td>
                    {{ $jornadas->jugadores_disponibles }}
                </td>
        @endforeach


    </table><br><br>

    <button><a href="{{route('calendarios.index')}}">Calendario</a></button>
    <button><a href="{{route('jornadas.create')}}">Añadir Jornada</a></button>

</x-zz.base>
