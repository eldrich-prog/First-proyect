<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;

/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('curso', function () {
    return 'hola';  
});

Route::get('curso/create', function () {
    return 'bienvenido al curso';  
});

Route::get('curso/{curso}', function ($curso) {
    return "bienvenido al curso: ". $curso;  
});
*/

Route::get('/', HomeController::class);
Route::get('curso', [CursoController::class, 'index']);
Route::get('curso/create', [CursoController::class, 'create']);
Route::get('curso/{curso}', [CursoController::class, 'show']);
