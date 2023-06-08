<x-zz.base>

    <x-slot:tituloHead>Plantilla</x-slot:tituloHead>
    <x-slot:tituloVisible>Jugadores</x-slot:tituloVisible>

    <h1>Entrenamientos</h1>

    <div class="table-responsive">
        <table class="table">

        <tr>
            <th>Numero Sesion</th>
            <th>Fecha</th>
            <th>Jugadores Disponibles</th>
            <th>Descripcion</th>
        </tr>
{{--
        @foreach ($entrenamiento as $entrenamientos)
            <tr>
                <td>
                    {{ $entrenamientos->numero_sesion }}
                </td>

                <td>
                    {{ $entrenamientos->fecha }}
                </td>

                <td>
                    {{ $entrenamientos->jugadores_disponibles}}
                </td>

                <td>
                    {{ $entrenamientos->descripcion}}
                </td>

                <td>
                    <a href="{{ route('asistencia_entrenamientos.index', $entrenamientos->numero_sesion) }}">Ver asistencia</a>
                </td>

        @endforeach

--}}

            @foreach ($entrenamiento as $entrenamientos)
                <tr>
                    <td>{{ $entrenamientos->numero_sesion }}</td>
                    <td>{{ $entrenamientos->fecha }}</td>
                    <td>{{ $entrenamientos->jugadores_disponibles }}</td>
                    <td>{{ $entrenamientos->descripcion }}</td>
                    <td>
                        <a href="{{ route('asistencia_entrenamientos.showByAsistencia', $entrenamientos->numero_sesion) }}">Ver asistencia</a>
                    </td>
                </tr>
            @endforeach

        </table>
    </div>
    <button><a href="{{route('entrenamientos.create')}}">Añadir Entreno</a></button>

</x-zz.base>
