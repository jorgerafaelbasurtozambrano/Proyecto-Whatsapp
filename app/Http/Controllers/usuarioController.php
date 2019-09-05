<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\tabla_usuariosModel;
use App\paisModel;
class usuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $verificacion_usuario = true;
        $paises_datos=paisModel::all();
        return view('adminlte::home4', compact('verificacion_usuario','paises_datos'));
    }

    //LISTAR

    public function listar_panel()
    {
        $verificacion_listar = true;
        $usuarios_obtenidos = tabla_usuariosModel::all();
        return view('adminlte::home4', compact('verificacion_listar', 'usuarios_obtenidos'));
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
        $nuevo_usuariosbase = new tabla_usuariosModel;
        $nuevo_usuariosbase->nombre=$request->nombre;
        $nuevo_usuariosbase->numero_telefono=$request->telefono;
        $nuevo_usuariosbase->save();
    }

    public function obtener_datos($id){
        $datos_actualizar = tabla_usuariosModel::all()->where('id', $id);
        return Response()->json($datos_actualizar);
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
        $nuevo_usuariosbase = tabla_usuariosModel::find($request->id);
        $nuevo_usuariosbase->nombre=$request->nombre;
        $nuevo_usuariosbase->numero_telefono=$request->telefono;
        $nuevo_usuariosbase->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $meta = tabla_usuariosModel::find($id);
        $meta->delete();
    }
}
