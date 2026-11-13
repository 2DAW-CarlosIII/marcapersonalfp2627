<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Apartado RA5_3: Ejercicio 1
/*Para probarlo:
    Sin nombre, por lo que pone el valor por defecto 'mundo': http://marcapersonalfp.test/hola
    Con nombre, pone el el texto escrito después de la última '/': http://marcapersonalfp.test/hola/Ana
    */
Route::get('hola/{nombre?}', function ($nombre = 'mundo') {
    return '¡Hola, ' . e($nombre) . '!';
});



// Apartado RA5_3: Ejercicio 2
/* Para probarlo: http://marcapersonalfp.test/
    Devuelve solo el texto 'Pantalla principal'
*/
Route::get('/', function () {
    return 'Pantalla principal';
});

/*Grupo de rutas para proyectos*/
Route::prefix('proyectos')->name('proyectos.')->group(function () {

    /*Para probarlo: http://marcapersonalfp.test/proyectos
        Devuelve 'Listado proyectos'
    */
    Route::get('/', function () { 
        return 'Listado proyectos'; 
    })->name('index');

    /*Para probarlo: 
        Sin id o con un id no númerico, devuelve '404 Not Found': http://marcapersonalfp.test/proyectos/show
        Con id, devuelve 'Vista detalle proyecto 1': http://marcapersonalfp.test/proyectos/show/1
    */
    Route::get('show/{id}', function ($id) { 
        return 'Vista detalle proyecto ' . $id; 
    })->name('show')-> whereNumber('id');    //-> whereNumber('id'): Restringe el parámetro id a números

    /*Para probarlo: http://marcapersonalfp.test/proyectos/create
        Devuelve 'Añadir proyecto'
    */
    Route::get('create', function () { 
        return 'Añadir proyecto'; 
    })->name('create');

    /*Para probarlo: 
        Sin id, devuelve '404 Not Found': http://marcapersonalfp.test/proyectos/edit
        Con id, devuelve 'Modificar proyecto 1': http://marcapersonalfp.test/proyectos/edit/1
    */
    Route::get('edit/{id}', function ($id) { 
        return 'Modificar proyecto ' . $id; 
    })->name('edit')-> whereNumber('id');
});



/*Para probarlo: 
    Sin id, devuelve 'Visualizar el currículo propio': http://marcapersonalfp.test/perfil
    Con id, devuelve 'Visualizar el currículo de 1': http://marcapersonalfp.test/perfil/1
    */
Route::get('perfil/{id?}', function ($id = null) { 
    return 'Visualizar el currículo ' . ($id? 'de ' . $id : 'propio'); //Usamos un condicional para comprobar si ha pasado un id o no. Cambia el texto dependiendo de si hay id o no.
})->name('perfil')-> whereNumber('id');




// Apartado RA5_3: Ejercicio 3
/*Para probarlo: http://marcapersonalfp.test/centro
    Devuelve json con un array de centros, en este caso solo tenemos uno, CIFP Carlos III
*/
Route::get('centro', function () {
     return ['centro' => config('marcapersonalfp.centro')];
 })->name('centro');
