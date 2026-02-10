<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FairController;

Route::get('/', function () {
    return view('home');
});

Route::get('/ferias', [FairController::class, 'index']);
Route::get('/ferias/{id}', [FairController::class, 'show']);
