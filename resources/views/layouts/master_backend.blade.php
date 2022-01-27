<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Service</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('backend/assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/assets/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('backend/assets/vendors/jvectormap/jquery-jvectormap.css')}}">
    <link rel="stylesheet" href="{{asset('backend/assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/assets/vendors/owl-carousel-2/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/assets/vendors/owl-carousel-2/owl.theme.default.min.css')}}">
    <!-- End plugin css for this page -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('backend/assets/vendors/select2/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css')}}">
    <!-- End plugin css for this page -->
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('backend/assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/assets/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('backend/assets/css/style.css')}}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('backend/assets/images/favicon.png')}}" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
                ร้านนวดแผนไทย
            </div>
            <ul class="nav">
                <li class="nav-item profile">
                    <div class="profile-desc">
                        <div class="profile-pic">
                            <div class="count-indicator">
                            </div>
                            <div class="profile-name">
                                <h5 class="mb-0 font-weight-normal">สวัสดี : คุณ {{Auth()->user()->name}}</h5>
                                <span></span>
                            </div>
                        </div>

                    </div>
                </li>
                <li class="nav-item nav-category">
                    <span class="nav-link">จัดการระบบหลังบ้าน</span>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="{{route('index.admin')}}">
                        <span class="menu-icon">
                            <i class="mdi mdi-speedometer"></i>
                        </span>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="{{route('index.service')}}">
                        <span class="menu-icon">
                            <i class="mdi mdi-laptop"></i>
                        </span>
                        <span class="menu-title">Service</span>
                    </a>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="{{route('index.category')}}">
                        <span class="menu-icon">
                            <i class="mdi mdi-playlist-play"></i>
                        </span>
                        <span class="menu-title">Category</span>
                    </a>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="{{ route('booking.index') }}">
                        <span class="menu-icon">
                            <span class="mdi mdi-book-open-page-variant"></span>
                        </span>
                        <span class="menu-title">Booking</span>
                    </a>
                </li>

                <li class="nav-item menu-items">
                    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <span class="menu-icon">
                            <i class="mdi mdi-logout text-danger"></i>
                        </span>
                        <span class="menu-title">Logout</span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
                <!-- <li class="nav-item menu-items">
                    <a class="nav-link" href="{{route('index.user')}}">
                        <span class="menu-icon">
                            <i class="mdi mdi-account-multiple"></i>
                        </span>
                        <span class="menu-title">Users</span>
                    </a>
                </li> -->
            </ul>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_navbar.html -->
            <nav class="navbar p-0 fixed-top d-flex flex-row">
                <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
                    <a class="navbar-brand" href="{{url('/admin/index')}}">
                        <h6>ร้านนวดแผนไทย</h6>
                    </a>
                </div>
                <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                        <span class="mdi mdi-menu"></span>
                    </button>

                    <ul class="navbar-nav navbar-nav-right">
                        <li class="nav-item">
                            <div class="navbar-profile">
                                <a href="{{route('home')}}" class="mb-0 d-none d-sm-block navbar-profile-name nav-link">My Profile</a>
                            </div>
                            </a>
                        </li>
                    </ul>
                    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                        <span class="mdi mdi-format-line-spacing"></span>
                    </button>
                </div>
            </nav>

            <div class="main-panel">
                <div class="content-wrapper">

                    <!-- เนื้อหา -->
                    @yield('conten')
                    <!-- จบเนื้อหา -->

                    <!-- partial:partials/_footer.html -->
                    <footer class="footer">
                        <div class="d-sm-flex justify-content-center justify-content-sm-between">
                            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021 Information Technology.<a href="https://pongsawadi.ac.th" target="_blank">Pongsawadi Technological College.</a></span>
                            <span class="text-muted float-none float-sm-right d-block mt-1 mt-sm-0 text-center"></span>
                        </div>
                    </footer>
                    <!-- partial -->
                </div>
                <!-- main-panel ends -->
            </div>
            <!-- page-body-wrapper ends -->
        </div>
        <!-- container-scroller -->
        <!-- plugins:js -->
        <script src="{{asset('backend/assets/vendors/js/vendor.bundle.base.js')}}"></script>
        <!-- endinject -->
        <!-- Plugin js for this page -->
        <script src="{{asset('backend/assets/vendors/chart.js/Chart.min.js')}}"></script>
        <script src="{{asset('backend/assets/vendors/progressbar.js/progressbar.min.js')}}"></script>
        <script src="{{asset('backend/assets/vendors/jvectormap/jquery-jvectormap.min.js')}}"></script>
        <script src="{{asset('backend/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
        <script src="{{asset('backend/assets/vendors/owl-carousel-2/owl.carousel.min.js')}}"></script>
        <!-- End plugin js for this page -->
        <!-- Plugin js for this page -->
        <script src="{{asset('backend/assets/vendors/select2/select2.min.js')}}"></script>
        <script src="{{asset('backend/assets/vendors/typeahead.js/typeahead.bundle.min.js')}}"></script>
        <!-- End plugin js for this page -->
        <!-- plugins:js -->
        <script src="{{asset('backend/assets/vendors/js/vendor.bundle.base.js')}}"></script>
        <!-- endinject -->
        <!-- inject:js -->
        <script src="{{asset('backend/assets/js/off-canvas.js')}}"></script>
        <script src="{{asset('backend/assets/js/hoverable-collapse.js')}}"></script>
        <script src="{{asset('backend/assets/js/misc.js')}}"></script>
        <script src="{{asset('backend/assets/js/settings.js')}}"></script>
        <script src="{{asset('backend/assets/js/todolist.js')}}"></script>
        <!-- endinject -->
        <!-- Custom js for this page -->
        <script src="{{asset('backend/assets/js/dashboard.js')}}"></script>
        <!-- End custom js for this page -->
        <!-- Custom js for this page -->
        <script src="{{asset('backend/assets/js/file-upload.js')}}"></script>
        <script src="{{asset('backend/assets/js/typeahead.js')}}"></script>
        <script src="{{asset('backend/assets/js/select2.js')}}"></script>
        <!-- End custom js for this page -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
 @if(Session::has('message'))
 var type = "{{ Session::get('alert-type','info') }}"
 switch(type){
    case 'info':
    toastr.info(" {{ Session::get('message') }} ");
    break;
    case 'success':
    toastr.success(" {{ Session::get('message') }} ");
    break;
    case 'warning':
    toastr.warning(" {{ Session::get('message') }} ");
    break;
    case 'error':
    toastr.error(" {{ Session::get('message') }} ");
    break; 
 }
 @endif 
</script> 

</body>
</html>