<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\DogController;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return redirect()->route("sts.index");
});

Route::resource("cars", CarController::class);
Route::resource("dogs", DogController::class);
Route::resource("sts", StudentController::class);
