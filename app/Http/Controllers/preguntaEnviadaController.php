<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\preguntaEnviadaModel;
class preguntaEnviadaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function obtenerPreguntasEnviadas($id_encuesta)
    {
      $lista=preguntaEnviadaModel::all()->where('id_encuesta_iniciada',$id_encuesta);
      return Response()->json($lista);
    }

    public function obtenerPreguntasEnviadaNoRespondida($id_usuario)
    {
      $pregunta=preguntaEnviadaModel::all()->where('idUsuario',$id_usuario)->where('respondida',0);
      return Response()->json($pregunta);
    }


    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nuevo_dato=new preguntaEnviadaModel;
        $nuevo_dato->idPregunta=$request->idPregunta;
        $nuevo_dato->idUsuario=$request->id_usuario;
        $nuevo_dato->respondida=$request->respondida;
        $nuevo_dato->id_encuesta_iniciada=$request->id_encuesta_enviada;
        $nuevo_dato->save();
        return Response()->json($nuevo_dato);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
