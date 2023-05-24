<x-zz.base>

    <x-slot:tituloHead>Jornadas</x-slot:tituloHead>
    <x-slot:tituloVisible>Mi equipo</x-slot:tituloVisible>

    <form action=' {{ route('asistencia_entrenamientos.store') }}' method='post'>
        @method('post')
        @csrf

        <br><label for='Numero_Sesion'>Numero Sesion</label>
        <input type='text' id='Numero_Sesion' name='Numero_Sesion'>

        <br><label for='Nombre_Jugador'>Nombre Jugador</label>
        <input type='text' id='Nombre_Jugador' name='Nombre_Jugador'>

        <br><label for='fecha'>Fecha</label>
        <input type='date' id='fecha' name='fecha'>

        <br><label for='Asistencia'>Asistencia</label>
        <input type='text' id='Asistencia' name='Asistencia'>

        <br><label for='motivo'>Motivo</label>
        <input type='text' id='motivo' name='motivo'>


        <br><br>
        <input class='boton' type='submit' name='crear' value='Añadir Asistencia'>
    </form>
    <br><br>
    <button><a href="{{route('calendarios.index')}}">Calendario</a></button>
    <br><br>
    <button><a href="{{route('jugadores.index')}}">Ver jugadores</a></button>

</x-zz.base>
