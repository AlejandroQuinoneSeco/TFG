<x-zz.base>

    <x-slot:tituloHead>Jornadas</x-slot:tituloHead>
    <x-slot:tituloVisible>Mi equipo</x-slot:tituloVisible>

    <form action=' {{ route('jornadas.store') }}' method='post'>
        @method('post')
        @csrf

        <br><label for='numero_jornada'>Numero Jornada</label>
        <input type='number' id='numero_jornada' name='numero_jornada'>

        <br><label for='lugar'>Lugar</label>
        <input type='text' id='lugar' name='lugar'>

        <br><label for='fecha'>Fecha</label>
        <input type='date' id='fecha' name='fecha'>

        <br><label for='hora'>Hora</label>
        <input type='time' id='hora' name='hora'>

        <br><label for='proximo_rival'>Proximo Rival</label>
        <input type='text' id='proximo_rival' name='proximo_rival'>

        <br><label for='jugadores_disponibles'>Jugadores Disponibles</label>
        <input type='number' id='jugadores_disponibles' name='jugadores_disponibles'>

        <br><br>
        <input class='boton' type='submit' name='crear' value='Añadir jornada'>
    </form>

    <br><br>
    <button><a href="{{route('calendarios.index')}}">Calendario</a></button>
    <br><br>
    <button><a href="{{route('players.index')}}">Ver jugadores</a></button>

</x-zz.base>
