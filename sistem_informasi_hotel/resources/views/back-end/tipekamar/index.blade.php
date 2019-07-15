@extends('back-end/template')

@section('main')
<div id="tipekamar" style="margin: 50px;">
	<h2 class="text-center">Tipe Kamar</h2>
	<div class="tombol-nav">	
		<a href="tipekamar/create" class="btn btn-primary">
			Tambah</a>
	</div>
	@include('_partial.flash_message')
	@if (!empty($tipekamar_list))
		<table class="table">
			<thead>
				<tr>
					<th>No</th>
					<th>Tipe Kamar</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php $i = 0 ; ?>
				@foreach ($tipekamar_list as $tipekamar)
				<tr>
					<td>{{ ++$i }}</td>
					<td>{{ $tipekamar->tipe_kamar }}</td>
					<td>
							<!-- <div class="box-button">
								{{ link_to('tipekamar/'.$tipekamar->id.'/edit','Edit',['class' => 'btn btn-warning btn-sm']) }}
							</div> -->
							<div class="box-button">
								{!! Form::open(['method' => 'DELETE', 'action' => ['TipekamarController@destroy', $tipekamar->id]]) !!}
								{!! Form::submit('Hapus!', ['class' => 'btn btn-danger btn-sm', 'onclick' => 'return confirm("Apakah Anda Yakin Akan Menghapus Data Ini?")']) !!}
								{!! Form::close() !!}
							</div>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	@else
		<p>Tidak ada data tipe kamar</p>
	@endif
	
	
</div>
@stop

@section('footer')
	@include('footer')
@stop