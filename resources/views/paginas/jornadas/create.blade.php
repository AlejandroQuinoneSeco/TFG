<x-zz.base>

    <x-slot:tituloHead>Jornadas</x-slot:tituloHead>
    <x-slot:tituloVisible>Mi equipo</x-slot:tituloVisible>

    <form action=' {{ route('jornadas.store') }}' method='post'>
        @method('post')
        @csrf
        <div class="form-group">
        <label for='numero_jornada'>Numero Jornada</label>
        <input type='number' id='numero_jornada' name='numero_jornada' class="form-control">
        </div>

        <div class="form-group">
        <label for='lugar'>Lugar</label>
        <input type='text' id='lugar' name='lugar' class="form-control">
        </div>

        <div class="form-group">
        <label for='fecha'>Fecha</label>
        <input type='date' id='fecha' name='fecha' class="form-control">
        </div>

        <div class="form-group">
        <label for='hora'>Hora</label>
        <input type='time' id='hora' name='hora' class="form-control">
        </div>

        <div class="form-group">
        <label for='proximo_rival'>Proximo Rival</label>
        <input type='text' id='proximo_rival' name='proximo_rival' class="form-control">
        </div>

        <div class="form-group">
        <label for='jugadores_disponibles'>Jugadores Disponibles</label>
        <input type='number' id='jugadores_disponibles' name='jugadores_disponibles' class="form-control">
        </div>

        <div  class="form-group">
            <button type="submit" class="form-control">Añadir jornada</button>
        </div>
    </form>

    <br><br>
    <button class="btn"><a href="{{route('calendarios.index')}}">Calendario</a></button>
    <br><br>
    <button class="btn"><a href="{{route('players.index')}}">Ver jugadores</a></button>

</x-zz.base>
