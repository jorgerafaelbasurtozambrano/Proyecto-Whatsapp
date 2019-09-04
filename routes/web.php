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
Route::get('/logueo',function()
{
  return view('adminlte::home4');
  //return view('nuevasvistas.login');
});

Route::get('/', function () {
  return view('adminlte::home4');
});
Route::group(['middleware' => ['web','auth']], function () {
});

//AJAX DE TODO EL BLOQUE
Route::resource('/usuarios', 'usuarioController');
Route::resource('/formularios', 'formulariosController');
Route::resource('/preguntas', 'preguntasController');
Route::resource('/respuestas', 'respuestasController');

//RUTAS
Route::get('/home', 'usuarioController@index');
Route::get('/listar', 'usuarioController@listar_panel');

Route::get('/nuevo-formulario', 'formulariosController@index');

Route::get('/obtener/{id}','usuarioController@obtener_datos');
Route::get('/obtenerPreguntas/{id}','formulariosController@getPreguntas');
Route::get('/obtenerFormularios','formulariosController@getFormularios');