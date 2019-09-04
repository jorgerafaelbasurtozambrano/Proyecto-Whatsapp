@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection

@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-10 col-md-offset-1" style="background-color:vec3(0.75, 0.89, 0.87) ">
				@if(isset($form_area_conf))
						@foreach ($periodo as $per)
								@if($per->estado==1)
									<div class="panel panel-default col-md-13">
										<div class="panel-heading tipolll">NUEVO AREA</div>
										<div class="panel-body">
											@include('areas.registro')
										</div>
									</div>
									<div class="panel panel-default col-md-15">
										<div class="panel-heading tipolll">CONFIGURACION AREA</div>
										<div class="panel-body">
										@include('areas.tabla')
										</div>
									</div>
									@include('areas.modal')
								@endif
								@if($per->estado!=1)
								{{$per}}
									<div class="panel panel-default col-md-13">
										<div class="panel-heading tipol">NUEVO AREA</div>
										<div class="panel-body">
											<h1>hola</h1>
												@include('advertencias.adv1')
										</div>
									</div>
								@endif
						@endforeach
				@endif


				@if(isset($mostrar_per))
					<div class="panel panel-default col-md-15">
							<div class="panel-heading tipolll">PERIODOS EVALUADOS</div>
							<div class="panel-body">
									@include('periodopoa.datosperiodo')
							</div>
					</div>
				@endif
				@if(isset($crear))
					<div class="panel panel-default col-md-13">
							<div class="panel-heading tipolll">CREAR PERIODOS</div>
							<div class="panel-body">
									@include('periodopoa.ingreso')
							</div>
					</div>
					<div class="panel panel-default col-md-13">
							<div class="panel-heading tipolll">EVALUACIONES DE PERIODOS</div>
							<div class="panel-body">
									@include('periodopoa.evaluacion')
							</div>
					</div>
					<div class="panel panel-default col-md-13">
							<div class="panel-body">
									@include('periodopoa.tablaevaluacion')
							</div>
					</div>
					<div class="panel panel-default col-md-13">
							<div class="panel-body">
									<button id="guardar" type="submit" class="tipoll btn btn-primary">GUARDAR</button>
							</div>
					</div>

			@endif
			@if(isset($mostrar))
			<div class="panel panel-default col-md-13">
				<div class="panel-heading tipolll">LISTA DE PERIODOS</div>
				<form class="form-inline">
					<div class="form-group">
						<label>FILTRO</label>
						<input type="text" id="filtrar" class="form-control mx-sm-3">
					</div>
				</form>
					<div class="panel-body">
							@include('periodopoa.index')
							@include('periodopoa.modal')
							@include('periodopoa.updateval')
							@include('periodopoa.modalall')
					</div>
			</div>
    	@endif

			@if(isset($mostrar_eval_metas))
			<div class="panel panel-default col-md-19">
				<div class="panel-heading tipolll">DATOS</div>
				<form class="form-inline">
					<div class="panel-body">
							@include('estado_metas.principal')
					</div>
				</form>
			</div>
    	@endif



		</div>
	</div>


@endsection
<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('js/alertify.js')}}"></script>
<script src="{{asset('js/alertify.min.js')}}"></script>
<script src="{{asset('js/logica1.js')}}"></script>
<script src="{{asset('js/logica.js')}}"></script>
<script src="{{asset('js/logica2.js')}}"></script>
<script src="{{asset('js/logica3.js')}}"></script>
<script src="{{asset('js/logica4.js')}}"></script>
