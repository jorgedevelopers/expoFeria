@extends('layouts.app')

@section('title', 'Detalle de feria')

@section('content')

<a href="/ferias" class="btn btn-outline-secondary mb-4">
    ← Volver a ferias
</a>

<div class="card shadow-sm border-0">
    <div class="card-body">

        {{-- Tipo --}}
        <span class="badge bg-success mb-2">
            Barrial
        </span>

        {{-- Título --}}
        <h1 class="fw-bold mb-2">
            Feria Barrial Centro
        </h1>

        {{-- Ubicación --}}
        <p class="text-muted mb-4">
            📍 Rosario, Santa Fe
        </p>

        {{-- Descripción --}}
        <p>
            La Feria Barrial Centro reúne a emprendedores locales,
            artesanos y productores de la zona. Se realiza todos los
            fines de semana con entrada libre y gratuita.
        </p>

        <hr>

        {{-- Info extra --}}
        <ul class="list-unstyled mb-0">
            <li><strong>Días:</strong> Sábados y domingos</li>
            <li><strong>Horario:</strong> 10:00 a 18:00</li>
            <li><strong>Entrada:</strong> Gratuita</li>
        </ul>

    </div>
</div>

@endsection
