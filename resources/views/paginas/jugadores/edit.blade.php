<x-zz.base>
    <x-slot:tituloHead>Editar Jugador</x-slot:tituloHead>
    <x-slot:tituloVisible>Edita  los  detalles del Jugador</x-slot:tituloVisible>

    <form action='{{ route('players.update', $player) }}' method='post'>
        @method('put')
        @csrf

        <x-jugadores.jugadores_campos :players='$player'/>
        <button type='submit'>Actualizar</button>
        <br><br>
    </form><br>

    <button type='submit'>Actualizar</button>
    </form>

    <button class="boton"><a href='{{ route('players.index') }}'>Ver Jugadores</a></button>

</x-zz.base>
