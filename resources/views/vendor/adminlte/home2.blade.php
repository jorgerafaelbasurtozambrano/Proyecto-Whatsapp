@extends('adminlte::layouts.app2')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection

@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-10 col-md-offset-1" style="background-color:vec3(0.75, 0.89, 0.87); ">
		</div>
	</div>
@endsection
<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('js/alertify.js')}}"></script>
<script src="{{asset('js/alertify.min.js')}}"></script>
