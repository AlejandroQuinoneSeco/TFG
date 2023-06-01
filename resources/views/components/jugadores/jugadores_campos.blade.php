<label for='nombre'>Nombre</label>
<input type='text' id='nombre_jugador' name='nombre_jugador' value='{{ $player->nombre_jugador ?? '' }}' />

<label for='dorsal'>Dorsal</label>
<input type='number' id='dorsal' name='dorsal' value='{{ $player->dorsal ?? '' }}' />

<label for='posicion'>Posicion</label>
<input type='text' id='posicion' name='posicion' value='{{ $player->posicion ?? '' }}' />
