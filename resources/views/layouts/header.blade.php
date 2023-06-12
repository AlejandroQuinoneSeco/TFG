<!DOCTYPE html>
<html>
<head>
    <title>Título de la aplicación</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet"> <!-- Tus estilos personalizados -->
    <style>
        .navbar {
            background-color: #003366;
        }
        .footer {
            background-color: #F6F6F6;
            color: #4D4D4D;
        }
        .btn-primary {
            background-color: #32CD32;
            border-color: #32CD32;
        }
        .table {
            color: #4D4D4D;
        }
    </style>
</head>
<body>
<!-- Navegación -->
<nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="{{ route('jornadas.index') }}">LaLiga Stats</a>
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

