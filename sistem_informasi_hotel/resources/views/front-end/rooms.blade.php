@extends('front-end/template')

@section('main')
	<!-- Booking -->
	<div class="booking">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="booking_title text-center"><h2>Daftar Kamar</h2></div>
					<!-- <div class="booking_text text-center">
						<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse nec faucibus velit. Quisque eleifend orci ipsum, a bibendum lacus suscipit sit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse nec faucibus velit. Quisque eleifend orci ipsum, a bibendum lacus suscipit sit.</p>
					</div>
 -->
					<!-- Booking Slider -->
					<div class="booking_slider_container">
						<div class="owl-carousel owl-theme booking_slider">
						@if(!empty($kamar_list))
							@foreach($kamar_list as $kamar)
							<!-- Slide -->
							<div class="booking_item">
								<div class="background_image"><img src="{{ asset('/'. $kamar->foto) }}"></div>
								<div class="booking_overlay trans_200"></div>
								<div class="booking_price">{{ $kamar->harga }}/Mlm</div>
								<div style="float:right;"><a href="booking/create/{{ $kamar->id }}"><img src="{{ asset ('assets/img/booking.png') }}" style="width:80px;height:80px;margin:20px;"></a></div>
								<div class="booking_link"><a href="detail_kamar/{{ $kamar->id }}">{{ $kamar->nama_kamar }}</a></div>
									
								
							</div>
							@endforeach
						@else
							<p>tidaak ada</p>
						@endif
							

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop
