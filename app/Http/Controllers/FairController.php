<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FairController extends Controller
{
    public function index()
    {
        $ferias = [
            [
                'id' => 1,
                'nombre' => 'Feria Barrial Centro',
                'ciudad' => 'Rosario',
                'tipo' => 'Barrial',
                'badge' => 'success',
                'descripcion' => 'Una feria barrial con emprendedores locales.'
            ],
            [
                'id' => 2,
                'nombre' => 'Feria Artesanal Norte',
                'ciudad' => 'Córdoba',
                'tipo' => 'Artesanal',
                'badge' => 'warning',
                'descripcion' => 'Feria de productos artesanales y diseño independiente.'
            ],
            [
                'id' => 3,
                'nombre' => 'Feria Cultural Sur',
                'ciudad' => 'Buenos Aires',
                'tipo' => 'Cultural',
                'badge' => 'primary',
                'descripcion' => 'Espacio cultural con música, arte y gastronomía.'
            ],
        ];

        return view('fairs.index', compact('ferias'));
    }

    public function show($id)
    {
        $ferias = [
            1 => [
                'id' => 1,
                'nombre' => 'Feria Barrial Centro',
                'ciudad' => 'Rosario',
                'tipo' => 'Barrial',
                'badge' => 'success',
                'descripcion' => 'Una feria barrial con emprendedores locales.'
            ],
            2 => [
                'id' => 2,
                'nombre' => 'Feria Artesanal Norte',
                'ciudad' => 'Córdoba',
                'tipo' => 'Artesanal',
                'badge' => 'warning',
                'descripcion' => 'Feria de productos artesanales y diseño independiente.'
            ],
            3 => [
                'id' => 3,
                'nombre' => 'Feria Cultural Sur',
                'ciudad' => 'Buenos Aires',
                'tipo' => 'Cultural',
                'badge' => 'primary',
                'descripcion' => 'Espacio cultural con música, arte y gastronomía.'
            ],
        ];

        abort_unless(isset($ferias[$id]), 404);

        return view('fairs.show', [
            'feria' => $ferias[$id]
        ]);
    }
}
