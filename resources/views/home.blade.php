@extends('layouts.app')

@section('title', 'Inicio')

@section('content')

{{-- HERO --}}
<section class="mb-5">
    <h1 class="display-5 fw-bold">
        Descubrí ferias barriales en todo el país
    </h1>
    <p class="lead text-muted">
        expoFeria te ayuda a encontrar ferias comunitarias, artesanales y culturales cerca tuyo.
    </p>
</section>

{{-- BUSCADOR --}}
<section class="mb-5">
    <div class="card shadow-sm">
        <div class="card-body">
            <h5 class="card-title mb-3">Buscar ferias</h5>

            <form class="row g-2">
                <div class="col-md-9">
                    <input 
                        type="text" 
                        class="form-control"
                        placeholder="Ciudad o provincia"
                    >
                </div>
                <div class="col-md-3 d-grid">
                    <button class="btn btn-success">
                        Buscar
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

{{-- FERIAS DESTACADAS --}}
<section>
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
                    <p class="text-muted mb-1">Rosario</p>
                    <span class="badge bg-success">Barrial</span>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Feria Artesanal Norte</h5>
                    <p class="text-muted mb-1">Córdoba</p>
                    <span class="badge bg-warning text-dark">Artesanal</span>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Feria Cultural Sur</h5>
                    <p class="text-muted mb-1">Buenos Aires</p>
                    <span class="badge bg-primary">Cultural</span>
                </div>
            </div>
        </div>

    </div>
</section>

@endsection
