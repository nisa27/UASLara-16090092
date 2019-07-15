@extends('front-end/template')

@section('main')
	<!-- Details Right -->

	<div class="details">
		<div class="container">
			<div class="row">
				
				<!-- Details Image -->
				<div class="col-xl-7 col-lg-6">
					<div class="details_image">
						<div class="background_image"><img src="{{ asset('/'. $kamar->foto) }}"></div>
					</div>
				</div>

				<!-- Details Content -->
				<div class="col-xl-5 col-lg-6">
					<div class="details_content">
						<div class="details_title"></div>
						<div class="details_list">
							<ul>
								<h2>{{ $kamar->nama_kamar }}</h2>
								@foreach($kamar->fasilitas as $item)
								<li>Balcony with view</li>
								<li>Garden / Mountain view</li>
								<li>Flat-screen TV</li>
								<li>Air conditioning</li>
								<li>Soundproofing</li>
								<li>Private bathroom</li>
								<li>{{ $item->nama_fasilitas }}</li>
								@endforeach
							</ul>
						</div>
						<div class="details_long_list">
							<ul class="d-flex flex-row align-items-start justify-content-start flex-wrap">
								<li>Balcony</li>
								<li>Mountain view</li>
								<li>Terrace</li>
								<li>TV</li>
								<li>Satellite Channels</li>
								<li>Safety Deposit Box</li>
								<li>Heating</li>
								<li>Sofa</li>
								<li>Tile/Marble floor</li>
								<li>Mosquito net</li>
								<li>Wardrobe/Closet</li>
								<li>Sofa bed</li>
								<li>Shower</li>
								<li>Hairdryer</li>
								<li>Free toiletries</li>
								<li>Toilet</li>
								<li>Bath or Shower</li>
								<li>Toilet paper</li>
								<li>Tea/Coffee Maker</li>
								<li>Minibar</li>
								<li>Dining area</li>
								<li>Electric kettle</li>
								<li>Dining table</li>
								<li>Outdoor furniture</li>
								<li>Outdoor dining area</li>
								<li>Towels</li>
								<li>Linen</li>
								<li>Upper floors accessible by lift</li>
							</ul>
						</div>
						
					</div>
				</div>

			</div>
		</div>
	</div>

	
@stop