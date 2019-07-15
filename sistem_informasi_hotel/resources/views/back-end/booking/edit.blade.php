@extends('back-end/template')

@section('main')
		<div id="booking">
		<h2 class="text-center">Edit Booking</h2>
			{!! Form::model($booking, ['method' => 'PATCH', 'action' => ['BookingController@update', $booking->id], 'enctype' => 'multipart/form-data']) !!}
			@include('front-end.booking.form', ['submitButtonText' => 'EDIT'])
			{!! Form::close() !!}
		</div>
        </div>
</div>
@stop

