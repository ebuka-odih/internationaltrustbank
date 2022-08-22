
@extends('pages.layouts.app')
@section('content')


@include('pages.layouts.header')
<div class="banner row" style="position: relative; padding-right:0px;" >

            <!-- Banner -->
            <div class="banner">
                <div id="owl-full-width" class="owl-carousel banner-carousel">
                    <div class="slider-bg slider-bg-1">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="banner-wrapper">
                                        <div class="banner-content">
                                            <h2 class="title">More Than Just A Bank</h2>
                                            <p class="subtext">We strive to be more than a private bank, because we care about more than just numbers. We are your reliable partner for various aspects of your life. </p>
                                            <div class="carousel-button">
                                                <a href="{{ route('register') }}" class="button button-4x covered_but text_white" onClick="callRegModal()" >Get Started</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-bg slider-bg-2">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="banner-wrapper">
                                        <div class="banner-content">
                                            <h2 class="title">A card to suit every lifestyle</h2>
                                            <p class="subtext">Tailored to your lifestyle, designed for your
                                                personal and business needs. </p>
                                            <div class="carousel-button">
                                                <a href="{{ route('register') }}" class="button button-4x covered_but text_white" onClick="callRegModal()" >Get Started</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-bg slider-bg-3">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="banner-wrapper">
                                        <div class="banner-content">
                                            <h2 class="title">We Speak Your Language</h2>
                                            <p class="subtext">we offer products and services for your personal and professional banking needs.</p>
                                            <div class="carousel-button">
                                                <a href="{{ route('register') }}" class="button button-4x covered_but text_white" onClick="callRegModal()" >Get Started</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


<div class="container hidden-sm hidden-md hidden-lg" style="background: url(front/images/slider/mobile_slider.png); background-repeat: no-repeat; background-size: cover; ">
    <div class="row">
        <div class="col-xs-12" style="background:#151D28; padding-top: 70px; ">
        </div>
        <div class="col-xs-12 text-center" style="background:#151D28; padding-top:20px; ">
            <small class="text_white text-center">Welcome to Internacional Trust Bank Bank </small>
        </div>
        <div class="col-xs-12" style="background:#151D28; padding-bottom:10px;">
            <h5 class="text_white text-center">What will you like to do? </h5>
        </div>
        <div class="col-xs-6" style="background:#151D28; padding-left: 0px; padding-right: 0px; height:140px; border: solid 1px white; ">
            <div class="text_white text-center" style="padding: 30px;">
                <a href="javascript:;" style="width: 100%; height: 100%;" class="no_color_on_hover"  onClick="callSignInModal()">
                    Internet Banking
                    <br><i class="fa fa-user fa-2x"></i>
                </a>
            </div>
        </div>
        <div class="col-xs-6" style="background:#151D28; padding-left: 0px; padding-right: 0px;  height:140px; border: solid 1px white;">
            <div class="text_white text-center" style="padding: 30px;">
                <a class="no_color_on_hover" target="_blank" href="{{ route('register') }}" style="width: 100%; height: 100%;" class="no_color_on_hover">
                    Open Account
                    <br><i class="fa fa-key fa-2x"></i>
                </a>
            </div>
        </div>
        <div class="col-xs-6" style="background:#151D28;  height:140px; padding-left: 0px; padding-right: 0px; border: solid 1px white;">
            <a class="no_text_deco" >
                <div class="text_white text-center" style="padding: 30px;">
                    Download App
                    <br><i class="fa fa-download fa-2x"></i>
                </div>
            </a>
        </div>
        <div class="col-xs-6" style="background:#151D28;  height:140px; padding-left: 0px; padding-right: 0px; border: solid 1px white;">
            <a class="no_text_deco" href="{{ route('about') }}">
                <div class="text_white text-center" style="padding: 30px;">
                    Locate A Branch
                    <br><i class="fa fa-globe fa-2x"></i>
                </div>
            </a>
        </div>
    </div>
</div>

<!-- CTA Simple -->
<div class="cta cta-simple primary-bg hidden-xs">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h5 class="title">Download Our Mobile app &amp; Get Fast Banking Service</h5>
            </div>
            <div class="col-md-5">
                <div class="cta-button text-right">
                    <a  class="button primary-bg button-3x"><i class="fa fa-apple" aria-hidden="true"></i> App Store</a>
                    <a  class="button primary-bg button-3x"><i class="fa fa-android" aria-hidden="true"></i> Play Store</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- CTA Simple End -->

