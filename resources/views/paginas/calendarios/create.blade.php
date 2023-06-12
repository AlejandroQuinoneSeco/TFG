<x-zz.base>

    <x-slot:tituloHead>Añadir Resultado</x-slot:tituloHead>
    <x-slot:tituloVisible>Calendario</x-slot:tituloVisible>

    <form action=' {{ route('calendarios.store') }}' method='post'>
        @method('post')
        @csrf
<div class="form-group">

    <label for="Numero_Jornada">Numero Jornada</label>
    <input type="hidden" id='numero_jornada' name='numero_jornada' class="form-control" value="{{ $numero_jornada }}">: {{$numero_jornada}}

</div>

        <div class="form-group">

            <label for='rival'>Rival</label>
            <input type="hidden" id='proximo_rival' name="proximo_rival" class="form-control" value="{{ $proximo_rival }}">: {{ $proximo_rival }}

        </div>
<div class="form-group">

    <label for='resultado'>Resultado</label>
    <input type='varchar' id='resultado' name='resultado' class="form-control">
</div>
        <div  class="form-group">
            <button type="submit" class="form-control">Añadir resultado</button>
        </div>


        <button class="btn"><a href="{{route('calendarios.index')}}">Calendario</a></button>
        <br><br>
        <button class="btn"><a href="{{route('players.index')}}">Ver jugadores</a></button>

    </form>

    <br><br>


</x-zz.base>
