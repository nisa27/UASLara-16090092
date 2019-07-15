@extends('back-end/template') 
@section('main')
		<div id="kamar">
			<h2 class="text-center">Detail kamar</h2>
			<!-- @foreach($kamar->fasilitas as $item)
					<strong><span>{{ $item->nama_fasilitas }}</span></strong>
					@endforeach -->
			<table class="table table-stripped">
				<tr>
					<th>Nomor Kamar</th>
					<td>{{ $kamar->no_kamar }}</td>
				</tr>
				<tr>
					<th>Nama</th>
					<td>{{ $kamar->nama_kamar }}</td>
				</tr>
				<tr>
					<th>Harga</th>
					<td>{{ $kamar->harga }}</td>
				</tr>
				<tr>
					<th>Keterangan</th>
					<td>{{ $kamar->keterangan }}</td>
				</tr>
				<tr>
					<th>Foto</th> 
					<td>
						<img src="{{ asset('/'. $kamar->foto) }}" width="100" height="100">
					</td>
				</tr>

			</table>
		</div>
    </div>
</div>
@stop
