@extends('back-end/template')

@section('main')
<div id="fasilitas" style="margin: 50px;">
	<h2 class="text-center">Fasilitas</h2>
	<div class="tombol-nav">	
		<a href="fasilitas/create" class="btn btn-primary">Tambah</a>
	</div>
	@include('_partial.flash_message')
	@if (!empty($fasilitas_list))
		<table class="table">
			<thead>
				<tr>
					<th>No</th>
					<th>Fasilitas</th>
					<th>Detail</th>
					<th>Foto</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php $i = 0 ; ?>
				@foreach ($fasilitas_list as $fasilitas)
				<tr>
					<td>{{ ++$i }}</td>
					<td>{{ $fasilitas->nama_fasilitas }}</td>
					<td width="300px">{{ $fasilitas->isi }}</td>
					<td width="150px">
                        <img src="{{ asset('/'. $fasilitas->foto) }}" style="width:100px;height:100px;">
                    </td>
					<td>
						<div class="box-button">
								{{ link_to('fasilitas/'.$fasilitas->id.'/edit','Edit',['class' => 'btn btn-warning btn-sm']) }}
							</div>
							<div class="box-button">
								{!! Form::open(['method' => 'DELETE', 'action' => ['FasilitasController@destroy', $fasilitas->id]]) !!}
								{!! Form::submit('Hapus!', ['class' => 'btn btn-danger btn-sm', 'onclick' => 'return confirm("Apakah Anda Yakin Akan Menghapus Data Ini?")']) !!}
								{!! Form::close() !!}
							</div>
						
					</td>

				</tr>
				@endforeach
			</tbody>
		</table>
	@else
		<p>Tidak ada data fasilitas</p>
	@endif
	
</div>
@stop

@section('footer')
	@include('footer')
@stop