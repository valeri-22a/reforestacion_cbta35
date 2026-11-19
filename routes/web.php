<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
})->name('inicio');

Route::get('/proyectopec', function () {
    return view('proyectopec');
})->name("proyectopec");


Route::get('/problematicas', function () {
    return view('problematicas');
})->name("problematicas");

Route::get('/solucionesparalasequia', function () {
    return view('solucionesparalasequia');
})->name("soluciones");

Route::get('/aguacontaminada', function () {
    return view('aguacontaminada');
})->name("contaminacion");