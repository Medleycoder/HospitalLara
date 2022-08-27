
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
   
      <div class="container-fluid page-body-wrapper">

        <div class="" align="center" style="padding-top: 100px" >
        <table class="table">
            <thead style="background-color: white; color: black">
                <tr>
                 <th>Paitent Name</th>
                 <th>Email</th>
                 <th>Phone</th>
                 <th>Doctor Name</th>
                 <th>Date</th>
                 <th>Message</th>
                 <th>Status</th>
                 <th>Approve</th>
                 <th>Cancel</th>
                </tr>
            </thead>
            <tbody style="background-color: white;">


                @foreach ($data as $appoints)
                    
           
                <tr>
                    <td>{{ $appoints->name }}</td>
                    <td>{{ $appoints->email }}</td>
                    <td>{{ $appoints->phone }}</td>
                    <td>{{ $appoints->doctor }}</td>
                    <td>{{ $appoints->date }}</td>
                    <td>{{ $appoints->message }}</td>
                    <td>{{ $appoints->status }}</td>
                    <td><a class="btn btn-success" href="{{ url('approved',$appoints->id) }}">Approve</a></td>
                    <td><a class="btn btn-danger" href="{{ url('canclled',$appoints->id) }}">Cancel</a></td>
                 
                </tr>

                @endforeach
            </tbody>
        </table>
    </div>
      </div>

  <!-- container-scroller -->
  <!-- plugins:js -->
  @include('admin.js')