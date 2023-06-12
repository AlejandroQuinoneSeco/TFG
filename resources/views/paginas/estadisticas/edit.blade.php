<x-zz.base>
    <x-slot:tituloHead>Editar Estadísticas</x-slot:tituloHead>
    <x-slot:tituloVisible>Editar Estadísticas</x-slot:tituloVisible>

    <form action="{{ route('estadisticas.update', $estadistica->dorsal) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="partidos_totales">Partidos Totales</label>
            <input type="number" class="form-control" id="partidos_totales" name="partidos_totales" value="{{ $estadistica->partidos_totales }}">
        </div>

        <div class="form-group">
            <label for="partidos_titular">Partidos Titular</label>
            <input type="number" class="form-control" id="partidos_titular" name="partidos_titular" value="{{ $estadistica->partidos_titular }}">
        </div>

        <div class="form-group">
            <label for="partidos_suplente">Partidos Suplente</label>
            <input type="number" class="form-control" id="partidos_suplente" name="partidos_suplente" value="{{ $estadistica->partidos_suplente }}">
        </div>

        <div class="form-group">
            <label for="goles">Goles</label>
            <input type="number" class="form-control" id="goles" name="goles" value="{{ $estadistica->goles }}">
        </div>

        <div class="form-group">
            <label for="minutos_jugados">Minutos Jugados</label>
            <input type="number" class="form-control" id="minutos_jugados" name="minutos_jugados" value="{{ $estadistica->minutos_jugados }}">
        </div>

        <div class="form-group">
            <label for="tarjetas_amarillas">Tarjetas Amarillas</label>
            <input type="number" class="form-control" id="tarjetas_amarillas" name="tarjetas_amarillas" value="{{ $estadistica->tarjetas_amarillas }}">
        </div>

        <div class="form-group">
            <label for="tarjetas_rojas">Tarjetas Rojas</label>
            <input type="number" class="form-control" id="tarjetas_rojas" name="tarjetas_rojas" value="{{ $estadistica->tarjetas_rojas }}">
        </div>

        <button type="submit" class="btn">Actualizar Estadísticas</button>
    </form>

    <br><br>
    <button class="btn"><a href="{{ route('estadisticas.index') }}">Volver</a></button>
</x-zz.base>
