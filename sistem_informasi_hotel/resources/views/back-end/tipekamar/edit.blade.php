@extends('back-end/template')

@section('main')
	<div id="tipekamar">
		<h2>Edit Tipe Kamar</h2>
		{!! Form::model($tipekamar, ['method' => 'PATCH', 'action' => ['TipekamarController@update', $tipekamar->id]]) !!}
		@include('back-end.tipekamar.form', ['submitButtonText' => 'Update tipe kamar'])
		{!! Form::close() !!}
	</div>
@stop

@section('footer')
	@include('footer')
@stop
