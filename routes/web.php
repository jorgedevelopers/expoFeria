<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/ferias', function () {
    return view('fairs.index');
});
Route::get('/ferias/{id}', function ($id) {
    return view('fairs.show', [
        'id' => $id
    ]);
});