<!-- Info Box -->
<div class="container-fluid">
    <div id="theNext" class="info-box section-padding-me row" style="background: url(front/images/security/security__info-bg.png); background-repeat: no-repeat; background-size: 100% 100%; padding-top:0px; padding-bottom:50px;">
        <div class="container" >
            <div class="row">
                <div class="col-md-12">

                    <div class="row">
                        <div class="col-md-6 col-md-offset-3" style="margin-top:20px;">
                            <div class="section-heading text-center">
                                <h4 class="title" style="color:#151D28; ">Innovative <span style="color:#E3AF15;">Banking Products</span></h4>
                                <p class="subtext text_black">Tailored to your lifestyle, designed for your <br>personal and business needs.  </p>
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-md-6" style="margin-top: 20px;">
                            <div class="white-board">
                                <div class="row">

                                    <div class="col-md-3 col-md-offset-0 col-sm-3 col-sm-offset-3 col-xs-4 col-xs-offset-4  zero-padding-right m-topm">
                                        <img src="{{ asset('front/images/security/regulated_broker.png') }}" class="img-responsive">
                                    </div>
                                    <div class="col-md-9 col-sm-9 col-xs-12 zero-padding-left m-topn" >
                                        <div class="row">
                                            <h5 class="col-md-12 zero-padding-left" style="color:#151D28; ">
                                                Individual
                                            </h5>
                                            <p class="col-md-12 zero-padding-left" style="font-size: 12px; line-height: 18px;">
                                                We have convenient products and services designed to evolve with your changing needs.
                                            </p>

                                            <div class="col-md-10 col-md-offset-1 col-sm-offset-0 text-center">
                                                <!--<a href="#" class="button button-radius primary-bg button-1x text_white " style="border-radius:20px; margin-top: 30px;">
                                                    LEARN MORE
                                                </a>-->
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-6" style="margin-top: 20px;">
                            <div class="white-board">
                                <div class="row">

                                    <div class="col-md-3 col-md-offset-0 col-sm-3 col-sm-offset-3 col-xs-4 col-xs-offset-4  zero-padding-right m-topm">
                                        <img src="{{ asset('front/images/security/saccf.png') }}" class="img-responsive">
                                    </div>
                                    <div class="col-md-9 col-sm-9 col-xs-12 zero-padding-left m-topn" >
                                        <div class="row">
                                            <h5 class="col-md-12 zero-padding-left" style="color:#151D28; ">
                                                Enterprise
                                            </h5>
                                            <p class="col-md-12 zero-padding-left" style="font-size: 12px; line-height: 18px;">
                                                Our comprehensive business services are available to help you run your enterprise smoothly.
                                            </p>
                                            <div class="col-md-10 col-md-offset-1 col-sm-offset-0 text-center">
                                                <!--<a href="#" class="button button-radius primary-bg button-1x text_white " style="border-radius:20px; margin-top: 30px;">
                                                    LEARN MORE
                                                </a>-->
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>


                    </div>

                    <div class="row">

                        <div class="col-md-6" style="margin-top: 20px;">
                            <div class="white-board">
                                <div class="row">

                                    <div class="col-md-3 col-md-offset-0 col-sm-3 col-sm-offset-3 col-xs-4 col-xs-offset-4  zero-padding-right m-topm">
                                        <img src="{{ asset('front/images/security/nbp.png') }}" class="img-responsive">
                                    </div>
                                    <div class="col-md-9 col-sm-9 col-xs-12 zero-padding-left m-topn" >
                                        <div class="row">
                                            <h5 class="col-md-12 zero-padding-left" style="color:#151D28; ">
                                                Corporates
                                            </h5>
                                            <p class="col-md-12 zero-padding-left" style="font-size: 12px; line-height: 18px;">
                                                No matter how large or small your business may be, we can provide the financial solutions for every banking need to help connect you to a world of opportunities.
                                            </p>
                                            <div class="col-md-10 col-md-offset-1 col-sm-offset-0 text-center">
                                                <!--<a href="#" class="button button-radius primary-bg button-1x text_white " style="border-radius:20px; margin-top: 30px;">
                                                    LEARN MORE
                                                </a>-->
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-6" style="margin-top: 20px;">
                            <div class="white-board">
                                <div class="row">

                                    <div class="col-md-3 col-md-offset-0 col-sm-3 col-sm-offset-3 col-xs-4 col-xs-offset-4 zero-padding-right m-topm">
                                        <img src="{{ asset('front/images/security/mfc.png') }}" class="img-responsive">
                                    </div>
                                    <div class="col-md-9 col-sm-9 col-xs-12 zero-padding-left" style="padding-bottom:20px;">
                                        <div class="row">
                                            <h5 class="col-md-12  zero-padding-left m-topn" style="color:#151D28; ">
                                                Treasury Management
                                            </h5>
                                            <p class="col-md-12 zero-padding-left" style="font-size: 12px; line-height: 18px;">
                                                Effective cash management strategies, foreign exchange expertise and imaginative currency hedging solutions reduce your costs on treasury management.
                                            </p>
                                            <div class="col-md-10 col-md-offset-1 col-sm-offset-0 text-center">
                                                <!--<a href="#" class="button button-radius primary-bg button-1x text_white " style="border-radius:20px; margin-top: 30px;">
                                                    LEARN MORE
                                                </a>-->
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>


                    </div>


                    <div class="row">

                        <div class="col-md-6" style="margin-top: 20px;">
                            <div class="white-board">
                                <div class="row">

                                    <div class="col-md-3 col-md-offset-0 col-sm-3 col-sm-offset-3 col-xs-4 col-xs-offset-4 zero-padding-right m-topm">
                                        <img src="{{ asset('front/images/security/ffc.png') }}" class="img-responsive">
                                    </div>
                                    <div class="col-md-9 col-sm-9 col-xs-12 zero-padding-left" style="padding-bottom:20px;">
                                        <div class="row">
                                            <h5 class="col-md-12 zero-padding-left m-topn" style="color:#151D28; ">
                                                Wealth Management
                                            </h5>
                                            <p class="col-md-12 zero-padding-left" style="font-size: 12px; line-height: 18px;">
                                                Our wealth management service includes guidance on property acquisition, wealth protection strategies, and personalised private banking facilities.
                                            </p>
                                            <div class="col-md-10 col-md-offset-1 col-sm-offset-0 text-center">
                                                <!--<a href="#" class="button button-radius primary-bg button-1x text_white " style="border-radius:20px; margin-top: 30px;">
                                                    LEARN MORE
                                                </a>-->
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Info Box End -->


