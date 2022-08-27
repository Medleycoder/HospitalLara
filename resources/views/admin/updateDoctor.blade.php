
<base href="/public">
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

  <div class="container-fluid page-body-wrapper">
        
    <div class="container mx-auto my-5">

     <!---Success Message of Doctor added  -->
      @if(session()->has('message'))
      <div class="alert alert-success">
        {{ session()->get('message') }}
        <button type="button" class="close float-end"  data-dismiss="alert">x</button>

      </div>
      @endif
        <div class="card">
        <div class="card-header text-center"><h1>Update Doctor</h1></div>
          <div class="form-body">



            


            <form action="{{url('editdoctor',$data->id)}}" method="POST" enctype="multipart/form-data">
             @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Doctor Name</label>
                    <input type="text" class="form-control bg-white text-dark" value="{{ $data->name }}" name="doctorname" required >
                </div>
                <div class="mb-3">
                 <label for="name" class="form-label">Phone</label>
                 <input type="number" class="form-control bg-white text-dark" value="{{ $data->phone }}" name="phone" required >
             </div>
             <div class="mb-3">
                 <label for="name" class="form-label">Speciality</label>
                 <select  id="" class="form-control bg-light text-dark" name="speciality" required>
                     <option class="" value="">{{ $data->speciality }}</option>
                     <option value="SKIN">Skin</option>
                     <option value="EYES">Eyes</option>
                     <option value="NOSE">Nose</option>
                     <option value="HEART">Heart</option>
                 </select>
             </div>
             <div class="mb-3">
                 <label for="name" class="form-label">Room No.</label>
                 <input type="number" class="form-control bg-white text-dark" name="room" value="{{ $data->room }}" required>
             </div>
             <div class="mb-3">
                 <label for="name" class="form-label">Existing Image</label>
                 <img src="doctorimage/{{ $data->image }}" alt="not found">
                 <h2>{{ $data->image }}</h2>
             </div>
             <div class="mb-3">
                 <label for="name" class="form-label">update Image</label>
                 
                 <input type="file" class="form-control bg-light" name="image">
             </div>
             <div class="mb3">
                 <button class="btn btn-success btn-lg" name="submit">Submit</button>
             </div>

            </form>
         </div>
        </div>
    </div>
 </div>
  <!-- plugins:js -->
  @include('admin.js')