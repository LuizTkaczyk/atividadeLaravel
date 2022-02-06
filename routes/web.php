<?php

use App\Http\Controllers\PropertyController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/carros',[PropertyController::class, 'index']);
Route::get('/carros/novo', [PropertyController::class, 'create']);
Route::post('/carros/store', [PropertyController::class, 'store']);
Route::get('/carros/{name}',[PropertyController::class, 'show']);

Route::get('/carros/editar/{name}', [PropertyController::class, 'edit']);
Route::put('/carros/update/{name}', [PropertyController::class, 'update']);

Route::get('/carros/remover/{name}',[PropertyController::class, 'destroy']);