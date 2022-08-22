<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/bracketplus">
    <meta property="og:title" content="Bracket Plus">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>NationsStar Bank PLC</title>

    <!-- vendor css -->
    <link href="{{ asset('../lib/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('../lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('../lib/rickshaw/rickshaw.min.css') }}" rel="stylesheet">
    <link href="{{ asset('../lib/select2/css/select2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('../lib/datatables.net-dt/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('../lib/datatables.net-responsive-dt/css/responsive.dataTables.min.css') }}" rel="stylesheet">


    <!-- Bracket CSS -->
    <link rel="stylesheet" href="{{ asset('../css/bracket.css') }}">
</head>

<body>

<!-- ########## START: LEFT PANEL ########## -->
<div class="br-logo"><a href=""><span>[</span>NSB <i>PLC</i><span>]</span></a></div>
<div class="br-sideleft sideleft-scrollbar">
    <label class="sidebar-label pd-x-10 mg-t-20 op-3">Navigation</label>
    <ul class="br-sideleft-menu">
        <li class="br-menu-item">
            <a href="{{ route('user.dashboard') }}" class="br-menu-link active">
                <i class="menu-item-icon icon ion-ios-home-outline tx-24"></i>
                <span class="menu-item-label">Dashboard</span>
            </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->
        <li class="br-menu-item">
            <a href="{{ route('user.deposit') }}" class="br-menu-link">
                <i class="menu-item-icon icon ion-arrow-down-c tx-24"></i>
                <span class="menu-item-label">Deposit</span>
            </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->
        <li class="br-menu-item">
            <a href="{{ route('user.withdraw') }}" class="br-menu-link">
                <i class="menu-item-icon icon ion-arrow-up-b tx-24"></i>
                <span class="menu-item-label">Withdraw</span>
            </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->

        <li class="br-menu-item">
            <a href="#" class="br-menu-link with-sub">
                <i class="menu-item-icon icon ion-ios-list tx-20"></i>
                <span class="menu-item-label">Transactions</span>
            </a><!-- br-menu-link -->
            <ul class="br-menu-sub">
                <li class="sub-item"><a href="{{ route('user.depositHistory') }}" class="sub-link">Deposits</a></li>
                <li class="sub-item"><a href="{{ route('user.withdrawHistory') }}" class="sub-link">Withdrawal</a></li>
                <li class="sub-item"><a href="{{ route('user.cardHistory') }}" class="sub-link">Cards</a></li>
            </ul>
        </li>

        <li class="br-menu-item">
            <a href="{{ route('user.card') }}" class="br-menu-link">
                <i class="menu-item-icon icon ion-card tx-22"></i>
                <span class="menu-item-label">Card</span>
            </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->

        <li class="br-menu-item">
            <a href="{{ route('user.profile') }}" class="br-menu-link">
                <i class="menu-item-icon icon ion-person tx-22"></i>
                <span class="menu-item-label">Profile</span>
            </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->
        <li class="br-menu-item">
            <a href="{{ route('user.password') }}" class="br-menu-link">
                <i class="menu-item-icon icon ion-ios-gear tx-22"></i>
                <span class="menu-item-label">Security</span>
            </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->

    </ul><!-- br-sideleft-menu -->

    <br>
</div><!-- br-sideleft -->
<!-- ########## END: LEFT PANEL ########## -->

<!-- ########## START: HEAD PANEL ########## -->
<div class="br-header">
    <div class="br-header-left">
        <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
        <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>

    </div><!-- br-header-left -->
    <div class="br-header-right">
        <nav class="nav">

            <div class="dropdown">
                <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
                    <span class="logged-name hidden-md-down">{{ auth()->user()->first_name }}</span>
                    <img src="https://via.placeholder.com/500" class="wd-32 rounded-circle" alt="">
                    <span class="square-10 bg-success"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-header wd-250">
                    <div class="tx-center">
                        <a href=""><img src="https://via.placeholder.com/500" class="wd-80 rounded-circle" alt=""></a>
                        <h6 class="logged-fullname">{{ auth()->user()->first_name." ".auth()->user()->last_name }}</h6>
                        <p>{{ auth()->user()->email }}</p>
                    </div>
                    <hr>
                    <div class="tx-center">
                        <span class="profile-earning-label">Avaliable Balance</span>
                        <h3 class="profile-earning-amount">$@convert(auth()->user()->account->balance)<i class="icon ion-ios-arrow-thin-up tx-success"></i></h3>
                    </div>
                    <hr>
                    <ul class="list-unstyled user-profile-nav">
                        <li><a href=""><i class="icon ion-ios-person"></i> Edit Profile</a></li>
                        <li><a href=""><i class="icon ion-ios-gear"></i> Settings</a></li>
                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">

                                <i class="icon ion-power"></i> {{ __('Sign Out') }}
                            </a>


                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div><!-- dropdown-menu -->
            </div><!-- dropdown -->
        </nav>

    </div><!-- br-header-right -->
