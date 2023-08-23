
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <base href="/public">

    <style type="text/css">
      
      label
      {
        display: inline-block;

        width: 200px;
      }


    </style>

    @include('admin.css')

  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->

      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
        <!-- partial -->

        <div class="main-panel">
        <div class="content-wrapper">
        <div class="row">
        <div class="col-12">
        <div class="card">
        <div class="card-body">
      <div class="container-fluid page-body-wrapper">



        <div class="container" align="center" style="padding: 100px">

          @if(session()->has('message'))

        <div class="alert alert-success">
          
          <button type="<button" class="close" data-dismiss="alert">
            
          </button>

          {{session()->get('message')}}


        </div>


        @endif
          
          <form action="{{url('edittotaluser',$data->id)}}" method="POST" enctype="multipart/form-data">

            @csrf
            
                  
              <!--<label>Patient Name</label>-->
              <input type="hidden" style="color:black" name="name" value="{{$data->name}}, {{$data->fullname}} {{$data->mname}}">
            

                  
              <!--<label>Address</label>-->
              <input type="hidden" style="color:black" name="address" value="{{$data->address}}">
           

                     
              <!--<label>Birthdate</label>-->
              <input type="hidden" style="color:black" name="birthdate" value="{{$data->birthdate}}">
            

                    
              <!--<label>Age</label>-->
              <input type="hidden" style="color:black" name="age" value="{{$data->age}}">
           

                     
              <!--<label>Sex</label>-->
              <input type="hidden" style="color:black" name="sex" value="{{$data->sex}}">
           

                
              <!--<label>Civil Status</label>-->
              <input type="hidden" style="color:black" name="civil" value="{{$data->civil}}">
       

            <div style="padding: 15px;">             
              <label>Weight</label>
              <input type="text" style="color:black" name="weight" value="{{$data->weight}}">
            </div>

            <div style="padding: 15px;">             
              <label>Height</label>
              <input type="text" style="color:black" name="height" value="{{$data->height}}">
            </div>

            <div style="padding: 15px;">             
              <label>Doctor</label>
              <select style="width: 212px; color: black;" name="doctor">

            <option value="0" selected disabled>Select</option>
            @foreach( $doctor as $specs)
            <option value="{{$specs->name}}">{{$specs->name}}</option>
            @endforeach

              </select>
              
            </div>


            <div style="padding: 15px;">             
              <label>Findings & Illness</label>
              <input type="text" style="color:black" name="illness" value="{{$data->illness}}">
            </div>
            <span style="color: red">
              
              @error('illness')

              {{$message}}

              @enderror

            </span>

            <div style="padding: 15px;">             
              <label>Appointment</label>
              <select style="width: 212px; color: black;" name="appointment">

            <option value="0" selected disabled>Select</option>
            <option value="Physical">Physical</option>
            <option value="Virtual">Virtual</option>

              </select>
              
            </div>

            <div style="padding: 15px;">             
              <label>Date of Medical</label>
              <input type="date" style="width: 212px; color: black;" name="date" value="{{$data->date}}">
            </div>
            <span style="color: red">
              
              @error('date')

              {{$message}}

              @enderror

            </span>

            <div style="padding: 15px;">             
              <input type="hidden" style="color:black" name="id" value="{{$data->id}}">
            </div>

            <div style="padding: 15px;">

              <input type="submit" class="btn btn-primary">


            </div>


          </form>

        </div>

      </div>

    <!-- container-scroller -->
    <!-- plugins:js -->
      @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>