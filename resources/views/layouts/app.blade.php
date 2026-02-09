<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>expoFeria</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <nav class="navbar navbar-dark bg-success px-4">
        <a href="/" class="navbar-brand fw-bold text-white">
            expoFeria
        </a>
        <div>
            <a href="/" class="text-white me-3">Home</a>
            <a href="/ferias" class="text-white">Ferias</a>
        </div>
    </nav>

    @yield('content')

</body>
</html>
