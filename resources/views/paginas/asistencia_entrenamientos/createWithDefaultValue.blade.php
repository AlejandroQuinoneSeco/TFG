<x-zz.base>

    <x-slot:tituloHead>Jornadas</x-slot:tituloHead>
    <x-slot:tituloVisible>Mi equipo</x-slot:tituloVisible>

    <form action=' {{ route('asistencia_entrenamientos.store') }}' method='post'>
        @method('post')
        @csrf
        <div class="form-group">
            <label  for="numero_sesion">Numero Sesion</label>
            <input type="number" name="numero_sesion" class="form-control" id="numero_sesion" placeholder="Introduce numero sesion" value="{{ $defaultValues['numero_sesion'] ?? '' }}" readonly>
        </div>
        <div class="form-group">
            <label  for="dorsal">Dorsal</label>
            <input type="number" name="dorsal"  class="form-control" id="dorsal" placeholder="Introduce Dorsal">
        </div>
        <div class="form-group">
            <label  for="fecha">Fecha</label>
            <input type="date" name="fecha" class="form-control" id="fecha" value="{{ $defaultValues['fecha'] ?? '' }}" readonly>
        </div>
        <div class="form-group">
            <label for="asistencia"Asistencia</label>
            <br><label for='asistencia'>Asistencia</label>
            <select id='asistencia' name='asistencia' class="form-control">
                <optgroup label='Asistencia'>
                    <option {{ ($entrenamiento->asistencia ?? '') ? 'selected' : '' }} value='1'>Si</option>
                    <option {{ ($entrenamiento->asistencia ?? '') ? 'selected' : '' }} value='0'>No</option>
                </optgroup>
            </select>
        </div>
        <div class="form-group">
            <label for="motivo">Motivo</label>
            <input type="text " name="motivo" class="form-control" id="motivo">
        </div>

        <div  class="form-group">
            <button type="submit" class="form-control">Añadir asistencia</button>
        </div>

    </form>



    <br><br>
    <button class="btn"><a href="{{route('calendarios.index')}}">Calendario</a></button>
    <br><br>
    <button class="btn"><a href="{{route('players.index')}}">Ver jugadores</a></button>

</x-zz.base>
