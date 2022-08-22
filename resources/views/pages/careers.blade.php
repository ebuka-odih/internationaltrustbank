@extends('pages.layouts.app')
@section('content')


    @include('pages.layouts.header')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 heading" style="padding: 0px; position: relative; height: 100%; background:#336699; ">
                <img src="{{ asset('front/images/partnership/cpa-af-bg.jpg') }}" style="width: 100%; height: 100%;" data-pagespeed-url-hash="4011159537" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                <div class="holdWriteUp">
                    <h3 class="text-center carryTop text_white">
                        Careers
                    </h3>
                    <p class="text-center carryBottom text_white">
                        Internacional Trust Bank is the international financial organization - and one of Europe’s leading banks
                    </p>

                </div>
            </div>
        </div>
    </div>

    <!-- Image Content -->
    <div class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="left-content">
                        <div class="image-content image-content-3">
                            <div class="section-heading">
                                <h3 class="title my-title" style="color:#336699; margin-bottom: 20px; ">Opportunities with <span style="color:#E3AF15;"><br>Europe's leading bank </span></h3>
                                <p class="subtext">Everyone who works at Capecity Bank works in partnership with their colleagues, lending support and encouragement
                                    whenever and wherever it may be required.
                                </p>
                                <br>
                                <p>
                                    We know our success depends on our ability to deliver excellence in everything we do. To ensure that happens, we adopt a flexible approach, use our initiative and work as “One Team”.
                                </p>
                                <br>
                                <p>
                                    Individuals possessing these qualities are not only valued but are positively encouraged to back their ideas and challenge the status quo.
                                </p>
                                <br>
                                <p>
                                    If you think we could make a good fit, then please e-mail your CV to <a href="contactus@agnatebank.com">contactus@agnatebank.com</a>
                                </p>
                                <br>
                                <p>
                                    We look forward to hearing from you.
                                </p>
                                <br>
                                <p>
                                    <b>Emily Blake Toovey</b>
                                    <br>
                                    <b>Chief Executive Officer/Managing Director</b>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="right-content">
                        <img src="{{ asset('front/images/about/image-content-1_1.jpg') }}" class="img-responsive" alt="" data-pagespeed-url-hash="3640630981" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Image Content End -->





    <div class="container-fluid">
        <div class="row">

            <div class="holdBottom hidden-md hidden-sm hidden-lg">
                <div class="down_button1 text-center">
                    <a href="contact-us.php" class="text_white text-center no_text_deco no_color_on_hover" style=" width: 100%; height: 100%;"><i class="fa fa-envelope text_white"></i>&nbsp; Contact Us</a>
                </div>
                <div class="up_button text-center"><a style="width: 100%; height: 100%;" class="text_white no_text_deco no_color_on_hover" href="login.php" onClick="callSignInModal()">LOG IN</a></div>
                <div class="down_button2 text-center"><a style="width: 100%; height: 100%;" class="no_color_on_hover text_white no_text_deco" target="_blank" href="register.php">OPEN ACCOUNT</a></div>
            </div>


            <div class="control-side hidden hidden-xs">
                <div class="down_button1 text-center" style="width: 100%; background-color: #98C838;">
                    <a style="width: 100%; height: 100%; line-height:70px;" class="text_white no_text_deco no_color_on_hover" href="login.php" onClick="callSignInModal()">
                        <i class="fa fa-user text_white"></i>&nbsp;Login
                    </a>
                </div>
                <div class="upp_button text-center" style="background: #39A0ED; ">
                    <a target="_blank" href="register.php" class="text_white text-center no_text_deco no_color_on_hover" style=" width: 100%; height: 100%; line-height:70px;">
                        <i class="fa fa-check-circle-o text_white"></i>&nbsp; Open Account</a>
                </div>
            </div>


            <div id="regModal" class="my_modal hideModal rubberBand wow " style="background:url(images/xbg_reg.jpg.pagespeed.ic.ufPUIaGYX7.webp);background-repeat:no-repeat;background-size:cover">
                <span class="hanle-closer text-center" onClick="hideRegModal();"><a href="javascript:;"><i class="fa fa-times fa-2x text_white"></i></a></span>

                <div class="row theModalBody">
                    <div class="col-md-2 col-md-offset-5 col-sm-4 col-sm-offset-4 col-xs-4 col-xs-offset-4 text-center control-mouse">
                        <img src="data:image/webp;base64,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" class="img-responsive" data-pagespeed-url-hash="157342038" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                    </div>
                    <h3 class="col-md-12 col-sm-12 col-xs-12 text_white text-uppercase text-center control-text" style="margin-top:20px !important; font-family: Segoe, Segoe UI, DejaVu Sans, Trebuchet MS, Verdana, sans-serif !important;">
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
                        <a href="register.php" id="tradeControl" onClick="loadNext()" class="button button-4x covered_but round_but no_color_on_hover">Enroll</a>
                    </div>

                    <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 text-center" style="margin-top: 10px;">
                        <small class="text_white text-center"><i class="fa fa-exclamation-circle"></i>&nbsp;&nbsp;Trading Carries Sizeable Risks</small>
                    </div>

                    <div class="col-md-5 col-sm-5 col-xs-12 text-center" style="margin-top: 10px;">
                        <small class="text_white text-center">or sign in with &nbsp;&nbsp;</small>
                        <ul style="display: inline-block;" style="margin-top: 10px;">
                            <li style="display: inline;" class="text-center">
                                <a href="#" class="holdSocial text-center">
                                    <i class="fa fa-facebook" style="color:white;"></i>
                                </a>
                            </li>&nbsp;
                            <li style="display: inline;" class="text-center">
                                <a href="#" class="holdSocial text-center">
                                    <i class="fa fa-google-plus" style="color: white;"></i>
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>


            </div>




            <div id="signInModal" class="my_modal2 hideModal " style="background:url(images/slider/xmobile_slider.png.pagespeed.ic.3nqiv0B8PA.webp);background-repeat:no-repeat;background-size:cover">
                <span class="hanle-closer text-center" onClick="hideSignInModal();"><a href="javascript:;"><i class="fa fa-times fa-2x text_white"></i></a></span>

                <div class="row">
                    <div class="col-md-2 col-md-offset-5 col-sm-4 col-sm-offset-4 col-xs-2 col-xs-offset-5 text-center control-mouse1">
                        <img src="images/slider/xlock-open.png.pagespeed.ic.AoSbGasDJO.webp" class="img-responsive" data-pagespeed-url-hash="504164648" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                    </div>
                    <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1" style="margin-top: 20px;">
                        <div class="modal-body">
                            <div class="section-heading text-center text_white">
                                <h5 class="title"><b>SECURITY TIPS</b></h5>
                                <div class="modal-thumb">
                                    <img src="images/modal/internet-banking.gif.pagespeed.ce.zSYV8PG9gk.gif" class="img-responsive" alt="" data-pagespeed-url-hash="1711300709" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                </div>
                                <p class="subtext">Your Account <b>User ID</b> and <b>Password</b> are confidential. Do not disclose to anyone. <br>If you suspect fraud, call us using the number on the back of your bank card.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 text-center" style="margin-top: 10px;">
                        <a target="_blank" href="login.php" class="button button-4x covered_but round_but no_color_on_hover">LOGIN</a>
                    </div>

                    <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 text-center text_white" style="margin-top: 10px;">
                        Not Yet Registered?<br><a href="login.php" onClick="callRegModal()" class="no_color_on_hover" style="text-decoration: underline;">Enroll Now!</a>
                    </div>

                </div>


            </div>

            <div id="forGetPass" class="my_modal2 hideModal " style="background:url(images/slider/xmobile_slider.png.pagespeed.ic.3nqiv0B8PA.webp);background-repeat:no-repeat;background-size:cover">
                <span class="hanle-closer text-center" onClick="hideForgetModal();"><a href="javascript:;"><i class="fa fa-times fa-2x text_white"></i></a></span>

                <div class="row">
                    <div class="col-md-2 col-md-offset-5 col-sm-4 col-sm-offset-4 col-xs-2 col-xs-offset-5 text-center control-mouse1">
                        <img src="data:image/webp;base64,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" class="img-responsive" data-pagespeed-url-hash="981396904" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                    </div>
                    <h3 class="col-md-12 col-sm-12 col-xs-12 text_white text-uppercase text-center control-text" style="margin-top:20px !important; font-family: quot, Comic Sans MS, quot, cursive !important;">
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
                        <a href="#" class="button button-4x covered_but round_but no_color_on_hover">Send Mail</a>
                    </div>

                    <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 text-center" style="margin-top: 10px;">
                        <a href="login.php" onClick="callSignInModal()" class="no_color_on_hover">Login</a>
                    </div>


                </div>


            </div>


        </div>
    </div>

@endsection
