
@include('admin.css')

<body>
  <div class="container-scroller">
    <div class="row p-0 m-0 proBanner" id="proBanner">
      <div class="col-md-12 p-0 m-0">
        <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
          <div class="ps-lg-1">
            <div class="d-flex align-items-center justify-content-between">
              <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
              <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
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
   @include('admin.nav')
      <!-- partial -->
  <!-- container-scroller -->



  <div class="container-fluid bg-light" >
    @if(session()->has('message'))
    <div class="alert alert-success">
      {{ session()->get('message') }}
      <button type="button" class="close float-end"  data-dismiss="alert">x</button>
  
    </div>
    @endif
   <div class="card" align="center" style="padding-top: 100px">
       
       <div class="card-body">
           <table class="table">
               <thead class="bg-light">
                <tr>
                    <th>Doctor Name</th>
                    <th>Phone</th>
                    <th>Speciality</th>
                    <th>Romm No</th>
                    <th>Image</th>
                    <th>Action</th>
                   </tr>
               </thead>

               <tbody>
                   @foreach ($data as $doctor )
                       
                   <tr>
                       <td>{{ $doctor->name }}</td>
                       <td>{{ $doctor->phone }}</td>
                       <td>{{ $doctor->speciality }}</td>
                       <td>{{ $doctor->room }}</td>
                       <td><img height="200px" width="220px" src="doctorimage/{{ $doctor->image }}"></td>
                       <td>
                           <span>
                               <a onclick="return confirm('are you sure!!!')" href="{{ url('deletedoctor',$doctor->id) }}" class="btn btn-danger">Delete</a>
                           </span>
                           <span>
                               <a href="{{ url('updatedoctor', $doctor->id) }}" class="btn btn-primary">Update</a>
                           </span>
                       </td>
                   </tr>
                @endforeach
               </tbody>
           </table>
       </div>
   </div>

  </div>
  <!-- plugins:js -->
  @include('admin.js')