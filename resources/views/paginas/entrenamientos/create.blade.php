<x-zz.base>

    <x-slot:tituloHead>Jornadas</x-slot:tituloHead>
    <x-slot:tituloVisible>Mi equipo</x-slot:tituloVisible>

    <form action=' {{ route('entrenamientos.store') }}' method='post'>
        @method('post')
        @csrf

        <br><label for='Numero_Sesion'>Numero Sesion</label>
        <input type='text' id='Numero_Sesion' name='Numero_Sesion'>

        <br><label for='fecha'>Fecha</label>
        <input type='date' id='fecha' name='fecha'>

        <br><label for='jugadores_disponibles'>Jugadores Disponibles</label>
        <input type='number' id='jugadores_disponibles' name='jugadores_disponibles'>

        <br><label for='descripcion'>Descripcion</label>
        <input type='text' id='descripcion' name='descripcion'>

        <br><br>
        <input class='boton' type='submit' name='crear' value='Añadir Entrenamiento'>
    </form>
    <br><br>
    <button><a href="{{route('calendarios.index')}}">Calendario</a></button>
    <br><br>
    <button><a href="{{route('players.index')}}">Ver jugadores</a></button>

</x-zz.base>
