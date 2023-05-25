<x-zz.base>
    <x-slot:tituloHead>Editar estadistica</x-slot:tituloHead>
    <x-slot:titulo>Editar estadisticas</x-slot:titulo>

    <form action='{{ route('estadisticas.update', $estadisticas) }}' method='post'>
        @method('put')
        @csrf

            <x-estadisticas.estadisticas_campos :estadisticas='$estadisticas'/>

            <br><br>

            <button type='submit'>Actualizar</button>
        </form><br>

        <button type='submit'>Actualizar</button>
    </form>

    <button class="boton"><a href='{{ route('estadisticas.index') }}'>Ver estadisticas</a></button>
</x-zz.base>
