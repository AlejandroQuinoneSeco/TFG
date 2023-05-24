<x-zz.base>

    <x-slot:tituloHead>Añadir Resultado</x-slot:tituloHead>
    <x-slot:tituloVisible>Calendario</x-slot:tituloVisible>

    <form action=' {{ route('calendarios.store') }}' method='post'>
        @method('post')
        @csrf

        <br><label for='Numero_Jornada'>Numero Jornada</label>
        <input type='text' id='Numero_Jornada' name='Numero_Jornada'>

        <br><label for='Rival'>Rival</label>
        <input type='text' id='Rival' name='Rival'>

        <br><label for='Resultado'>Resultado</label>
        <input type='varchar' id='Resultado' name='Resultado'>

        <br><br>
        <input class='boton' type='submit' name='crear' value='Añadir resultado'>
    </form>
    <br><br>

    <button><a href="{{route('calendarios.index')}}">Calendario</a></button>
    <br><br>
    <button><a href="{{route('jugadores.index')}}">Ver jugadores</a></button>

</x-zz.base>
