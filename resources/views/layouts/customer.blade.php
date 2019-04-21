<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<title>Customer Dashboard</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="keywords" content="Go Laundry Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
		<!-- Bootstrap Core CSS -->
	<link href="{{asset('assets/css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
	<!-- gallery css -->
	<link rel="stylesheet" href="{{asset('assets/css/swipebox.css')}}">
	<!-- Custom CSS -->
	<link href="{{asset('assets/css/style.css')}}" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" type="text/css" href="{{asset('assets/login/css/main.css')}}">

	<!-- font-awesome icons -->
	<link href="{{asset('assets/css/fontawesome-all.min.css')}}" rel="stylesheet">
	<!-- //Custom Theme files -->
	<!--webfonts-->
	<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
	    rel="stylesheet">
	<!--//webfonts-->
	<style>
	.menu{
		height: 70px;
		background-color: white;
		
	}
	</style>
</head>

<body>
	<!-- main div start -->
	<div class="container-fluid ">
	    <!-- header -->
		<header class="menu">
			<div class="fixed-top menu">
			<nav class="navbar navbar-expand-lg navbar-light ">
				<a class="navbar-brand" href="index.html">
					<i class="fab fa-empire"></i>
				</a>
				<button class="navbar-toggler ml-md-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
				    aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse " id="navbarSupportedContent">
					<ul class="navbar-nav mx-auto text-center">
						<li class="nav-item active  mr-3">
							<a class="nav-link" href="index.html">Home
								<span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="nav-item  mr-3">
							<a class="nav-link scroll" href="#about">আমাদের-সেবাসমূহ</a>
						</li><li class="nav-item  mr-3">
							<a class="nav-link scroll" href="#services">কার্যাবলী</a>
						</li><li class="nav-item  mr-3">
							<a class="nav-link scroll" href="#pricing">মূল্য তালিকা</a>
						</li><li class="nav-item  mr-3">
							<a class="nav-link scroll" href="#pakage">প্যাকেজ</a>
						</li><li class="nav-item  mr-3">
							<a class="nav-link scroll" href="#team">Team</a>
						</li><li class="nav-item  mr-3">
							<a class="nav-link scroll" href="#gallery">Gallery</a>
						</li><li class="nav-item  mr-3">
							<a class="nav-link scroll" href="#testimonials">Testimonials</a>
						</li>
						<li class="nav-item">
							<a class="nav-link scroll" href="#contact">contact</a>
						</li>
					</ul>
					</div>
				</nav>
			</div>
		</header>
	<!-- header end -->

	<div class="row">
				<div class="col-md-2 col-12">
						<a href="#" class="list-group-item list-group-item-action active">My Account</a>
						<a href="{{ route('profile') }}" class="list-group-item list-group-item-action">Profile</a>
						<a href="#" class="list-group-item list-group-item-action">My Package</a>
						<a href="#" class="list-group-item list-group-item-action">Pickup Request</a>
						<a href="#" class="list-group-item list-group-item-action">Order Information</a>
						<a href="#" class="list-group-item list-group-item-action">Reward Transaction</a>
						<a href="#" class="list-group-item list-group-item-action">Referral Program</a>
						<a href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="list-group-item list-group-item-action disabled">{{ __('Logout') }}</a>
						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
					</div>
				 </td>
				<div class="col-md-10 col-12">
    {{-- main contant --}}
    @yield('contant')
    {{-- footer contant --}}
</div>
</div>
</div>
<!-- main div end -->
{{-- footer --}}
<footer class="py-md-5 pt-5 pb-4">
		<div class="container">
			<!-- footer grid top -->
			<div class="footerv2-w3ls text-center">
				<h4 class="w3ls-title text-capitalize pb-3">socialize with us</h4>
				<ul class="social-iconsv2 agileinfo mt-3">
					<li>
						<a href="#">
							<i class="fab fa-facebook-f"></i>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fab fa-twitter"></i>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fab fa-google-plus-g"></i>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fab fa-linkedin-in"></i>
						</a>
					</li>
				</ul>
				<div class="fv3-contact mt-3">
					<span class="fas fa-envelope-open mr-2"></span>
					<p>
						<a href="mailto:info@creativeitbari.com" class="text-dark">info@creativeitbari.com</a>
					</p>
				</div>
				<div class="fv3-contact">
					<span class="fas fa-phone-volume mr-2"></span>
					<p>+88 01738356180</p>
				</div>
			</div>
			<!-- copyright -->
			<div class="cpy-right text-center pt-5">
				<p>© 2019 IDB Laundry. All rights reserved | Design by
					<a href="http://creativeitbari.com"> CreativeITbari.</a>
				</p>
			</div>
			<!-- //copyright -->
		</div>
	</footer>
{{-- footer end --}}
{{-- The javascript plugin to display page loading on top --}}
<script src="{{asset('assets/login/js/plugins/pace.min.js')}}"></script>
<!-- js-->
{{-- footer2 --}}
@yield('footer2');
<!-- js-->
<!-- start-smooth-scrolling -->
<script src="{{asset('assets/js/move-top.js')}}"></script>
<script src="{{asset('assets/js/easing.js')}}"></script>
<script src="{{asset('assets/js/SmoothScroll.min.js')}} "></script>
<script>
  jQuery(document).ready(function ($) {
      $(".scroll ").click(function (event) {
          event.preventDefault();

          $('html,body').animate({
              scrollTop: $(this.hash).offset().top
          }, 1000);
      });
  });
</script>
<!-- //end-smooth-scrolling -->
<!-- smooth-scrolling-of-move-up -->
<script>
  $(document).ready(function () {
      /*
       var defaults = {
           containerID: 'toTop', // fading element id
           containerHoverID: 'toTopHover', // fading element hover id
           scrollSpeed: 1200,
           easingType: 'linear' 
       };
       */

      $().UItoTop({
          easingType: 'easeOutQuart'
      });

  });
</script>

<!-- //smooth-scrolling-of-move-up -->
<!-- Bootstrap Core JavaScript -->
<script src="{{asset('assets/js/bootstrap.js')}}"></script>
<!-- //Bootstrap Core JavaScript -->
</body>

</html>