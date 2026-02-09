@extends('layouts.app')

@section('title', 'Detalle de feria')

@section('content')

{{-- HERO --}}
<div class="mb-4">
    <img 
        src="https://picsum.photos/1200/400?random={{ $id }}"
        class="img-fluid rounded shadow-sm"
        alt="Imagen de la feria"
    >
</div>

{{-- INFO PRINCIPAL --}}
<div class="row mb-5">
    <div class="col-md-8">

        <h1 class="fw-bold mb-2">
            Feria Barrial Centro
        </h1>

        <p class="text-muted mb-1">
            📍 Rosario, Santa Fe
        </p>

        <p class="text-muted mb-3">
            📅 12 de marzo de 2026
        </p>

        <span class="badge bg-success mb-3">
            Barrial
        </span>

        <p class="mt-4">
            Esta feria reúne a productores locales, artesanos y emprendedores
            del barrio. Un espacio comunitario para compartir cultura,
            gastronomía y productos regionales.
        </p>

    </div>

    {{-- INFO LATERAL --}}
    <div class="col-md-4">

        <div class="card shadow-sm mb-3">
            <div class="card-body">
                <h5 class="card-title">Ubicación</h5>

                <div 
                    class="bg-light d-flex align-items-center justify-content-center rounded"
                    style="height:200px;"
                >
                    <span class="text-muted">
                        Mapa próximamente
                    </span>
                </div>
            </div>
        </div>

        <a href="/ferias" class="btn btn-outline-success w-100">
            ← Volver a ferias
        </a>

    </div>
</div>

@endsection
