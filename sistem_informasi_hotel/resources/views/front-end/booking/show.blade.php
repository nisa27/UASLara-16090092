@extends('front-end/template') 
@section('main')
		<div id="booking">
			<h2>Konfirmasi Booking</h2>
			<table class="table table-stripped">
				<tr>
					<th>Kode Booking</th>
					<td>{{ $book->kode_booking }}</td>
				</tr>
				<!-- <tr>
					<th>Total Pembayaran</th>
					<td>{{ $book->harga }}</td>
				</tr> -->
			</table>
			<a href="{{ url('get-pesan') }}" class="btn btn-danger btn-sm">
		        	OK
			 </a>
		</div>
		
	    @if ($message = Session::get('success'))
	      <div class="alert alert-success alert-block">
	        <button type="button" class="close" data-dismiss="alert">×</button> 
	          <strong>{{ $message }}</strong>
	      </div>
    @endif
   <!--  <a href="cetak_pdf">Cetak PDF</a>
    </div> -->

</div>
@stop
