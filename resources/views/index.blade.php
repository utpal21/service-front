<!DOCTYPE html>
<html>
<head>
<title>service</title>
<!-- =================================== css start===================================-->
<link href="{{asset('assets/css/bootstrap.min.css')}}" rel='stylesheet' type='text/css' />
<!--===================================css end===================================-->

<!--=================================== praxis_sb bxSlider CSS file=================================== -->
<link href="assets/css/praxis_sb.bxslider.css" rel="stylesheet" />


<!--=================================== icon  custom css start===================================-->
<link rel="stylesheet" href="{{asset('themify-icons.css')}}">
<link rel="stylesheet" href="{{asset('ie7/ie7.css')}}">
<!---=================================== google fornt -===================================-->
<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!---=================================== google fornt -===================================-->
<!--=================================== icon  custom css start===================================-->
<!--===================================praxis_sb custom css start===================================-->
{{-- <link href="{{asset('assets/css/custom.css')}}"> --}}
<!--===================================praxis_sb  custom css start===================================-->
<style>
/*=================================== praxis_sb_search ===================================-*/
body {
    font-family: 'Poppins';font-size: 16px;
}
.praxis_sb_search{


	background-image: url("images/bg.jpg");
height: 350px;

	border: 0.5px solid gray;

}
.input-group{
	margin-top: 150px;
	padding: 5px;
}

/*=================================== praxis_sb_category ===================================-*/
.praxis_sb_image{
border-radius: 50%;
	
}
.present{
	background-color: gainsboro;
}
.mycolor{
	background-color: gainsboro;
}

</style>
</head>
<body>
<!--===================================menu start===================================-->

 <div class="navbar">
    <nav class="navbar navbar-expand-lg shadow p-3 mb-5 bg-white rounded bg-gradient-light  fixed-top" id="bg">
      <div class="container">
        <a class="navbar-brand" href="index.php">BD-service</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">link</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
		
	</div>
<br>
<!--===================================menu end===================================-->
<!--===================================search start===================================-->
<div class="praxis_sb_search">
	<div class="input-group container">
  
		<input type="search" placeholder="Service Name"  class="form-control">
		<input type="search" placeholder="Location" class="form-control">
		<div class="input-group-prepend">
			<button type="submit"><i class="ti-search"></i></button>
			
		</div>
	</div>

</div>
<br>
<!--===================================search end===================================-->


<!--===================================category strat===================================-->
<!-- <ul class="bxslider">
		<li> <a href="#multiCollapseExample1" data-toggle="collapse"><img src="images/sample-image.jpg"  />
		<p>link</p></a>
		 </li>
		 <li> <a href="#multiCollapseExample1" data-toggle="collapse"><img src="images/sample-image.jpg" />
			<p>link</p></a>
			 </li>
			 <li> <a href=""><img src="images/sample-image.jpg" />
				<p>link</p></a>
				 </li>
				 <li> <a href=""><img src="images/sample-image.jpg" />
					<p>link</p></a>
					 </li>
					 <li> <a href=""><img src="images/sample-image.jpg" />
						<p>link</p></a>
						 </li>
						 <li> <a href=""><img src="images/sample-image.jpg" />
							<p>link</p></a>
							 </li>
							 <li> <a href=""><img src="images/sample-image.jpg" />
								<p>link</p></a>
								 </li>
								 <li> <a href=""><img src="images/sample-image.jpg" />
									<p>link</p></a>
									 </li>
									 <li> <a href=""><img src="images/sample-image.jpg" />
										<p>link</p></a>
										 </li>
										 <li> <a href=""><img src="images/sample-image.jpg" />
											<p>link</p></a>
											 </li>

	</ul> -->
	<div class="container d-flex justify-content-center ">
<ul class="nav">
	<li class="nav-item"><a class="" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1"><i class="fa fa-balance-scale" style="font-size:60px;color:gray;margin-left: 2px;"></i><p>Best deal</p>
	
		</a></li>&nbsp;&nbsp;
		<li class="nav-item"><a class="" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1"><i class="fa fa-briefcase" style="font-size:60px;color:forestgreen;margin-left: 35px;"></i><p>Beauty Services</p>
			</a></li>&nbsp;&nbsp;&nbsp;
			<li class="nav-item"><a class="" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1"><i class="fa fa-birthday-cake" style="font-size:60px;color:rgb(119, 161, 56)"></i><p>Food</p>
			</a></li>&nbsp;&nbsp;&nbsp;
			<li class="nav-item"><a class="" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1"><i class="fa fa-bus" style="font-size:60px;color:peru;margin-left: 20px;"></i><p> Services2</p>
			</a></li>&nbsp;&nbsp;&nbsp;
			<li class="nav-item"><a class="" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1"><i class="fa fa-cogs" style="font-size:60px;color:khaki"></i><p> Services3</p>
			</a></li>&nbsp;&nbsp;&nbsp;
			<li class="nav-item"><a class="" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1"><i class="fa fa-bed" style="font-size:60px;color:mediumturquoise"></i><p>Services5</p>
			</a></li>&nbsp;&nbsp;&nbsp;
			<li class="nav-item"><a class="" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1"><i class="fa fa-bank" style="font-size:60px;color:greenyellow"></i><p>Services6</p>
			</a></li>&nbsp;&nbsp;
			<li class="nav-item"><a class="" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1"><i class="fa fa-bicycle" style="font-size:60px;color:khaki"></i><p> Services7</p>
			</a></li>&nbsp;&nbsp;
			
</ul>
	
		
									</div>

