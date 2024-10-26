<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\CarController;

Route::get('cars', [CarController::class, 'index']);
Route::get('cars/create', [CarController::class, 'create']);
Route::post('cars', [CarController::class, 'store']);
Route::get('cars/{id}/edit', [CarController::class, 'edit']);
Route::put('cars/{id}', [CarController::class, 'update']);
Route::delete('cars/{id}', [CarController::class, 'destroy']);
