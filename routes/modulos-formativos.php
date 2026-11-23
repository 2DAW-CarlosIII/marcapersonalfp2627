<?php

use App\Http\Controllers\ModuloFormativoController;

Route::controller(ModuloFormativoController::class)->prefix('modulos-formativos')->name('modulos-formativos.')->group(function () {
    Route::get('/', 'index')->name('index');

    Route::get('show/{id}', 'show')->name('show')->whereNumber('id');

    Route::get('create', 'create')->name('create');

    Route::get('edit/{id}', 'edit')->name('edit')->whereNumber('id');
});