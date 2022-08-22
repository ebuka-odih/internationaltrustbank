@extends('pages.layouts.app')
@section('content')

    @include('pages.layouts.header')


    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 heading" style="padding: 0px; position: relative; height: 100%; background:#336699; ">
                <img src="{{ asset('front/images/contact/trade4plus-contact-us-bg.jpg') }}" class="manage-image-height">
                <div class="contact-write">
                    <h3 class="text-left contact-left text_white">
                        Contact Us
                    </h3>
                    <p class="text-left contact-sub-left text_white">
                        We are better than 97.1% of the industry*
                    </p>

                    <div class="col-md-4 handle-logo">
                        <a class="col-md-12" >
							<span style="display: inline-block;">
								<h4 class="text_white hidden-xs"></h4>
							</span>
                        </a>
                        <div class="col-md-12 text_white" style="margin-top: 20px">
                            <h6 style="width: 100%; ">Help Desk</h6>
                            <p style="width: 100%;"><strong>Email: </strong>contactus@internacionaltrustbank.com</p>
                        </div>
                    </div>


                    <div class="handle-logo2">
					<span class="col-md-12"  style="display: inline-block">

				<span class="text_white" style="display: inline-block">
					&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                                                        <i class="fa fa-map-marker fa-2x text_white" style="display: inline-block"></i> </span>
                                            <p style="color: #fff;">Head Office: Honolulu, HI, USA</p>
                                            <p style="color: #fff;">Branch Office: Dundee, UK</p>
						  	</span>

                    </div>

                    <div class="handle-logo3">
						<span class="col-md-12"  style="display: inline-block">
								<i class="fa fa-mobile fa-2x text_white" style="display: inline-block"></i>&nbsp;
								<span class="text_white" style="display: inline-block">
{{--									+1(760)481‑1341--}}
								</span>
						  	</span>
                        <div class="col-md-12 text_white" style="margin-top: 20px">
                            <h6 style="width: 100%; ">Enquires</h6>
                            <p style="width: 100%;"><strong>Email: </strong>support@internacionaltrustbank.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Info Box -->
    <div class="container-fluid">
        <div id="theNext" class="info-box section-padding-me row" style="background: url(front/images/security/security__info-bg.png); background-repeat: no-repeat; background-size: 100% 100%; padding-top:0px; padding-bottom:50px;">
            <div class="container" >
                <div class="row">
                    <div class="col-md-12">

                        <div class="row">
                            <div class="col-md-6 col-md-offset-3" style="margin-top:20px;">
                                <div class="section-heading text-center">
                                    <h3 class="title" style="color:#336699; ">We offer support in the <span style="color:#E3AF15;">following areas:</span></h3>
                                    <p class="subtext text_white"></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="col-md-7" style="margin-top: 20px;">
                                <img src="{{ asset('front/images/template/contact_bg.jpg') }}" class="image-responsive">

                            </div>

                            <div class="col-md-5" style="margin-top: 20px;">
                                <div class="row">

                                    <div class="col-md-4" style="margin-top: 20px;">
                                        <div class="white-board">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-9 col-xs-12 " >
                                                    <div class="row">
                                                        <h6 class="col-md-12" style="color:#336699; ">
                                                            <i class="fa fa-dot-circle-o"></i> Deposit/ Withdrawal Information
                                                        </h6>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4" style="margin-top: 20px;">
                                        <div class="white-board">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-9 col-xs-12 " >
                                                    <div class="row">
                                                        <h6 class="col-md-12" style="color:#336699; ">
                                                            <i class="fa fa-dot-circle-o"></i> Risk Management
                                                        </h6>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4" style="margin-top: 20px;">
                                        <div class="white-board">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-9 col-xs-12 " >
                                                    <div class="row">
                                                        <h6 class="col-md-12" style="color:#336699; ">
                                                            <i class="fa fa-dot-circle-o"></i> Your Everyday Banking
                                                        </h6>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-md-4" style="margin-top: 20px;">
                                        <div class="white-board">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-9 col-xs-12 " >
                                                    <div class="row">
                                                        <h6 class="col-md-12" style="color:#336699; ">
                                                            <i class="fa fa-dot-circle-o"></i> Website Information
                                                        </h6>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4" style="margin-top: 20px;">
                                        <div class="white-board">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-9 col-xs-12 " >
                                                    <div class="row">
                                                        <h6 class="col-md-12" style="color:#336699; ">
                                                            <i class="fa fa-dot-circle-o"></i> Account Verification Process
                                                        </h6>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4" style="margin-top: 20px;">
                                        <div class="white-board">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-9 col-xs-12 " >
                                                    <div class="row">
                                                        <h6 class="col-md-12" style="color:#336699; ">
                                                            <i class="fa fa-dot-circle-o"></i> Undertaking Quality Control
                                                        </h6>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>


                                <div class="row">

                                    <div class="col-md-4" style="margin-top: 20px;">
                                        <div class="white-board">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-9 col-xs-12 " >
                                                    <div class="row">
                                                        <h6 class="col-md-12" style="color:#336699; ">
                                                            <i class="fa fa-dot-circle-o"></i> Current Contests and Promotions
                                                        </h6>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4" style="margin-top: 20px;">
                                        <div class="white-board">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-9 col-xs-12 " >
                                                    <div class="row">
                                                        <h6 class="col-md-12" style="color:#336699; ">
                                                            <i class="fa fa-dot-circle-o"></i> An Introduction to Banking
                                                        </h6>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4" style="margin-top: 20px;">
                                        <div class="white-board">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-9 col-xs-12 " >
                                                    <div class="row">
                                                        <h6 class="col-md-12" style="color:#336699; ">
                                                            <i class="fa fa-dot-circle-o"></i> Overseeing Quality Improvements
                                                        </h6>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>


                                    <style type="text/css">
                                        @media (max-width: 767px) {
                                            .image-responsive{
                                                width:100%;
                                                height: auto;
                                                margin-left: 0%;
                                                margin-right: 0%;
                                            }
                                        }
                                        @media (min-width: 768px) {
                                            .image-responsive{
                                                width:90%;
                                                height: auto;
                                                margin-left: 5%;
                                                margin-right: 5%;
                                            }
                                        }
                                        @media (min-width: 1200px) {
                                            .image-responsive{
                                                width:70%;
                                                height: auto;
                                                margin-left: 15%;
                                                margin-right: 15%;
                                            }
                                        }
                                    </style>

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
            <div class="about section-padding-me row" style="/*background:url(images/slider/invest.jpg); background-repeat: no-repeat; background-size: cover;*/">
                <div class="container">

                    <div class="row">

                        <div class="col-sm-12 control-sides" style="" id="two-factor">

                            <div class="row">

                                <div class="col-md-6 hidden-xs">
                                    <img src="{{ asset('front/images/contact/multi-lang.png') }}" class="img-responsive">
                                </div>
                                <div class="col-md-6 ">

                                    <div class="section-heading text-center">
                                        <h3 class="title" style="text-align: left;">We speak your <span style="color: #336699;"> language</span></h3>
                                        <img src="{{ asset('front/images/contact/multi-lang.png') }}" class="img-responsive hidden-sm hidden-md hidden-lg">
                                        <p class="subtext" style="text-align: left;">Available in: English, German, Spanish, Slovenian...</p>
                                    </div>
{{--                                    <a target="_blank" href=""><b>Live Chat</b></a>--}}
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Service -->
        <div class="container-fluid">
            <div class="service section-padding row" style="background:#f2f5fb; background:url(front/images/slider/invest.jpg); background-repeat: no-repeat; background-size: cover;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="section-heading text-center">
                                <h3 class="title text_white">Get in touch</h3>
                                <p class="subtext text_white">
                                    If you have any questions or suggestions please feel free to fill in the contact form below and one of our representatives will contact you to help you with your query.
                                </p>
                                <div class="row">
                                    <div class="col-md-10 col-md-offset-1">
                                        <div class="contact-form">
                                            <form action="" method="post">
                                                <div class="row">

                                                    <div class="col-xs-12 col-sm-12 col-lg-12" style="margin-top: 10px;">


                                                    </div>

                                                    <div class="col-sm-5" id="contact">
                                                        <div class="form-group">
                                                            <input id="name" type="text" name="contact_name" class="form-control cont-form" placeholder="Your Name">
                                                        </div>
                                                        <div class="form-group">
                                                            <input id="email" type="email" name="contact_email" class="form-control cont-form" placeholder="Email">
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="contact_subject" type="text" class="form-control cont-form" id="phone" placeholder="Subject">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-7">
                                                        <div class="form-group">
                                                            <textarea id="message" name="contact_message" class="form-control cont-form" placeholder="Message"></textarea>
                                                        </div>
                                                        <button type="submit" name="submit" class="button button-2x btn-block primary-bg">Send</button>
                                                    </div>

                                                </div>
                                            </form>

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
</div>
</div>




@endsection

