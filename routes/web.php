<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/ferias', function () {
    return view('fairs.index');
});

Route::get('/ferias/{id}', function ($id) {

    $ferias = [
        1 => [
            'nombre' => 'Feria Barrial Centro',
            'ciudad' => 'Rosario',
            'tipo' => 'Barrial',
            'descripcion' => 'Feria comunitaria con emprendedores locales.',
            'badge' => 'success',
        ],
        2 => [
            'nombre' => 'Feria Artesanal Norte',
            'ciudad' => 'Córdoba',
            'tipo' => 'Artesanal',
            'descripcion' => 'Artesanos y productores regionales.',
            'badge' => 'warning',
        ],
        3 => [
            'nombre' => 'Feria Cultural Sur',
            'ciudad' => 'Buenos Aires',
            'tipo' => 'Cultural',
            'descripcion' => 'Eventos culturales y música en vivo.',
            'badge' => 'primary',
        ],
    ];

    if (!isset($ferias[$id])) {
        abort(404);
    }

    return view('fairs.show', [
        'feria' => $ferias[$id],
    ]);
});
