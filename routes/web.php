<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('hola/{nombre?}', function($nombre = 'mundo'){
    return '¡Hola, ' . e($nombre) . '!';
});

Route::get('/', function () {
    return 'Pantalla principal';
});

Route::prefix('proyectos')->name('proyectos.')->group(function () {

    Route::get('/', function () {
        return 'Listado proyectos';
    })->name('index');

    Route::get('show/{id}', function ($id) {
        return 'Vista detalle proyecto ' . e($id);
    })->name('show')->whereNumber('id');

    Route::get('create', function () {
        return 'Añadir proyecto';
    })->name('create');

    Route::get('edit/{id}', function ($id) {
        return 'Modificar proyecto ' . e($id);
    })->name('edit')->whereNumber('id');
});


Route::get('perfil/{id?}', function ($id = null) {
    if($id === null){
        return 'Visualizar el currículo propio';
    }else{
        return 'Visualizar el currículo de ' . e($id);
    }
})->name('perfil')->whereNumber('id');

Route::get('centro', function () {
    return ['centro' => config('marcapersonalfp.centro')];
})->name('centro');