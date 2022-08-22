@extends('pages.layouts.app')
@section('content')


    @include('pages.layouts.header')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 heading" style="padding: 0px; position: relative; height: 100%; background:#336699; ">
                <img src="{{ asset('front/images/partnership/cpa-af-bg.jpg') }}" style="width: 100%; height: 100%;">
                <div class="holdWriteUp">
                    <h3 class="text-center carryTop text_white">
                        Wealth Management
                    </h3>
                    <p class="text-center carryBottom text_white">
                        Straightforward banking services, planning, investment solutions, <br>and financing options.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Image Content -->
    <div class="section-padding-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="left-content">
                        <img src="{{ asset('front/images/about/image-content-1.jpg') }}" class="img-responsive" alt="">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="right-content">
                        <div class="image-content image-content-3">
                            <div class="section-heading">
                                <h3 class="title my-title" style="color:#336699; margin-bottom: 20px; ">With great <span style="color:#E3AF15;">wealth </span> comes great <span style="color:#E3AF15;">responsibility </span></h3>
                                <p class="subtext">The development and protection of your assets is important for today, tomorrow and future generations. We work with you, whatever your requirements, to ensure you have access to the best and most appropriate financial talent in the world.</p><br>
                                <p>The cornerstone of our offering is a level of customer service way beyond the norm. We engage with you to truly understand, and then share, your vision. Our solutions will always be unique to you, with one common thread – quality.</p><br>
                                <p>We match our relationship managers to your needs and personality as we strongly believe that this is the key to achieving the ultimate service, with reliability and consistency priorities.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Image Content End -->
    <br>
    <!-- Service -->
    <div class="service section-padding lite-grey-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="section-heading text-center">
                        <h3 class="title">What we offer</h3>
                        <p class="subtext">A wide range of personalized products and services which will provide our clients with confidentiality, safety, and liquidity.</p>
                        <br>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="margin-balance">
                    <div class="col-md-3 col-sm-6">
                        <div class="feature-box-4-grid">
                            <div class="feature-box text-center">
                                <span class="fa fa-university"></span>
                                <h6 class="title">Banking</h6>
                                <p class="subtext">Straightforward banking, designed for you</p>
                                <br>
                                <p>
                                    Manage your finances effectively from almost anywhere in the world with our comprehensive range of services.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="feature-box-4-grid">
                            <div class="feature-box text-center">
                                <span class="fa fa-credit-card-alt"></span>
                                <h6 class="title">Investments</h6>
                                <p class="subtext">Products and services to help you reach your objectives</p>
                                <br>
                                <p>
                                    A diverse range of investment solutions – there to help you preserve and grow your wealth.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="feature-box-4-grid">
                            <div class="feature-box text-center">
                                <span class="fa fa-calendar"></span>
                                <h6 class="title">Planning, advice and services</h6>
                                <p class="subtext">The future of your wealth</p>
                                <br>
                                <p>
                                    Your aspirations, legacy and retirement plans – carefully understood and supported by your personal Wealth Planner.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="feature-box-4-grid">
                            <div class="feature-box text-center">
                                <span class="ti-support"></span>
                                <h6 class="title">Borrowing</h6>
                                <p class="subtext">Financing that fits your personal needs</p>
                                <br>
                                <p>
                                    Property finance, borrowing against your investments and lending solutions.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- CTA Simple -->
    <div class="cta cta-simple primary-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h5 class="title">Grow your wealth. We are here to support you</h5>
                </div>
                <div class="col-md-5">
                    <div class="cta-button text-right">
                        <a href="{{ route('contact') }}" class="button primary-bg button-3x">Get a Quote</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CTA Simple End -->
    <br>
    <!-- Service -->
    <div class="service section-padding lite-grey-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="section-heading text-center">
                        <h3 class="title">Who we help</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="margin-balance">
                    <div class="col-md-3 col-sm-6">
                        <div class="feature-box-4-grid">
                            <div class="feature-box text-center">
                                <h6 class="title">INDIVIDUALS AND FAMILIES</h6><br>
                                <p class="subtext">Your own Wealth Manager, who’ll work to understand your ambitions in detail, and offer the right support and products to help you achieve them. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="feature-box-4-grid">
                            <div class="feature-box text-center">
                                <h6 class="title">ENTREPRENEURS</h6><br>
                                <p>A network of expertise to help you realise your ambitions – with your own dedicated Wealth Manager there to provide access to vital tools and networks. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="feature-box-4-grid">
                            <div class="feature-box text-center">
                                <h6 class="title">PROFESSIONALS</h6><br>
                                <p class="subtext">Local, exclusive support for those who work in law and accountancy firms, management consultancy and those within the barrister community.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="feature-box-4-grid">
                            <div class="feature-box text-center">
                                <h6 class="title">CHARITIES</h6><br>
                                <p class="subtext">A dedicated charity specialist who can advise you on structuring your reserves to meet your financial goals.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">

            <div class="holdBottom hidden-md hidden-sm hidden-lg">
                <div class="down_button1 text-center">
                    <a href="contact-us.php" class="text_white text-center no_text_deco no_color_on_hover" style=" width: 100%; height: 100%;"><i class="fa fa-envelope text_white"></i>&nbsp; Contact Us</a>
                </div>
                <div class="up_button text-center"><a style="width: 100%; height: 100%;" class="text_white no_text_deco no_color_on_hover" href="login.php" onClick="callSignInModal()">LOG IN</a></div>
                <div class="down_button2 text-center"><a style="width: 100%; height: 100%;" class="no_color_on_hover text_white no_text_deco"  href="register.php">OPEN ACCOUNT</a></div>
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
                                <a href="facebook.php" class="holdSocial text-center">
                                    <i class="fa fa-facebook" style="color:white;"></i>
                                </a>
                            </li>&nbsp;
                            <li style="display: inline;" class="text-center">
                                <a href="google.php" class="holdSocial text-center">
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
                        <a  class="button button-4x covered_but round_but no_color_on_hover" >Send Mail</a>
                    </div>

                    <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 text-center" style="margin-top: 10px;">
                        <a href="login.php" onClick="callSignInModal()" class="no_color_on_hover" >Login</a>
                    </div>


                </div>


            </div>


        </div>
    </div>

@endsection
