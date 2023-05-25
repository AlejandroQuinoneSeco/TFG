<x-zz.base>

    <x-slot:tituloHead>Añadir Resultado</x-slot:tituloHead>
    <x-slot:tituloVisible>Calendario</x-slot:tituloVisible>

    <form action=' {{ route('calendarios.store') }}' method='post'>
        @method('post')
        @csrf

        <br><label for='numero_jornada'>Numero Jornada</label>
        <input type='number' id='numero_jornada' name='numero_jornada'>

        <br><label for='rival'>Rival</label>
        <input type='varchar' id='rival' name='rival'>

        <br><label for='resultado'>Resultado</label>
        <input type='varchar' id='resultado' name='resultado'>

        <br><br>
        <input class='boton' type='submit' name='crear' value='Añadir resultado'>
    </form>
    <br><br>

    <button><a href="{{route('calendarios.index')}}">Calendario</a></button>
    <br><br>
    <button><a href="{{route('players.index')}}">Ver jugadores</a></button>

</x-zz.base>