<!-- About -->
<div class="container-fluid">
    <div class="about section-padding row" style="background:url(images/slider/invest.jpg); background-repeat: no-repeat; background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="section-heading text-center">
                        <h3 class="title text_white">Explore Financial Markets in <br><span style="color:#E3AF15;">Real-Time</span></h3>
                        <p class="subtext text_white">We offer a wide range of accounts to suit lifestyles & needs. Free and paid-for add-ons are available to give total control. Download, Fill & Submit at our Branch.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="full-grid-thumb">
                        <!--<img src="images/about/full-grid-thumb.php" class="img-responsive" alt="">-->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3 " style="box-shadow: 0px 0px 20px; border-radius: 5px; padding: 10px; background: white; margin-top: 10px;">
                    <h6 class="col-md-12 text-left" style="font-weight: bold; ">Market Summary</h6>
                    <!-- TradingView Widget BEGIN -->

                    <div class="tradingview-widget-container">
                        <div class="tradingview-widget-container__widget"></div>
                        <div class="tradingview-widget-copyright">
                            <a href="https://www.tradingview.com/" rel="noopener" target="_blank">

                            </a>
                        </div>

                    </div>
                    <!-- TradingView Widget END-->
                </div>


            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Image Content -->
<div class="container-fluid">
    <div class=" lite-grey-bg row" style="padding-bottom: 30px; padding-top:30px;">
        <div class="container">
            <div class="row">
                <h3 class="col-sm-12 title" style="padding-top:0px; margin-bottom:10px;">Who <span style="color: #E3AF15;">We Are</span></h3>
                <div class="col-sm-6">
                    <div class="left-content">
                        <img src="{{ asset('front/images/about/image-content-1.jpg') }}" class="img-responsive" alt="">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="right-content">
                        <div class="image-content image-content-3">
                            <div class="section-heading">
                                <p class="subtext">Internacional Trust Bank  leads the pack when it comes to Banking. Whether you’re a skilled or completely new to online banking, our platforms give you the tools needed to take advantage of the foreign exchange market’s volatility.

                                    With Internacional Trust Bank it’s simple to get started trading Forex, and it’s easy to get the education needed to hone your skills. You’ll be able to benefit from one on one support from our specialist team and develop your expertise with our professional Forex trading resources and insights. For beginner and advanced traders alike we offer high leverage, guaranteed stop losses on every Forex trade, and our fixed spreads remain constant to give you greater strategic power and control.

                                    Get Started with us Today, and experience a swift journey filled with excitement.</p>
                                <ul class="image-content-list">
                                    <li><span class="ti-comments"></span>Internet Banking</li>
                                    <li><span class="ti-package"></span>Loans</li>
                                    <li><span class="ti-panel"></span>Funds Transfer</li>
                                    <li><span class="ti-gift"></span>Prepaid Card</li>
                                    <li><span class="ti-gift"></span>Mcash</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Image Content End -->


<!-- CTA Simple -->
<div class="container-fluid">
    <div class="cta cta-simple row" style="background: #151D28;">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5 class="title" style="color:white;">No 1 in Internet Banking</h5>
                </div>
                <div class="col-md-6">
                    <div class="cta-button text-center">
                        <a href="{{ route('register') }}" class="button button-3x" style="background: #151D28; color:white; border: white 1px solid;">Get Started</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- CTA Simple End -->

<!-- Service -->
<div class="container-fluid">
    <div class="service section-padding row" >
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="section-heading text-center">
                        <h3 class="title">Learn, grow and focus on what  <span style="color: #E3AF15; ">matters</span> </h3>
                        <p class="subtext">World Leading Finance Institution</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="margin-balance">
                    <div class="col-md-4 col-sm-4">
                        <div class="feature-box-4-grid">
                            <div class="feature-box text-center">
                                <span class="ti-crown"></span>
                                <h6 class="title">Accounts</h6>
                                <li class="subtext">We offer a wide range of accounts to suit lifestyles & needs. Free and paid-for add-ons are available to give total control. Download, Fill & Submit at our Branch.</li>
                                <li class="subtext">Minimum account size of $5,000</li>
                                <!--<a href="#" class="button button-3x" style="background: #151D28; color:white; border: white 1px solid;">Signup</a>-->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="feature-box-4-grid">
                            <div class="feature-box text-center">
                                <span class="ti-light-bulb"></span>
                                <h6 class="title">Reliable Customer Service</h6>
                                <li class="subtext">We are synonymous with innovation, building excellence, superior financial performance and creating role models for society.</li>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="feature-box-4-grid">
                            <div class="feature-box text-center">
                                <span class="ti-world"></span>
                                <h6 class="title">Round the Clock Banking</h6>
                                <li class="subtext">Access your personal account information with ease, transfer funds securely whenever you want, wherever you want.</li>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->


