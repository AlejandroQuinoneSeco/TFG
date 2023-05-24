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

        @foreach ($calendario as $calendarios)
            <tr>
                <td>
                    {{ $calendarios->Numero_Jornada }}
                </td>

                <td>
                    {{ $calendarios->Rival }}
                </td>

                <td>
                    {{ $calendarios->Resultado }}
                </td>

        @endforeach




    </table><br><br>

    <button><a href="{{route('jornadas.index')}}">Ver jornadas</a></button>

    <button><a href="{{route('calendarios.create')}}">Añadir resultado</a></button>

</x-zz.base>
