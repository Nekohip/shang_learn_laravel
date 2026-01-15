<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FoxController;

//用resource()會直接導到index，name是foxs.index
Route::resource('/foxs', FoxController::class);
//設name
Route::get('/foxs_f1', [FoxController::class, "f1"]) -> name("foxss.f1");
Route::get('/foxs_f2', [FoxController::class, "f2"]) -> name("foxs.f2");
Route::get('/foxs_f3', [FoxController::class, "f3"]) -> name("foxs.f3");

Route::get('/', function () {
    return view('welcome');
});
