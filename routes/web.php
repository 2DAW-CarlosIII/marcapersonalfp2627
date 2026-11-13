<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Pantalla principal';
});

Route::get('hola/{nombre?}', function ($nombre = 'mundo') {
   return '¡Hola, ' . e($nombre) . '!'; 
});

Route::prefix('proyectos')->name('proyectos.')->group(function () {
    Route::get('/', function () { return 'Listado proyectos'; })->name('index');
    Route::get('show/{id}', function ($id) { 
        return 'Vista detalle proyecto ' . $id; 
    })->name('show')->whereNumber('id');
    Route::get('create', function () {
        return 'Añadir proyecto';
    })->name('create');
    Route::get('edit/{id}', function ($id) { 
        return 'Modificar proyecto ' . $id; 
    })->name('edit')->whereNumber('id');
});

Route::get('perfil/{id?}', function($id = null) {
    return 'Visualizar el currículo ' . ($id ? 'de ' . $id : 'propio');
})->whereNumber('id')->name('perfil');

Route::get('centro', function () {
     return ['centro' => config('marcapersonalfp.centro')];
 })->name('centro');