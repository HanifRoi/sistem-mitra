<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MitraController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mitra', [MitraController::class, 'index']);
