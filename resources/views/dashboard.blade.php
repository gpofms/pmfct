<!DOCTYPE html>
<html lang="en">
@include('layout.header')
<body>
    <div class="container-fluid position-relative p-0">

        <!-- Navbar Start -->
            <nav class="navbar navbar-expand navbar_bg sticky-top px-4 py-0">
                <div class="d-flex align-items-center">
                    <h3 class="text-color-1 me-4 fs-6">Admin Logo</h3>
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
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0 notification_head">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0 notification_head">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
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
                            <img class="rounded-circle me-lg-2" src="img/user.jpg" alt="" style="width: 30px; height: 30px;">
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary_1 box-shadow_box_1 border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">My Profile</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            <a href="#" class="dropdown-item">Log Out</a>
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
                    <a href="index.html" class="menu-title">Dashboard</a>
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
                </div>
                <div class="navbar-nav w-100">
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
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">

        <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary_1 border_light-1 rounded d-flex align-items-center p-4 position-relative">
                           <i class="far fa-user-circle block-primary"></i>
                            <div class="ms-3">
                                <h6 class="mb-0 text_primary f-14">324</h6>
                                <p class="m-0 f-13 text-color-1">New leads today</p>
                            </div>
                            <div class="badge graph_badge-success"> <i class="far fa-arrow-alt-circle-up"></i> 8.07% </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary_1 border_light-1 rounded d-flex align-items-center p-4 position-relative">
                           <i class="fa fa-hands-helping block-success"></i>
                            <div class="ms-3">
                                <h6 class="mb-0 text_success f-14">34</h6>
                                <p class="m-0 f-13 text-color-1">Opened Deals</p>
                            </div>
                            <div class="badge graph_badge-danger"> <i class="far fa-arrow-alt-circle-up"></i> 3.07% </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary_1 border_light-1 rounded d-flex align-items-center p-4 position-relative">
                           <i class="far fa-calendar-alt block-info"></i>
                            <div class="ms-3">
                                <h6 class="mb-0 text_info f-14">234</h6>
                                <p class="m-0 f-13 text-color-1">Appointments</p>
                            </div>
                            <div class="badge graph_badge-success"> <i class="far fa-arrow-alt-circle-up"></i> 1.07% </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary_1 border_light-1 rounded d-flex align-items-center p-4 position-relative">
                          <i class="far fa-life-ring block-danger"></i>
                            <div class="ms-3">
                                <h6 class="mb-0 text_danger f-14">234</h6>
                                <p class="m-0 f-13 text-color-1">Support Requests</p>
                            </div>
                            <div class="badge graph_badge-danger"> <i class="far fa-arrow-alt-circle-up"></i> 5.07% </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Sale & Revenue End -->


            <!-- Graph Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row">
                    <div class="col-md-6">
                        <div class="bg-secondary_1 border_light-1 text-center rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0 text-color-1">Recent Salse</h6>
                                <a href="" class="link_btn">Show All</a>
                            </div>
                            <div id="main" style="width: 100%; height: 400px;"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                    <div class="bg-secondary_1 border_light-1 text-center rounded p-4">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <h6 class="mb-0 text-color-1">Recent Salse</h6>
                            <a href="" class="link_btn">Show All</a>
                        </div>
                        <div id="pieChart" style="width: 100%; height: 400px;"></div>
                    </div>
                    </div>
                </div>
             </div>
            <!-- Graph End -->

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
                        <div class="custom_table_border ">
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
                                    <td scope="row">1</td>
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



            
             <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary_1 border_light-1 text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0 text-color-1">Recent Salse</h6>
                        <a href="" class="link_btn">Show All</a>
                    </div>
                    <div class="custom_table_border ">
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
                                <td scope="row">1</td>
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
            {{-- -- End Step Chart -- --}}

            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4 footer_menu">
                <div class="bg-secondary_1 box-shadow_box_1 rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Your Site Name</a>, All Right Reserved.
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                            <br>Distributed By: <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
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

    <!-- JavaScript Libraries -->
    php
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/js/main.js') }}" type="text/script"></script>
    <script src="https://cdn.jsdelivr.net/npm/echarts@5.4.3/dist/echarts.min.js"></script>
    <script>
            // Initialize chart
            var myChart = echarts.init(document.getElementById('main'));

            // Chart options
            var option = {
                title: {
                text: 'ECharts Example'
                },
                tooltip: {},
                xAxis: {
                data: ['Apple', 'Banana', 'Orange']
                },
                yAxis: {},
                series: [{
                name: 'Sales',
                type: 'bar',
                data: [5, 20, 36]
                }]
            };

            // Apply options
            myChart.setOption(option);
    </script>

    <script>
        // Initialize the chart
        var chart = echarts.init(document.getElementById('pieChart'));

        // Chart options
        var option = {
        title: {
            text: 'Fruit Sales',
            left: 'center'
        },
        tooltip: {
            trigger: 'item'
        },
        legend: {
            orient: 'vertical',
            left: 'left'
        },
        series: [
            {
            name: 'Sales',
            type: 'pie',
            radius: '50%',
            data: [
                { value: 1048, name: 'Apples' },
                { value: 735, name: 'Bananas' },
                { value: 580, name: 'Oranges' },
                { value: 484, name: 'Grapes' },
                { value: 300, name: 'Pineapples' }
            ],
            emphasis: {
                itemStyle: {
                shadowBlur: 10,
                shadowOffsetX: 0,
                shadowColor: 'rgba(0, 0, 0, 0.5)'
                }
            }
            }
        ]
        };

        // Use the specified configuration
        chart.setOption(option);

    </script>
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

      
</body>

</html>