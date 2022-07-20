<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;


Route::get('/', function () {
    return view('modulos.seleccionar');
});

Route::get('ingresar', function () {
    return view('modulos.ingresar');
});

Auth::routes();

Route::get('inicio', [InicioController::class, 'index']);