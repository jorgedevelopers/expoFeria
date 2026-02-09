@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h1>Detalle de la feria</h1>

    <p>ID de la feria: <strong>{{ $id }}</strong></p>

    <a href="/ferias" class="btn btn-outline-secondary mt-3">
        Volver a ferias
    </a>
</div>
@endsection
