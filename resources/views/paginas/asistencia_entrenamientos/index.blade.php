<x-zz.base>

    <x-slot:tituloHead>Plantilla</x-slot:tituloHead>
    <x-slot:tituloVisible>Jugadores</x-slot:tituloVisible>

    <h1>Entrenamientos</h1>
<div class="table-responsive">

    <table class="table">

        <tr>
            <th>Numero Sesion</th>
            <th>Dorsal</th>
            <th>Fecha</th>
            <th>Asistencia</th>
            <th>Motivo</th>
        </tr>



        @foreach ($asistencias as $asistencia)
            <tr>
                <td>{{ $asistencia->numero_sesion }}</td>
                <td>{{ $asistencia->dorsal }}</td>
                <td>{{ $asistencia->fecha }}</td>
                <td>{{ ($asistencia->asistencia) ? 'Si' : 'No' }}</td>
                <td>{{ $asistencia->motivo }}</td>
            </tr>
        @endforeach





    </table><br><br>
</div>


    <button class="btn"><a href="{{route('entrenamientos.index')}}">Volver a entrenamientos</a></button>
</x-zz.base>
