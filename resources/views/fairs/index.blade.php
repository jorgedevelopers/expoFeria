@extends('layouts.app')

@section('title', 'Ferias')

@section('content')

<section class="mb-4">
    <h1 class="fw-bold">
        Todas las ferias
    </h1>
    <p class="text-muted">
        Explorá ferias barriales, artesanales y culturales de todo el país.
    </p>
</section>

<div class="row g-4">

    {{-- Feria 1 --}}
    <div class="col-md-4">
        <div class="card h-100 shadow-sm border-0 card-hover">
            <div class="card-body d-flex flex-column">
                <span class="badge bg-success mb-2 align-self-start">
                    Barrial
                </span>

                <h5 class="card-title">
                    Feria Barrial Centro
                </h5>

                <p class="text-muted mb-4">
                    Rosario
                </p>

                <a href="/ferias/1" class="btn btn-outline-success mt-auto">
                    Ver detalle
                </a>
            </div>
        </div>
    </div>

    {{-- Feria 2 --}}
    <div class="col-md-4">
        <div class="card h-100 shadow-sm border-0 card-hover">
            <div class="card-body d-flex flex-column">
                <span class="badge bg-warning text-dark mb-2 align-self-start">
                    Artesanal
                </span>

                <h5 class="card-title">
                    Feria Artesanal Norte
                </h5>

                <p class="text-muted mb-4">
                    Córdoba
                </p>

                <a href="/ferias/2" class="btn btn-outline-success mt-auto">
                    Ver detalle
                </a>
            </div>
        </div>
    </div>

    {{-- Feria 3 --}}
    <div class="col-md-4">
        <div class="card h-100 shadow-sm border-0 card-hover">
            <div class="card-body d-flex flex-column">
                <span class="badge bg-primary mb-2 align-self-start">
                    Cultural
                </span>

                <h5 class="card-title">
                    Feria Cultural Sur
                </h5>

                <p class="text-muted mb-4">
                    Buenos Aires
                </p>

                <a href="/ferias/3" class="btn btn-outline-success mt-auto">
                    Ver detalle
                </a>
            </div>
        </div>
    </div>

</div>

<style>
    .card-hover {
        transition: transform .2s ease, box-shadow .2s ease;
    }

    .card-hover:hover {
        transform: translateY(-4px);
        box-shadow: 0 .5rem 1rem rgba(0,0,0,.15);
    }
</style>

@endsection
