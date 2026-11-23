<?php

use App\Http\Controllers\ProyectoController;

Route::controller(ProyectoController::class)->prefix('proyectos')->name('proyectos.')->group(function () {
    Route::get('/', 'index')->name('index');

    Route::get('show/{id}', 'show')->name('show')->whereNumber('id');

    Route::get('create', 'create')->name('create');

    Route::get('edit/{id}', 'edit')->name('edit')->whereNumber('id');
});