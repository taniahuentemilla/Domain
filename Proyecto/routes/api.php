<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('usuarios/crear', 'Registro_usuarioController@CreateUsuarios');
Route::post('usuarios/obtener', 'Registro_usuarioController@ReadUsuarios');
Route::post('usuarios/actualizar', 'Registro_usuarioController@UpdateUsuarios');
Route::post('usuarios/eliminar', 'Registro_usuarioController@DeleteUsuarios');