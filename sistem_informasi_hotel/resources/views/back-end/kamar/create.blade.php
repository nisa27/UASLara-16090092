@extends('back-end/template')

@section('main')

	<div class="tombol-nav" id="kamar">
		<h2 class="text-center">Tambah kamar</h2>
		
		{!! Form::open(['url' => 'kamar', 'files' => true]) !!}
		@include('back-end.kamar.form', ['submitButtonText' => 'SIMPAN'])
		{!! Form::close() !!}
	</div>
</div>
@stop