<div class="collapse multi-collapse praxis_sb_category container mycolor"  id="multiCollapseExample1">
		<table class="table text-center d-flex">

<tr>
	<td>
		<a href=""> <i class="ti-hand-point-up"></i>Both Hand Mehendi @BDT 190 ONLY!!</a><br>
		<a href=""> <i class="ti-hand-point-up"></i>Both Hand Mehendi @BDT 190 ONLY!!</a><br>
			<a href=""> <i class="ti-hand-point-up"></i>Both Hand Mehendi @BDT 190 ONLY!!</a><br>
				<a href=""> <i class="ti-hand-point-up"></i>Both Hand Mehendi @BDT 190 ONLY!!</a><br>
					<a href=""> <i class="ti-hand-point-up"></i>Both Hand Mehendi @BDT 190 ONLY!!</a><br>
						<a href=""> <i class="ti-hand-point-up"></i>Both Hand Mehendi @BDT 190 ONLY!!</a><br>
							<a href=""> <i class="ti-hand-point-up"></i>Both Hand Mehendi @BDT 190 ONLY!!</a><br>

	</td>
	<td>
			<a href=""><i class="ti-hand-point-up"></i>Both Hand Mehendi @BDT 190 ONLY!!</a><br>
		<a href=""><i class="ti-hand-point-up"></i>Both Hand Mehendi @BDT 190 ONLY!!</a><br>
		<a href=""><i class="ti-hand-point-up"></i>Both Hand Mehendi @BDT 190 ONLY!!</a><br>
		<a href=""><i class="ti-hand-point-up"></i>Both Hand Mehendi @BDT 190 ONLY!!</a><br>
		<a href=""><i class="ti-hand-point-up"></i>Both Hand Mehendi @BDT 190 ONLY!!</a><br>
		<a href=""><i class="ti-hand-point-up"></i>Both Hand Mehendi @BDT 190 ONLY!!</a><br>
		<a href=""><i class="ti-hand-point-up"></i>Both Hand Mehendi @BDT 190 ONLY!!</a><br>

	</td>
	<td>
	<a href=""><i class="ti-hand-point-up"></i>Both Hand Mehendi @BDT 190 ONLY!!</a><br>
	<a href=""><i class="ti-hand-point-up"></i>Both Hand Mehendi @BDT 190 ONLY!!</a><br>
	<a href=""><i class="ti-hand-point-up"></i>Both Hand Mehendi @BDT 190 ONLY!!</a><br>
	<a href=""><i class="ti-hand-point-up"></i>Both Hand Mehendi @BDT 190 ONLY!!</a><br>
	<a href=""><i class="ti-hand-point-up"></i>Both Hand Mehendi @BDT 190 ONLY!!</a><br>
	<a href=""><i class="ti-hand-point-up"></i>Both Hand Mehendi @BDT 190 ONLY!!</a><br>

	</td>
</tr>

		</table>
</div>



	<!--===================================category end===================================-->
<div class="container">
<div class="container">
  <h2 class="text-center">Top Featured Providers</h2>
  
  <div class="card-columns">
    <div class="card">
      <div class="card-body text-center">
				<img src="{{ asset('images/profile-pic.jpg') }}" class="praxis_sb_image"  height="150px" alt="">
        <p class="card-text">Some text inside the first card</p>
      </div>
    </div>
    <div class="card">
      <div class="card-body text-center">
					<img src="images/profile-pic.jpg" class="praxis_sb_image"  height="150px" alt="">
        <p class="card-text">Some text inside the second card</p>
      </div>
    </div>
    <div class="card ">
      <div class="card-body text-center">
					<img src="images/profile-pic.jpg"  class="praxis_sb_image" height="150px" alt="">

        <p class="card-text">Some text inside the third card</p>
      </div>
    </div>
    <div class="card ">
      <div class="card-body text-center">
					<img src="images/profile-pic.jpg" class="praxis_sb_image" height="150px" alt="">
        <p class="card-text">Some text inside the fourth card</p>
      </div>
    </div>  
    <div class="card ">
      <div class="card-body text-center">
					<img src="images/profile-pic.jpg" class="praxis_sb_image"  height="150px" alt="">
        <p class="card-text">Some text inside the fifth card</p>
      </div>
    </div>
    <div class="card ">
      <div class="card-body text-center">
					<img src="images/profile-pic.jpg"  class="praxis_sb_image" height="150px" alt="">
        <p class="card-text">Some text inside the sixth card</p>
      </div>
    </div>
  </div>
</div>
</div>

<!--=================================== praxis_sb bxSlider Javascript file start=================================== -->
<script src="assets/js/jquery3.0.1.js"></script>
<!-- <script src="assets/js/praxis_sb.bxslider.js"></script>
<script>
	$(document).ready(function(){
		$('.bxslider').bxSlider({
			mode: 'horizontal',
			moveSlides: 1,
			slideMargin: 40,
			infiniteLoop: true,
			slideWidth: 660,
			minSlides: 10,
			maxSlides: 10,
			speed: 800,
			// ticker:true,
			// tickerHover :true
			controls:true,
			nextText:'Next',
			prevText: 'Prev'
		});

	});
</script> -->
<script>
	$(document).ready(function (e) {
		$('li > a').click(function() {
    $('li.present').removeClass('present');
    $(this).closest('li').addClass('present');

});
	})

</script>

<!--=================================== praxis_sb bxSlider Javascript file end =================================== -->
 

<!-- Bootstrap core JavaScript -->  
  <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    
</body>
</html>