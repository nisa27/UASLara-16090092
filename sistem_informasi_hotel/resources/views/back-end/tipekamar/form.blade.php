@if(isset($tipekamar))
	{!! Form::hidden('id', $tipekamar->id) !!}
@endif

<div class="form-group">
	{!! Form::label('tipe_kamar', 'Tipe Kamar: ', ['class' => 'control-label']) !!}
	{!! Form::text('tipe_kamar', null, ['class' => 'form-control']) !!}
		@if($errors->has('tipe_kamar'))
		<span class="help-block">{{ $errors->first('tipe_kamar') }}</span>
		@endif
</div>


<div class="form-group">
	{!! Form::submit($submitButtonText, ['class' => 'btn btn-success']) !!}
	<a href="{{ url('tipekamar') }}" class="btn btn-danger">BATAL</a>
</div>
