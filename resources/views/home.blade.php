@extends('layouts.app')

@section('title', 'Inicio')

@section('content')

<h1>Buscador de ferias barriales</h1>
<p>Encontrá ferias barriales en todo el país.</p>

<h2>Buscar ferias</h2>
<form>
    <input type="text" placeholder="Ciudad o provincia">
    <button type="submit">Buscar</button>
</form>

<h2>Ferias destacadas</h2>

<ul>
    <li><strong>Feria Barrial Centro</strong> – Rosario</li>
    <li><strong>Feria Artesanal Norte</strong> – Córdoba</li>
    <li><strong>Feria Cultural Sur</strong> – Buenos Aires</li>
</ul>

@endsection
