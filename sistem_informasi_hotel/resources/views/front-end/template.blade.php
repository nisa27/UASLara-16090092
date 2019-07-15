<!DOCTYPE html>
<html lang="en">
<head>
<title>SiHotel</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="The River template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" type="image/x-icon" href="{{ asset ('assets/img/logo/logo.png') }}">
<link rel="stylesheet" type="text/css" href="{{ asset ('assets/css/bootstrap-4.1.2/bootstrap.min.css') }}">
<link href="{{ asset ('assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ asset ('assets/plugins/OwlCarousel2-2.3.4/owl.carousel.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset ('assets/plugins/OwlCarousel2-2.3.4/owl.theme.default.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset ('assets/plugins/OwlCarousel2-2.3.4/animate.css') }}">
<link href="{{ asset ('assets/plugins/jquery-datepicker/jquery-ui.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset ('assets/plugins/colorbox/colorbox.css') }}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ asset ('assets/css/main_styles.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset ('assets/css/responsive.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset ('assets/styles/booking.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset ('assets/styles/booking_responsive.css') }}">
</head>
<body>
 
<div class="super_container">
	@include('front-end/navbar')
	@include('front-end/slider')
	@yield('main')
	@include('front-end/footer')
</div>
<script src="{{ asset ('assets/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset ('assets/css/bootstrap-4.1.2/popper.js') }}"></script>
<script src="{{ asset ('assets/css/bootstrap-4.1.2/bootstrap.min.js') }}"></script>
<script src="{{ asset ('assets/plugins/greensock/TweenMax.min.js') }}"></script>
<script src="{{ asset ('assets/plugins/greensock/TimelineMax.min.js') }}"></script>
<script src="{{ asset ('assets/plugins/scrollmagic/ScrollMagic.min.js') }}"></script>
<script src="{{ asset ('assets/plugins/greensock/animation.gsap.min.js') }}"></script>
<script src="{{ asset ('assets/plugins/greensock/ScrollToPlugin.min.js') }}"></script>
<script src="{{ asset ('assets/plugins/OwlCarousel2-2.3.4/owl.carousel.js') }}"></script>
<script src="{{ asset ('assets/plugins/easing/easing.js') }}"></script>
<script src="{{ asset ('assets/plugins/progressbar/progressbar.min.js') }}"></script>
<script src="{{ asset ('assets/plugins/parallax-js') }}-master/parallax.min.js') }}"></script>
<script src="{{ asset ('assets/plugins/jquery-datepicker/jquery-ui.js') }}"></script>
<script src="{{ asset ('assets/plugins/colorbox/jquery.colorbox-min.js') }}"></script>
<script src="{{ asset ('assets/js/custom.js') }}"></script>
<script src="{{ asset ('assets/js/booking.js') }}"></script>




</body>
</html>