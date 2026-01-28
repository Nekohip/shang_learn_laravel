<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\DogController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource("cars", CarController::class);
Route::resource("dogs", DogController::class);