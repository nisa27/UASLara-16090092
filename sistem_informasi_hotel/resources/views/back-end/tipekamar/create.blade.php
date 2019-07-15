@extends('back-end/template')

@section('main')
	<div id="kamar" style="margin-bottom:200px;">
		<h2 class="text-center">Tambah Tipe Kamar</h2>
		{!! Form::open(['url' => 'tipekamar', 'files' => true]) !!}
		@include('back-end.tipekamar.form', ['submitButtonText' => 'SIMPAN'])
		{!! Form::close() !!}
	</div>
@stop

@section('footer')
	@include('footer')
@stop
