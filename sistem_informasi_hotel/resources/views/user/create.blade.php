@extends('back-end/template')
@section('main')
	<div id="kamar">
		<h2 class="text-center">Tambah User</h2>
		
		{!! Form::open(['url' => 'user']) !!}
		@include('user.form', ['submitButtonText' => 'SIMPAN'])
		{!! Form::close() !!}
	</div>
@stop
@section('footer')
	@include('footer')
@stop