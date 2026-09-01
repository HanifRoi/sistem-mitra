<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MitraController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mitra', [MitraController::class, 'index']);
Route::get('/mitra/create', [MitraController::class, 'create']);
Route::post('/mitra', [MitraController::class, 'store']);
Route::get('/mitra/{id}/edit', [MitraController::class, 'edit']);
Route::put('/mitra/{id}', [MitraController::class, 'update']);
Route::delete('/mitra/{id}', [MitraController::class, 'destroy']);
