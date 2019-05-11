@extends('layouts.praxis')
@section('contant')
    


  <div class="container">

   
              <br>
              <br>
              <br>
            <ol class="nav nav  flex-column flex-sm-row bg-light text-sm-center text-width">
                <li  class="nav-item"><a  href="#" class="router-link-active"> All Service Providers </a></li> &nbsp; / &nbsp;
                <li aria-current="page" class="breadcrumb-item active"><a > Service Provider</a></li>
            </ol>

            <table class="">
                <tr>
                    <td>

                        <img src="images/sample-image.jpg" alt="">
                    </td>
                    <td>
                        <h4 class="ml-5">ABC company</h4>
                        <p  class="ml-5">4.4 <i class="fa fa-star"></i>
                            <span>540</span>
                        </p>
                        <p class="ml-5">All types of Electrical, AC and Fridge Services.</p>
                        <p class="ml-5">48 Services &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                8 Resources &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                399 jobs</p>
                    </td>
                </tr>
            </table><br>

            <!-- provider info -->
           
            <nav id="navbar-example2" class="navbar navbar-light bg-light">
                    <a class="navbar-brand" href="#">
                        <img src="images/150 (2).jpg" height="48px" width="48px" alt="">company name
                    </a>
                    <ul class="nav nav-pills">
                      <li class="nav-item">
                        <a class="nav-link" href="#fat">Service</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#mdo">Resources</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#praxis">Reviews</a>
                        </li>
                      
                    </ul>
                  </nav><br>
                  <div class="row">
                      <div class="col-8">
                          <div data-spy="scroll" data-target="#navbar-example2" data-offset="0">
                              <p id="fat">Service</p>
                              <nav class="nav nav  flex-column flex-sm-row bg-light text-sm-center text-width">
                                  <a class="flex-sm-fill text-sm-center nav-link praxis-sb-border" href="#">Active</a>
                                  <a class="flex-sm-fill text-sm-center nav-link praxis-sb-border" href="#">Longer nav link</a>
                                  <a class="flex-sm-fill text-sm-center nav-link praxis-sb-border" href="#">Link</a>
                                  <a class="flex-sm-fill text-sm-center nav-link praxis-sb-border" href="#"  tabindex="-1" aria-="true">Disabled</a>
                                </nav>

                                
