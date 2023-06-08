<div class="form-group">
    <label for='numero_jornada'>Numero Jornada</label>
    <input type='number' id='numero_jornada' name='numero_jornada' class="form-control" value='{{ $jornada->numero_jornada ?? '' }}'>
</div>

<div class="form-group">
    <label for='lugar'>Lugar</label>
    <input type='text' id='lugar' name='lugar' class="form-control" value='{{ $jornada->lugar ?? '' }}'>
</div>

<div class="form-group">
    <label for='fecha'>Fecha</label>
    <input type='date' id='fecha' name='fecha' class="form-control" value='{{ $jornada->fecha ?? '' }}'>
</div>

<div class="form-group">
    <label for='hora'>Hora</label>
    <input type='time' id='hora' name='hora' class="form-control" value='{{ $jornada->hora ?? '' }}'>
</div>

<div class="form-group">
    <label for='proximo_rival'>Proximo Rival</label>
    <input type='text' id='proximo_rival' name='proximo_rival' class="form-control" value='{{ $jornada->proximo_rival ?? '' }}'>
</div>

<div class="form-group">
    <label for='jugadores_disponibles'>Jugadores Disponibles</label>
    <input type='number' id='jugadores_disponibles' name='jugadores_disponibles' class="form-control" value='{{ $jornada->jugadores_disponibles ?? '' }}'>
</div>
