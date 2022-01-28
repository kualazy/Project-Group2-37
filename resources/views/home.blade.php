@include ('layouts.back_end.head')

<body class="g-sidenav-show  bg-gray-100">

  <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
    <!-- Navbar -->
    <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
      <!-- Navbar -->
      <nav class="navbar navbar-main navbar-expand-lg bg-transparent shadow-none position-absolute px-4 w-100 z-index-2">
        <div class="container-fluid py-1">
          <nav aria-label="breadcrumb">
            <h6 class="text-white font-weight-bolder ms-2">Profile</h6>
          </nav>
          <div class="collapse navbar-collapse me-md-0 me-sm-4 mt-sm-0 mt-2" id="navbar">
            <div class="ms-md-auto pe-md-3 d-flex align-items-center">

            </div>
            <ul class="navbar-nav justify-content-end">

              <li class="nav-item d-xl-none ps-3 pe-0 d-flex align-items-center">
                <a href="javascript:;" class="nav-link text-white p-0">
                  <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                    <div class="sidenav-toggler-inner">
                      <i class="sidenav-toggler-line bg-white"></i>
                      <i class="sidenav-toggler-line bg-white"></i>
                      <i class="sidenav-toggler-line bg-white"></i>
                    </div>
                  </a>
                </a>
              </li>

            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="container-fluid">
        <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('back_end/assets/img/curved-images/sile2.jpg'); background-position-y: 50%;">
          <span class="mask bg-gradient-primary opacity-6"></span>
        </div>
        <div class="card card-body blur shadow-blur mx-4 mt-n6 overflow-hidden">
          <div class="row gx-4">
            <div class="col-auto">
              <div class="avatar avatar-xl position-relative">
                <img src="{{ auth()->user()->image }}" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
              </div>
            </div>
            <div class="col-auto my-auto">
              <div class="h-100">
                <h5 class="mb-1">
                  My Profile
                </h5>
                <p class="mb-0 font-weight-bold text-sm">
                  {{Auth()->user()->name}}
                </p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
              <div class="nav-wrapper position-relative end-0">

              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid py-4">
        <div class="row">
          <div class="col-12 col-xl-4">

          </div>
        </div>
        <div class="col-12 col-xl-12">
          <div class="card h-100">
            <div class="card-header pb-0 p-3">
              <div class="row">
                <div class="col-md-8 d-flex align-items-center">

                </div>
                <div class="col-md-4 text-end">
                  <a href="javascript:;">
                   
                  </a>
                </div>
              </div>
            </div>
            <div class="card-body p-3">
              <p class="text-sm">
                ประวัติส่วนตัว
              </p>
              <hr class="horizontal gray-light my-4">
              <ul class="list-group">
                <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Full Name:</strong> {{Auth()->user()->name}}</li>
                <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Email:</strong> &nbsp; {{Auth()->user()->email}}</li>
                <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">address:</strong> {{Auth()->user()->address}}</li>
                <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">phone:</strong> &nbsp; {{Auth()->user()->phone}}</li>
                <li class="list-group-item border-0 ps-0 pb-0">
                  @if(auth()->user()->isAdmin)
                  <a href="{{route('admin.index')}}" class="btn btn-primary">หลังบ้าน</a>
                  @endif
                  <a href="{{url('/')}}" class="btn btn-success">Home</a>
                  <a class="btn btn-danger" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                  </a>
                </li>
              </ul>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--   Core JS Files   -->
    <script src="{{asset('back_end/assets/js/core/popper.min.js')}}"></script>
    <script src="{{asset('back_end/assets/js/core/bootstrap.min.js')}}"></script>
    <script src="{{asset('back_end/assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('back_end/assets/js/plugins/smooth-scrollbar.min.js')}}"></script>
    <script>
      var win = navigator.platform.indexOf('Win') > -1;
      if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
          damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
      }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{asset('back_end/assets/js/soft-ui-dashboard.min.js?v=1.0.3')}}"></script>
</body>

</html>