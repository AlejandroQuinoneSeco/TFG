<x-zz.base>

    <x-slot:tituloHead>Jornadas</x-slot:tituloHead>
    <x-slot:tituloVisible>Mi equipo</x-slot:tituloVisible>

    @if(isset($ultimaJornada))
        <div class="table-responsive">
            <table class="table">
        <tr>
            <th>Equipo</th>
            <th>Proximo Rival</th>
        </tr>
        <tr>
            <td>Mi equipo</td>
            <td>{{ $ultimaJornada->proximo_rival }}</td>
        </tr>
    </table>
        </div>
    @endif
    @if(isset($ultimaJornada))
    <h1>Informacion del partido de esta semana</h1>

        <div class="table-responsive">
            <table class="table">
        <tr>
            <th>Numero Jornada</th>
            <th>Lugar</th>
            <th>Fecha</th>
            <th>Hora</th>
            <th>Jugadores Disp.</th>
        </tr>
        <tr>
            <td><a href='{{ route('jornadas.show', $ultimaJornada->numero_jornada) }}'>{{ $ultimaJornada->numero_jornada }}</a></td>
            <td><a href='{{ route('jornadas.show', $ultimaJornada->numero_jornada) }}'>{{ $ultimaJornada->lugar }}</a></td>
            <td><a href='{{ route('jornadas.show', $ultimaJornada->numero_jornada) }}'>{{ $ultimaJornada->fecha }}</a></td>
            <td><a href='{{ route('jornadas.show', $ultimaJornada->numero_jornada) }}'>{{ $ultimaJornada->hora }}</a></td>
            <td><a href='{{ route('jornadas.show', $ultimaJornada->numero_jornada) }}'>{{ $ultimaJornada->jugadores_disponibles }}</a></td>
            <td><button class="btn"><a href="{{ route('jornadas.edit', ['jornada' => $ultimaJornada->numero_jornada]) }}">Editar Jornada</a></button></td>
        </tr>
    </table>
        </div>
            @else
               <p>No hay jornadas registradas.</p>
            @endif

    </table>


        <button class="btn"><a href="{{route('calendarios.index')}}">Calendario</a></button>
        <button class="btn"><a href="{{route('jornadas.create')}}">Añadir Jornada</a></button>

        </div>






</x-zz.base>
