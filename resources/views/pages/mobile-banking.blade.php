@extends('pages.layouts.app')
@section('content')

    @include('pages.layouts.header')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 heading" style="padding: 0px; position: relative; height: 100%; background:#336699; ">
                <img src="{{ asset('front/images/Prepaid%20Card/prepaid-card.png') }}" style="width: 100%; height: 100%;">
                <div class="holdWriteUp">
                    <h3 class="text-center carryTop text_white">
                        Mobile Banking
                    </h3>
                    <p class="text-center carryBottom text_white">
                        When you're ready to take your member experience to a new level, HawaiiUSA's Mobile Banking enables you to manage your account, move money and more - all from your smartphone or tablet using our free app. See what you can do!
                    </p>
                    <a href="{{ route('register') }}" class="hidden-xs button button-5x covered_but text_white trdeCrypto">
                        Enroll Now
                    </a>
                    <a href="#theNext" class="hidden-xs scrollDown text_white floating infinite">
                        <i class="fa fa-angle-double-down fa-3x text_white"></i>
                    </a>
                    <!--<p class="text-center carryBottom text_white">
                        More than 40 currency pairs including EUR/USD, USD/JPY, GBP/USD, and EUR/GPB..
                    </p>-->
                </div>
            </div>
        </div>
    </div>


    <!-- Image Content -->

</div>
</div>
</div>
<!-- Image Content End -->

<!-- Service -->
<div class="container-fluid">
    <div class="service section-padding row" style="background:#f2f5fb;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
                    <div class="section-heading text-center">
                        <h3 class="title">Key<span style="color: #336699;"> Benefits</span></h3>

                    </div>
                </div>
            </div>

            <div class="row" >
                <div class="col-md-12">
                    <div class="row" >
                        <div class="col-md-6 col-sm-6">
                            <div  style="background: transparent;">
                                <div class="feature-box text-center">
                                    <h6 class="title" style="color: #336699;">Mobile Deposit</h6>
                                    <p class="subtext">You can deposit checks quickly and securely with just a few clicks on your mobile deposit. </p>
                                    <a href="{{ route('debit_card') }}" class="button button-2x primary-bg button-arrow button-radius">Read More &nbsp; &nbsp;<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="feature-box-4-grid1 "  style="background: transparent;">
                                <div class="feature-box text-center">
                                    <h6 class="title" style="color: #336699;">Download Our App</h6>
                                    <p class="subtext">Download our Mobile Banking app for your favorite smartphone or tablet and get started with our service.  </p>
                                    <a href="{{ route('mobile_banking') }}" class="button button-2x primary-bg button-arrow button-radius">Read More &nbsp; &nbsp;<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->



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
            <div class="down_button1 text-center" style="width: 100%; background-color: #98C838;" >
                <a style="width: 100%; height: 100%; line-height:70px;" class="text_white no_text_deco no_color_on_hover" href="login.php" onClick="callSignInModal()">
                    <i class="fa fa-user text_white"></i>&nbsp;Login
                </a>
            </div>
            <div class="upp_button text-center" style="background: #39A0ED; ">
                <a target="_blank" href="register.php" class="text_white text-center no_text_deco no_color_on_hover" style=" width: 100%; height: 100%; line-height:70px;">
                    <i class="fa fa-check-circle-o text_white"></i>&nbsp; Open Account</a>
            </div>
        </div>


        <div id="regModal" class="my_modal hideModal rubberBand wow " style="background: url( images/bg_reg.jpg); background-repeat: no-repeat; background-size: cover;">
            <span class="hanle-closer text-center" onClick="hideRegModal();"><a href="javascript:;"><i class="fa fa-times fa-2x text_white"></i></a></span>

            <div class="row theModalBody">
                <div class="col-md-2 col-md-offset-5 col-sm-4 col-sm-offset-4 col-xs-4 col-xs-offset-4 text-center control-mouse" >
                    <img src="images/slider/theMouse.png" class="img-responsive">
                </div>
                <h3 class="col-md-12 col-sm-12 col-xs-12 text_white text-uppercase text-center control-text" style="margin-top:20px !important; font-family: Segoe, Segoe UI, DejaVu Sans, Trebuchet MS, Verdana,' sans-serif' !important;" >
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
                    <a href="register.php" id="tradeControl" onClick="loadNext()" class="button button-4x covered_but round_but no_color_on_hover" >Enroll</a>
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
                    <a target="_blank" href="login.php" class="button button-4x covered_but round_but no_color_on_hover" >LOGIN</a>
                </div>

                <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 text-center text_white" style="margin-top: 10px;">
                    Not Yet Registered?<br><a href="register.php" onClick="callRegModal()" class="no_color_on_hover" style="text-decoration: underline;"  >Enroll Now!</a>
                </div>

            </div>


        </div>

        <div id="forGetPass" class="my_modal2 hideModal " style="background: url(images/slider/mobile_slider.png); background-repeat: no-repeat; background-size: cover;">
            <span class="hanle-closer text-center" onClick="hideForgetModal();"><a href="javascript:;"><i class="fa fa-times fa-2x text_white"></i></a></span>

            <div class="row">
                <div class="col-md-2 col-md-offset-5 col-sm-4 col-sm-offset-4 col-xs-2 col-xs-offset-5 text-center control-mouse1" >
                    <img src="images/slider/frgtPass.png" class="img-responsive">
                </div>
                <h3 class="col-md-12 col-sm-12 col-xs-12 text_white text-uppercase text-center control-text" style="margin-top:20px !important; font-family: quot, Comic Sans MS, quot, cursive !important;" >
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
                    <a href="#" class="button button-4x covered_but round_but no_color_on_hover" >Send Mail</a>
                </div>

                <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 text-center" style="margin-top: 10px;">
                    <a href="login.php" onClick="callSignInModal()" class="no_color_on_hover" >Login</a>
                </div>


            </div>


        </div>


    </div>
</div>


@endsection
