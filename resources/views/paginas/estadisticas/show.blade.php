<x-zz.base>

    <x-slot:tituloHead>Mostrar Partida</x-slot:tituloHead>
    <x-slot:titulo>Mostrar los detalles de la Partida</x-slot:titulo>

    <table>

        <tr>
            <th>Nombre Jugador</th>
            <th>Dorsal</th>
        </tr>
        @foreach ($estadisticas as $estadistica)
            <tr>
                <td>
                    <a href='{{ route('estadisticas.edit', $estadistica) }}'>{{ $estadistica->dorsal }}</a>
                </td>
                <td>
                    <form action='{{ route('estadisticas.destroy', $estadistica) }}' method='post'>
                        @method('delete')
                        @csrf

                        <button class="botonEliminar" type='submit'>(X)</button>
                    </form>
                </td>
            </tr>
        @endforeach
        <br />

    </table>


</x-zz.base>
