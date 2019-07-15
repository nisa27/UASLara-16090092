@if(isset($fasilitas))
	{!! Form::hidden('id', $fasilitas->id) !!}
@endif
<div class="form-group">
	{!! Form::label('nama_fasilitas', 'Nama Fasilitas: ', ['class' => 'control-label']) !!}
	{!! Form::text('nama_fasilitas', null, ['class' => 'form-control']) !!}
		@if($errors->has('nama_fasilitas'))
		<span class="help-block">{{ $errors->first('nama_fasilitas') }}</span>
		@endif
</div>
<div class="form-group">
	{!! Form::label('isi', 'Detail: ', ['class' => 'control-label']) !!}
	{!! Form::textArea('isi', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('foto', 'Foto : ') !!}
    {!! Form::file('foto') !!}
    @if($errors->has('foto'))
		<span class="help-block">{{ $errors->first('foto') }}</span>
	@endif
</div>

<div class="form-group">
	{!! Form::submit($submitButtonText, ['class' => 'btn btn-success']) !!}
	<a href="{{ url('fasilitas') }}" class="btn btn-danger">BATAL</a>
</div>
