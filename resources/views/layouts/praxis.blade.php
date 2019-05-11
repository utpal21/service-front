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
<link href="https://fonts.googleapis.com/css?family=Hind+Siliguri:300,400,500,600,700|Poppins:300,400,500,600,700|Roboto:300,400,500,700" rel=stylesheet>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<!---=================================== google fornt -===================================-->
<!--=================================== icon  custom css start===================================-->
<!--===================================praxis_sb custom css start===================================-->
<link href="{{asset('assets/css/custom.css')}}" rel='stylesheet' type='text/css' />

<!--===================================praxis_sb  custom css end===================================-->

<!--===================================praxis_sb datetimepicker start===================================-->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/datepiker/jquery.datetimepicker.css') }}"/>
<!--===================================praxis_sb datetimepicker end===================================-->
@yield('css')
<style>

    body {
            font-family: Poppins,sans-serif;
             font-size: 14px;
    }
    h2{
        font-family: Poppins,sans-serif;
             font-size: 20px;
    }
    /*=================================== praxis_sb_search ===================================-*/
    .praxis_sb_search{
    
    
        background-image: url("images/bg.jpg");
    }

    /*=================================== praxis_sb_Datepicker ===================================-*/
	#demo1-2{
     
     width: 250px;
     margin: 0 auto;
     }
    /*/////////////////////////////// profile/////////////////////////////// */
    <style>
    .praxis-sb-border{
      border: 2px solid gainsboro;
      border-radius: 25%;
     
      margin: 10px;
    }
    .praxis-sb-image{
    border-radius: 50%;
    
   
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
                  <a class="nav-link" href="#">Agargaon, Sher-e-B..</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Call 16516</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Login</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
            
        </div>
    <br>
    <!--===================================menu end===================================-->
    <!--===================================search start===================================-->
    <!--===================================search end===================================-->

     <!--===================================New section start ===================================-->

    @yield('contant')


<!--===================================New section end ===================================-->
    <!--===================================footer start===================================--> 
<div class="bg">
    <div class="row text-white p-4">
        <div class="col-3">
            <h5>CONTACT</h5>
            <p> 16516 or 09678-016516</p>
            <p>info@sheba.xyz</p>
            <p>DevoTech Technology Park 
                    Level 1, House 11, Road 113/A Gulshan 2, Dhaka - 1212, Bangladesh</p>
        </div>
        <div class="col-3 text-white">
              <p >   Services       </p>
             <p><a href="" class="text-white"> Fixed Price Beaut </a></p>
             <p><a href="" class="text-white">  Exclusive Beauty </a> </p>
             <p><a href="" class="text-white">  Sheba Aparajita C </a></p>
             <p><a href="" class="text-white">  Salon Services </a></p>
            
             <p><a href="" class="text-white"> Body Therapy & We </a></p>
             
        </div>
        <div class="col-3">
                <p >   Services       </p>
                <p><a href="" class="text-white">Appliance Repair</a></p> 
                <p><a href="" class="text-white">Repair & Servicing @ F..</a></p> 
                <p><a href="" class="text-white">Split AC Service</a></p> 
                <p><a href="" class="text-white">AC Service & Repair</a></p> 
                <p><a href="" class="text-white">TV (LCD/LED) servicin..</a></p> 
                <p><a href="" class="text-white">Refrigerator Servicing</a></p> 
                
        </div>
        <div class="col-3">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.894682644618!2d90.37492551428865!3d23.786764384571438!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c724b592eda3%3A0xcb28fee4071c39f8!2sPraxis+Training+Technology+%26+Consultancy!5e0!3m2!1sbn!2sbd!4v1556089726461!5m2!1sbn!2sbd" width="250" height="230" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
    </div>
    
    
    
    <!--===================================footer end===================================-->
    <!--=================================== praxis_sb bxSlider Javascript file start=================================== -->
    {{-- <script src="{{ asset('assets/js/jquery3.0.1.js') }}"></script> --}}
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
     
    @yield('extra_js')
    <!-- Bootstrap core JavaScript -->  
      <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        
    </body>
    </html>    