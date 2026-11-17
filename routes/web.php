<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home',['centro'=>config('marcapersonalfp.centro')]);
});


Route::get('hola/{nombre?}', function ($nombre = 'mundo') {
     return '¡Hola, ' . e($nombre) . '!';
 });

 

 Route::prefix('proyectos')->name('proyectos.')->group(function () {
    Route::get('/', function () {
        return view('proyectos.index',['proyectos'=> config('marcapersonalfp.proyectos')]);
        })->name('index');

    Route::get('show/{id}', function ($id) { 
        return view('proyectos.show')->with(['id'=>$id]); 
        })->name('show')->whereNumber('id');

    Route::get('create', function () { 
        return view('proyectos.create');
        })->name('create');

     Route::get('edit/{id}', function ($id) { 
        return view('proyectos.edit')->with(['id'=>$id]); 
        })->name('edit')->whereNumber('id');
});

Route::get('perfil/{id?}', function ($id = null){
     return view('perfil')->with(['id'=>$id]);
 })->whereNumber('id')->name('perfil');

 Route::get('centro', function () {
    return ['centro' => config('marcapersonalfp.centro')];
 })->name('centro');

 