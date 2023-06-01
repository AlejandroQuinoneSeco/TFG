<x-zz.base>

    <x-slot:tituloHead>Jornadas</x-slot:tituloHead>
    <x-slot:tituloVisible>Mi equipo</x-slot:tituloVisible>

    @if(isset($ultimaJornada))
    <table border= '1'>
        <tr>
            <th>Equipo</th>
            <th>Proximo Rival</th>
        </tr>
        <tr>
            <td>Mi equipo</td>
            <td>{{ $ultimaJornada->proximo_rival }}</td>
        </tr>
    </table>
    @endif
    @if(isset($ultimaJornada))
    <h1>Informacion del partido de esta semana</h1>

    <table border="1">
        <tr>
            <th>Numero Jornada</th>
            <th>Lugar</th>
            <th>Fecha</th>
            <th>Hora</th>
            <th>Jugadores Disp.</th>
        </tr>
        <tr>
            <td>{{ $ultimaJornada->numero_jornada }}</td>
            <td>{{ $ultimaJornada->lugar }}</td>
            <td>{{ $ultimaJornada->fecha }}</td>
            <td>{{ $ultimaJornada->hora }}</td>
            <td>{{ $ultimaJornada->jugadores_disponibles }}</td>
        </tr>
    </table>
            @else
               <p>No hay jornadas registradas.</p>
            @endif

    </table><br><br>

    <button><a href="{{route('calendarios.index')}}">Calendario</a></button>
    <button><a href="{{route('jornadas.create')}}">Añadir Jornada</a></button>

</x-zz.base>
