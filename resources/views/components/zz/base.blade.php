<!doctype html>
<html lang="es">
<head>
    <!-- CSS de Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <title>{{ $tituloHead ?? 'Laragenda' }}</title>
</head>
<body>
<x-zz.menu />

<h1>{{ $tituloVisible }}</h1>

<hr />

{{ $slot }}

<x-zz.pie />
<!-- Scripts de JavaScript de Bootstrap -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>
