@if(isset($user))
	{!! Form::hidden('id', $user->id) !!}
@endif
<div class="form-group">
	{!! Form::label('name', 'Nama: ', ['class' => 'control-label']) !!}
	{!! Form::text('name', null, ['class' => 'form-control']) !!}
		@if($errors->has('name'))
		<span class="help-block">{{ $errors->first('name') }}</span>
		@endif
</div>
<div class="form-group">
	{!! Form::label('email', 'Email: ', ['class' => 'control-label']) !!}
	{!! Form::text('email', null, ['class' => 'form-control']) !!}
		@if($errors->has('email'))
		<span class="help-block">{{ $errors->first('email') }}</span>
		@endif
</div>
<div class="form-group">
	{!! Form::label('level', 'Level: ', ['class' => 'control-label']) !!}
	<div class="radio">
		<label>{!! Form::radio('level', 'operator') !!} Operator</label>
	</div>
	<div class="radio">
		<label>{!! Form::radio('level', 'admin') !!}Administrator</label>
	</div>
	@if($errors->has('level'))
		<span class="help-block">{{ $errors->first('level') }}</span>
	@endif
</div>
<div class="form-group">
	{!! Form::label('password', 'Password: ', ['class' => 'control-label']) !!}
	{!! Form::text('password', null, ['class' => 'form-control']) !!}
		@if($errors->has('password'))
		<span class="help-block">{{ $errors->first('password') }}</span>
		@endif
</div>
<div class="form-group">
	{!! Form::label('password_confirmation', 'Password Confirmation: ', ['class' => 'control-label']) !!}
	{!! Form::text('password_confirmation', null, ['class' => 'form-control']) !!}
		@if($errors->has('password_confirmation'))
		<span class="help-block">{{ $errors->first('password_confirmation') }}</span>
		@endif
</div>


<div class="form-group">
	{!! Form::submit($submitButtonText, ['class' => 'btn btn-success']) !!}
	<a href="{{ url('user') }}" class="btn btn-danger">BATAL</a>
</div>
