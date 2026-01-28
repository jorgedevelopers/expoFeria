@extends('layouts.app')

@section('title', 'Inicio')

@section('content')

{{-- HERO --}}
<div class="row mb-5">
    <div class="col-md-8">
        <h1 class="display-5 fw-bold mb-3">
            Descubrí ferias barriales en todo el país
        </h1>
        <p class="lead text-muted">
            expoFeria te ayuda a encontrar ferias comunitarias, artesanales y culturales
            cerca tuyo.
        </p>
    </div>
</div>

{{-- BUSCADOR --}}
<div class="card shadow-sm mb-5">
    <div class="card-body">
        <h5 class="card-title mb-3">Buscar ferias</h5>

        <form>
            <div class="row g-2">
                <div class="col-md-8">
                    <input 
                        type="text" 
                        class="form-control" 
                        placeholder="Ciudad o provincia"
                    >
                </div>
                <div class="col-md-4">
                    <button class="btn btn-success w-100">
                        Buscar
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

{{-- FERIAS DESTACADAS --}}
<div class="d-flex justify-content-between align-items-center mb-3">
    <h3 class="mb-0">Ferias destacadas</h3>
    <a href="/ferias" class="btn btn-outline-success btn-sm">
        Ver todas
    </a>
</div>

<div class="row g-4">

    <div class="col-md-4">
        <div class="card h-100 shadow-sm">
            <div class="card-body">
                <h5 class="card-title">Feria Barrial Centro</h5>
                <p class="text-muted mb-1">📍 Rosario, Santa Fe</p>
                <p class="text-muted">📅 12 de marzo de 2026</p>
                <a href="/ferias" class="btn btn-success btn-sm">
                    Ver feria
                </a>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card h-100 shadow-sm">
            <div class="card-body">
                <h5 class="card-title">Feria Artesanal Norte</h5>
                <p class="text-muted mb-1">📍 Córdoba</p>
                <p class="text-muted">📅 18 de marzo de 2026</p>
                <a href="/ferias" class="btn btn-success btn-sm">
                    Ver feria
                </a>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card h-100 shadow-sm">
            <div class="card-body">
                <h5 class="card-title">Feria Cultural Sur</h5>
                <p class="text-muted mb-1">📍 Buenos Aires</p>
                <p class="text-muted">📅 25 de marzo de 2026</p>
                <a href="/ferias" class="btn btn-success btn-sm">
                    Ver feria
                </a>
            </div>
        </div>
    </div>

</div>

@endsection
