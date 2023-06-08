<x-zz.base>

    <x-slot:tituloHead>Jornadas</x-slot:tituloHead>
    <x-slot:tituloVisible>Mi equipo</x-slot:tituloVisible>

    <div class="table-responsive">
        <table class="table">
            <tr>
                <th>Numero Jornada</th>
                <th>Lugar</th>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Jugadores Disp.</th>
                <th>Eliminar</th>
            </tr>
            <tr>
                <td><p>{{ $jornada->numero_jornada }}</p></td>
                <td><p>{{ $jornada->lugar }}</p></td>
                <td><p>{{ $jornada->fecha }}</p></td>
                <td><p>{{ $jornada->hora }}</p></td>
                <td><p>{{ $jornada->jugadores_disponibles }}</p></td>
                <td><form id='{{ $jornada->proximo_rival }}' action='{{ route('jornadas.destroy', $jornada) }}'
                      method='post'>
                    @method('delete')

                    <input class='button' type='submit' name='crear' value='Eliminar jornada' /></td>
                </form>
            </tr>
        </table>
    <br/><br/>


    <button><a href="{{route('jornadas.index')}}">Jornadas</a></button>
    <button><a href='{{ route('jornadas.edit', $jornada) }}'>Editarla</a></button>
</x-zz.base>
