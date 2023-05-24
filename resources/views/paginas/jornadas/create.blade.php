<x-zz.base>

    <x-slot:tituloHead>Jornadas</x-slot:tituloHead>
    <x-slot:tituloVisible>Mi equipo</x-slot:tituloVisible>

    <form action=' {{ route('jornadas.store') }}' method='post'>
        @method('post')
        @csrf

        <br><label for='Numero_jornada'>Numero Jornada</label>
        <input type='text' id='Numero_jornada' name='Numero_jornada'>

        <br><label for='Lugar'>Lugar</label>
        <input type='text' id='Lugar' name='Lugar'>

        <br><label for='Fecha'>Fecha</label>
        <input type='date' id='Fecha' name='Fecha'>

        <br><label for='Hora'>Hora</label>
        <input type='time' id='Hora' name='Hora'>

        <br><label for='Proximo_rival'>Proximo Rival</label>
        <input type='text' id='Proximo_rival' name='Proximo_rival'>

        <br><label for='Anterior_rival'>Rival Anterior</label>
        <input type='text' id='Anterior_rival' name='Anterior_rival'>

        <br><label for='Jugadores_disponibles'>Jugadores Disponibles</label>
        <input type='number' id='Jugadores_disponibles' name='Jugadores_disponibles'>

        <br><br>
        <input class='boton' type='submit' name='crear' value='Añadir jornada'>
    </form>

    <br><br>
    <button><a href="{{route('calendarios.index')}}">Calendario</a></button>
    <br><br>
    <button><a href="{{route('jugadores.index')}}">Ver jugadores</a></button>

</x-zz.base>
