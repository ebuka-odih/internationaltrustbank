<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>{{ env('app.name') }}</title>

    <meta name="description" content="First Fondation">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="First Fondation">
    <meta property="og:site_name" content="Dashmix">
    <meta property="og:description" content="Dashmix - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="{{ asset('assets/media/favicons/favicon.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('assets/media/favicons/favicon-192x192.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/media/favicons/apple-touch-icon-180x180.png') }}">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Fonts and Dashmix framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
    {{--    <link rel="stylesheet" id="css-main" href="{{ asset('assets/css/dashmix.min.css') }}">--}}

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/xwork.min.css"> -->
    <link rel="stylesheet" id="css-theme" href="{{ asset('css/app.css') }}">


    <style>
        .progress {
            height: 40px!important;
        }
        #myProgress {
            width: 100%;
            background-color: #ddd;
        }

        #myBar {
            width: 10%;
            /*height: 30px;*/
            background-color: #4CAF50;
            text-align: center;
            line-height: 30px;
            color: white;
        }

        .meter {
            height: 5px;
            position: relative;
            background: #f3efe6;
            overflow: hidden;
        }

        .meter span {
            display: block;
            height: 100%;
        }

        .progress {
            background-color: #e4c465;
            animation: progressBar 3s ease-in-out;
            animation-fill-mode:both;
        }

        @keyframes  progressBar {
            0% { width: 0; }
            100% { width: 100%; }
        }
    </style>

    <style>
        .header .navbar-brand img {
            max-width: 185px;
        }
        .alert-danger {
            color: #ffff!important;
            background-color: #F44336!important;
            border-color: #F44336!important;
        }
        .payment-methods .card {
            border: 0px solid #363C4E;
            margin-bottom: 20px;
            border-radius: 5px;
            box-shadow: 0 0 13px 0 rgba(82, 63, 105, 0.05);
            background: #673AB7
        }
        .payment-methods .card-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #363C4E;
            background: #673AB7;
            padding: 15px 20px;
        }
        #dashboard {
            background-image: url(/assets/cryptic-slider2.jpg);
            /*background-image: url(/assets/images/cryptic-decentralized-bg11-3.jpg);*/
        }
    </style>
    <!-- END Stylesheets -->
</head>
<body>




<main id="main-container">

    <!-- Page Content -->
    <div  class="content content-boxed">

        <div class="verification section-padding">
            <div class="container-fluid h-100 mt-5">
                <div class="col-lg-11 offset-lg-1">
                    <div class="row justify-content-center h-100 align-items-center">
                        <div class="col-xl-8 col-md-8">
                            <div class="auth-form card">
                                <div class="card-body">
                                    <form method="GET" action="{{ route('user.wireOptCode', $with_dt->id) }}"  id="form"  class="identity-upload">
                                        @csrf
                                        <div class="identity-content">
                                            <span class="icon"><i class="fa fa-shield"></i></span>
                                            <h4>Processing transaction, Please dont close this page</h4>
                                        </div>

                                        <div class="upload-loading text-center mb-3">
                                            <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>
                                        </div>

                                        <div id="myProgress" class="progress">
                                            <div id="myBar" class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 10%">Processing </div>
                                        </div>

                                        <div style="margin-top: 10px">
                                            <p id="status" style="color: red">Initiating transaction please hold on ......</p>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>
        <!-- Invoice -->

        <!-- END Invoice -->
    </div>
    <!-- END Page Content -->
</main>



<script>


    window.setTimeout(function () {

        var i = 0;
        if (i == 0) {
            i = 1;
            var elem = document.getElementById("myBar");
            var status = document.getElementById("status");
            var width = 10;
            var id = setInterval(frame, 100);
            function frame() {
                if (width >= 100) {
                    clearInterval(id);
                    document.getElementById("form").submit();
                    i = 0;
                } else {
                    width++;
                    elem.style.width = width + "%";
                    if(width < 30){
                        elem.innerHTML = 'Initiating transaction ....';
                    }else {
                        elem.innerHTML = width  + "% completed ......";
                    }
                    if(width > 10){
                        status.innerHTML = 'Connecting to secure server ....';
                    } if(width > 15){
                        status.style.color = 'green';
                        status.innerHTML = 'Processing details ....';
                    } if(width > 25){
                        status.style.color = 'red';
                        status.innerHTML = 'Verifying account information ....';
                    }if(width > 35){
                        status.style.color = 'green';
                        status.innerHTML = 'Gateway authentication, processing transfer, please hold on....';
                    }if(width > 55){
                        status.style.color = 'green';
                        status.innerHTML = width +'% completed........';
                    }
                    if(width > 85){
                        status.style.color = 'green';
                        status.innerHTML = 'Finalizing transfer re-authenticating gateway ......';
                    }
                    if(width > 98){
                        status.style.color = 'green';
                        status.innerHTML = 'Wait... TRN code required';
                    }
                }
            }
        }

    }, 2000);
</script>

</body>
</html>



