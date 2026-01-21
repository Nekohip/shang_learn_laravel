<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cars', [CarController::class, "index"]);
Route::get('/layout', [CarController::class, "layout"]);
Route::get('/b1', [CarController::class, "b1"]);
Route::get('/b2', [CarController::class, "b2"]);
Route::get('/b3', [CarController::class, "b3"]);

Route::get('/r1', [CarController::class, "r1"]);
Route::get('/r2', [CarController::class, "r2"]);
Route::get('/r3', [CarController::class, "r3"]);

Route::get('/all', [CarController::class, "all"]);