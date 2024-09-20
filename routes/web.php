<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('plantillabase');
});

Route::get('/conversionglp', function () {
    return view('conversionglp');
});

Route::get('/conversiongnv', function () {
    return view('conversiongnv');
});

Route::get('/certificadoanual', function () {
    return view('certificadoAnual');
});

Route::get('/certificadoquinquenal', function () {
    return view('certificadoQuinquenal');
});

Route::get('/mecanicageneral', function () {
    return view('mecanicageneral');
});

Route::get('/mantenimiento', function () {
    return view('mantenimientogas');
});

Route::get('/productos_accesorios', function () {
    return view('prod_acc');
});


