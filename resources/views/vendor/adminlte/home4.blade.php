@extends('adminlte::layoutsnuevo.app1')
@section('main-content1')

@if (isset($verificacion_usuario))
    @include('usuarios_admin.nuevo_usuario')
@endif

@if (isset($verificacion_formulario))
    @include('formularios.nuevo_formulario')
    @include('formularios.modal_formularios')
@endif

@if (isset($verificacion_listar))
    @include('usuarios_admin.lista')
    @include('envioMensajes.modaEnvio')
    @include('usuarios_admin.modal')
@endif
@endsection
