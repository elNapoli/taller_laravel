<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

    
//Rutas Basicas Laravel
    
Route::get('/hola-mundo', function () {
    $usuarios = [
        [
            'nombre' => 'Pepito',
            'email' => 'pepito@gmail.com'
        ]
    ];
    return response()->json($usuarios);
});

/**
 * GET
 * POST
 * PUT
 * DELETE
 */

Route::post('crear-algo',  function () {

});
Route::put('actualizar-algo', function () {

});
Route::delete('eliminar-algo', function () {

});