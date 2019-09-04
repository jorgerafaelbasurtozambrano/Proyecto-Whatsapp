<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tablaFormularioModel;
class formulariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $verificacion_formulario = true;
        $formularios_obtenidos = tablaFormularioModel::all();

        return view('adminlte::home4', compact('verificacion_formulario','formularios_obtenidos'));
    }
    public function getFormularios()
    {
        $formularios=\App\tablaFormularioModel::all();
        return Response()->json($formularios);
    }
    public function getPreguntas($idFormulario)
    {
        $datos=\App\tablaPreguntasModel::with('getRespuestas')->where('idFormulario',$idFormulario)->get();
        return Response()->json($datos);
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
        $nuevo_dato=new tablaFormularioModel;
        $nuevo_dato->descripcion=$request->nombre_formulario;
        $nuevo_dato->fecha_creacion=$request->fecha_actual;
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
