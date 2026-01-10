@extends('layouts.app')

@section('title', 'Inicio')

@section('content')

<h1 class="mb-3">Buscador de ferias barriales</h1>
<p class="text-muted mb-4">
    Encontrá ferias barriales en todo el país.
</p>

<div class="card p-4 mb-5">
    <h5 class="mb-3">Buscar ferias</h5>

    <form>
        <div class="row g-2">
            <div class="col-md-9">
                <input type="text" class="form-control" placeholder="Ciudad o provincia">
            </div>
            <div class="col-md-3">
                <button class="btn btn-success w-100">Buscar</button>
            </div>
        </div>
    </form>
</div>

<h3 class="mb-3">Ferias destacadas</h3>

<div class="row g-3">
    <div class="col-md-4">
        <div class="card p-3">
            <h5>Feria Barrial Centro</h5>
            <p class="text-muted mb-0">Rosario</p>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card p-3">
            <h5>Feria Artesanal Norte</h5>
            <p class="text-muted mb-0">Córdoba</p>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card p-3">
            <h5>Feria Cultural Sur</h5>
            <p class="text-muted mb-0">Buenos Aires</p>
        </div>
    </div>
</div>

@endsection
