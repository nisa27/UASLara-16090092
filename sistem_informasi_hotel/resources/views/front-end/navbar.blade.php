<!-- Header -->
	<header class="header">
		<div class="header_content d-flex flex-row align-items-center justify-content-start">
			<div class="logo"><a href="#">SiHotel</a></div>
			<div class="ml-auto d-flex flex-row align-items-center justify-content-start">
				<nav class="main_nav">
					<ul class="d-flex flex-row align-items-start justify-content-start">
						@if (!empty($halaman) && $halaman == 'about')
						<li class="active"><a href="{{ url('about') }}">Tentang
						<span class="sr-only">(current)</span></a></li>
						@else
						<li><a href="{{ url('about') }}">Tentang</a></li>
						@endif
						@if (!empty($halaman) && $halaman == 'rooms')
						<li class="active"><a href="{{ url('rooms') }}">Kamar
						<span class="sr-only">(current)</span></a></li>
						@else
						<li><a href="{{ url('rooms') }}">Kamar</a></li>
						@endif
						@if (!empty($halaman) && $halaman == 'fiture')
						<li class="active"><a href="{{ url('fiture') }}">Fasilitas
						<span class="sr-only">(current)</span></a></li>
						@else
						<li><a href="{{ url('fiture') }}">Fasilitas</a></li>
						@endif
						@if (!empty($halaman) && $halaman == 'contact')
						<li class="active"><a href="{{ url('contact') }}">Kontak
						<span class="srcmd-only"></span></a></li>
						@else
						<li><a href="{{ url('contact') }}">Kontak</a></li>
						@endif
											
					</ul>
				</nav>

				<!-- Hamburger Menu -->
				<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
			</div>
		</div>
	</header>

	<!-- Menu -->

	<div class="menu trans_400 d-flex flex-column align-items-end justify-content-start">
		<div class="menu_close"><i class="fa fa-times" aria-hidden="true"></i></div>
		<div class="menu_content">
			<nav class="menu_nav text-right">
				<ul>
						@if (!empty($halaman) && $halaman == 'about')
						<li class="active"><a href="{{ url('about') }}">Tentang
						<span class="sr-only">(current)</span></a></li>
						@else
						<li><a href="{{ url('about') }}">Tentang</a></li>
						@endif
						@if (!empty($halaman) && $halaman == 'rooms')
						<li class="active"><a href="{{ url('rooms') }}">Kamar
						<span class="sr-only">(current)</span></a></li>
						@else
						<li><a href="{{ url('rooms') }}">Kamar</a></li>
						@endif
						@if (!empty($halaman) && $halaman == 'fasilitas')
						<li class="active"><a href="{{ url('fiture') }}">Fasilitas
						<span class="sr-only">(current)</span></a></li>
						@else
						<li><a href="{{ url('fiture') }}">Fasilitas</a></li>
						@endif
						@if (!empty($halaman) && $halaman == 'contact')
						<li class="active"><a href="{{ url('contact') }}">Kontak
						<span class="sr-only">(current)</span></a></li>
						@else
						<li><a href="{{ url('contact') }}">Kontak</a></li>
						@endif				
				</ul>
			</nav>
		</div>
		<div class="menu_extra">
			<div class="menu_book text-right"><a href="#">Book online</a></div>
			<div class="menu_phone d-flex flex-row align-items-center justify-content-center">
				<img src="{{ asset ('assets/img/phone-2.png') }}" alt="">
				<span>0183-12345678</span>
			</div>
		</div>
	</div>
