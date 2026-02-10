@extends('layouts.app')

@section('title', 'Ferias')

@section('content')

<section class="mb-4">
    <h1 class="fw-bold">Todas las ferias</h1>
    <p class="text-muted">
        Explorá ferias barriales, artesanales y culturales de todo el país.
    </p>
</section>

<div class="row g-4">

    @foreach ($ferias as $feria)
        <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0 card-hover">
                <div class="card-body d-flex flex-column">

                    <span class="badge bg-{{ $feria['badge'] }} mb-2 align-self-start">
                        {{ $feria['tipo'] }}
                    </span>

                    <h5 class="card-title">
                        {{ $feria['nombre'] }}
                    </h5>

                    <p class="text-muted mb-4">
                        {{ $feria['ciudad'] }}
                    </p>

                    <a href="/ferias/{{ $feria['id'] }}" class="btn btn-outline-success mt-auto">
                        Ver detalle
                    </a>

                </div>
            </div>
        </div>
    @endforeach

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
