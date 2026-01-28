@extends('layouts.app')

@section('title', 'Ferias')

@section('content')

<h1 class="mb-4">Ferias barriales</h1>
<p class="text-muted mb-5">
    Explorá ferias barriales en distintas ciudades del país.
</p>

<div class="row g-4">

    {{-- Feria 1 --}}
    <div class="col-md-4">
        <div class="card h-100 shadow-sm">
            <div class="card-body">
                <h5 class="card-title">Feria Barrial Centro</h5>
                <p class="card-text text-muted mb-1">📍 Rosario, Santa Fe</p>
                <p class="card-text text-muted">📅 12 de marzo de 2026</p>
                <a href="#" class="btn btn-success btn-sm mt-2">
                    Ver detalle
                </a>
            </div>
        </div>
    </div>

    {{-- Feria 2 --}}
    <div class="col-md-4">
        <div class="card h-100 shadow-sm">
            <div class="card-body">
                <h5 class="card-title">Feria Artesanal Norte</h5>
                <p class="card-text text-muted mb-1">📍 Córdoba</p>
                <p class="card-text text-muted">📅 18 de marzo de 2026</p>
                <a href="#" class="btn btn-success btn-sm mt-2">
                    Ver detalle
                </a>
            </div>
        </div>
    </div>

    {{-- Feria 3 --}}
    <div class="col-md-4">
        <div class="card h-100 shadow-sm">
            <div class="card-body">
                <h5 class="card-title">Feria Cultural Sur</h5>
                <p class="card-text text-muted mb-1">📍 Buenos Aires</p>
                <p class="card-text text-muted">📅 25 de marzo de 2026</p>
                <a href="#" class="btn btn-success btn-sm mt-2">
                    Ver detalle
                </a>
            </div>
        </div>
    </div>

</div>

@endsection
