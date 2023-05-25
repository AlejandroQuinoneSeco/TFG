<x-zz.base>

    <x-slot:tituloHead>Calendario</x-slot:tituloHead>
    <x-slot:tituloVisible>Calendario</x-slot:tituloVisible>

    <h1>Calendario</h1>

    <table border="1">
        <tr>
            <th>Numero Jornada</th>
            <th>Rival</th>
            <th>Resultado</th>
        </tr>

        @foreach ($calendarios as $calendario)
            <tr>
                <td>
                    {{ $calendario->numero_jornada }}
                </td>

                <td>
                    {{ $calendario->rival }}
                </td>

                <td>
                    {{ $calendario->resultado }}
                </td>

        @endforeach




    </table><br><br>

    <button><a href="{{route('jornadas.index')}}">Ver jornadas</a></button>

    <button><a href="{{route('calendarios.create')}}">Añadir resultado</a></button>

</x-zz.base>
