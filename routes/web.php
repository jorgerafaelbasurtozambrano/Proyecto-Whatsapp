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
Route::resource('/paises', 'paisController');
Route::resource('/encuestaenviada', 'encuestaEnviadaController');
Route::resource('/preguntaenviada', 'preguntaEnviadaController');
Route::resource('/respuestaRecibida', 'preguntaRespondidaController');

//RUTAS
Route::get('/home', 'usuarioController@index');
Route::get('/listar', 'usuarioController@listar_panel');
Route::get('/listaPaises', 'paisController@lista');

Route::get('/nuevo-formulario', 'formulariosController@index');

Route::get('/obtener/{id}','usuarioController@obtener_datos');
Route::get('/obtenerPreguntas/{id}','formulariosController@getPreguntas');
Route::get('/obtenerFormularios','formulariosController@getFormularios');

Route::get('/pais', 'paisController@index');
Route::get('/getpais/{id}', 'paisController@buscar_paises');

Route::get('/getPersona/{id}', 'encuestaEnviadaController@obtenerPersona');
Route::get('/getPersonaEnviada/{id_persona}', 'encuestaEnviadaController@listaEncuestaEnviada');

Route::get('/getPreguntas/{id_formulario}', 'formulariosController@getPreguntasFormulario');

Route::get('/getActivos', 'encuestaEnviadaController@lista_de_activos');

Route::get('/preguntaEnviadas/{idEncuesta}', 'preguntaEnviadaController@obtenerPreguntasEnviadas');

Route::get('/getPreguntaSinResponder/{idUsuario}', 'preguntaEnviadaController@obtenerPreguntasEnviadaNoRespondida');

Route::get('/getPregunta/{idPregunta}', 'preguntasController@get_respuestas');

Route::get('/obtenerRespuestas/{puntuacion}/{idPregunta}', 'respuestasController@obtenerRespuesta');

Route::get('/obtenerEncuesta/{id}', 'encuestaEnviadaController@dato_encuesta');

Route::get('/lista_preguntas/{idUser}','preguntaEnviadaController@obtenerPreguntasEnviadaUsuario');