<!-- Service -->
<div class="container-fluid">
    <div class="service section-padding row" style="background:#f2f5fb;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="section-heading text-center">
                        <h3 class="title"><span style="color: #151D28;">Award-Winning</span> Bank</h3>
                        <p class="subtext">We boost of different account types designed and tailored to suit your dreams and expectancy</p>
                    </div>
                </div>
            </div>

            <div class="row" >
                <div class="margin-balance">
                    <div class="col-md-3 col-sm-3">
                        <div  style="background: transparent;">
                            <div class="feature-box text-center">
                                <h6 class="title" style="color: #151D28;">Savings Account</h6>
                                <p class="subtext">Save tomorrow today, with our high interest and low charges savings and investment accounts.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 ">
                        <div class="feature-box-4-grid1 "  style="background: transparent;">
                            <div class="feature-box text-center">
                                <h6 class="title" style="color: #151D28;">Current Account</h6>
                                <p class="subtext">
                                    Much more than cheques and balances; our current account packages provide you with innovative ways to manage your money while offering you the superior banking experience for which we are renowned.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="feature-box-4-grid1" style="background: transparent;">
                            <div class="feature-box text-center">
                                <h6 class="title" style="color: #151D28;">Off Shore/Joint Account</h6>
                                <p class="subtext">
                                    Offers you maximum interest payments on your daily account balances and minimum charges on your transactions.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="feature-box-4-grid1" style="background: transparent;">
                            <div class="feature-box text-center">
                                <h6 class="title" style="color: #151D28;">Fixed Account</h6>
                                <p class="subtext">
                                    Our Fixed/Tenured Deposits offer the best long-term saving options for you and your business. Simply deposit a specific amount into an investment account at an agreed interest rate and tenure. At the end of the agreed tenure, and based on your instructions, the investment can either be re-invested or returned to you with the interest you have earned.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 text-center">
                        <a href="{{ route('register') }}" class="button button-3x" style="background: #d96732; color:white; border: white 1px solid;">Join Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->

<!-- security of funds -->
<div class="container-fluid">
    <div class="service section-padding row" style="background:#151D28;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="section-heading text-center">
                        <h3 class="title text_white">Security of Funds</h3>
                        <p class="subtext text_white">Your funds are fully secured when you bank with Internacional Trust Bank Bank.</p>
                    </div>
                </div>
            </div>

            <div class="row" >
                <div class="margin-balance" >
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <a style="text-decoration:none; width: 100%; height: 100%;">
                            <div class="feature-box-4-grid">
                                <div class="feature-box text-center">

                                    <img src="{{ asset('front/images/product/license.png') }}" style="width:20%; margin-left: 40%; margin-right: 40%;">
                                    <h6 class="title">Regulated Activities</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <a style="text-decoration:none; width: 100%; height: 100%;">
                            <div class="feature-box-4-grid">
                                <div class="feature-box text-center">
                                    <span class="ti-shield"></span>
                                    <h6 class="title">Participant of The Financial<br>Commission Compensation fund</h6>
                                </div>
                            </div>
                            <a>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <a style="text-decoration:none; width: 100%; height: 100%;">
                            <div class="feature-box-4-grid">
                                <div class="feature-box text-center">
                                    <span class="ti-money"></span>
                                    <h6 class="title">Negative Balance Protection</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <a  style="text-decoration:none; width: 100%; height: 100%;">
                            <div class="feature-box-4-grid">
                                <div class="feature-box text-center">
                                    <span class="ti-wallet"></span>
                                    <h6 class="title">Segregated Accounts in Major Banks</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-12 col-sm-12 text-center">
                        <a href="{{ route('about') }}" class="button button-3x" style="background: #151D28; color:white; border: white 1px solid;">Read More About Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->


<div class="container-fluid">
    <div class="row">

        <div class="col-md-12" style="position: relative;">
            <img  src="{{ asset('images/banner.jpeg') }}" class="" style="width: 100%; height: 800px">
            <div style="z-index:10;" class="mobile_incribe">

                <div class="row">

                    <h4 class="col-md-12 hazie_mobile_app" style="color:black; font-weight:bold;">Internacional Trust Bank Bank Mobile App</h4>
                    <p class="col-md-12 hidden-xs">Stay connected and get instant notifications!</p>
                    <div class="col-md-6 col-xs-6" style="padding-right: 0px; z-index:10;"><img src="{{ asset('front/images/tab/googleapp.png') }}" class="img-responsive"></div>
                    <div class="col-md-6 col-xs-6" style="padding-left: 0px; z-index:10;"><img src="{{ asset('front/images/tab/googleapp.png') }}" class="img-responsive"></div>
                </div>

            </div>
        </div>

    </div>
</div>


