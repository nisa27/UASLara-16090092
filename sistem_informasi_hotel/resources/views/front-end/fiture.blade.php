@extends('front-end/template')

@section('main')
<!-- Features -->
 
	<div class="features">
		<div class="container">
			<div class="row">
				
				<!-- Icon Box -->
				@if(!empty($fasilitas_list))
							@foreach($fasilitas_list as $fasilitas)
				<div class="col-lg-4 icon_box_col">
					<div class="icon_box d-flex flex-column align-items-center justify-content-start text-center">
						<div class="icon_box_icon"><img src="{{ asset('/'. $fasilitas->foto) }}" class="svg" alt="https://www.flaticon.com/authors/monkik"></div>
						<div class="icon_box_title"><h2>{{ $fasilitas->nama_fasilitas }}</h2></div>
						<div class="icon_box_text"><p>{{ $fasilitas->isi }}</p>
						</div>
					</div>
				</div>
				@endforeach
			@else
				<p>tidaak ada</p>
			@endif

			</div>
		</div>
	</div>
@stop