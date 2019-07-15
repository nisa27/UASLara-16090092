<!-- @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
 @endif -->
@if(isset($kamar))
	{!! Form::hidden('id', $kamar->id) !!}
@endif
@csrf
<div class="form-group">
	{!! Form::label('no_kamar', 'No Kamar:', ['class' => 'control-label']) !!}
	{!! Form::text('no_kamar', null, ['class' => 'form-control']) !!}
	@if($errors->has('no_kamar'))
		<span class="help-block">{{ $errors->first('no_kamar') }}</span>
	@endif
</div>
<div class="form-group">
	{!! Form::label('nama_kamar', 'Nama: ', ['class' => 'control-label']) !!}
	{!! Form::text('nama_kamar', null, ['class' => 'form-control']) !!}
	@if($errors->has('nama_kamar'))
		<span class="help-block">{{ $errors->first('nama_kamar') }}</span>
	@endif
</div>
<div class="form-group">
	{!! Form::label('id_tipekamar', 'Tipe Kamar: ', ['class' => 'control-label']) !!}
	{!! Form::select('id_tipekamar', $tipekamar_list, null, ['class' => 'form-control', 'id' => 'id_tipekamar', 'placeholder' => 'Pilih  Tipe Kamar']) !!}
	@if($errors->has('id_tipekamar'))
		<span class="help-block">{{ $errors->first('id_tipekamar') }}</span>
	@endif
</div>
<div class="form-group">
	{!! Form::label('fasilitas_hotel', 'Fasilitas: ', ['class' => 'control-label']) !!}
	@if(count($list_fasilitas) >0 )
		@foreach($list_fasilitas as $key => $value)
		<div class="checkbox">
			<label>{!! Form::checkbox('fasilitas_hotel[]', $key, null) !!}
			{{ $value }}</label>
		</div>
		@endforeach
	@endif
	@if($errors->has('fasilitas_hotel'))
		<span class="help-block">{{ $errors->first('fasilitas_hotel') }}</span>
	@endif
</div>
<div class="form-group">
	{!! Form::label('harga', 'Harga: ', ['class' => 'control-label']) !!}
	{!! Form::text('harga', null, ['class' => 'form-control']) !!}
	@if($errors->has('harga'))
		<span class="help-block">{{ $errors->first('harga') }}</span>
	@endif
</div>
<div class="form-group">
	{!! Form::label('keterangan', 'Keterangan: ', ['class' => 'control-label']) !!}
	{!! Form::textArea('keterangan', null, ['class' => 'form-control']) !!}
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
	<a href="{{ url('kamar') }}" class="btn btn-danger">BATAL</a>
</div>
