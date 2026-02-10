@extends('layouts.app')

@section('title', $feria['nombre'])

@section('content')

<a href="/ferias" class="btn btn-outline-secondary mb-4">
    ← Volver a ferias
</a>

<div class="card shadow-sm border-0">
    <div class="card-body">

        <span class="badge bg-{{ $feria['badge'] }} mb-2">
            {{ $feria['tipo'] }}
        </span>

        <h1 class="fw-bold mb-2">
            {{ $feria['nombre'] }}
        </h1>

        <p class="text-muted mb-4">
            📍 {{ $feria['ciudad'] }}
        </p>

        <p>
            {{ $feria['descripcion'] }}
        </p>

        <hr>

        <ul class="list-unstyled mb-0">
            <li><strong>Días:</strong> Sábados y domingos</li>
            <li><strong>Horario:</strong> 10:00 a 18:00</li>
            <li><strong>Entrada:</strong> Gratuita</li>
        </ul>

    </div>
</div>

@endsection
