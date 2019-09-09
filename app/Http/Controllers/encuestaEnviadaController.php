<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\encuestaEnviadaModel;
use App\tabla_usuariosModel;
class encuestaEnviadaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function listaEncuestaEnviada($id)
     {
        $lista=encuestaEnviadaModel::all()->where('idUsuario',$id);
        return Response()->json($lista);
     }

     public function lista_de_activos()
     {
        $lista=encuestaEnviadaModel::all()->where('activa',1);
        return Response()->json($lista);
     }


     public function obtenerPersona($id)
     {
        $dato_completos=tabla_usuariosModel::with('getPais')->where('id',$id)->get();
        return Response()->json($dato_completos);
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
        $nuevo_encuesta=new encuestaEnviadaModel;
        $nuevo_encuesta->fecha_inicio=$request->fecha_inicio;
        $nuevo_encuesta->idUsuario=$request->id_usuario;
        $nuevo_encuesta->idFormulario=$request->id_Formulario;
        $nuevo_encuesta->activa=$request->activa;
        $nuevo_encuesta->save();
        return Response()->json($nuevo_encuesta);
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
