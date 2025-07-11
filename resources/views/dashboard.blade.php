

<!DOCTYPE html>
<html lang="en">

@include('layout.header')



<body>
    <div class="container-fluid position-relative p-0">
        <!-- Spinner Start -->
        {{-- <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary_1" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div> --}}
        <!-- Spinner End -->


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
                    <a href="{{ route('dashboard')}}" class="menu-title">Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Agency Master</a>
                        <div class="dropdown-menu bg-transparent border-0">

                            <a href="{{ route('agency-master.index') }}" class="dropdown-item">Agencies</a>
                            {{-- <a href="{{url("agency-master")}}" class="dropdown-item">Agencies</a> --}}

                            {{-- <a href="typography.html" class="dropdown-item">Typography</a>
                            <a href="element.html" class="dropdown-item">Other Elements</a> --}}
                        </div>
                    </div>
                    <a href="{{ route('kpi-master.index') }}" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Health Dashboard</a>
                    <a href="widget.html" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Widgets</a>
                    <a href="form.html" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Forms</a>
                    <a href="table.html" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Tables</a>
                    <a href="chart.html" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Charts</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Pages</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="signin.html" class="dropdown-item">Sign In</a>
                            <a href="signup.html" class="dropdown-item">Sign Up</a>
                            <a href="404.html" class="dropdown-item">404 Error</a>
                            <a href="blank.html" class="dropdown-item">Blank Page</a>
                        </div>
                    </div>
                </div>
                {{-- <div class="navbar-nav w-100">
                    <a href="index.html" class="nav-item menu-title">Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Elements</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="button.html" class="dropdown-item">Buttons</a>
                            <a href="typography.html" class="dropdown-item">Typography</a>
                            <a href="element.html" class="dropdown-item">Other Elements</a>
                        </div>
                    </div>
                    <a href="widget.html" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Widgets</a>
                    <a href="form.html" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Forms</a>
                    <a href="table.html" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Tables</a>
                    <a href="chart.html" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Charts</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Pages</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="signin.html" class="dropdown-item">Sign In</a>
                            <a href="signup.html" class="dropdown-item">Sign Up</a>
                            <a href="404.html" class="dropdown-item">404 Error</a>
                            <a href="blank.html" class="dropdown-item">Blank Page</a>
                        </div>
                    </div>
                </div> --}}
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <div class="container-fluid px-4">
                <div class="row">
                    <header class="content-header pe-0 d-flex pt-4">
                    <h2 class="fs-7 m-0 text-body-emphasis text-dark-1">PMFCT</h2>
                    <div aria-label="breadcrumb" class="d-none d-sm-flex ms-6">
                        <ol class="breadcrumb fs-8">
                            <li class="breadcrumb-item ps-3"><a href="#" style="cursor: pointer;">Dashboards</a></li>
                            {{-- <li class="active breadcrumb-item" aria-current="page">Dashboards</li> --}}
                        </ol>
                    </div>
                    </header>
                </div>
            </div>

            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-3 m-0">
                        <div class="bg-secondary_1 border_light-1 rounded d-flex align-items-center p-4 position-relative">
                           <i class="far fa-user-circle block-primary"></i>
                            <div class="ms-3">
                                <h6 class="mb-0 text_primary f-14">{{count($transactions)}}</h6>
                                <p class="m-0 f-13 text-color-1">Total Transactions</p>
                            </div>
                            <div class="badge graph_badge-success"> <i class="far fa-arrow-alt-circle-up"></i> 8.07% </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3 m-0">
                        <div class="bg-secondary_1 border_light-1 rounded d-flex align-items-center p-4 position-relative">
                           <i class="fa fa-hands-helping block-success"></i>
                            <div class="ms-3">
                                <h6 class="mb-0 text_success f-14">{{count($pmfctBasics)}}</h6>
                                <p class="m-0 f-13 text-color-1">PMFCT Basics</p>
                            </div>
                            <div class="badge graph_badge-danger"> <i class="far fa-arrow-alt-circle-up"></i> 3.07% </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3 m-0">
                        <div class="bg-secondary_1 border_light-1 rounded d-flex align-items-center p-4 position-relative">
                           <i class="far fa-calendar-alt block-info"></i>
                            <div class="ms-3">
                                <h6 class="mb-0 text_info f-14">{{$currentMonthTransactions}}</h6>
                                <p class="m-0 f-13 text-color-1">Current Month ({{$monthName}}) Transactions</p>
                            </div>
                            <div class="badge graph_badge-success"> <i class="far fa-arrow-alt-circle-up"></i> 1.07% </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3 m-0">
                        <div class="bg-secondary_1 border_light-1 rounded d-flex align-items-center p-4 position-relative">
                          <i class="far fa-life-ring block-danger"></i>
                            <div class="ms-3">
                                <h6 class="mb-0 text_danger f-14">{{count($totalEvents)}}</h6>
                                <p class="m-0 f-13 text-color-1">Total Events Registered</p>
                            </div>
                            <div class="badge graph_badge-danger"> <i class="far fa-arrow-alt-circle-up"></i> 5.07% </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Sale & Revenue End -->
            <div class="container-fluid pt-4 px-4">
                <div class="row">
                    <div class="col-md-6">
                        <div class="bg-secondary_1 border_light-1 text-center rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0 text-color-1">Recent Agencies</h6>
                                {{-- <a href="" class="link_btn">Show All</a> --}}
                            </div>
                            <div id="main" style="width: 100%; height: 400px;"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                    <div class="bg-secondary_1 border_light-1 text-center rounded p-4">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <h6 class="mb-0 text-color-1">Recent Transactions</h6>
                            {{-- <a href="" class="link_btn">Show All</a> --}}
                        </div>
                        <div id="pieChart" style="width: 100%; height: 400px;"></div>
                    </div>
                    </div>
                </div>
             </div>

            <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary_1 border_light-1 text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0 text-color-1">Recent Agencies</h6>
                        {{-- <a href="" class="link_btn">Show All</a> --}}
                    </div>
                    <div class="custom_table_border table-responsive">
                        <table class="table table-bordered table-hover custom_table m-0">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Aadhar</th>
                                    <th scope="col">Event</th>
                                    <th scope="col">Sub Event</th>
                                    <th scope="col">Event Transaction Date</th>
                                    <th scope="col">Agency</th>
                                    <th scope="col">Rural/Urban</th>
                                    <th scope="col">District</th>
                                    <th scope="col">Sub District</th>
                                    <th scope="col">Corp/Muni/Town</th>
                                    <th scope="col">Ward Village</th>
                                    <th scope="col">Event Date</th>
                                </tr>
                            </thead>
                            @php
                                $no = 0;
                            @endphp
                            <tbody>

                                @foreach($transactions as $data)
                                    <tr>
                                        <td>{{++$no}}</td>
                                        <td>{{$data->aadhar}}</td>
                                        {{-- {{dd('MMMMM')}}; --}}
                                        <td>{{ucfirst($data->event->name)}}</td>
                                        <td>{{$data->subEvent->name}}</td>
                                        <td>{{$data->event_transaction_date}}</td>
                                        <td>{{strtoupper($data->agency_name)}}</td>
                                        <td>{{ucfirst($data->rural_urban)}}</td>
                                        {{-- <td>{{$data->district->district_name}}</td>
                                        <td>{{$data->subDistrict->sub_district_name}}</td> --}}
                                        <td></td>
                                        <td></td>
                                        <td>{{ucfirst($data->corp_muni_town)}}</td>
                                        <td>{{ucfirst($data->ward_village)}}</td>
                                        <td>{{$data->event_date}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Recent Sales End -->

             {{-- -- Start Step Chart -- --}}

            <div class="container-fluid pt-4 px-4">
                <div class="row">
                    <div class="col-md-5">
                        <div class=" bg-secondary_1 border_light-1 text-center rounded p-sm-4">
                            <div class="timeline">
                                <h6 class="timeline_heading mb-2">Birth Registerd</h6>
                                <div class="circle"></div>
                                <ul class="d-flex">
                                    <li><a href="#" target=""><div class="border_block"><em>0- 3 Month Vaccination</em> <strong class="data_servey">4400</strong></div></a></li>
                                    <li><a href="#" target=""><div class="border_block"><em>0- 3 Month Vaccination</em> <strong class="data_servey">4400</strong></div></a></li>
                                </ul>
                                <h6 class="timeline_heading ">Birth Registerd</h6>
                                <ul class="d-flex">
                                    <li><a href="#" target=""><div class="border_block"><em>0- 3 Month Vaccination</em> <strong class="data_servey">4400</strong></div></a></li>
                                    <li><a href="#" target=""><div class="border_block"><em>0- 3 Month Vaccination</em> <strong class="data_servey">4400</strong></div></a></li>
                                </ul>
                                <div class="circle"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                    <div class="bg-secondary_1 border_light-1 text-center rounded p-4">
                        <div class="custom_table_border  table-responsive">
                            <table class="table table-bordered table-hover custom_table m-0">
                                <thead class="thead-dark">
                                    <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <td scope="row">
                                    <a class="link" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Open first modal</a>
                                    </td>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    </tr>
                                    <tr>
                                    <td scope="row">2</td>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                    </tr>
                                    <tr>
                                    <td scope="row">3</td>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                    </tr>
                                    <tr>
                                    <td scope="row">4</td>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                    </tr>
                                    <tr>
                                    <td scope="row">5</td>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    </div>
                </div>
             </div>

            {{-- -- End Step Chart -- --}}

            <!-- Footer Start -->
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
            <!-- Footer End -->
        </div>
        <!-- Content End -->








        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>
<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Birth Registerd</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body bg-body-tertiary">
          <div class="container">
    <div class="">
      {{-- <div class="d-flex align-items-center mb-3">
        <img src="https://via.placeholder.com/80" class="rounded-circle me-3" alt="Profile">
        <div>
          <h4 class="mb-0">Kristina Patton</h4>
          <small>Class: 9 A | DOB: 27th Jul 2006</small><br>
          <small>Attendance: 85% (32 Leaves)</small>
        </div>
        <div class="ms-auto text-end">
          <span class="badge bg-primary badge-custom">Studies 7</span>
          <span class="badge bg-success badge-custom">Sports 9</span>
          <span class="badge bg-danger badge-custom">Warnings 1</span><br>
          <small>Class Teacher: Ms. Julia Milburn</small>
        </div>
      </div> --}}

      <div class="row gap-3">
        <!-- Personal Info -->
        <div class="col mb-3 p-0 border profile-card">
          <h6 class="section-title"><i class="far fa-user"></i> Personal Information</h6>
          <div class="info-item"><span>Gender :</span> <br> Female</div>
          <div class="info-item"><span>Age :</span>  <br> 15</div>
          <div class="info-item"><span>Contact : </span> <br> +1 424 270 6264</div>
          <div class="info-item"><span>Address :</span>  <br> 9 Pebble Street, Los Angeles</div>
        </div>

        <!-- Parents Info -->
        <div class="col mb-3 p-0 border profile-card">
          <h6 class="section-title"><i class="fa fa-certificate"></i> Parents Information</h6>
          <div class="info-item"><span>Father's Name :</span> <br> Mr. Damien Patton</div>
          <div class="info-item"><span>Mother's Name :</span>  <br> Mrs. Damien Patton</div>
          <div class="info-item"><span>Contact : </span> <br> +1 424 270 6264</div>
          <div class="info-item"><span>Occupation :</span>  <br> Doctor</div>
        </div>
        <!-- Academic Info -->
        <div class="col mb-3 p-0 border profile-card">
          <h6 class="section-title"><i class="fa fa-university"></i> Academic Information</h6>
          <div class="info-item"><span>Previous Term Grades :</span> <br>B+ / 69%</div>
          <div class="info-item"><span>Best Performed Subject :</span>  <br> Mathematicsn</div>
          <div class="info-item"><span>Weak Subject : </span> <br> Geometry</div>
          <div class="info-item"><span>Best Scores In :</span>  <br> Physics (91%)</div>
        </div>
       <!-- Extra Curricular -->
       <div class="col mb-3 p-0 border profile-card">
          <h6 class="section-title"><i class="fa fa-award"></i> Extra  Information</h6>
          <div class="info-item"><span>Caste :</span> <br> Gernal</div>
          <div class="info-item"><span>Disability</span>  <br>No</div>
          <div class="info-item"><span>Weak Subject : </span> <br> Geometry</div>
          <div class="info-item"><span>Best Scores In :</span>  <br> Physics (91%)</div>
        </div>





      </div>
    </div>
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
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

    <script>

        // console.log(eventsCount);

        // Initialize chart
        var myChart = echarts.init(document.getElementById('main'));

        var labels = {!! json_encode($agencyName) !!};
        var values = {!! json_encode($eventsCount) !!};

        // Chart options
        var option = {
            title: {
            text: 'Agency Wise Events'
            },
            tooltip: {},
            xAxis: {
            // data: ['Apple', 'Banana', 'Orange']
            data: labels
            },
            yAxis: {},
            series: [{
                name: 'Events',
                type: 'bar',
                // data: [5, 20, 36]
                data: values
            }]
        };

        // Apply options
        myChart.setOption(option);
    </script>

    <script>
        var chart = echarts.init(document.getElementById('pieChart'));

        // Embed PHP data
        var eventNames = {!! json_encode($eventName) !!};
        var transactions = {!! json_encode($transactionsCount) !!};

        // Format data for ECharts
        var pieData = eventNames.map((name, i) => ({
        name: name,
        value: transactions[i]
        }));

        var option = {
            title: {
                text: 'Event wise Transactions',
                left: 'center'
            },
            tooltip: {
                trigger: 'item'
            },
            legend: {
                orient: 'vertical',
                left: 'left'
            },
            series: [{
                name: 'Transactions',
                type: 'pie',
                radius: '50%',
                data: pieData,
                emphasis: {
                itemStyle: {
                    shadowBlur: 10,
                    shadowOffsetX: 0,
                    shadowColor: 'rgba(0, 0, 0, 0.5)'
                }
                }
            }]
        };

        chart.setOption(option);
    </script>

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
        <script>
            var chart = echarts.init(document.getElementById('main'));
            var option = {
                // your chart options here
            };
            chart.setOption(option);

            // Add this to make it responsive
            window.addEventListener('resize', function () {
                chart.resize();
            });
        </script>

        <!-- Button trigger modal -->


<!-- Modal -->

</body>
</html>
