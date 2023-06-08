<x-zz.base>

    <x-slot:tituloHead>Añadir Resultado</x-slot:tituloHead>
    <x-slot:tituloVisible>Calendario</x-slot:tituloVisible>

    <form action=' {{ route('calendarios.store') }}' method='post'>
        @method('post')
        @csrf
<div class="form-group">

    <label for="Numero_Jornada">Numero Jornada</label>
    <input type='number' id='numero_jornada' name='numero_jornada' class="form-control">

</div>

        <div class="form-group">

            <label for='rival'>Rival</label>
            <input type='varchar' id='rival' name='rival' class="form-control">

        </div>
<div class="form-group">

    <label for='resultado'>Resultado</label>
    <input type='varchar' id='resultado' name='resultado' class="form-control">
</div>
        <div  class="form-group">
            <button type="submit" class="form-control">Añadir Jornada</button>
        </div>


        </div>
    </form>

    <br><br>

    <button><a href="{{route('calendarios.index')}}">Calendario</a></button>
    <br><br>
    <button><a href="{{route('players.index')}}">Ver jugadores</a></button>

</x-zz.base>
