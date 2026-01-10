<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'expoFeria')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- CSS directo (sin Vite para Render Free) --}}
    <link rel="stylesheet" href="/css/app.css">
</head>

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
