<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\paisModel;
class paisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $indexPais=true;
      return view('adminlte::home4', compact('indexPais'));
    }
    public function lista()
    {
      $listaPais=true;
      $paises_datos=paisModel::all();
      return view('adminlte::home4', compact('listaPais','paises_datos'));
    }
    public function buscar_paises($id)
    {
      $paises_datos=paisModel::all()->where('id',$id);
      return Response()->json($paises_datos);
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
        $dato= new paisModel;
        $dato->nombre=$request->nombre_pais;
        $dato->abreviatura=$request->abreviatura;
        $dato->codigo=$request->codigo_pais;
        $dato->imagen=$request->imagen;
        $dato->save();
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
      $dato = paisModel::find($request->idpais);
      $dato->nombre=$request->nombre_pais;
      $dato->abreviatura=$request->abreviatura;
      $dato->codigo=$request->codigo_pais;
      $dato->imagen=$request->imagen;
      $dato->save();
      return Response()->json($dato);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $buscar = paisModel::find($id);
      $buscar->delete();
    }
}
