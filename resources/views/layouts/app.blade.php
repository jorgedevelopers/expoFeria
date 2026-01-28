<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'expoFeria')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Bootstrap 5 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- CSS propio --}}
    <link rel="stylesheet" href="/css/app.css">
</head>

<body>

{{-- HEADER / NAVBAR --}}
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#2e7d32;">
    <div class="container">

        {{-- Logo --}}
        <a class="navbar-brand d-flex align-items-center gap-2" href="/">
            <img 
                src="/images/logo-expoferia.png" 
                alt="expoFeria logo"
                style="height:40px;"
            >
            <span class="fw-bold">expoFeria</span>
        </a>

        {{-- Menú --}}
        <div class="collapse navbar-collapse show">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/ferias">Ferias</a>
                </li>
            </ul>
        </div>

    </div>
</nav>


    </div>
</header>


<body>

<header style="background:#2e7d32; padding:12px;">
    <div style="display:flex; align-items:center; gap:12px;">
        <img 
            src="/images/logo-expoferia.png" 
            alt="expoFeria logo" 
            style="height:48px"
        >
        <strong style="color:white; font-size:20px;">
            expoFeria
        </strong>
    </div>
</header>

<main style="padding:24px;">
    @yield('content')
</main>

<footer style="margin-top:40px; padding:16px; font-size:14px; color:#666;">
    © 2026 expoFeria — Ferias barriales de Argentina
</footer>

</body>
</html>
