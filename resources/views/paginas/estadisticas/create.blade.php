<x-zz.base>

    <x-slot:tituloHead>Jornadas</x-slot:tituloHead>
    <x-slot:tituloVisible>Mi equipo</x-slot:tituloVisible>


    <form action=' {{ route('estadisticas.store') }}' method='post'>
        @method('post')
        @csrf

        <br><label for='nombre_jugador'>Nombre Jugador</label>
        <input type='text' id='nombre_jugador' name='nombre_jugador' value="{{ request('nombre_jugador')}}">

        <br><label for='dorsal'>Dorsal</label>
        <input type='number' id='dorsal' name='dorsal' value="{{ request('dorsal')}}">

        <br><label for='partidos_totales'>Partidos Totales</label>
        <input type='number' id='partidos_totales' name='partidos_totales'>

        <br><label for='partidos_titular'>Partidos Titular</label>
        <input type='number' id='partidos_titular' name='partidos_titular'>

        <br><label for='partidos_suplente'>Partidos Suplente</label>
        <input type='number' id='partidos_suplente' name='partidos_suplente'>

        <br><label for='goles'>Goles</label>
        <input type='number' id='goles' name='goles'>

        <br><label for='minutos_jugados'>Minutos Jugados</label>
        <input type='number' id='minutos_jugados' name='minutos_jugados'>

        <br><label for='tarjetas_amarillas'>Tarjetas Amarillas</label>
        <input type='number' id='tarjetas_amarillas' name='tarjetas_amarillas'>

        <br><label for='tarjetas_rojas'>Tarjetas Rojas</label>
        <input type='number' id='tarjetas_rojas' name='tarjetas_rojas'>

        <br><br>
        <input class='boton' type='submit' name='crear' value='Añadir Datos'>

    </form>


    <br><br>
    <button><a href="{{route('estadisticas.index')}}">Estadisticas</a></button>
</x-zz.base>
