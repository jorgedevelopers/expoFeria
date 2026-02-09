@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h1>Listado de ferias</h1>

    <ul>
        <li><a href="/ferias/1">Feria Barrial Centro</a></li>
        <li><a href="/ferias/2">Feria Artesanal Norte</a></li>
        <li><a href="/ferias/3">Feria Cultural Sur</a></li>
    </ul>

    <a href="/" class="btn btn-outline-secondary mt-3">
        Volver al inicio
    </a>
</div>
@endsection
