<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FairController extends Controller
{
    public function index()
    {
        $ferias = config('ferias');

        return view('fairs.index', [
            'ferias' => $ferias,
        ]);
    }

    public function show($id)
    {
        $ferias = config('ferias');

        if (!isset($ferias[$id])) {
            abort(404);
        }

        return view('fairs.show', [
            'feria' => $ferias[$id],
        ]);
    }
}
