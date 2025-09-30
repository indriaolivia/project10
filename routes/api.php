<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FakultasController;

Route::get('/fakultas', [FakultasController::class, 'api']);
