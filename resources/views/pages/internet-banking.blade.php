@extends('pages.layouts.app')
@section('content')


    @include('pages.layouts.header')


    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 heading" style="padding: 0px; position: relative; height: 100%; background:#336699;">
                <img src="{{ asset('front/images/verification/document-capture.png') }}" class="manage-height" >
                <div class="holdWriteUp">
                    <h3 class="text-center carryTop text_white">
                        Internet Banking
                    </h3>
                    <p class="text-center carryBottom text_white">
                        Internacional Trust Bank Online Banking Service gives you unrestricted and secure access to your account, anytime, anywhere on your computer, tablet, smart phones or any internet-enabled devices. It is your bank on the go!
                    </p>
                </div>
            </div>
        </div>
    </div>


    <!-- About -->
    <div class="container-fluid">
        <div class="about  row" >
            <div class="container">
                <div class="row">

                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Image Gallery 3 Grid -->
    <div class="container-fluid focusHere">
        <div class="section-padding-me">
            <div class="container">

                <div class="row">
                    <div class="col-md-12">

                        <div class="row">

                            <div id="iso-nav" class="iso-nav">
                                <button class="active btn btn-filter main_0" onClick="manageVer(this)" >Features & Benefits</button>
                                <button class="btn btn-filter main_1" onClick="manageVer(this)">Security</button>
                                <button class="btn btn-filter main_2" onClick="manageVer(this)">Requirements</button>
                            </div>

                        </div>


                        <div class="row">

                            <div class="col-md-12 main_00">
                                <div class="row">

                                    <div class="col-md-10 col-md-offset-1 header-bgcolor">
                                        <div class="point-it"></div>
                                        <h4 class="text-center text_white">Features & Benefits</h4>
                                    </div>
                                    <div class="col-md-10 col-md-offset-1 text-left" style="height: auto;  background: #F6F6F6;">

                                        <br>
                                        <ul>
                                            <li><b>
                                                    &#8226; Access to your qualifying accounts 24/7 (subject to planned maintenance periods)
                                            </li></b>

                                            <p>
                                                Even when the banking doors are closed and there is no one to attend to your phone call, access to your qualifying accounts is still there
                                            </p>

                                        </ul>

                                        <br>
                                        <ul>
                                            <li><b>
                                                    &#8226; View your qualifying account balances & track your transactions
                                                </b></li>
                                        </ul>

                                        <p>
                                            When you know exactly how much you have in your qualifying accounts, it’s a lot easier to keep tabs on your finances.
                                        </p>

                                        <br>
                                        <ul>
                                            <li><b>
                                                    &#8226; Make transfers between eligible qualifying accounts
                                                </b></li>
                                        </ul>

                                        <p>
                                            Transfer money between your accounts of the same currency as long as they are listed on Internet Banking.
                                        </p>

                                        <br>
                                        <ul>
                                            <li><b>
                                                    &#8226; Make payments to friends & organisations
                                                </b></li>
                                        </ul>

                                        <p>
                                            Move money to your friends and family whether they have accounts with Internacional Trust Bank or other banks globally. Paying those bills cannot be easier with Internet Banking. Payments are usually processed by Faster Payments but we also allow you to make payments by CHAPS online!
                                        </p>


                                        <br>
                                        <ul>
                                            <li><b>
                                                    &#8226; Mobile friendly
                                                </b></li>
                                        </ul>

                                        <p>
                                            You now have a familiar but easy interface to conduct Internet Banking on the go with your mobile devices.
                                        </p>

                                        <br>
                                        <ul>
                                            <li><b>
                                                    &#8226; Manage personal details
                                                </b></li>
                                        </ul>

                                        <p>
                                            Without putting a call through to us or coming to the banking hall, you can update your details easily without hassles as long as you are a EU resident. Non EU residents are only able to update email addresses and telephone numbers.
                                        </p>

                                        <br>
                                        <ul>
                                            <li><b>
                                                    &#8226; Extended security features
                                                </b></li>
                                        </ul>

                                        <p>
                                            Our online login process seeks to prevent unauthorised access because we take the security of your accounts very seriously
                                        </p>

                                        <br>
                                        <ul>
                                            <li><b>
                                                    &#8226; Generate online account statements
                                                </b></li>
                                        </ul>

                                        <p>
                                            Generate statements for your qualifying accounts for any period of your choice. We place no limits on how far back you can go.
                                        </p>

                                        <br>
                                        <ul>
                                            <li><b>
                                                    &#8226; Make international payments to most countries in the world
                                                </b></li>
                                        </ul>

                                        <p>
                                            Easily pass us an instruction to make your cross border payments in qualifying currencies. This service is available via internet banking and operates on most weekdays
                                        </p>

                                        <br>
                                        <ul>
                                            <li><b>
                                                    &#8226; Send us secure messages
                                                </b></li>
                                        </ul>

                                        <p>
                                            Send us secure messages from within Internet Banking and we will know it is from you
                                        </p>


                                        <div style="background:transparent; height: 1px; width: 100%; margin-top: 10px;"></div>
                                        <div class="col-md-6 pull-left"></div>
                                        <div class="col-md-6">
                                            <a href="javascript:;" class="main_1 pull-right" onClick="manageVer(this)">
                                                Security&nbsp;<i class="fa fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>



                            <div class="col-md-12 main_11 hidden" >

                                <div class="col-md-10 col-md-offset-1 header-bgcolor">
                                    <div class="point-it1"></div>
                                    <h4 class="text-center text_white">Security</h4>
                                </div>

                                <div class="col-md-10 col-md-offset-1 text-left" style=" background: #F6F6F6;">

                                    <br>
                                    <ul>
                                        <li><b>
                                                &#8226; Enhanced log in process
                                        </li></b>

                                        <p>
                                            We have now made the login process to internet banking easier and yet more secure. We have introduced 2-factor authentication, that is what you know and what you have i.e. security token; and you are now able to specify a User ID of your choice
                                        </p>

                                        <br>
                                        <ul>
                                            <li><b>
                                                    &#8226; Extended validation certificates
                                            </li></b>

                                            <p>
                                                When you are visiting a secure encrypted website, the website address will always begin with ”https://” and there will be a padlock symbol displayed somewhere within the web browser.
                                            </p>

                                            <p>If you are using Internet Explorer 7 or above, when you visit our secure banking website you will see that the address bar turns green. In addition to the right of the address bar, a padlock symbol are displayed
                                            </p>

                                            <br>
                                            <ul>
                                                <li><b>
                                                        &#8226; Temporarily disabling your online access
                                                </li></b>

                                                <p>
                                                    We will temporarily disable your account if we notice too many failed attempts to log in to your acount. There should be few worries about this feature preventing you from accessing your account again – all you need is a phone call to us.
                                                </p>

                                                <br>
                                                <ul>
                                                    <li><b>
                                                            &#8226; Auto log off
                                                    </li></b>

                                                    <p>
                                                        When you log in to our online banking, the system will constantly monitor what you do and log you off if it senses you’re inactive. This helps you stay protected if other people can access your computer.
                                                    </p>

                                                    <br>
                                                    <h5><p><b>
                                                                Protecting yourself and your PC
                                                    </h5></p></b>

                                                    <br>
                                                    <ul>
                                                        <li><b>
                                                                &#8226; Keep your login details safe
                                                        </li></b>

                                                        <p>
                                                            Your security tokens and login details are the keys to your online access. Never write them down, give them to anyone else or include them in an e-mail. Remember that protecting your security details is your responsibility.
                                                        </p>

                                                        <br>
                                                        <ul>
                                                            <li><b>
                                                                    &#8226; Phishing and scam emails
                                                            </li></b>

                                                            <p>
                                                                Fraudsters create authentic looking, but false emails. Their purpose is to deceive individuals into responding so that the senders can use information obtained to fraudulently obtain your money. Some of these scam emails take the form of offering you something, such as a large sum of money while others contain links to sites where your personal details are asked. The catch is that they want access to your account.
                                                            </p>

                                                            <br>
                                                            <ul>
                                                                <li><b>
                                                                        &#8226; Phishing and fraudulent websites
                                                                </li></b>

                                                                <p>
                                                                    Fraudsters create authentic looking, but false or “spoof” websites. Their purpose is to trick customers to enter their security  information onto fake but usually identical sites to the original site. Always look at the address bar to confirm that our name is always displayed on your browser.
                                                                </p>

                                                                <br>
                                                                <ul>
                                                                    <li><b>
                                                                            &#8226; Anti-virus & anti-spyware software; personal firewalls
                                                                    </li></b>

                                                                    <p>
                                                                        It is advisable to install anti-virus and anti-spyware software on your system. It will increase your protection against criminals, hackers & fraudsters.
                                                                    </p>

                                                                    <p>It is also important to update your anti-virus and anti-spyware software as frequently as possible. This is to protect against criminals who exploit software bugs in older versions of the anti-virus software to enable them to infect computers.
                                                                    </p>

                                                                </ul>

                                                                <div style="background: transparent; height: 1px; width: 100%; margin-top: 10px;"></div>
                                                                <div class="col-md-6 ">
                                                                    <a href="javascript:;" class="main_0 pull-left" onClick="manageVer(this)">
                                                                        <i class="fa fa-arrow-left"></i>&nbsp;Features & Benefits
                                                                    </a>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <a href="javascript:;" class="main_2 pull-right" onClick="manageVer(this)">
                                                                        Requirements&nbsp;<i class="fa fa-arrow-right"></i>
                                                                    </a>
                                                                </div>

                                </div>

                            </div>



                            <div class="col-md-12 main_22 hidden">

                                <div class="col-md-10 col-md-offset-1 header-bgcolor">
                                    <div class="point-it2"></div>
                                    <h4 class="text-center text_white">Requirements</h4>
                                </div>
                                <div class="col-md-10 col-md-offset-1 text-left" style=" background: #F6F6F6;">

                                    <br>
                                    <ul>
                                        <li>
                                            &#8226; Active Account
                                        </li>
                                    </ul>

                                    <br>
                                    <ul>
                                        <li>
                                            &#8226; Internet enabled devices (computer, tablets, smart phones)
                                        </li>
                                    </ul>

                                    <br>
                                    <ul>
                                        <li>
                                            &#8226; Completed enrollment form/web form
                                        </li>
                                    </ul>

                                    <br>
                                    <ul>
                                        <li>
                                            &#8226; Executed Indemnity (for higher transaction limits up to 5 million Euros (other currency equivalent) for individuals and 100 million Euros (other currency equivalent) for Corporate users)
                                        </li>
                                    </ul>
                                    <br>
                                    <div style="background: transparent; height: 1px; width: 100%; margin-top: 10px;"></div>
                                    <div class="col-md-6 ">
                                        <a href="javascript:;" class="main_1 pull-left" onClick="manageVer(this)">
                                            <i class="fa fa-arrow-left"></i>&nbsp;Security
                                        </a>
                                    </div>
                                    <div class="col-md-6 pull-right"></div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Image Gallery 3 Grid End -->

    <div class="col-md-10 col-md-offset-1 text-center" style="margin-top: 10px; margin-bottom: 10px;">
        <a href="register.php" class="button button-5x covered_but text_white font-control" >
            Enroll Now
        </a>
    </div>


    <div class="container-fluid">

        <div class="" style=" margin-top:0px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="col-sm-mb-sp">
                            <h3 class="my-title" style="margin-bottom: 10px;">Have any Question?</h3>
                            <br>
                            <div class="accordion-default accordion-before">
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                    <div class="panel panel-default">
                                        <div class="panel-heading before-style" role="tab" id="headingOne">
                                            <h4 class="panel-title">
                                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    Each time, I want to transact, I get transaction limit exceeded; what could be wrong and how can it be resolved?

                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                            <div class="panel-body">
                                                <p>
                                                    Please confirm what limit is applicable to you. You may need to give an instruction and execute indemnity at any of our Business Office for higher limits.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading style-none" role="tab" id="headingTwo">
                                            <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    Can I view all my accounts with Internacional Trust Bank using one Internet Banking login ID?

                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                            <div class="panel-body">
                                                <p>
                                                    Yes, when you enroll for Internacional Trust Bank Internet Banking Service, you Can specify which accounts you want access to over the internet and can have access to all of them using one single user ID.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading style-none" role="tab" id="headingThree">
                                            <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    How secure is Internet Banking platform and how can I further secure my profile?

                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                            <div class="panel-body">
                                                <p> Internet Banking is protected with the best-in-class security technology. To further protect your profile, do not share your credentials with anyone, do not click on any suspicious link, when you are in doubt, always contact contactus@cerobank.com
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading style-none" role="tab" id="headingFour">
                                            <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                    I have not used Internet Banking in a long time, how can I start again?
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                            <div class="panel-body">
                                                <p>Getting started again is easy! Click forgot user ID? To retrieve your user ID, then, click forgot password? to retrieve your password. Now, you are good to go.
                                                </p>
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

    <br>


    <div class="container-fluid">
        <div class="row">

            <div class="holdBottom hidden-md hidden-sm hidden-lg">
                <div class="down_button1 text-center">
                    <a href="contact-us.php" class="text_white text-center no_text_deco no_color_on_hover" style=" width: 100%; height: 100%;"><i class="fa fa-envelope text_white"></i>&nbsp; Contact Us</a>
                </div>
                <div class="up_button text-center"><a style="width: 100%; height: 100%;" class="text_white no_text_deco no_color_on_hover" href="login.php" onClick="callSignInModal()">LOG IN</a></div>
                <div class="down_button2 text-center"><a style="width: 100%; height: 100%;" class="no_color_on_hover text_white no_text_deco" target="_blank" href="{{ route('register') }}">OPEN ACCOUNT</a></div>
            </div>


            <div class="control-side hidden hidden-xs">
                <div class="down_button1 text-center" style="width: 100%; background-color: #98C838;" >
                    <a style="width: 100%; height: 100%; line-height:70px;" class="text_white no_text_deco no_color_on_hover" href="login.php" onClick="callSignInModal()">
                        <i class="fa fa-user text_white"></i>&nbsp;Login
                    </a>
                </div>
                <div class="upp_button text-center" style="background: #39A0ED; ">
                    <a target="_blank" href="{{ route('register') }}" class="text_white text-center no_text_deco no_color_on_hover" style=" width: 100%; height: 100%; line-height:70px;">
                        <i class="fa fa-check-circle-o text_white"></i>&nbsp; Open Account</a>
                </div>
            </div>


            <div id="regModal" class="my_modal hideModal rubberBand wow " style="background: url( images/bg_reg.jpg); background-repeat: no-repeat; background-size: cover;">
                <span class="hanle-closer text-center" onClick="hideRegModal();"><a href="javascript:;"><i class="fa fa-times fa-2x text_white"></i></a></span>

                <div class="row theModalBody">
                    <div class="col-md-2 col-md-offset-5 col-sm-4 col-sm-offset-4 col-xs-4 col-xs-offset-4 text-center control-mouse" >
                        <img src="{{ asset('front/images/slider/theMouse.png') }}" class="img-responsive">
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




        </div>
    </div>





    <script>

        function manageVer(a){

            if($(a).hasClass("main_0")){

                $(".main_00").removeClass("hidden");
                $(".main_11").addClass("hidden");
                $(".main_22").addClass("hidden");
                $('.focusHere')[0].scrollIntoView(true);

            }else if($(a).hasClass("main_1")){

                $(".main_00").addClass("hidden");
                $(".main_11").removeClass("hidden");
                $(".main_22").addClass("hidden");
                $('.focusHere')[0].scrollIntoView(true);

            }else if($(a).hasClass("main_2")){

                $(".main_00").addClass("hidden");
                $(".main_11").addClass("hidden");
                $(".main_22").removeClass("hidden");
                $('.focusHere')[0].scrollIntoView(true);

            }

        }

        function toggleFaq(a){

            if($(a).next().hasClass("hidden")){

                $(a).next().removeClass("hidden").addClass("fadeIn");
                var thetext = $(a).find("h3").find("a").text();
                var thetext = thetext.trim();
                //alert(thetext)
                $(a).find("h3").find("a").php(thetext + '<i class="fa fa-angle-up text_black pull-right" style="line-height: 50px;"></i>')


            }else{

                $(a).next().addClass("hidden").removeClass("fadeIn");
                var thetext = $(a).find("h3").find("a").text();
                var thetext = thetext.trim();
                //alert(thetext)
                $(a).find("h3").find("a").php(thetext + '<i class="fa fa-angle-down text_black pull-right" style="line-height: 50px;"></i>')
            }


        }


    </script>

    @endsection
