<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from coderthemes.com/zircos/layouts/vertical/dashboard_2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Dec 2020 19:04:05 GMT -->
<head>
    <meta charset="utf-8" />

    <title>NationsStar Bank PLC  | Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Responsive bootstrap 4 admin template" name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <link href="{{ asset('admin/assets/libs/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">

    <!-- App css -->
    <link href="{{ asset('admin/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
    <link href="{{ asset('admin/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-stylesheet" />
    <link href="{{ asset('admin/assets/libs/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/assets/libs/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/assets/libs/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/assets/libs/datatables/fixedHeader.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/assets/libs/datatables/scroller.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/assets/libs/datatables/dataTables.colVis.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/assets/libs/datatables/fixedColumns.bootstrap4.min.html') }}" rel="stylesheet" type="text/css" />

</head>

<body>

<!-- Begin page -->
<div id="wrapper">


    <!-- Topbar Start -->
    <div class="navbar-custom">
        <ul class="list-unstyled topnav-menu float-right mb-0">

            <li class="dropdown notification-list">
                <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <img src="{{ asset('admin/assets/images/download.png') }}" alt="user-image" class="rounded-circle">
                    <span class="d-none d-sm-inline-block ml-1">{{ auth()->user()->name }}.</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                    <!-- item-->
                    <div class="dropdown-header noti-title">
                        <h6 class="text-overflow m-0">Welcome !</h6>
                    </div>

                    <div class="dropdown-divider"></div>

                    <!-- item-->

                    <a class="dropdown-item notify-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                        <i class="mdi mdi-logout-variant"></i>
                        <span>Logout</span>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>

                </div>
            </li>


        </ul>

        <!-- LOGO -->
        <div class="logo-box">
            <a href="index.html" class="logo text-center">
                    <span class="logo-lg">
                        <img src="assets/images/logo-light.png" alt="" height="18">
                        <!-- <span class="logo-lg-text-light">Zircos</span> -->
                    </span>
                <span class="logo-sm">
                        <!-- <span class="logo-sm-text-dark">Z</span> -->
                        <img src="assets/images/logo-sm.png" alt="" height="24">
                    </span>
            </a>
        </div>

        <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
            <li>
                <button class="button-menu-mobile waves-effect">
                    <i class="mdi mdi-menu"></i>
                </button>
            </li>


        </ul>
    </div>
    <!-- end Topbar -->

    <!-- ========== Left Sidebar Start ========== -->
    <div class="left-side-menu">

        <div class="slimscroll-menu">

            <!--- Sidemenu -->
            <div id="sidebar-menu">

                <ul class="metismenu" id="side-menu">

                    <li class="menu-title">Navigation</li>

                    <li>
                        <a href="{{ route('admin.dashboard') }}" class="waves-effect waves-light">
                            <i class="mdi mdi-view-dashboard"></i>
                            <span>  Dashboard  </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.deposits') }}" class="waves-effect waves-light">
                            <i class="mdi mdi-file-link"></i>
                            <span> Deposits </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.withdrawals') }}" class="waves-effect waves-light">
                            <i class="mdi mdi-file-link"></i>
                            <span> Withdrawals </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.cards') }}" class="waves-effect waves-light">
                            <i class="mdi mdi-card"></i>
                            <span> Card Requests </span>
                        </a>
                    </li>

{{--                    <li>--}}
{{--                        <a href="javascript: void(0);" class="waves-effect waves-light">--}}
{{--                            <i class="mdi mdi-cash-usd-outline"></i>--}}
{{--                            <span> Transactions </span>--}}
{{--                            <span class="menu-arrow"></span>--}}
{{--                        </a>--}}
{{--                        <ul class="nav-second-level" aria-expanded="false">--}}

{{--                            <li><a href="{{ route('admin.all_deposits') }}">Deposits</a></li>--}}
{{--                            <li><a href="@">Withdrawals</a></li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}

                    <li>
                        <a href="{{ route('admin.all_users') }}" class="waves-effect waves-light">
                            <i class="mdi mdi-account-supervisor"></i>
                            <span> Users </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.settings') }}" class="waves-effect waves-light">
                            <i class="mdi mdi-settings-transfer"></i>
                            <span> Settings </span>
                        </a>
                    </li>


                </ul>

            </div>
            <!-- End Sidebar -->

            <div class="clearfix"></div>

            <div class="help-box">
                <h5 class="text-muted mt-0">For Help ?</h5>
                <span>Have Fun</span>
            </div>

        </div>
        <!-- Sidebar -left -->

    </div>
    <!-- Left Sidebar End -->

        @yield('content')

</div>
<!-- END wrapper -->




<!-- Vendor js -->
<script src="{{ asset('admin/assets/js/vendor.min.js') }}"></script>

<script src="{{ asset('admin/assets/libs/flot-charts/jquery.flot.js') }}"></script>
<script src="{{ asset('admin/assets/libs/flot-charts/jquery.flot.time.js') }}"></script>
<script src="{{ asset('admin/assets/libs/flot-charts/jquery.flot.tooltip.min.js') }}"></script>
<script src="{{ asset('admin/assets/libs/flot-charts/jquery.flot.resize.js') }}"></script>
<script src="{{ asset('admin/assets/libs/flot-charts/jquery.flot.pie.js') }}"></script>
<script src="{{ asset('admin/assets/libs/flot-charts/jquery.flot.crosshair.js') }}"></script>
<script src="{{ asset('admin/assets/libs/flot-charts/jquery.flot.selection.js') }}"></script>
<script src="{{ asset('admin/assets/libs/moment/moment.min.js') }}"></script>
<script src="{{ asset('admin/assets/libs/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
<script src="{{ asset('admin/assets/js/pages/dashboard_2.init.js') }}"></script>


<!-- Datatable plugin js -->
<script src="{{ asset('admin/assets/libs/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin/assets/libs/datatables/dataTables.bootstrap4.min.js') }}"></script>

<script src="{{ asset('admin/assets/libs/datatables/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('admin/assets/libs/datatables/responsive.bootstrap4.min.js') }}"></script>

<script src="{{ asset('admin/assets/libs/datatables/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('admin/assets/libs/datatables/buttons.bootstrap4.min.js') }}"></script>

<script src="{{ asset('admin/assets/libs/datatables/buttons.html5.min.js') }}"></script>
<script src="{{ asset('admin/assets/libs/datatables/buttons.print.min.js') }}"></script>

<script src="{{ asset('admin/assets/libs/datatables/dataTables.keyTable.min.js') }}"></script>
<script src="{{ asset('admin/assets/libs/datatables/dataTables.fixedHeader.min.js') }}"></script>
<script src="{{ asset('admin/assets/libs/datatables/dataTables.scroller.min.js') }}"></script>
<script src="{{ asset('admin/assets/libs/datatables/dataTables.fixedColumns.min.html') }}"></script>

<script src="{{ asset('admin/assets/libs/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('admin/assets/libs/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('admin/assets/libs/pdfmake/vfs_fonts.js') }}"></script>

<!-- Datatables init -->
<script src="{{ asset('admin/assets/js/pages/datatables.init.js') }}"></script>
<!-- App js -->
<script src="{{ asset('admin/assets/js/app.min.js') }}"></script>

</body>


<!-- Mirrored from coderthemes.com/zircos/layouts/vertical/dashboard_2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Dec 2020 19:04:19 GMT -->
</html>
