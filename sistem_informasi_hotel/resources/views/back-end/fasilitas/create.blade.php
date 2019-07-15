@extends('back-end/template')

@section('main')
	<div id="kamar">
		<h2 class="text-center">Tambah Fasilitas</h2>
		{!! Form::open(['url' => 'fasilitas', 'files' => true]) !!}
		@include('back-end.fasilitas.form', ['submitButtonText' => 'SIMPAN'])
		{!! Form::close() !!}
	</div>
@stop

@section('footer')
	@include('footer')
@stop
