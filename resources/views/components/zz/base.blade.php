<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $tituloHead }}</title>

    <!-- Asegúrate de que tienes la siguiente línea para incluir tu archivo CSS personalizado -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

</head>
<body class="d-flex flex-column min-vh-100">
@include('layouts.header')

<div class="container flex-grow-1">
    <!-- Aquí va el contenido principal de la página -->
    {{ $slot }}
</div>

@include('layouts.footer')

</body>
</html>
