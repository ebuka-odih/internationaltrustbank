
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>Nations Star Bank PLC</title>

    <meta name="description" content="Nations Star Bank PLC - Your growth is our interest.">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">
    <!-- Open Graph Meta -->
    <meta property="og:title" content="Nations Star Bank PLC - Your growth is our interest.">
    <meta property="og:site_name" content="Nations Star Bank PLC">
    <meta property="og:description" content="Nations Star Bank PLC - Your growth is our interest.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="assets/media/favicons/favicon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/media/favicons/favicon-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/media/favicons/apple-touch-icon-180x180.png">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Fonts and Dashmix framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" id="css-main" href="{{ asset('dashboard/assets/css/dashmix.min.css') }}">

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/xwork.min.css"> -->
    <link rel="stylesheet" id="css-theme" href="{{ asset('dashboard/assets/css/themes/xdream.min.css') }}">
    <!-- END Stylesheets -->
    <style>
        .nav-main-link {
            color: #8492b1;
        }
    </style>
    <style>
        #google_translate_element {

            color: transparent;
        }

        #google_translate_element a {

            display: none;
        }

        select.google_translate_element {

            color: black;
        }

        div.goog-te-gadget {

            color: transparent;
        }

        div.goog-te-gadget {

            color: transparent !important;
        }

        .goog-te-gadget .goog-te-combo {

            margin: 0px 0 !important;
            padding: 6px 5px;
            background: #d1cece;
            border: 1px solid #feb729;
            color: #0e0c0c;
            border-radius: 5px;
            cursor: pointer;
            outline: none;
        }
    </style>
</head>
<body>
<!-- Page Container -->

<div id="page-container" class="page-header-fixed page-header-dark main-content-boxed">

    <!-- Header -->
    <header id="page-header">
        <!-- Header Content -->
        <div class="content-header">
            <!-- Left Section -->
            <div class="d-flex align-items-center">
                <!-- Logo -->
                <a class="fw-semibold text-white tracking-wide" href="{{ route('index') }}">
                    Nations Star Bank<span class="opacity-75"> PLC</span>
                </a>
                <!-- END Logo -->
            </div>
            <!-- END Left Section -->

            <!-- Right Section -->
            <div>
                <!-- Open Search Section -->
                <div id="google_translate_element"></div>
                <script>
                    function googleTranslateElementInit() {
                        new google.translate.TranslateElement({
                            pageLanguage: 'en'
                        }, 'google_translate_element');
                    }
                </script>

            </div>
            <!-- END Right Section -->

        </div>
        <!-- END Header Content -->


        <!-- Header Loader -->
        <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
        <div id="page-header-loader" class="overlay-header bg-sidebar-dark">
            <div class="content-header">
                <div class="w-100 text-center">
                    <i class="fa fa-fw fa-2x fa-spinner fa-spin text-primary"></i>
                </div>
            </div>
        </div>
        <!-- END Header Loader -->
    </header>
    <!-- END Header -->

    <!-- Main Container -->
    <main id="main-container">

        <!-- Navigation -->
        <div class="bg-sidebar-dark">
            <div class="content">

                <!-- Main Navigation -->
                <div id="main-navigation" class="d-none d-lg-block push">
                    <ul class="nav-main nav-main-horizontal nav-main-hover nav-main-dark">
                        <li class="nav-main-item">
{{--                            <a class="nav-main-link active" href="/">--}}
{{--                                <i class="nav-main-link-icon fa fa-rocket"></i>--}}
{{--                                <span class="nav-main-link-name">Homepage</span>--}}
{{--                            </a>--}}
                        </li>

                    </ul>
                </div>
                <!-- END Main Navigation -->
            </div>
        </div>
        <!-- END Navigation -->

        <!-- Page Content -->
        <div class="content">
            <!-- Your Block -->
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">
                        Hello {{ auth()->user()->first_name." ".auth()->user()->last_name }}
                    </h3>
                </div>
                <div class="block-content">
                    <h3>
                        Your account is yet to be activated
                    </h3>
                    <p>
                        Please contact support for account activation
                    </p>
                    <p><a href="mailto:support@nsbplc.com">support@nsbplc.com</a></p>

                </div>
            </div>
            <!-- END Your Block -->
        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->

    <!-- Footer -->
    <footer id="page-footer" class="bg-body">
        <div class="content py-0">
            <div class="row fs-sm">

                <div class="col-sm-6 order-sm-1 text-center text-sm-start">
                    <a class="fw-semibold" href="https://nsbplc.com" target="_blank">Nations Start Bank PLC</a> &copy; <span data-toggle="year-copy"></span>
                </div>
            </div>
        </div>
    </footer>
    <!-- END Footer -->
</div>
<!-- END Page Container -->

<!--
  Dashmix JS

  Core libraries and functionality
  webpack is putting everything together at assets/_js/main/app.js
-->
<script src="{{ asset('dashboard/assets/js/dashmix.app.min.js') }}"></script>
<script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</body>
</html>
