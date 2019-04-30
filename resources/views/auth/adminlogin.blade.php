<!DOCTYPE html>
<html lang="zxx">
<!-- Head -->

<head>
    <title>Admin Login Form</title>
    <!-- Meta-Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="idb-bisew laundry, laundry services">
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);
        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Praxis-sb Meta-Tags -->
    <!--Praxis-sb Index-Page-CSS -->
    <link rel="stylesheet" href="{{asset('assets/admin_writer/css/style.css')}}" type="text/css" media="all">
    <!-- Praxis-sbCustom-Stylesheet-Links -->
    <!--fonts -->
    <!-- //fonts -->
    <link rel="stylesheet" href="{{asset('assets/admin_writer/css/font-awesome.min.css')}}" type="text/css" media="all">
    <!-- //Font-Awesome-File-Links -->
	
	<!-- Praxis-sb Google fonts -->
	<link href="//fonts.googleapis.com/css?family=Quattrocento+Sans:400,400i,700,700i" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Mukta:200,300,400,500,600,700,800" rel="stylesheet">
	<!-- Praxis-sb Google fonts -->

</head>
<!-- //Head -->
<!-- Body -->

<body>

<section class="praxis-sb-main">
	<div class="praxis-sb-layer">
		<!--===================================praxis_sb  admin menu start ===================================-->
		<div class="praxis-sb-bottom-grid">
			<div class="praxis-sb-logo">
				<h1> <a href="index.html"><span class="fa fa-key"></span> Praxis</a></h1>
			</div>
			<div class="links">
				<ul class="links-unordered-list">
					{{-- <li class="active">
						<a href="{{ url('login/admin') }}" class="">Login</a>
					</li> --}}
					<li class="">
						<a href="#" class="">About Us</a>
					</li>
					<li class="active">
						<a href="{{ url('register/admin') }}" class="">Register</a>
					</li>
					<li class="">
						<a href="#" class="">Contact</a>
					</li>
				</ul>
			</div>
		</div>
		  <!--===================================praxis_sb  admin menu end ===================================-->
	   
		  
		  <!--===================================praxis_sb  admin login form start ===================================-->
		<div class="praxis-sb-content-w3ls">
			<div class="text-center icon">
                    <div> {{ isset($url) ? ucwords($url) : ""}} {{ __('Login') }}</div>
			</div>
			<div class="content-bottom">
                    @isset($url)
                    <form method="POST" action='{{ url("login/$url") }}' aria-label="{{ __('Login') }}">
                    @else
                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                    @endisset
                        @csrf
                        
					<div class="field-group">
						<span class="fa fa-user" aria-hidden="true"></span>
						<div class="wthree-field">
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="Email">
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
						</div>
					</div>
					<div class="field-group">
						<span class="fa fa-lock" aria-hidden="true"></span>
						<div class="wthree-field">
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Password">

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
						</div>
					</div>
					<div class="wthree-field">
						<button type="submit" class="btn">Get Started</button>
					</div>
					<ul class="list-login">
						<li class="switch-agileits">
							<label class="switch">
                                    <input type="checkbox">
								<span class="slider round"></span>
								keep Logged in
							</label>
						</li>
						<li>
							<a href="#" class="text-right">forgot password?</a>
						</li>
						<li class="clearfix"></li>
					</ul>
					<ul class="list-login-bottom">
						<li class="">
							<a href="{{ url('register/admin') }}" class="">Create Account</a>
						</li>
						<li class="">
							<a href="#" class="text-right">Need Help?</a>
						</li>
						<li class="clearfix"></li>
					</ul>
				</form>
			</div>
		</div>

		<!--===================================praxis_sb  admin login form end ===================================-->



        <!--===================================praxis_sb  admin term and condition start ===================================-->
		<div class="bottom-grid1">
			<div class="links">
				<ul class="links-unordered-list">
					<li class="">
						<a href="#" class="">About Us</a>
					</li>
					<li class="">
						<a href="#" class="">Privacy Policy</a>
					</li>
					<li class="">
						<a href="#" class="">Terms of Use</a>
					</li>
				</ul>
			</div>
			<div class="copyright">
				<p>© 2019 IDB-BISEW. All rights reserved | Design by
					<a href="#">Praxis</a>
				</p>
			</div>
		</div>

		 <!--===================================praxis_sb  admin term and condition end ===================================-->
    </div>
</section>

</body>

</html>
