<x-zz.base>

    <x-slot:tituloHead>Jornadas</x-slot:tituloHead>
    <x-slot:tituloVisible>Mi equipo</x-slot:tituloVisible>

    <form action=' {{ route('asistencia_entrenamientos.store') }}' method='post'>
        @method('post')
        @csrf

        <br><label for='numero_sesion'>Numero Sesion</label>
        <input type='number' id='numero_sesion' name='numero_sesion'>

        <br><label for='dorsal'>Dorsal</label>
        <input type='number' id='dorsal' name='dorsal'>

        <br><label for='fecha'>Fecha</label>
        <input type='date' id='fecha' name='fecha'>


        <br><label for='asistencia'>Asistencia</label>
        <select id='asistencia' name='asistencia'>
            <optgroup label='Asistencia'>
                <option {{ ($entrenamiento->asistencia ?? '') ? 'selected' : '' }} value='1'>Si</option>
                <option {{ ($entrenamiento->asistencia ?? '') ? 'selected' : '' }} value='0'>No</option>
            </optgroup>
        </select>

        <br><label for='motivo'>Motivo</label>
        <input type='text' id='motivo' name='motivo'>


        <br><br>
        <input class='boton' type='submit' name='crear' value='Añadir Asistencia'>
    </form>
    <br><br>
    <button><a href="{{route('calendarios.index')}}">Calendario</a></button>
    <br><br>
    <button><a href="{{route('players.index')}}">Ver jugadores</a></button>

</x-zz.base>
