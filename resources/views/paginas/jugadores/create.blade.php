<x-zz.base>

    <x-slot:tituloHead>Jornadas</x-slot:tituloHead>
    <x-slot:tituloVisible>Mi equipo</x-slot:tituloVisible>

    <form action=' {{ route('players.store') }}' method='post'>
        @method('post')
        @csrf
<div class="form-group">
        <label for='nombre_jugador'>Nombre Jugador</label>
        <input type='text' id='nombre_jugador' name='nombre_jugador'  class="form-control">
</div>

        <div class="form-group">

        <label for='dorsal'>Dorsal</label>
        <input type='number' id='dorsal' name='dorsal'  class="form-control">
        </div>

        <div class="form-group">

       <label for='posicion'>Posicion</label>
        <input type='text' id='posicion' name='posicion'  class="form-control">
        </div>

        <div  class="form-group">
            <button type="submit" class="form-control">Añadir jugador</button>
        </div>
    </form>
    <br><br>
    <button><a href="{{route('calendarios.index')}}">Calendario</a></button>
    <br><br>
    <button><a href="{{route('players.index')}}">Ver jugadores</a></button>

</x-zz.base>
