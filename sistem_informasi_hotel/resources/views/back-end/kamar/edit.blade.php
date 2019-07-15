@extends('back-end/template')

@section('main')

		<div id="kamar">
			<h2 class="text-center">Edit kamar</h2>
			{!! Form::model($kamar, ['method' => 'PATCH', 'action' => ['KamarController@update', $kamar->id], 'enctype' => 'multipart/form-data']) !!}
			@include('back-end.kamar.form', ['submitButtonText' => 'EDIT'])
			{!! Form::close() !!}
		</div>
</div>
@stop