</div><!-- br-header -->
<!-- ########## END: HEAD PANEL ########## -->

<!-- ########## START: RIGHT PANEL ########## -->
<div class="br-sideright">
    <ul class="nav nav-tabs sidebar-tabs" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" role="tab" href="#contacts"><i class="icon ion-ios-contact-outline tx-24"></i></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" role="tab" href="#attachments"><i class="icon ion-ios-folder-outline tx-22"></i></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" role="tab" href="#calendar"><i class="icon ion-ios-calendar-outline tx-24"></i></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" role="tab" href="#settings"><i class="icon ion-ios-gear-outline tx-24"></i></a>
        </li>
    </ul><!-- sidebar-tabs -->

    <!-- Tab panes -->

</div><!-- br-sideright -->
<!-- ########## END: RIGHT PANEL ########## --->

<!-- ########## START: MAIN PANEL ########## -->
@yield('content')
<!-- br-mainpanel -->
<!-- ########## END: MAIN PANEL ########## -->

<script src="{{ asset('../lib/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('../lib/jquery-ui/ui/widgets/datepicker.js') }}"></script>
<script src="{{ asset('../lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('../lib/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('../lib/moment/min/moment.min.js') }}"></script>
<script src="{{ asset('../lib/peity/jquery.peity.min.js') }}"></script>
<script src="{{ asset('../lib/rickshaw/vendor/d3.min.js') }}"></script>
<script src="{{ asset('../lib/rickshaw/vendor/d3.layout.min.js') }}"></script>
<script src="{{ asset('../lib/rickshaw/rickshaw.min.js') }}"></script>
<script src="{{ asset('../lib/jquery.flot/jquery.flot.js') }}"></script>
<script src="{{ asset('../lib/jquery.flot/jquery.flot.resize.js') }}"></script>
<script src="{{ asset('../lib/flot-spline/js/jquery.flot.spline.min.js') }}"></script>
<script src="{{ asset('../lib/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
<script src="{{ asset('../lib/echarts/echarts.min.js') }}"></script>
<script src="{{ asset('../lib/select2/js/select2.full.min.js') }}"></script>
{{--<script src="http://maps.google.com/maps/api/js?key=AIzaSyAq8o5-8Y5pudbJMJtDFzb8aHiWJufa5fg"></script>--}}

<script src="{{ asset('../js/bracket.js') }}"></script>
<script src="{{ asset('../js/map.shiftworker.js') }}"></script>
<script src="{{ asset('../js/ResizeSensor.js') }}"></script>
<script src="{{ asset('../js/dashboard.js') }}"></script>

<script src="{{ asset('../lib/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('../lib/datatables.net-dt/js/dataTables.dataTables.min.js') }}"></script>
<script src="{{ asset('../lib/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('../lib/datatables.net-responsive-dt/js/responsive.dataTables.min.js') }}"></script>
<script>
    $(function(){
        'use strict'

        // FOR DEMO ONLY
        // menu collapsed by default during first page load or refresh with screen
        // having a size between 992px and 1299px. This is intended on this page only
        // for better viewing of widgets demo.
        $(window).resize(function(){
            minimizeMenu();
        });

        minimizeMenu();

        function minimizeMenu() {
            if(window.matchMedia('(min-width: 992px)').matches && window.matchMedia('(max-width: 1299px)').matches) {
                // show only the icons and hide left menu label by default
                $('.menu-item-label,.menu-item-arrow').addClass('op-lg-0-force d-lg-none');
                $('body').addClass('collapsed-menu');
                $('.show-sub + .br-menu-sub').slideUp();
            } else if(window.matchMedia('(min-width: 1300px)').matches && !$('body').hasClass('collapsed-menu')) {
                $('.menu-item-label,.menu-item-arrow').removeClass('op-lg-0-force d-lg-none');
                $('body').removeClass('collapsed-menu');
                $('.show-sub + .br-menu-sub').slideDown();
            }
        }
    });
</script>

<script>
    $(function(){
        'use strict';

        $('#datatable1').DataTable({
            responsive: true,
            language: {
                searchPlaceholder: 'Search...',
                sSearch: '',
                lengthMenu: '_MENU_ items/page',
            }
        });

        $('#datatable2').DataTable({
            bLengthChange: false,
            searching: false,
            responsive: true
        });

        // Select2
        $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });

    });
</script>
</body>
</html>
