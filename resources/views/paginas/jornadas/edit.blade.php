<x-zz.base>
    <x-slot:tituloHead>Editar Jugador</x-slot:tituloHead>
    <x-slot:tituloVisible>Edita los detalles del Jugador</x-slot:tituloVisible>

    <form action='{{ route('jornadas.update', $jornada) }}' method='post'>
        @method('put')
        @csrf

        <x-jornadas.jornadas_campos :jornadas='$jornada'/>
        <button type='submit'>Actualizar</button>
        <br><br>
    </form>

    <button class="boton"><a href='{{ route('jornadas.index') }}'>Ver Jornada</a></button>
</x-zz.base>
