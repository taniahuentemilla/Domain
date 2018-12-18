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

Route::get('/', function () {
    return view('inicio');
})->name('inicio');

Route::get('Cursos', 'CursosController@Cursos');
Route::get('Comentarios', 'ComentariosController@Comentarios');
Route::get('Tutoria', 'tutoriaController@tutoria');
Route::post('Tutoria', 'tutoriaController@tutoria');
Route::get('tecnicas','ApiController@index');
Route::get('tecnicas/{id}','ApiController@show');
Route::get('tecnicasadd','ApiController@add');
Route::get('tecnicasdelete/{id}','ApiController@delete');
Route::get('tecnicasupdate/{id}','ApiController@update');
Route::get('inscripcion','inscripcionController@inscripcion');
Route::get('insclist','insclistController@insclist');
Route::get('/registro','RegistroController@index')->name('registro');
Route::post('/guardar','RegistroController@store')->name('guardar');

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
Route::post('/preguntar', 'HomeController@preguntar_usuario')->name('preguntar');
Route::get('/livestream', function(){
	return view('livestream');
}
)->name('livestream');