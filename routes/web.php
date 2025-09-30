<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FakultasController;

// route default untuk halaman utama
Route::get('/', function () {
    return 'Halo Laravel!';
});

// route untuk tabel fakultas (HTML)
Route::get('/fakultas', [FakultasController::class, 'index']);

// route untuk API JSON
Route::get('/api/fakultas', [FakultasController::class, 'api']);


