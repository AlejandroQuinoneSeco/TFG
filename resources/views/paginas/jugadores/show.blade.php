<x-zz.base>

    <x-slot:tituloHead>Mostrar Persona</x-slot:tituloHead>
    <x-slot:tituloVisible>Mostrar los detalles de la persona</x-slot:tituloVisible>

    <p>{{$player->nombre_jugador}}</p>
    <p>{{$player->dorsal}}</p>
    <p>{{$player->posicion}}</p>

    <a href='{{ route('players.edit', $player) }}'>Editarla</a>

    <br/><br/>

    <form id='{{ $player->dorsal }}' action='{{ route('players.destroy', $player) }}'
          method='post'>
        @method('delete')

        <input class='btn' type='submit' name='crear' value='Eliminar persona' />
    </form>

    <br>

    <a href='{{ route('players.index') }}'>Volver al listado de jugadores.</a>

</x-zz.base>
