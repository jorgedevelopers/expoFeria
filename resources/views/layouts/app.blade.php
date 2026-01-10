<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'expoFeria')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @vite('resources/css/app.css')
</head>

<body class="bg-light">

    {{-- HEADER --}}
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#2E7D32;">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/">expoFeria</a>
        </div>
    </nav>

    {{-- CONTENIDO --}}
    <main class="container my-5">
        @yield('content')
    </main>

    {{-- FOOTER --}}
    <footer class="text-center text-muted py-4">
        © {{ date('Y') }} expoFeria — Ferias barriales de Argentina
    </footer>

</body>
</html>
