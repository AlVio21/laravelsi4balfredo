<?php

use Illuminate\Http\Request;
use App\Http\Controllers\FakultasController;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('fakultas', [FakultasController::class, 'index']);
