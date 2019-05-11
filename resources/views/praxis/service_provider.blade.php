@extends('layouts.praxis')
@section('contant')
<div class="praxis-sb-provider">
    <h5class="shadow bg-white rounded bg-gradient-light  fixed-top">Service Providers in AGARGAON, SHER-E..
        </h5>
    <div class="accordion" id="accordionExample">
        
            <div class="card">
              <div class="card-header " id="headingTwo">
                  <div class="d-flex bd-highlight">
                      <div class="p-2 w-100 bd-highlight">
                          <h3 class="btn btn-link collapsed"  data-toggle="collapse" data-target="#collapseTwo"
                          aria-expanded="false" aria-controls="collapseTwo">
                          <img src="images/intro-bg.jpg" class="praxis-sb-myimages" height="150px" width="150px" alt="">

                      </h3>

                      </div>
                      <div class="p-2 w-100 bd-highlight praxis-sb-check">
                          <p>Tohid</p>
                          <p>500 Orders compelete</p>
                          <p>5.5 <i class="fa fa-star text-blue"></i></p>
                      </div>
                      <div class="p-2 w-100 bd-highlight praxis-sb-check">Tk 199</div>
                     
                      <div class="p-2 flex-shrink-1 bd-highlight"><a  data-toggle="modal" class="btn btn-primary"  st data-target="#exampleModal">
                          Next
                      </a></div>
                    </div>
                <!-- collapse value -->
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                      <div class="card-body">
                       <table class="table">
                           <tr>
                               
                            <td><i class="fa fa-star">1780</i>
                            <p>Five star orders</p></td>
                            <td>
                                <i class="fa fa-thumbs-up">650</i>
                                <p>compeletes</p>
                            </td>
                            <td>
                                <i class="fa fa-calendar">7</i>
                                <p>Days</p>
                            </td>
                            <td>
                                <i class="fa fa-user-circle">10</i>
                                <p>Experts</p>
                            </td>
                        </tr>
                       </table>
                       <div class="jumbotron jumbotron-fluid">
                            <div class="container">
                              <p>ADDED SERVICE</p>
                              <p class="lead">Ceiling Fan Service x 1</p>
                              <p>Installation</p>
                              <p>Quantity:</p>
                            </div>
                          </div>
                        <br>
                        <a data-toggle="modal" data-target="#exampleModa2" href="">view Profile</a>     
                     </div>
                    </div>   
              </div>        
            </div>
          </div><hr>
        
          <!--===================================praxis_sb datetimepicker start===================================-->
              <!-- modal -->
              
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
              aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                      Schedule Service
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                      <div id="wrapper ">
                          
                  
                          <h2>Schedule Time</h2>
                          <h4>Date + time format (without seconds)</h4>
                          <div>
                              <span>Date Time </span>
                              <span id="date-text1-2"></span>
                          </div>
                          <div>
                              <span>Year ('YYYY-MM-DD'): </span>
                              <span id="date-text-ymd1-2"></span>
                          </div>
                          <div>
                              <span> </span>
                              <span id="date-value1-2"></span>
                          </div>
                          <div id="demo1-2"></div>
                  
                  
                          <hr>
                          
                      </div>
                      
                      <script src="{{ asset('assets/js/jquery3.0.1.js')}}"></script>
                  <!-- <script type="text/javascript" src="jquery-1.11.1.js"></script> -->
              <script type="text/javascript" src="{{ asset('assets/datepiker/jquery.datetimepicker.js')}}"></script>
                  <script type="text/javascript">
                  $(document).ready(function(){
            

            
            $('#demo1-2').datetimepicker({
                date: new Date(),
                viewMode: 'YMDHM',
                onDateChange: function(){
                    $('#date-text1-2').text(this.getText());
                    $('#date-text-ymd1-2').text(this.getText('YYYY-MM-DD'));
                    $('#date-value1-2').text(this.getValue());
                }
            });
           
           
        });
                  </script>
                </div>
                 <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Submit</button>
                  </div> 
                </div>
              </div>
            </div>

   </div> 
<!--===================================praxis_sb datetimepicker end===================================-->

@endsection