<x-zz.base>
    <x-slot:tituloHead>Calendario</x-slot:tituloHead>
    <x-slot:tituloVisible>Calendario</x-slot:tituloVisible>

    <head>
        <link href="{{ asset('public/css/custom.css') }}" rel="stylesheet">
    </head>
    <div class="table-responsive">
        <table class="table">
            <tr>
                <th>Numero Jornada</th>
                <th>Rival</th>
                <th>Resultado</th>
                <th>Añadir resultado</th>
            </tr>

            @foreach ($jornadas->slice(0, -1) as $jornada)
                <tr>
                    <td>{{ $jornada->numero_jornada }}</td>
                    <td>{{ $jornada->proximo_rival }}</td>
                    <td>
                        @foreach ($calendarios as $calendario)
                            @if ($calendario->numero_jornada == $jornada->numero_jornada)
                                {{ $calendario->resultado }}
                            @endif
                        @endforeach
                    </td>
                    <td>
                        <button class="btn">
                            <a href="{{ route('calendarios.create', ['numero_jornada' => $jornada->numero_jornada, 'proximo_rival' => $jornada->proximo_rival]) }}">
                                Añadir resultado
                            </a>
                        </button>
                    </td>
                </tr>
            @endforeach
        </table><br><br>
    </div>
    <button class="btn"><a href="{{ route('jornadas.index') }}">Ver jornadas</a></button>
</x-zz.base>