<!-- CTA Simple -->
{{--<div class="container-fluid">--}}
{{--    <div class="cta cta-simple row" style="background: white; padding-top: 30px;">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-4">--}}
{{--                    <h5 class="title" style="color:#151D28;">Send Platform Link to Your Mobile: </h5>--}}
{{--                </div>--}}
{{--                <div class="col-md-3">--}}

{{--                    <div class="form-group">--}}

{{--                        <select class="form-control theForm1" id="smsPhoneCountryCode" name="PhoneCountryCode" value="44" style="color:#151D28;">--}}
{{--                            <option data-countrycode="DZ" value="213">Algeria (+213)</option>--}}
{{--                            <option data-countrycode="AD" value="376">Andorra (+376)</option>--}}
{{--                            <option data-countrycode="AO" value="244">Angola (+244)</option>--}}
{{--                            <option data-countrycode="AI" value="1264">Anguilla (+1264)</option>--}}
{{--                            <option data-countrycode="AG" value="1268">Antigua &amp; Barbuda (+1268)</option>--}}
{{--                            <option data-countrycode="AR" value="54">Argentina (+54)</option>--}}
{{--                            <option data-countrycode="AM" value="374">Armenia (+374)</option>--}}
{{--                            <option data-countrycode="AW" value="297">Aruba (+297)</option>--}}
{{--                            <option data-countrycode="AU" value="61">Australia (+61)</option>--}}
{{--                            <option data-countrycode="AT" value="43">Austria (+43)</option>--}}
{{--                            <option data-countrycode="AZ" value="994">Azerbaijan (+994)</option>--}}
{{--                            <option data-countrycode="BS" value="1242">Bahamas (+1242)</option>--}}
{{--                            <option data-countrycode="BH" value="973">Bahrain (+973)</option>--}}
{{--                            <option data-countrycode="BD" value="880">Bangladesh (+880)</option>--}}
{{--                            <option data-countrycode="BB" value="1246">Barbados (+1246)</option>--}}
{{--                            <option data-countrycode="BY" value="375">Belarus (+375)</option>--}}
{{--                            <option data-countrycode="BE" value="32">Belgium (+32)</option>--}}
{{--                            <option data-countrycode="BZ" value="501">Belize (+501)</option>--}}
{{--                            <option data-countrycode="BJ" value="229">Benin (+229)</option>--}}
{{--                            <option data-countrycode="BM" value="1441">Bermuda (+1441)</option>--}}
{{--                            <option data-countrycode="BT" value="975">Bhutan (+975)</option>--}}
{{--                            <option data-countrycode="BO" value="591">Bolivia (+591)</option>--}}
{{--                            <option data-countrycode="BA" value="387">Bosnia Herzegovina (+387)</option>--}}
{{--                            <option data-countrycode="BW" value="267">Botswana (+267)</option>--}}
{{--                            <option data-countrycode="BR" value="55">Brazil (+55)</option>--}}
{{--                            <option data-countrycode="BN" value="673">Brunei (+673)</option>--}}
{{--                            <option data-countrycode="BG" value="359">Bulgaria (+359)</option>--}}
{{--                            <option data-countrycode="BF" value="226">Burkina Faso (+226)</option>--}}
{{--                            <option data-countrycode="BI" value="257">Burundi (+257)</option>--}}
{{--                            <option data-countrycode="KH" value="855">Cambodia (+855)</option>--}}
{{--                            <option data-countrycode="CM" value="237">Cameroon (+237)</option>--}}
{{--                            <option data-countrycode="CA" value="1">Canada (+1)</option>--}}
{{--                            <option data-countrycode="CV" value="238">Cape Verde Islands (+238)</option>--}}
{{--                            <option data-countrycode="KY" value="1345">Cayman Islands (+1345)</option>--}}
{{--                            <option data-countrycode="CF" value="236">Central African Republic (+236)</option>--}}
{{--                            <option data-countrycode="CL" value="56">Chile (+56)</option>--}}
{{--                            <option data-countrycode="CN" value="86">China (+86)</option>--}}
{{--                            <option data-countrycode="CO" value="57">Colombia (+57)</option>--}}
{{--                            <option data-countrycode="KM" value="269">Comoros (+269)</option>--}}
{{--                            <option data-countrycode="CG" value="242">Congo (+242)</option>--}}
{{--                            <option data-countrycode="CK" value="682">Cook Islands (+682)</option>--}}
{{--                            <option data-countrycode="CR" value="506">Costa Rica (+506)</option>--}}
{{--                            <option data-countrycode="HR" value="385">Croatia (+385)</option>--}}
{{--                            <option data-countrycode="CU" value="53">Cuba (+53)</option>--}}
{{--                            <option data-countrycode="CY" value="90392">Cyprus North (+90392)</option>--}}
{{--                            <option data-countrycode="CY" value="357">Cyprus South (+357)</option>--}}
{{--                            <option data-countrycode="CZ" value="42">Czech Republic (+42)</option>--}}
{{--                            <option data-countrycode="DK" value="45">Denmark (+45)</option>--}}
{{--                            <option data-countrycode="DJ" value="253">Djibouti (+253)</option>--}}
{{--                            <option data-countrycode="DM" value="1809">Dominica (+1809)</option>--}}
{{--                            <option data-countrycode="DO" value="1809">Dominican Republic (+1809)</option>--}}
{{--                            <option data-countrycode="EC" value="593">Ecuador (+593)</option>--}}
{{--                            <option data-countrycode="EG" value="20">Egypt (+20)</option>--}}
{{--                            <option data-countrycode="SV" value="503">El Salvador (+503)</option>--}}
{{--                            <option data-countrycode="GQ" value="240">Equatorial Guinea (+240)</option>--}}
{{--                            <option data-countrycode="ER" value="291">Eritrea (+291)</option>--}}
{{--                            <option data-countrycode="EE" value="372">Estonia (+372)</option>--}}
{{--                            <option data-countrycode="ET" value="251">Ethiopia (+251)</option>--}}
{{--                            <option data-countrycode="FK" value="500">Falkland Islands (+500)</option>--}}
{{--                            <option data-countrycode="FO" value="298">Faroe Islands (+298)</option>--}}
{{--                            <option data-countrycode="FJ" value="679">Fiji (+679)</option>--}}
{{--                            <option data-countrycode="FI" value="358">Finland (+358)</option>--}}
{{--                            <option data-countrycode="FR" value="33">France (+33)</option>--}}
{{--                            <option data-countrycode="GF" value="594">French Guiana (+594)</option>--}}
{{--                            <option data-countrycode="PF" value="689">French Polynesia (+689)</option>--}}
{{--                            <option data-countrycode="GA" value="241">Gabon (+241)</option>--}}
{{--                            <option data-countrycode="GM" value="220">Gambia (+220)</option>--}}
{{--                            <option data-countrycode="GE" value="7880">Georgia (+7880)</option>--}}
{{--                            <option data-countrycode="DE" value="49">Germany (+49)</option>--}}
{{--                            <option data-countrycode="GH" value="233">Ghana (+233)</option>--}}
{{--                            <option data-countrycode="GI" value="350">Gibraltar (+350)</option>--}}
{{--                            <option data-countrycode="GR" value="30">Greece (+30)</option>--}}
{{--                            <option data-countrycode="GL" value="299">Greenland (+299)</option>--}}
{{--                            <option data-countrycode="GD" value="1473">Grenada (+1473)</option>--}}
{{--                            <option data-countrycode="GP" value="590">Guadeloupe (+590)</option>--}}
{{--                            <option data-countrycode="GU" value="671">Guam (+671)</option>--}}
{{--                            <option data-countrycode="GT" value="502">Guatemala (+502)</option>--}}
{{--                            <option data-countrycode="GN" value="224">Guinea (+224)</option>--}}
{{--                            <option data-countrycode="GW" value="245">Guinea - Bissau (+245)</option>--}}
{{--                            <option data-countrycode="GY" value="592">Guyana (+592)</option>--}}
{{--                            <option data-countrycode="HT" value="509">Haiti (+509)</option>--}}
{{--                            <option data-countrycode="HN" value="504">Honduras (+504)</option>--}}
{{--                            <option data-countrycode="HK" value="852">Hong Kong (+852)</option>--}}
{{--                            <option data-countrycode="HU" value="36">Hungary (+36)</option>--}}
{{--                            <option data-countrycode="IS" value="354">Iceland (+354)</option>--}}
{{--                            <option data-countrycode="IN" value="91">India (+91)</option>--}}
{{--                            <option data-countrycode="ID" value="62">Indonesia (+62)</option>--}}
{{--                            <option data-countrycode="IR" value="98">Iran (+98)</option>--}}
{{--                            <option data-countrycode="IQ" value="964">Iraq (+964)</option>--}}
{{--                            <option data-countrycode="IE" value="353">Ireland (+353)</option>--}}
{{--                            <option data-countrycode="IL" value="972">Israel (+972)</option>--}}
{{--                            <option data-countrycode="IT" value="39">Italy (+39)</option>--}}
{{--                            <option data-countrycode="JM" value="1876">Jamaica (+1876)</option>--}}
{{--                            <option data-countrycode="JP" value="81">Japan (+81)</option>--}}
{{--                            <option data-countrycode="JO" value="962">Jordan (+962)</option>--}}
{{--                            <option data-countrycode="KZ" value="7">Kazakhstan (+7)</option>--}}
{{--                            <option data-countrycode="KE" value="254">Kenya (+254)</option>--}}
{{--                            <option data-countrycode="KI" value="686">Kiribati (+686)</option>--}}
{{--                            <option data-countrycode="KP" value="850">Korea North (+850)</option>--}}
{{--                            <option data-countrycode="KR" value="82">Korea South (+82)</option>--}}
{{--                            <option data-countrycode="KW" value="965">Kuwait (+965)</option>--}}
{{--                            <option data-countrycode="KG" value="996">Kyrgyzstan (+996)</option>--}}
{{--                            <option data-countrycode="LA" value="856">Laos (+856)</option>--}}
{{--                            <option data-countrycode="LV" value="371">Latvia (+371)</option>--}}
{{--                            <option data-countrycode="LB" value="961">Lebanon (+961)</option>--}}
{{--                            <option data-countrycode="LS" value="266">Lesotho (+266)</option>--}}
{{--                            <option data-countrycode="LR" value="231">Liberia (+231)</option>--}}
{{--                            <option data-countrycode="LY" value="218">Libya (+218)</option>--}}
{{--                            <option data-countrycode="LI" value="417">Liechtenstein (+417)</option>--}}
{{--                            <option data-countrycode="LT" value="370">Lithuania (+370)</option>--}}
{{--                            <option data-countrycode="LU" value="352">Luxembourg (+352)</option>--}}
{{--                            <option data-countrycode="MO" value="853">Macao (+853)</option>--}}
{{--                            <option data-countrycode="MK" value="389">Macedonia (+389)</option>--}}
{{--                            <option data-countrycode="MG" value="261">Madagascar (+261)</option>--}}
{{--                            <option data-countrycode="MW" value="265">Malawi (+265)</option>--}}
{{--                            <option data-countrycode="MY" value="60">Malaysia (+60)</option>--}}
{{--                            <option data-countrycode="MV" value="960">Maldives (+960)</option>--}}
{{--                            <option data-countrycode="ML" value="223">Mali (+223)</option>--}}
{{--                            <option data-countrycode="MT" value="356">Malta (+356)</option>--}}
{{--                            <option data-countrycode="MH" value="692">Marshall Islands (+692)</option>--}}
{{--                            <option data-countrycode="MQ" value="596">Martinique (+596)</option>--}}
{{--                            <option data-countrycode="MR" value="222">Mauritania (+222)</option>--}}
{{--                            <option data-countrycode="YT" value="269">Mayotte (+269)</option>--}}
{{--                            <option data-countrycode="MX" value="52">Mexico (+52)</option>--}}
{{--                            <option data-countrycode="FM" value="691">Micronesia (+691)</option>--}}
{{--                            <option data-countrycode="MD" value="373">Moldova (+373)</option>--}}
{{--                            <option data-countrycode="MC" value="377">Monaco (+377)</option>--}}
{{--                            <option data-countrycode="MN" value="976">Mongolia (+976)</option>--}}
{{--                            <option data-countrycode="MS" value="1664">Montserrat (+1664)</option>--}}
{{--                            <option data-countrycode="MA" value="212">Morocco (+212)</option>--}}
{{--                            <option data-countrycode="MZ" value="258">Mozambique (+258)</option>--}}
{{--                            <option data-countrycode="MN" value="95">Myanmar (+95)</option>--}}
{{--                            <option data-countrycode="NA" value="264">Namibia (+264)</option>--}}
{{--                            <option data-countrycode="NR" value="674">Nauru (+674)</option>--}}
{{--                            <option data-countrycode="NP" value="977">Nepal (+977)</option>--}}
{{--                            <option data-countrycode="NL" value="31">Netherlands (+31)</option>--}}
{{--                            <option data-countrycode="NC" value="687">New Caledonia (+687)</option>--}}
{{--                            <option data-countrycode="NZ" value="64">New Zealand (+64)</option>--}}
{{--                            <option data-countrycode="NI" value="505">Nicaragua (+505)</option>--}}
{{--                            <option data-countrycode="NE" value="227">Niger (+227)</option>--}}
{{--                            <option data-countrycode="NG" value="234">Nigeria (+234)</option>--}}
{{--                            <option data-countrycode="NU" value="683">Niue (+683)</option>--}}
{{--                            <option data-countrycode="NF" value="672">Norfolk Islands (+672)</option>--}}
{{--                            <option data-countrycode="NP" value="670">Northern Marianas (+670)</option>--}}
{{--                            <option data-countrycode="NO" value="47">Norway (+47)</option>--}}
{{--                            <option data-countrycode="OM" value="968">Oman (+968)</option>--}}
{{--                            <option data-countrycode="PW" value="680">Palau (+680)</option>--}}
{{--                            <option data-countrycode="PA" value="507">Panama (+507)</option>--}}
{{--                            <option data-countrycode="PG" value="675">Papua New Guinea (+675)</option>--}}
{{--                            <option data-countrycode="PY" value="595">Paraguay (+595)</option>--}}
{{--                            <option data-countrycode="PE" value="51">Peru (+51)</option>--}}
{{--                            <option data-countrycode="PH" value="63">Philippines (+63)</option>--}}
{{--                            <option data-countrycode="PL" value="48">Poland (+48)</option>--}}
{{--                            <option data-countrycode="PT" value="351">Portugal (+351)</option>--}}
{{--                            <option data-countrycode="PR" value="1787">Puerto Rico (+1787)</option>--}}
{{--                            <option data-countrycode="QA" value="974">Qatar (+974)</option>--}}
{{--                            <option data-countrycode="RE" value="262">Reunion (+262)</option>--}}
{{--                            <option data-countrycode="RO" value="40">Romania (+40)</option>--}}
{{--                            <option data-countrycode="RU" value="7">Russia (+7)</option>--}}
{{--                            <option data-countrycode="RW" value="250">Rwanda (+250)</option>--}}
{{--                            <option data-countrycode="SM" value="378">San Marino (+378)</option>--}}
{{--                            <option data-countrycode="ST" value="239">Sao Tome &amp; Principe (+239)</option>--}}
{{--                            <option data-countrycode="SA" value="966">Saudi Arabia (+966)</option>--}}
{{--                            <option data-countrycode="SN" value="221">Senegal (+221)</option>--}}
{{--                            <option data-countrycode="CS" value="381">Serbia (+381)</option>--}}
{{--                            <option data-countrycode="SC" value="248">Seychelles (+248)</option>--}}
{{--                            <option data-countrycode="SL" value="232">Sierra Leone (+232)</option>--}}
{{--                            <option data-countrycode="SG" value="65">Singapore (+65)</option>--}}
{{--                            <option data-countrycode="SK" value="421">Slovak Republic (+421)</option>--}}
{{--                            <option data-countrycode="SI" value="386">Slovenia (+386)</option>--}}
{{--                            <option data-countrycode="SB" value="677">Solomon Islands (+677)</option>--}}
{{--                            <option data-countrycode="SO" value="252">Somalia (+252)</option>--}}
{{--                            <option data-countrycode="ZA" value="27">South Africa (+27)</option>--}}
{{--                            <option data-countrycode="ES" value="34">Spain (+34)</option>--}}
{{--                            <option data-countrycode="LK" value="94">Sri Lanka (+94)</option>--}}
{{--                            <option data-countrycode="SH" value="290">St. Helena (+290)</option>--}}
{{--                            <option data-countrycode="KN" value="1869">St. Kitts (+1869)</option>--}}
{{--                            <option data-countrycode="SC" value="1758">St. Lucia (+1758)</option>--}}
{{--                            <option data-countrycode="SD" value="249">Sudan (+249)</option>--}}
{{--                            <option data-countrycode="SR" value="597">Suriname (+597)</option>--}}
{{--                            <option data-countrycode="SZ" value="268">Swaziland (+268)</option>--}}
{{--                            <option data-countrycode="SE" value="46">Sweden (+46)</option>--}}
{{--                            <option data-countrycode="CH" value="41">Switzerland (+41)</option>--}}
{{--                            <option data-countrycode="SI" value="963">Syria (+963)</option>--}}
{{--                            <option data-countrycode="TW" value="886">Taiwan (+886)</option>--}}
{{--                            <option data-countrycode="TJ" value="7">Tajikstan (+7)</option>--}}
{{--                            <option data-countrycode="TH" value="66">Thailand (+66)</option>--}}
{{--                            <option data-countrycode="TG" value="228">Togo (+228)</option>--}}
{{--                            <option data-countrycode="TO" value="676">Tonga (+676)</option>--}}
{{--                            <option data-countrycode="TT" value="1868">Trinidad &amp; Tobago (+1868)</option>--}}
{{--                            <option data-countrycode="TN" value="216">Tunisia (+216)</option>--}}
{{--                            <option data-countrycode="TR" value="90">Turkey (+90)</option>--}}
{{--                            <option data-countrycode="TM" value="7">Turkmenistan (+7)</option>--}}
{{--                            <option data-countrycode="TM" value="993">Turkmenistan (+993)</option>--}}
{{--                            <option data-countrycode="TC" value="1649">Turks &amp; Caicos Islands (+1649)</option>--}}
{{--                            <option data-countrycode="TV" value="688">Tuvalu (+688)</option>--}}
{{--                            <option data-countrycode="UG" value="256">Uganda (+256)</option>--}}
{{--                            <option data-countrycode="GB" value="44" selected="selected">UK (+44)</option>--}}
{{--                            <option data-countrycode="UA" value="380">Ukraine (+380)</option>--}}
{{--                            <option data-countrycode="AE" value="971">United Arab Emirates (+971)</option>--}}
{{--                            <option data-countrycode="UY" value="598">Uruguay (+598)</option>--}}
{{--                            <option data-countrycode="US" value="1">USA (+1)</option>--}}
{{--                            <option data-countrycode="UZ" value="7">Uzbekistan (+7)</option>--}}
{{--                            <option data-countrycode="VU" value="678">Vanuatu (+678)</option>--}}
{{--                            <option data-countrycode="VA" value="379">Vatican City (+379)</option>--}}
{{--                            <option data-countrycode="VE" value="58">Venezuela (+58)</option>--}}
{{--                            <option data-countrycode="VN" value="84">Vietnam (+84)</option>--}}
{{--                            <option data-countrycode="VG" value="84">Virgin Islands - British (+1284)</option>--}}
{{--                            <option data-countrycode="VI" value="84">Virgin Islands - US (+1340)</option>--}}
{{--                            <option data-countrycode="WF" value="681">Wallis &amp; Futuna (+681)</option>--}}
{{--                            <option data-countrycode="YE" value="969">Yemen (North)(+969)</option>--}}
{{--                            <option data-countrycode="YE" value="967">Yemen (South)(+967)</option>--}}
{{--                            <option data-countrycode="ZM" value="260">Zambia (+260)</option>--}}
{{--                            <option data-countrycode="ZW" value="263">Zimbabwe (+263)</option>--}}
{{--                        </select>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-3">--}}
{{--                    <div class="form-group">--}}
{{--                        <input type="text" value="Mobile e.g 20 123 456" onBlur="populate(this)" onFocus="clearField(this);" class="form-control theForm1" style="color:white;">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-2">--}}
{{--                    <div class="cta-button text-right">--}}
{{--                        <a class="button button-3x" style="background: #151D28; color:white; border: white 1px solid;">Send Link</a>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}


<!-- CTA -->
<div class="container-fluid">
    <div class="cta cta-simple row" style="background:#151D28;">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h5 class="title text_white"><small>Don’t miss on our future updates. Get in touch for our next newsletter...</small></h5>
                </div>
                <div class="col-md-5">
                    <div class="cta-form">
                  <span action="#" method="post" class="form-inline flexo-subscription">
                    <div class="form-group">
                      <input type="email" id="subscribe_input_value" class="form-control" placeholder="Enter your mail here...">
                    </div>
                    <button onClick="submitNewsLetter()" type="submit" class="button button-3x">Subscribe</button>
                    <p class="newsletter-success"></p>
                    <p class="newsletter-error"></p>
                  </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- CTA End -->

@endsection
