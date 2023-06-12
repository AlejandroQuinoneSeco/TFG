<x-zz.base>

    <x-slot:tituloHead>Jornadas</x-slot:tituloHead>
    <x-slot:tituloVisible>Mi equipo</x-slot:tituloVisible>

    <form action=' {{ route('entrenamientos.store') }}' method='post'>
        @method('post')
        @csrf
        <div class="form-group">
        <label for='numero_Sesion'>Numero Sesion</label>
        <input type='text' id='numero_sesion' name='numero_sesion'  class="form-control">
        </div>

        <div class="form-group">
        <label for='fecha'>Fecha</label>
        <input type='date' id='fecha' name='fecha' class="form-control">
        </div>

        <div class="form-group">
            <label for='jugadores_disponibles'>Jugadores Disponibles</label>
            <input type='number' id='jugadores_disponibles' name='jugadores_disponibles' class="form-control">
        </div>

        <div class="form-group">
            <label for='descripcion'>Descripcion</label>
            <input type='text' id='descripcion' name='descripcion' class="form-control">
        </div>

        <div  class="form-group">
            <button type="submit" class="form-control">Añadir entrenamiento</button>
        </div>
    </form>
    <br><br>
    <button class="btn"><a href="{{route('calendarios.index')}}">Calendario</a></button>
    <br><br>
    <button class="btn"><a href="{{route('players.index')}}">Ver jugadores</a></button>

</x-zz.base>
