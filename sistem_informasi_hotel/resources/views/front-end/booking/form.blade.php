<!-- @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
 @endif -->

@csrf
<?php $i = 1;?>
<div class="form-group">
	{!! Form::hidden('id_kamar', $kamar->id, ['class' => 'form-control']) !!}
	@if($errors->has('id_kamar'))
		<span class="help-block">{{ $errors->first('id_kamar') }}</span>
	@endif
</div>
<div class="form-group">
	{!! Form::hidden('kode_booking', 'a'.date('YmdHis').$i++, ['class' => 'form-control']) !!}
	@if($errors->has('kode_booking'))
		<span class="help-block">{{ $errors->first('kode_booking') }}</span>
	@endif
</div>
<div class="form-group">
	{!! Form::label('nama', 'Nama:', ['class' => 'control-label']) !!}
	{!! Form::text('nama', null, ['class' => 'form-control']) !!}
	@if($errors->has('nama'))
		<span class="help-block">{{ $errors->first('nama') }}</span>
	@endif
</div>
<div class="form-group">
	{!! Form::label('no_hp', 'No HP: ', ['class' => 'control-label']) !!}
	{!! Form::text('no_hp', null, ['class' => 'form-control']) !!}
	@if($errors->has('no_hp'))
		<span class="help-block">{{ $errors->first('no_hp') }}</span>
	@endif
</div>
<div class="form-group">
	{!! Form::label('alamat', 'Alamat: ', ['class' => 'control-label']) !!}
	{!! Form::textArea('alamat', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('check_in', 'Check In: ', ['class' => 'control-label']) !!}<br />
	{!! Form::text('check_in', !empty($booking)?$booking->check_in->format('Y-m-d'): null, ['class' => 'datepicker', 'id' => 'check_in']) !!}
		@if($errors->has('check_in'))
		<span class="help-block">{{ $errors->first('check_in') }}</span>
		@endif
</div>
<div class="form-group">
	{!! Form::label('check_out', 'Check Out: ', ['class' => 'control-label']) !!}<br />
	{!! Form::text('check_out', !empty($booking)?$booking->check_out->format('Y-m-d'): null, ['class' => 'datepicker', 'id' => 'check_out']) !!}
		@if($errors->has('check_out'))
		<span class="help-block">{{ $errors->first('check_out') }}</span>
		@endif
</div>
<div class="form-group">
	{!! Form::submit($submitButtonText, ['class' => 'btn btn-success']) !!}
	<a href="{{ url('rooms') }}" class="btn btn-danger">BATAL</a>
</div>
