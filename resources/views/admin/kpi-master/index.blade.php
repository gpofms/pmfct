<!DOCTYPE html>
<html lang="en">

@include('layout.header')

<head>
    <meta charset="utf-8">
    <title>DarkPan - Bootstrap 5 Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <!-- Template Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    {{-- <link href="css/style.css" rel="stylesheet"> --}}
</head>

<body>
    <div class="container-fluid position-relative p-0">

        <!-- Navbar Start -->
        {{-- <nav class="navbar navbar-expand navbar_bg sticky-top px-4 py-0">
            <div class="d-flex align-items-center">
                <h3 class="text-color-1 me-4">PMFCT PM - Family Care Tracker</h3>
            </div>
            <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                <h2 class="text-primary_1 mb-0"><i class="fa fa-user-edit"></i></h2>
            </a>
            <a href="#" class="sidebar-toggler flex-shrink-0">
                <i class="fa fa-bars"></i>
            </a>

            <div class="navbar-nav align-items-center ms-auto py-1 nav_right_block">
                <div class="content-search me-4">
                    <form class="d-none d-md-flex">
                        <i class="fa fa-search icon-color-light"></i>
                        <input class="serch_bar border-0" type="search" placeholder=" Search">
                    </form>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link" data-bs-toggle="dropdown">
                        <i class="far fa-envelope icon-color"></i>
                    </a>
                    <div
                        class="dropdown-menu dropdown-menu-end bg-secondary_1 box-shadow_box_1 border-0 rounded-0 rounded-bottom m-0">
                        <a href="#" class="dropdown-item">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle" src="img/user.jpg" alt=""
                                    style="width: 40px; height: 40px;">
                                <div class="ms-2">
                                    <h6 class="fw-normal mb-0 notification_head">Jhon send you a message</h6>
                                    <small>15 minutes ago</small>
                                </div>
                            </div>
                        </a>
                        <hr class="dropdown-divider">
                        <a href="#" class="dropdown-item">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle" src="img/user.jpg" alt=""
                                    style="width: 40px; height: 40px;">
                                <div class="ms-2">
                                    <h6 class="fw-normal mb-0 notification_head">Jhon send you a message</h6>
                                    <small>15 minutes ago</small>
                                </div>
                            </div>
                        </a>
                        <hr class="dropdown-divider">
                        <a href="#" class="dropdown-item">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle" src="img/user.jpg" alt=""
                                    style="width: 40px; height: 40px;">
                                <div class="ms-2">
                                    <h6 class="fw-normal mb-0 notification_head">Jhon send you a message</h6>
                                    <small>15 minutes ago</small>
                                </div>
                            </div>
                        </a>
                        <hr class="dropdown-divider">
                        <a href="#" class="dropdown-item text-center">See all message</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link" data-bs-toggle="dropdown">
                        <i class="far fa-bell icon-color"></i>
                    </a>
                    <div
                        class="dropdown-menu dropdown-menu-end bg-secondary_1 box-shadow_box_1 border-0 rounded-0 rounded-bottom m-0">
                        <a href="#" class="dropdown-item">
                            <h6 class="fw-normal mb-0 notification_head">Profile updated</h6>
                            <small>15 minutes ago</small>
                        </a>
                        <hr class="dropdown-divider">
                        <a href="#" class="dropdown-item">
                            <h6 class="fw-normal mb-0 notification_head">New user added</h6>
                            <small>15 minutes ago</small>
                        </a>
                        <hr class="dropdown-divider">
                        <a href="#" class="dropdown-item">
                            <h6 class="fw-normal mb-0 notification_head">Password changed</h6>
                            <small>15 minutes ago</small>
                        </a>
                        <hr class="dropdown-divider">
                        <a href="#" class="dropdown-item text-center">See all notifications</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link " data-bs-toggle="dropdown">
                        <img class="rounded-circle me-lg-2" src="img/user.jpg" alt=""
                            style="width: 30px; height: 30px;">
                    </a>
                    <div
                        class="dropdown-menu dropdown-menu-end bg-secondary_1 box-shadow_box_1 border-0 rounded-0 rounded-bottom m-0">
                        <a href="#" class="dropdown-item">My Profile</a>
                        <a href="#" class="dropdown-item">Settings</a>
                        <a href="{{ route('logout') }}" class="dropdown-item">Log Out</a>
                    </div>
                </div>
            </div>
        </nav> --}}
        <!-- Navbar End -->

          <!-- Navbar Start -->
            <nav class="navbar navbar-expand navbar_bg sticky-top px-4 py-0">
                <div class="d-flex align-items-center">
                    <h3 class="text-color-1 me-4 web-logo">PMFCT <span>PM - Family Care Tracker</span></h3>
                </div>
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary_1 mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>

                <div class="navbar-nav align-items-center ms-auto py-1 nav_right_block">
                <div class="content-search me-4">
                    <form class="d-none d-md-flex">
                    <i class="fa fa-search icon-color-light"></i>
                    <input class="serch_bar border-0" type="search" placeholder=" Search">
                </form>
                </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link" data-bs-toggle="dropdown">
                            <i class="far fa-envelope icon-color"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary_1 box-shadow_box_1 border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="{{ asset('assets/img/user.jpg') }}" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0 notification_head">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="{{ asset('assets/img/user.jpg') }}" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0 notification_head">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="{{ asset('assets/img/user.jpg') }}" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0 notification_head">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all message</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link" data-bs-toggle="dropdown">
                            <i class="far fa-bell icon-color"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary_1 box-shadow_box_1 border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0 notification_head">Profile updated</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0 notification_head">New user added</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0 notification_head">Password changed</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all notifications</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link " data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="{{ asset('assets/img/user.jpg') }}" alt="" style="width: 30px; height: 30px;">
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary_1 box-shadow_box_1 border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">My Profile</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            <a href="{{ route('logout') }}" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
        <!-- Navbar End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar navbar-dark p-3">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary_1"><i class="fa fa-user-edit me-2"></i>DarkPan</h3>
                </a>

                <div class="navbar-nav w-100 mb-4">
                    <a href="{{ route('dashboard') }}" class="menu-title">Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                                class="fa fa-laptop me-2"></i>Agency Master</a>
                        <div class="dropdown-menu bg-transparent border-0">

                            <a href="{{ route('agency-master.index') }}" class="dropdown-item">Agencies</a>
                            {{-- <a href="{{url("agency-master")}}" class="dropdown-item">Agencies</a> --}}

                            {{-- <a href="typography.html" class="dropdown-item">Typography</a>
                            <a href="element.html" class="dropdown-item">Other Elements</a> --}}
                        </div>
                    </div>
                    <a href="{{ route('kpi-master.index') }}" class="nav-item nav-link"><i
                            class="fa fa-th me-2"></i>Health Dashboard</a>
                    <a href="widget.html" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Widgets</a>
                    <a href="form.html" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Forms</a>
                    <a href="table.html" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Tables</a>
                    <a href="chart.html" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Charts</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                                class="far fa-file-alt me-2"></i>Pages</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="signin.html" class="dropdown-item">Sign In</a>
                            <a href="signup.html" class="dropdown-item">Sign Up</a>
                            <a href="404.html" class="dropdown-item">404 Error</a>
                            <a href="blank.html" class="dropdown-item">Blank Page</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">

            <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4 full-height">
                <div class="bg-secondary_1 border_light-1 rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0 text-color-1">KPI Master</h6>
                        <a href="{{ route('kpi-master.create') }}" class="link_btn">Add</a>
                    </div>
                    <div class="custom_table_border ">
                        <table class="table table-bordered table-hover custom_table m-0">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Agency</th>
                                    <th scope="col">Event</th>
                                    <th scope="col">KPI Name</th>
                                    <th scope="col">Created At</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            @php
                                $no = 0;
                            @endphp
                            <tbody>
                                @foreach($kpis as $data)
                                {{-- @dd($data->agency->name) --}}
                                    <tr>
                                        <td>{{++$no}}</td>
                                        <td>{{strtoupper($data->agency->name)}}</td>
                                        <td>{{strtoupper($data->event->name)}}</td>
                                        <td>{{strtoupper($data->kpi_name)}}</td>
                                        <td>{{date_to_format($data->created_at)}}</td>
                                        <td>
                                            <a href="kpi-master/{{$data->id}}/edit" class="btn btn-edit">Edit</a>
                                            <a href="kpi-master/{{$data->id}}" class="btn btn-view">View</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <h6 class="mb-0 text-color-1">Health Dashboard</h6>
                        {{-- <a href="{{ route('kpi-master.create') }}" class="link_btn">Add</a> --}}
                    </div>
                    <div class="container-fluid mt-4">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="row gx-3 gy-4">
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                                        <div class="health-block health-bg-1">
                                            <img src="{{ asset('assets/img/feet.png') }}" width="100px"
                                                class="img-fluid health-icon" alt="" />
                                            <h5 class="mt-3">Birth Registered</h5>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                                        <div class="health-block health-bg-2">
                                            <img src="{{ asset('assets/img/death-rate.png') }}" width="100px"
                                                class="img-fluid health-icon" alt="" />
                                            <h5 class="mt-3">Infant Mortality</h5>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                                        <div class="health-block health-bg-3">
                                            <img src="{{ asset('assets/img/pregnant.png') }}" width="100px"
                                                class="img-fluid health-icon" alt="" />
                                            <h5 class="mt-3">Maternal Mortality</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                                        <div class="health-block health-bg-4">
                                            <img src="{{ asset('assets/img/vaccine.png') }}" width="100px"
                                                class="img-fluid health-icon" alt="" />
                                            <h5 class="mt-3">Child Immunization</h5>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                                        <div class="health-block health-bg-5">
                                            <img src="{{ asset('assets/img/abortion.png') }}" width="100px"
                                                class="img-fluid health-icon" alt="" />
                                            <h5 class="mt-3">Stillbirth</h5>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                                        <div class="health-block health-bg-6">
                                            <img src="{{ asset('assets/img/alarm.png') }}" width="100px"
                                                class="img-fluid health-icon" alt="" />
                                            <h5 class="mt-3">Alert</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="col-md-5">
                                <div class=" bg-secondary_1 text-center rounded">
                                    <div class="timeline p-0">
                                        <h6 class="timeline_heading mb-2">Birth Registerd</h6>
                                        <div class="circle"></div>
                                        <ul class="d-flex">
                                            <li><a href="#" target="">
                                                    <div class="border_block"><em>0- 3 Month Vaccination</em> <strong
                                                            class="data_servey">4400</strong></div>
                                                </a></li>
                                            <li><a href="#" target="">
                                                    <div class="border_block"><em>0- 3 Month Vaccination</em> <strong
                                                            class="data_servey">4400</strong></div>
                                                </a></li>

                                        </ul>
                                        <h6 class="timeline_heading ">Birth Registerd</h6>
                                        <ul class="d-flex">
                                            <li><a href="#" target="">
                                                    <div class="border_block"><em>0- 3 Month Vaccination</em> <strong
                                                            class="data_servey">4400</strong></div>
                                                </a></li>
                                            <li><a href="#" target="">
                                                    <div class="border_block"><em>0- 3 Month Vaccination</em> <strong
                                                            class="data_servey">4400</strong></div>
                                                </a></li>
                                        </ul>
                                        <div class="circle"></div>
                                    </div>
                                </div>
                            </div> --}}

                            <div class="col-md-5">
                               <div class="bg-background py-4">
                                <div class="timeline d-flex justify-content-evenly">
                                    <div class="">
                                        <div class="birth-box">
                                    <h4 class="m-0">Brith Registered</h4>
                                    <span>35465</span>
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="entry">
                                        <div class="core">
                                        <h3>1980</h3>
                                            <span>Maternal Mortality</span>
                                        </div>
                                        </div>

                                        <div class="entry">
                                        <div class="core">
                                        <h3>123</h3>
                                            <span>Infant Mortality</span>
                                        </div>
                                        </div>

                                        <div class="entry">
                                        <div class="core">
                                        <h3>987</h3>
                                            <span>Stillbirth</span>
                                        </div>
                                        </div>
                                    </div>


                                </div>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Recent Sales End -->


            <div class="container-fluid pt-4 px-4 footer_menu">
                <div class="bg-secondary_1 box-shadow_box_1 rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">PMFCT</a>, All Right Reserved.
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <a href="https://guj.nic.in" target="_blank">Designed & Developed By Gujarat NIC</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Content End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/echarts@5.4.3/dist/echarts.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/echarts@5.4.3/dist/echarts.min.js"></script> -->

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script>
        $(document).ready(function () {
            $('.sidebar-toggler').click(function () {
                $('.sidebar, .content').toggleClass("open");
                return false;
            });
        });
        </script>

</body>
</html>
