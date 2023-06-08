<x-zz.base>

    <x-slot:tituloHead>Jornadas</x-slot:tituloHead>
    <x-slot:tituloVisible>Mi equipo</x-slot:tituloVisible>


    <form action=' {{ route('estadisticas.store') }}' method='post'>
        @method('post')
        @csrf
<div class="form-group">
        <label for='nombre_jugador'>Nombre Jugador</label>
        <input type='text' id='nombre_jugador' name='nombre_jugador'class="form-control" value="{{ $nombreJugador }}" readonly>
</div>
        <div class="form-group">
            <label for="dorsal">Dorsal</label>
            <input type="number" id="dorsal" name="dorsal" class="form-control" value="{{ $dorsal }}" readonly>
        </div>

        <div class="form-group">

        <label for='partidos_totales'>Partidos Totales</label>
        <input type='number' class="form-control" id='partidos_totales' name='partidos_totales'>
        </div>

        <div class="form-group">
        <label for='partidos_titular'>Partidos Titular</label>
        <input type='number' class="form-control" id='partidos_titular' name='partidos_titular'>
        </div>

        <div class="form-group">

        <label for='partidos_suplente'>Partidos Suplente</label>
        <input type='number' id='partidos_suplente' class="form-control" name='partidos_suplente'>
        </div>

        <div class="form-group">

        <label for='goles'>Goles</label>
        <input type='number' id='goles' class="form-control" name='goles'>
        </div>

        <div class="form-group">
        <label for='minutos_jugados'>Minutos Jugados</label>
        <input type='number' id='minutos_jugados' class="form-control" name='minutos_jugados'>
        </div>

        <div class="form-group">
        <label for='tarjetas_amarillas'>Tarjetas Amarillas</label>
        <input type='number' class="form-control" id='tarjetas_amarillas' name='tarjetas_amarillas'>
        </div>

        <div class="form-group">
        <label for='tarjetas_rojas'>Tarjetas Rojas</label>
        <input type='number' id='tarjetas_rojas' class="form-control" name='tarjetas_rojas'>
        </div>

        <div  class="form-group">
            <button type="submit" class="form-control">Añadir Datos</button>
        </div>

    </form>


    <br><br>
    <button><a href="{{route('players.index')}}">Plantilla</a></button>
</x-zz.base>
