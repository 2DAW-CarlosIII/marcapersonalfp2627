<?php

use App\Http\Controllers\CicloFormativoController;

Route::controller(CicloFormativoController::class)->prefix('ciclos-formativos')->name('ciclos-formativos.')->group(function () {
    Route::get('/', 'index')->name('index');

    Route::get('show/{id}', 'show')->name('show')->whereNumber('id');

    Route::get('create', 'create')->name('create');

    Route::get('edit/{id}', 'edit')->name('edit')->whereNumber('id');
});