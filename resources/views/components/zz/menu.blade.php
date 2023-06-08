<!-- Barra de navegación -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Tu Marca</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('players.index') }}">Plantilla</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('estadisticas.index') }}">Estadisticas jugadores</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('jornadas.index') }}">Jornada</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('calendarios.index') }}">Calendario</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('entrenamientos.index') }}">Entrenamientos</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('asistencia_entrenamientos.index') }}">Asistencia Entrenamientos</a>
            </li>
        </ul>
    </div>
</nav>

<!-- Hoja de estilos personalizada -->
<style>
    .navbar-dark .navbar-nav .nav-link {
        color: #ccc;
        transition: color .2s;
    }

    .navbar-dark .navbar-nav .nav-link:hover {
        color: #fff;
    }

    .navbar-dark .navbar-brand {
        color: #f8f9fa;
        font-weight: bold;
    }

    .navbar-dark {
        background-color: #343a40;
        box-shadow: 0 2px 4px rgba(0, 0, 0, .1);
    }
</style>

<hr />

