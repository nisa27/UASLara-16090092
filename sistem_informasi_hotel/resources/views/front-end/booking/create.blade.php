@extends('front-end/template')

@section('main')
	
	<div class="tombol-nav" id="booking">
		<h2 class="text-center">Form Booking</h2>
		{!! Form::open(['url' => 'booking', 'files' => true]) !!}
		@include('front-end.booking.form', ['submitButtonText' => 'BOOKING'])
		{!! Form::close() !!}
	</div>
</div>
@stop