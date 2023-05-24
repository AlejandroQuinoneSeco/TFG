<x-zz.base>

    <x-slot:tituloHead>Mostrar equipo</x-slot:tituloHead>
    <x-slot:tituloVisible>Mostrar los detalles del equipo</x-slot:tituloVisible>

    <p>{{$equipos->jugadores}}</p>
    <p>{{$equipos->jugadores_disponibles}}</p>
    <p>{{$equipos->jugadores_lesionados}}</p>
    <p>{{$equipos->partido_anterior}}</p>
    <p>{{$equipos->proximo_partido}}</p>

    <a href='{{ route('equipos.edit', $equipos) }}'>Editar</a>

    <br/><br/>


    <br>

    <a href='{{ route('equipos.index') }}'>Volver a la info de equipo.</a>

</x-zz.base>