<!-- cards -->

    <div class="card-header">
      Featured
    
  
     
          <ul class="card-columns">
              <li class=" card">
                <a href=""><img src="images/150 (1).jpg"  height="72px" width="72px" alt="">
                  Cras justo odio</a>
                
              </li>
              <li class=" card">
                  <a href=""><img src="images/150.jpg" height="72px" width="72px" alt="">
                    Cras justo odio</a>
                  
                </li>
                <li class=" card">
                    <a href=""><img src="images/150 (2).jpg" height="72px" width="72px" alt="">
                      Cras justo odio</a>
                    
                  </li>
                  <li class=" card">
                    <a href=""><img src="images/150 (2).jpg" height="72px" width="72px" alt="">
                      Cras justo odio</a>
                    
                  </li>
                  <li class=" card">
                    <a href=""><img src="images/150 (2).jpg" height="72px" width="72px" alt="">
                      Cras justo odio</a>
                    
                  </li>
                  <li class=" card">
                    <a href=""><img src="images/150 (2).jpg" height="72px" width="72px" alt="">
                      Cras justo odio</a>
                    
                  </li>
                  <li class=" card">
                    <a href=""><img src="images/150 (2).jpg" height="72px" width="72px" alt="">
                      Cras justo odio</a>
                    
                  </li>
            </ul>
     
      
          </div>
  
    


                                
                              <p id="mdo">Resources</p>
                              <!-- Resources -->
                              <div class="card-columns">
                                  <div class="card" style="height:160px">
                                      <img src="images/1496827889_md.latif (1).jpg" class="mx-auto d-block praxis-sb-image" height="72px" width="72px" alt="">
                                    <div class="card-body">
                                     <p class="text-center">Masum billah </p>
                                     <p class="text-center">
                                      45 <i class="fa fa-star" ></i>9
                                     </p>
                                    </div>
                                  </div>
                                  <div class="card" style="height:160px">
                                      <img src="images/1496827889_md.latif (1).jpg" class="mx-auto d-block praxis-sb-image" height="72px" width="72px" alt="">
                                    <div class="card-body">
                                     <p class="text-center">Masum billah </p>
                                     <p class="text-center">
                                      45 <i class="fa fa-star" ></i>9
                                     </p>
                                    </div>
                                  </div>
                                  <div class="card" style="height:160px">
                                      <img src="images/1496827889_md.latif (1).jpg" class="mx-auto d-block praxis-sb-image" height="72px" width="72px" alt="">
                                    <div class="card-body">
                                     <p class="text-center">Masum billah </p>
                                     <p class="text-center">
                                      45 <i class="fa fa-star" ></i>9
                                     </p>
                                    </div>
                                  </div>
                                      
                                      
                                         
                                           
                                              
                                </div>
                              
                                <!-- Resources -->
                              <p id="praxis">Reviews</p>
                              <table class="">
                                <tr>
                                  <td>
                                      <h1>4.4</h1>
                                      <p>
                                        <i class="fa fa-star" style="color:burlywood"></i>
                                        <i class="fa fa-star" style="color:burlywood"></i>
                                        <i class="fa fa-star" style="color:burlywood"></i>
                                        <i class="fa fa-star" style="color:burlywood"></i>
                                      </p>
                                      <p>5 reviews</p>
                                  </td>
                                  <td style="width: 250px;">
                                      <div class="panel-body">
                                          <div>
                                              <ul class="chart ml-5">
            <li data-data="99">
               5
            </li>
            <li data-data="90">
              4
            </li>
            <li data-data="90">
               3
            </li>
            <li data-data="80">
                2
            </li>
            <li data-data="70">
               1
            </li>
            
          </ul>
                                          </div>
                                      </div>
                                      
                                  </td>
                                </tr>

                              </table>
                            
                            </div>

                      </div>
                      <div class="col-4">
                       
                          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.894544776239!2d90.37492551445655!3d23.786769293304168!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c724b592eda3%3A0xcb28fee4071c39f8!2sPraxis+Training+Technology+%26+Consultancy!5e0!3m2!1sen!2sbd!4v1556355819294!5m2!1sen!2sbd" width="350" height="450" class="map" frameborder="0" style="border:0" allowfullscreen></iframe>
                       
                          <br>

                          <ul class="list-group list-group-flush ">
                              <p class="text-center mb-2 p-3">Service Categories</p>
                              <li class="list-group-item bg-light">
                                <a href=""><img src="images/150 (1).jpg"  height="72px" width="72px" alt="">
                                  Cras justo odio</a>
                                
                              </li>
                              <li class="list-group-item bg-light">
                                  <a href=""><img src="images/150.jpg" height="72px" width="72px" alt="">
                                    Cras justo odio</a>
                                  
                                </li>
                                <li class="list-group-item bg-light">
                                    <a href=""><img src="images/150 (2).jpg" height="72px" width="72px" alt="">
                                      Cras justo odio</a>
                                    
                                  </li>
                                  <li class="list-group-item bg-light">
                                      <a href=""><img src="images/150 (2).jpg" height="72px" width="72px" alt="">
                                        Cras justo odio</a>
                                      
                                    </li>
                                   
                            </ul>
                      </div>
                    </div>
                  <!-- avililty -->
                 
                      <nav class="navbar navbar-expand-sm p-3 mb-5 " id="bg" >
                        
                            <ul class="navbar-nav">
                             
                              <li class="nav-item">
                                  <img src="images/1.svg" class="mx-auto d-block praxis-sb-image" height="72px" width="72px" alt="">
                                  <p><small>
                                      Excellent service
                                  </small>
                                     
                                    </p>
                                  
                              </li>
                              
                              <li class="nav-item ml-3">
                                  <img src="images/1.svg" class="mx-auto d-block praxis-sb-image" height="72px" width="72px" alt="">
                                  <p><small>
                                      Excellent service
                                  </small>
                                     
                                    </p>
                                  
                              </li>
                             
                              <li class="nav-item ml-3">
                                  <img src="images/1.svg" class="mx-auto d-block praxis-sb-image" height="72px" width="72px" alt="">
                                  <p><small>
                                      Excellent service
                                  </small>
                                     
                                    </p>
                                
                              </li>
                              
                              <li class="nav-item ml-3">
                                  <img src="images/1.svg" class="mx-auto d-block praxis-sb-image" height="72px" width="72px" alt="">
                                  <p><small>
                                      Excellent service
                                  </small>
                                     
                                    </p>
                                  
                              </li>
                              
                              
                            </ul>
                        
                       
                      </nav>
                  
                
                  <!-- avililty -->
                  <!-- comment -->
                  <table>
                    <tr>
                      <td>
                          <img src="images/default.jpg" class="praxis-sb-image"  height="72px" width="72px" alt="">
                      </td>
                      <td >
                          <p class="ml-3"> Cras justo odio </p>
                   
                     
                          <i class="fa fa-star ml-3" style="color:burlywood"></i>
                          <i class="fa fa-star" style="color:burlywood"></i>
                          <i class="fa fa-star" style="color:burlywood"></i>
                          <i class="fa fa-star" style="color:burlywood"></i>
                          <p class="ml-3"><small>Exclusive Beauty Services taken on                         
                              April 19, 2019</small> </p>
                             <small class="ml-3">rimi u r wonderfull. i always prefer ur service</small> </td>
                    </tr>

                  </table>
                      
                     
                        
                 
                    
                   <!-- comment -->


                  </div>
                  @endsection
@section('extra_js')
<script src="assets/js/jquery3.0.1.js"></script>
                 
                  <script src="{{  asset('assets/js/hBarChart.js') }}"></script>
                  <script src="script.js"></script>

                  <script type="text/javascript">

                    var _gaq = _gaq || [];
                    _gaq.push(['_setAccount', 'UA-36251023-1']);
                    _gaq.push(['_setDomainName', 'jqueryscript.net']);
                    _gaq.push(['_trackPageview']);
                  
                    (function() {
                      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
                    })();
                  
                  </script>
    
@endsection
                  
