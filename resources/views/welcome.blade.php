<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Location</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="{{asset('css/mdb.css')}}">
    <link rel="stylesheet" type="text/css" href="../../js/vendor/datatables/css/dataTables.bootstrap4.min.css"/>

    <!-- Your custom styles (optional) -->
    <style>

    </style>
</head>

<body class="fixed-sn white-skin">

    <!--Main Navigation-->
    <header>

        <!-- Sidebar navigation -->
        <ul id="slide-out" class="side-nav fixed sn-bg-1 custom-scrollbar">
            <!-- Logo -->
            <li class="logo-sn waves-effect">
                <div class=" text-center">
                    <a href="#" class="pl-0"><img src="https://mdbootstrap.com/img/logo/mdb-transaprent-noshadows.png" class=""></a>
                </div>
            </li>
            <!--/. Logo -->

            <!--Search Form-->
            <li>
                <form class="search-form" role="search">
                    <div class="form-group waves-effect">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                </form>
            </li>
            <!--/.Search Form-->
            <!-- Side navigation links -->
            <li>
                <ul class="collapsible collapsible-accordion">
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-tachometer"></i> Dashboards<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="../dashboards/v-1.html" class="waves-effect">Version 1</a>
                                </li>
                                <li><a href="../dashboards/v-2.html" class="waves-effect">Version 2</a>
                                </li>
                                <li><a href="../dashboards/v-3.html" class="waves-effect">Version 3</a>
                                </li>
                                <li><a href="../dashboards/v-4.html" class="waves-effect">Version 4</a>
                                </li>
                                <li><a href="../dashboards/v-5.html" class="waves-effect">Version 5</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-photo"></i> Pages<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="../pages/login.html" class="waves-effect">Login</a>
                                </li>
                                <li><a href="../pages/register.html" class="waves-effect">Register</a>
                                </li>
                                <li><a href="../pages/pricing.html" class="waves-effect">Pricing</a>
                                </li>
                                <li><a href="../pages/about.html" class="waves-effect">About us</a>
                                </li>
                                <li><a href="../pages/single.html" class="waves-effect">Single post</a>
                                </li>
                                <li><a href="../pages/post.html" class="waves-effect">Post listing</a>
                                </li>
                                <li><a href="../pages/landing.html" class="waves-effect">Landing page</a>
                                </li>
                                <li><a href="../pages/customers.html" class="waves-effect">Cusomers</a>
                                </li>
                                <li><a href="../pages/invoice.html" class="waves-effect">Invoice</a>
                                </li>
                                <li><a href="../pages/page-creator.html" class="waves-effect">Page Creator</a>
                                </li>
                                <li><a href="../pages/support.html" class="waves-effect">Support</a>
                                </li>
                                <li><a href="../pages/chat.html" class="waves-effect">Chat</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-user"></i> Profile<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="../profile/basic-1.html" class="waves-effect">Basic 1</a>
                                </li>
                                <li><a href="../profile/basic-2.html" class="waves-effect">Basic 2</a>
                                </li>
                                <li><a href="../profile/extended.html" class="waves-effect">Extended</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-css3"></i> CSS<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="../css/grid.html" class="waves-effect">Grid system</a>
                                </li>
                                <li><a href="../css/media.html" class="waves-effect">Media object</a>
                                </li>
                                <li><a href="../css/utilities.html" class="waves-effect">Utilities / helpers</a>
                                </li>
                                <li><a href="../css/code.html" class="waves-effect">Code</a>
                                </li>
                                <li><a href="../css/icons.html" class="waves-effect">Icons</a>
                                </li>
                                <li><a href="../css/images.html" class="waves-effect">Images</a>
                                </li>
                                <li><a href="../css/typography.html" class="waves-effect">Typography</a>
                                </li>
                                <li><a href="../css/animations.html" class="waves-effect">Animations</a>
                                </li>
                                <li><a href="../css/colors.html" class="waves-effect">Colors</a>
                                </li>
                                <li><a href="../css/hover.html" class="waves-effect">Hover effects</a>
                                </li>
                                <li><a href="../css/masks.html" class="waves-effect">Masks</a>
                                </li>
                                <li><a href="../css/shadows.html" class="waves-effect">Shadows</a>
                                </li>
                                <li><a href="../css/skins.html" class="waves-effect">Skins</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-th"></i> Components<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="../components/buttons.html" class="waves-effect">Buttons</a>
                                </li>
                                <li><a href="../components/cards.html" class="waves-effect">Cards</a>
                                </li>
                                <li><a href="../components/panels.html" class="waves-effect">Panels</a>
                                </li>
                                <li><a href="../components/list.html" class="waves-effect">List group</a>
                                </li>
                                <li><a href="../components/pagination.html" class="waves-effect">Pagination</a>
                                </li>
                                <li><a href="../components/progress.html" class="waves-effect">Progress bars</a>
                                </li>
                                <li><a href="../components/tabs.html" class="waves-effect">Tabs & pills</a>
                                </li>
                                <li><a href="../components/tags.html" class="waves-effect">Tags, labels & badges</a>
                                </li>
                                <li><a href="../components/collapse.html" class="waves-effect">Collapse</a>
                                </li>
                                <li><a href="../components/date.html" class="waves-effect">Date picker</a>
                                </li>
                                <li><a href="../components/time.html" class="waves-effect">Time picker</a>
                                </li>
                                <li><a href="../components/tooltips.html" class="waves-effect">Tooltips</a>
                                </li>
                                <li><a href="../components/popovers.html" class="waves-effect">Popovers</a>
                                </li>
                                <li><a href="../components/stepper.html" class="waves-effect">Stepper</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-check-square-o"></i> Forms<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="../forms/basic.html" class="waves-effect">Basic</a>
                                </li>
                                <li><a href="../forms/extended.html" class="waves-effect">Extended</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-table"></i> Tables<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="../tables/basic.html" class="waves-effect">Basic</a>
                                </li>
                                <li><a href="../tables/extended.html" class="waves-effect">Extended</a>
                                </li>
                                <li><a href="../tables/datatables.html" class="waves-effect">DataTables.net</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-map"></i> Maps<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="../maps/google.html" class="waves-effect">Google Maps</a>
                                </li>
                                <li><a href="../maps/full.html" class="waves-effect">Full screen map</a>
                                </li>
                                <li><a href="../maps/vector.html" class="waves-effect">Vector world map</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- Simple link -->
                    <li><a href="../alerts/alerts.html" class="collapsible-header waves-effect"><i class="fa fa-bell-o"></i> Alerts</a></li>

                    <li><a href="../modals/modals.html" class="collapsible-header waves-effect"><i class="fa fa-bolt"></i> Modals</a></li>

                    <li><a href="../charts/charts.html" class="collapsible-header waves-effect"><i class="fa fa-pie-chart"></i> Charts</a></li>

                    <li><a href="../calendar/calendar.html" class="collapsible-header waves-effect"><i class="fa fa-calendar-check-o"></i> Calendar</a></li>

                    <li><a href="../sections/sections.html" class="collapsible-header waves-effect"><i class="fa fa-th-large"></i> Sections</a></li>

                </ul>
            </li>
            <!--/. Side navigation links -->
            <div class="sidenav-bg mask-strong"></div>
        </ul>
        <!--/. Sidebar navigation -->

        <!-- Navbar -->
        <nav class="navbar fixed-top navbar-toggleable-md navbar-expand-lg scrolling-navbar double-nav">
            <!-- SideNav slide-out button -->
            <div class="float-left">
                <a href="#" data-activates="slide-out" class="button-collapse black-text"><i class="fa fa-bars"></i></a>
            </div>
            <!-- Breadcrumb-->
            <div class="breadcrumb-dn mr-auto">
                <p>Menu </p>
            </div>

            <!--Navbar links-->
            <ul class="nav navbar-nav nav-flex-icons ml-auto">

                <!-- Dropdown -->
                
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle waves-effect" href="#" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-user"></i> <span class="clearfix d-none d-sm-inline-block">Profil</span></a>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="{{route('logout')}}">Log Out</a>
                        <a class="dropdown-item" href="#">Mon profil</a>
                    </div>
                </li>

            </ul>
            <!--/Navbar links-->
        </nav>
        <!-- /.Navbar -->

        <!-- Fixed button -->
        <div class="fixed-action-btn clearfix d-none d-xl-block" style="bottom: 45px; right: 24px;">
            <a class="btn-floating btn-lg red">
                <i class="fa fa-pencil"></i>
            </a>

            <ul>
                <li><a class="btn-floating red"><i class="fa fa-star"></i></a></li>
                <li><a class="btn-floating yellow darken-1"><i class="fa fa-user"></i></a></li>
                <li><a class="btn-floating green"><i class="fa fa-envelope"></i></a></li>
                <li><a class="btn-floating blue"><i class="fa fa-shopping-cart"></i></a></li>
            </ul>
        </div>
        <!-- Fixed button -->

    </header>
    <!--Main Navigation-->

    <!--Main layout-->
    <main>
        @yield('content')
    </main>
    <!--Main layout-->

    <!--Footer-->
    <footer class="page-footer center-on-small-only pt-0 mt-5">

        <!--Copyright-->
        <div class="footer-copyright">
            <div class="container-fluid">
                &copy;  Copyright:             <script>document.write(new Date().getFullYear())</script>&nbsp;<a href="http://acidlabs.cc" target="_blank">Acid labs.</a>


            </div>
        </div>
        <!--/.Copyright-->

    </footer>
    <!--/.Footer-->


    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
    <script type="text/javascript" src="../../js/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="../../js/vendor/datatables/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#datatables').DataTable();
        });

        // Material Select Initialization
        $(document).ready(function () {
            $('select[name="datatables_length"]').material_select();
        });
    </script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="{{asset('js/mdb.min.js')}}"></script>
    <!--Initializations-->
    <script>
        // SideNav Initialization
        $(".button-collapse").sideNav();

        var container = document.getElementById('slide-out');
        Ps.initialize(container, {
            wheelSpeed: 2,
            wheelPropagation: true,
            minScrollbarLength: 20
        });

        // Data Picker Initialization
        $('.datepicker').pickadate();

        // Material Select Initialization
        $(document).ready(function () {
            $('.mdb-select').material_select();
        });

        // Tooltips Initialization
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>

    <!-- Charts -->
    <script>
        // Small chart
        $(function () {
            $('.min-chart#chart-sales').easyPieChart({
                barColor: "#4caf50",
                onStep: function (from, to, percent) {
                    $(this.el).find('.percent').text(Math.round(percent));
                }
            });
        });

        //Main chart
        var ctxL = document.getElementById("lineChart").getContext('2d');
        var myLineChart = new Chart(ctxL, {
            type: 'line',
            data: {
                labels: ["January", "February", "March", "April", "May", "June", "July"],
                datasets: [{
                    label: "My First dataset",
                    fillColor: "#fff",
                    backgroundColor: 'rgba(255, 255, 255, .3)',
                    borderColor: 'rgba(255, 99, 132)',
                    data: [0, 10, 5, 2, 20, 30, 45],
                }]
            },
            options: {
                legend: {
                    labels: {
                        fontColor: "#fff",
                    }
                },
                scales: {
                    xAxes: [{
                        gridLines: {
                            display: true,
                            color: "rgba(255,255,255,.25)"
                        },
                        ticks: {
                            fontColor: "#fff",
                        },
                    }],
                    yAxes: [{
                        display: true,
                        gridLines: {
                            display: true,
                            color: "rgba(255,255,255,.25)"
                        },
                        ticks: {
                            fontColor: "#fff",
                        },
                    }],
                }
            }
        });
    </script>

</body>

</html>