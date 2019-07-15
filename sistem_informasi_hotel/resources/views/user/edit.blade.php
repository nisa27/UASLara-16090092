@extends('back-end/template')
@section('main')
	<div id="kamar">
		<h2 class="text-center">Edit User</h2>
		
		{!! Form::model($user, ['method' => 'PATCH', 'action' => ['UserController@update', $user->id]]) !!}
		@include('user.form', ['submitButtonText' => 'EDIT'])
		{!! Form::close() !!}
	</div>
@stop
@section('footer')
	@include('footer')
@stop