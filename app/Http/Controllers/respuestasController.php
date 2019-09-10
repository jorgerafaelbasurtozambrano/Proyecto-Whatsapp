<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tablaRespuestaModel;

class respuestasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function obtenerRespuesta($puntuacion,$idPregunta)
     {
       $respuesta=tablaRespuestaModel::all()->where('idPregunta',$idPregunta)->where('puntuacion',$puntuacion);
       return Response()->json($respuesta);
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
        $respuestasModel = new tablaRespuestaModel;
        $respuestasModel->puntuacion=$request->puntuacion;
        $respuestasModel->descripcion=$request->pregunta_descripcion;
        $respuestasModel->idPregunta=$request->id_pregunta;
        $respuestasModel->save();
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
