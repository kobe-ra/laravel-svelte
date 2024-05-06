<?php

use App\Http\Controllers\DataRefreshController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('home');
});

Route::get('/data-refresh', [DataRefreshController::class, 'index'])->name('data_refresh');
Route::post('/data-refresh', [DataRefreshController::class, 'store']);
