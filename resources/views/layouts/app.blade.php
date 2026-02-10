<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'expoFeria')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

{{-- HEADER --}}
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#2e7d32;">
    <div class="container">
        <a class="navbar-brand fw-bold" href="/">
            expoFeria
        </a>

        <div class="collapse navbar-collapse show">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/ferias">Ferias</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

{{-- CONTENIDO --}}
<main class="container my-5">
    @yield('content')
</main>

{{-- FOOTER --}}
<footer class="text-center text-muted py-4 small">
    © 2026 expoFeria — Ferias barriales de Argentina
</footer>

</body>
</html>
