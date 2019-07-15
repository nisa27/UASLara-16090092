@extends('back-end/template')

@section('main')
	<div id="kamar">
		<h2 class="text-center">Edit Fasilitas</h2>
		{!! Form::model($fasilitas, ['method' => 'PATCH', 'action' => ['FasilitasController@update', $fasilitas->id], 'enctype' => 'multipart/form-data']) !!}
		@include('back-end.fasilitas.form', ['submitButtonText' => 'EDIT'])
		{!! Form::close() !!}
	</div>
@stop

@section('footer')
	@include('footer')
@stop
