<x-zz.base>
    <x-slot:tituloHead>Editar estadistica</x-slot:tituloHead>
    <x-slot:titulo>Editar estadisticas</x-slot:titulo>

    <form action='{{ route('estadisticas.update', $estadisticas) }}' method='post'>
        @method('put')
        @csrf

        <br><label for='nombre_jugador'>Nombre Jugador</label>
        <input type='text' id='nombre_jugador' name='nombre_jugador' value='{{ $estadisticas->nombre_jugador }}'>

        <br><label for='dorsal'>Dorsal</label>
        <input type='number' id='dorsal' name='dorsal' value='{{ $estadisticas->dorsal }}'>

        <br><label for='posicion'>Posicion</label>
        <input type='text' id='posicion' name='posicion' value='{{ $estadisticas->posicion }}'>

        <br><label for='partidos_totales'>Partidos Totales</label>
        <input type='number' id='partidos_totales' name='partidos_totales' value='{{ $estadisticas->partidos_totales }}'>

        <br><label for='partidos_titular'>Partidos Titular</label>
        <input type='number' id='partidos_titular' name='partidos_titular' value='{{ $estadisticas->partidos_titular }}'>

        <br><label for='partidos_suplente'>Partidos Suplente</label>
        <input type='number' id='partidos_suplente' name='partidos_suplente' value='{{ $estadisticas->partidos_suplente }}'>

        <br><label for='goles'>Goles</label>
        <input type='number' id='goles' name='goles' value='{{ $estadisticas->goles }}'>

        <br><label for='minutos_jugados'>Minutos Jugados</label>
        <input type='number' id='minutos_jugados' name='minutos_jugados' value='{{ $estadisticas->minutos_jugados }}'>

        <br><label for='tarjetas_amarillas'>Tarjetas Amarillas</label>
        <input type='number' id='tarjetas_amarillas' name='tarjetas_amarillas'  value='{{ $estadisticas->tarjetas_amarillas }}'>

        <br><label for='tarjetas_rojas'>Tarjetas Rojas</label>
        <input type='number' id='tarjetas_rojas' name='tarjetas_rojas' value='{{ $estadisticas->tarjetas_rojas }}'>
    </form>

    <button class="boton"><a href='{{ route('estadisticas.index') }}'>Ver estadisticas</a></button>
</x-zz.base>
