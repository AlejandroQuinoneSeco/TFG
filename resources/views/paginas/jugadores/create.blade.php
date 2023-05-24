<x-zz.base>

    <x-slot:tituloHead>Jornadas</x-slot:tituloHead>
    <x-slot:tituloVisible>Mi equipo</x-slot:tituloVisible>

    <form action=' {{ route('jugadores.store') }}' method='post'>
        @method('post')
        @csrf

        <br><label for='nombre_jugador'>Nombre Jugador</label>
        <input type='text' id='nombre_jugador' name='nombre_jugador'>

        <br><label for='dorsal'>Dorsal</label>
        <input type='number' id='dorsal' name='dorsal'>

        <br><label for='posicion'>Posicion</label>
        <input type='text' id='posicion' name='posicion'>

        <br><br>
        <input class='boton' type='submit' name='crear' value='Añadir jugador'>
    </form>
    <br><br>
    <button><a href="{{route('calendarios.index')}}">Calendario</a></button>
    <br><br>
    <button><a href="{{route('jugadores.index')}}">Ver jugadores</a></button>

</x-zz.base>
