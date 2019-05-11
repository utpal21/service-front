@extends('layouts.praxis')
@section('css')
<style>
  .operation{
    background-image: url(images/service-page-bg.25f3234.png);
    background-repeat: repeat;
    background-position: top;
    padding-top: 0;
    padding-bottom: 0;
    position: relative;
    height: 640px;
  }

  .operation-section{
    top: calc(60% - 275px)!important;
    max-width: 820px;
    width: 100%;
    margin: 0 auto;
    background-color: #fff;
    border-radius: 4px;
    box-shadow: 0 0 25px rgba(0,0,0,.3);
    position: absolute;
    
    left: calc(50% - 410px);
    z-index: 60;
  }
  .operation-header{    
    height: 64px;
    line-height: 64px;
    padding: 0 41px;
    border-radius: 4px;
    background-color: #fff;
    box-shadow: 0 0 8px 0 rgba(0,0,0,.18);
    position: relative;
  }
  .operation-header-text{
    color: #413a3a;
    height: 100%;
  }
  a{
    list-style: none;
  }
</style>
@endsection
@section('contant')

     <!--===================================Category list start===================================-->
  

<div class="operation">
  <div class="operation-section">
    <div class="operation-header">
      <div class="operation-header-text">
        <div class="row d-flex align-items-center">
          <div class="offset-2 col-md-6">
            <h2> Fixed Price Beauty Services </h2>
          </div>
        </div>

      </div>

    </div>
  </div>

</div>



  

  <!--===================================Category list end===================================-->

  <!-- Modal-1 -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Service Option</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Choose Your Facial</p>
          <select name="" id="" class="form-control">
            <option value="">select</option>
            <option value="">select</option>
            <option value="">select</option>
 
 
          </select>
         
         <p>Choose Your Add-on</p>
         <select name="" id="" class="form-control">
           <option value="">select</option>
           <option value="">select</option>
           <option value="">select</option>


         </select>
         <p>Quentity</p>
         <input class="form-control" type="number">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          
          <a href="serviceprovider.html" class="btn btn-primary">Next</a>
        </div>
      </div>
    </div>
  </div>

<!-- Modal-2 -->
  <div class="modal fade" id="exampleModa2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">
           service
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <img src="{{ asset('images/1552147923_moving_offices.png') }}" height="300px" width="100%" alt="">
        </div>
         <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div> 
      </div>
    </div>
  </div>
</div>
@endsection
@section('extra_js')
<script src="{{ asset('assets/js/jquery3.0.1.js') }}"></script>
    
@endsection