@extends('layouts.home.app')


@section('content')
    <!-- Preloader -->
    <div id="preloader">
        <div class="preload-content">
            <div id="dream-load"></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area wow fadeInDown" data-wow-delay="0.2s">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="dreamNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="index-2.html"><img src="{{ asset('logo/bfs-logo-white.png') }}" alt="logo" width="50"> BitfrontStake.</a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- close btn -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul id="nav">
                                <li><a href="#home">Home</a></li>
                                <li><a href="#about">About</a></li>
                                <li><a href="#services">Services</a></li>
                                <li><a href="#roadmap">Roadmap</a></li>
                                <li><a href="#team">Team</a></li>
                                <li><a href="#contact">Contact</a></li>
                            </ul>

                            <!-- Button -->
                            <a href="/login" class="btn login-btn ml-50">Log in</a>
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Welcome Area Start ##### -->
    <section class="welcome_area clearfix dzsparallaxer auto-init fullwidth" data-options='{direction: "normal"}' id="home">
        <div class="divimage dzsparallaxer--target" style="width: 101%; height: 130%; background-image: url(img/bg-img/bg-2.jpg)"></div>

        <!-- Hero Content -->
        <div class="hero-content dark-blue">
            <!-- blip -->
            <div class="dream-blip blip1"></div>
            <div class="dream-blip blip2"></div>
            <div class="dream-blip blip3"></div>
            <div class="dream-blip blip4"></div>

            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <!-- Welcome Content -->
                    <div class="col-12 col-lg-6 col-md-12">
                        <div class="welcome-content ill">
                            <div class="promo-section">
                                <div class="integration-link">
                                    <span class="integration-icon">
                                        <img src="{{ asset('home/img/svg/img-dollar.svg') }}" width="24" height="24" alt="">
                                    </span>
                                    <span class="integration-text">Discover a new ways to enjoy your World!</span>
                                </div>
                            </div>
                            <h1 class="wow fadeInUp" data-wow-delay="0.2s">Buy & sell crypto easier than ever</h1>
                            <p class="wow fadeInUp" data-wow-delay="0.3s">We have over 15 year exprience in business consultting arena. We have over 15 year exprience in business consultting arena and artficial intelligence.</p>
                            <div class="dream-btn-group wow fadeInUp" data-wow-delay="0.4s">
                                <a href="#" class="btn dream-btn mr-3">Learn More</a>
                                <a href="#" class="btn dream-btn">Contact Us</a>
                            </div>
                        </div>
                    </div>
                    <!-- Welcome Video Area -->
                    <div class="col-12 col-lg-6 col-md-12">
                        <div class="main-ilustration main-ilustration-4 wow fadeInUp" data-wow-delay="0.5s">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Welcome Area End ##### -->

    <div class="vertical-social">
        <ul>
            <li><a href="#"><i class="fa fa-telegram" aria-hidden="true"></i></a></li>
        </ul>
    </div>

    <section class="features section-padding-100-0">

        <div class="section-heading text-center">
            <!-- Dream Dots -->
            <div class="dream-dots justify-content-center wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                <span></span><span></span><span></span><span></span><span></span><span></span><span></span>
            </div>
            <h2 class="wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">How it works</h2>
            <p class="wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis accumsan nisi Ut ut felis congue nisl hendrerit commodo.</p>
        </div>

        <div class="container">
            <div class="row">
                <div class="service-img-wrapper how col-lg-6 col-md-12 col-sm-12">
                    <div class="image-box">
                        <img src="{{ asset('home/img/phone.png') }}" class="center-block img-responsive phone-img" alt="">
                    </div>
                </div>
                <div class="services-column col-lg-6 offset-lg-0 col-md-10 offset-md-1 col-xs-10 offset-xs-1">
                    <!--Services Block Four-->
                    <div class="services-block-four how">
                        <div class="inner-box">
                            <div class="step">1</div>
                            <h3><a href="#">Powerfull Mobile and Online App</a></h3>
                            <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium modi assumenda beatae provident non hic eum dolores natus, vitae, quae, facere perferendis.</div>

                        </div>
                    </div>

                    <!--Services Block Four-->
                    <div class="services-block-four how">
                        <div class="inner-box">
                            <div class="step">2</div>
                            <h3><a href="#">Brings more Transparency and Speed</a></h3>
                            <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium modi assumenda beatae provident non hic eum dolores natus, vitae, quae, facere perferendis.</div>
                        </div>
                    </div>

                    <!--Services Block Four-->
                    <div class="services-block-four how" style="margin-bottom:0">
                        <div class="inner-box">
                            <div class="step">3</div>
                            <h3><a href="#">Special for Multiple Use Capabilities</a></h3>
                            <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium modi assumenda beatae provident non hic eum dolores natus, vitae, quae, facere perferendis.</div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <!-- ##### trust Area Start ##### -->
    <div class="trust-section section-padding-100">
        <div class="section-heading text-center">
            <!-- Dream Dots -->
            <div class="dream-dots justify-content-center wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                <span></span><span></span><span></span><span></span><span></span><span></span><span></span>
            </div>
            <h2 class="wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">We are trusted</h2>
            <p class="wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis accumsan nisi Ut ut felis congue nisl hendrerit commodo.</p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                    <!-- Single Cool Fact -->
                    <div class="trust-item text-center wow fadeInUp" data-wow-delay="0.2s">
                        <div class="ico-platform-logo">
                            <img src="{{ asset('home/img/ico-platforms/1.png') }}" alt="">
                        </div>
                        <!-- Single Cool Detail -->
                        <div class="check">
                            <!-- <div class="value">8.9</div> -->
                            <div class="check-icon"></div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                    <!-- Single Cool Fact -->
                    <div class="trust-item text-center wow fadeInUp" data-wow-delay="0.3s">
                        <div class="ico-platform-logo">
                            <img src="{{ asset('home/img/ico-platforms/2.png') }}" alt="">
                        </div>
                        <!-- Single Cool Detail -->
                        <div class="check">
                            <div class="value">8.9</div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                    <!-- Single Cool Fact -->
                    <div class="trust-item text-center wow fadeInUp" data-wow-delay="0.4s">
                        <div class="ico-platform-logo">
                            <img src="{{ asset('home/img/ico-platforms/3.png') }}" alt="">
                        </div>
                        <!-- Single Cool Detail -->
                        <div class="check">
                            <!-- <div class="value">8.9</div> -->
                            <div class="check-icon"></div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                    <!-- Single Cool Fact -->
                    <div class="trust-item text-center wow fadeInUp" data-wow-delay="0.5s">
                        <div class="ico-platform-logo">
                            <img src="{{ asset('home/img/ico-platforms/4.png') }}" alt="">
                        </div>
                        <!-- Single Cool Detail -->
                        <div class="check">
                            <!-- <div class="value">8.9</div> -->
                            <div class="check-icon"></div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                    <!-- Single Cool Fact -->
                    <div class="trust-item text-center wow fadeInUp" data-wow-delay="0.6s">
                        <div class="ico-platform-logo">
                            <img src="{{ asset('home/img/ico-platforms/5.png') }}" alt="">
                        </div>
                        <!-- Single Cool Detail -->
                        <div class="check">
                            <div class="value">7.4</div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                    <!-- Single Cool Fact -->
                    <div class="trust-item text-center wow fadeInUp" data-wow-delay="0.7s">
                        <div class="ico-platform-logo">
                            <img src="{{ asset('home/img/ico-platforms/6.png') }}" alt="">
                        </div>
                        <!-- Single Cool Detail -->
                        <div class="check">
                            <!-- <div class="value">8.9</div> -->
                            <div class="check-icon"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- ##### trust Area End ##### -->

    <!-- ##### About Us Area Start ##### -->
    <section class="about-us-area section-padding-0-100 clearfix" id="about">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-12 col-lg-6">
                    <div class="welcome-meter wow fadeInUp" data-wow-delay="0.7s">
                        <img src="{{ asset('home/img/svg/about1.svg') }}" class="img-responsive center-block" alt="">
                        <!-- client meta -->
                        <div class="growing-company text-center mt-30 wow fadeInUp" data-wow-delay="0.8s">
                            <p>* Already growing up <span class="counter">5236</span> company</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="who-we-contant">
                        <!-- Dream Dots -->
                        <div class="dream-dots wow fadeInUp" data-wow-delay="0.2s">
                            <span></span><span></span><span></span><span></span><span></span><span></span><span></span>
                        </div>
                        <h4 class="wow fadeInUp" data-wow-delay="0.3s">We complete every project with extra care as customer need.</h4>
                        <p class="wow fadeInUp" data-wow-delay="0.4s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at dictum risus, non suscipit arcu. Quisque aliquam posuere tortor, sit amet convallis nunc scelerisque in.</p>
                        <p class="wow fadeInUp" data-wow-delay="0.5s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore eius molestiae facere, natus reprehenderit eaque eum, autem ipsam. Magni, error. Tempora odit laborum iure inventore possimus laboriosam qui nam. Fugit!</p>
                        <a class="btn dream-btn mt-30 wow fadeInUp" data-wow-delay="0.6s" href="#">Read More</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ##### About Us Area End ##### -->

    <!-- ##### About Us Area Start ##### -->
    <section class="about-us-area section-padding-0-100 clearfix">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-12 col-lg-6">
                    <div class="who-we-contant">
                        <!-- Dream Dots -->
                        <div class="dream-dots wow fadeInUp" data-wow-delay="0.2s">
                            <span></span><span></span><span></span><span></span><span></span><span></span><span></span>
                        </div>
                        <h4 class="wow fadeInUp" data-wow-delay="0.3s">We complete every project with extra care as customer need.</h4>
                        <p class="wow fadeInUp" data-wow-delay="0.4s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at dictum risus, non suscipit arcu. Quisque aliquam posuere tortor, sit amet convallis nunc scelerisque in.</p>
                        <p class="wow fadeInUp" data-wow-delay="0.5s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo quo laboriosam, dolorum ducimus similique aliquam consequuntur saepe numquam suscipit praesentium fuga eveniet error assumenda eos quasi doloribus ullam autem, quisquam aliquam consequuntur saepe numquam suscipit similique!</p>
                        <a class="btn dream-btn mt-30 wow fadeInUp" data-wow-delay="0.6s" href="#">Read More</a>
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="welcome-meter wow fadeInUp" data-wow-delay="0.7s">
                        <img src="{{ asset('home/img/solution.png') }}" class="center-block" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### About Us Area End ##### -->

    <!-- ##### Our Services Area Start ##### -->
    <section class="our_services_area section-padding-100-0 clearfix" id="services">
        <div class="container">

            <div class="section-heading text-center">
                <!-- Dream Dots -->
                <div class="dream-dots justify-content-center wow fadeInUp" data-wow-delay="0.2s">
                    <span></span><span></span><span></span><span></span><span></span><span></span><span></span>
                </div>
                <h2 class="wow fadeInUp" data-wow-delay="0.3s">Our Core Services</h2>
                <p class="wow fadeInUp" data-wow-delay="0.4s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis accumsan nisi Ut ut felis congue nisl hendrerit commodo.</p>
            </div>


            <div class="row">
                <div class="col-12 col-sm-6 col-lg-4">
                    <!-- Content -->
                    <div class="service_single_content text-center mb-100 wow fadeInUp" data-wow-delay="0.2s">
                        <!-- Icon -->
                        <div class="service_icon">
                            <img src="{{ asset('home/img/services/1.svg') }}" alt="">
                        </div>
                        <h6>Smart Trading Modules</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla neque quam, maximus ut accumsan ut, posuere sit Lorem ipsum.</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <!-- Content -->
                    <div class="service_single_content text-center mb-100 wow wow fadeInUp" data-wow-delay="0.3s">
                        <!-- Icon -->
                        <div class="service_icon">
                            <img src="{{ asset('home/img/services/2.svg') }}" alt="">
                        </div>
                        <h6>Adaptive Social Assistant</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla neque quam, maximus ut accumsan ut, posuere sit Lorem ipsum.</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <!-- Content -->
                    <div class="service_single_content text-center mb-100 wow fadeInUp" data-wow-delay="0.4s">
                        <!-- Icon -->
                        <div class="service_icon">
                            <img src="{{ asset('home/img/services/3.svg') }}" alt="">
                        </div>
                        <h6>Analyzer of the News </h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla neque quam, maximus ut accumsan ut, posuere sit Lorem ipsum.</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <!-- Content -->
                    <div class="service_single_content text-center mb-100 wow fadeInUp" data-wow-delay="0.5s">
                        <!-- Icon -->
                        <div class="service_icon">
                            <img src="{{ asset('home/img/services/4.svg') }}" alt="">
                        </div>
                        <h6>Exchange Order Management</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla neque quam, maximus ut accumsan ut, posuere sit Lorem ipsum.</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <!-- Content -->
                    <div class="service_single_content text-center mb-100 wow fadeInUp" data-wow-delay="0.6s">
                        <!-- Icon -->
                        <div class="service_icon">
                            <img src="{{ asset('home/img/services/5.svg') }}" alt="">
                        </div>
                        <h6>Module of Price Notification</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla neque quam, maximus ut accumsan ut, posuere sit Lorem ipsum.</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <!-- Content -->
                    <div class="service_single_content text-center mb-100 wow fadeInUp" data-wow-delay="0.7s">
                        <!-- Icon -->
                        <div class="service_icon">
                            <img src="{{ asset('home/img/services/6.svg') }}" alt="">
                        </div>
                        <h6>Crypto Trading Platform</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla neque quam, maximus ut accumsan ut, posuere sit Lorem ipsum.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Our Services Area End ##### -->

    <!-- ##### Subscribe Area start ##### -->
    <section class="container " style="padding-bottom: 0px" id="start">
        <div class="subscribe section-padding-100-0">
            <div class="row">
                <div class="col-sm-12">
                    <div class="subscribe-wrapper">
                        <div class="section-heading text-center">
                            <h2 class="wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">Don’t Miss ICO News And Updates!</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis accumsan nisi Ut ut felis congue nisl hendrerit commodo.</p>
                        </div>
                        <div class="service-text">

                            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-xs-12 text-center">
                                <div class="group">
                                    <input type="text" name="subject" required="">
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label>enter your email</label>
                                    <button class="dream-btn"><i class="fa fa-paper-plane-o"></i></button>
                                </div>
                            </div>
                            <div class="col-lg-5 col-lg-offset-1 col-sm-12 text-center">
                                <span class="telegram-text">Join our chat: </span>
                                <a href="#" class="button"><i class="fa fa-telegram"></i>Telegram</a>
                            </div>
                            <div class="col-lg-5 col-sm-12 text-center">
                                <ul class="list-unstyled list-inline social-list">
                                    <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-github-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-medium"></i></a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ##### Subscribe Area End ##### -->

    <!-- ##### FAQ & Timeline Area Start ##### -->
    <div class="faq-timeline-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-7 col-md-12">
                    <div class="section-heading">
                        <!-- Dream Dots -->
                        <div class="dream-dots wow fadeInUp" data-wow-delay="0.2s">
                            <span></span><span></span><span></span><span></span><span></span><span></span><span></span>
                        </div>
                        <h2 class="wow fadeInUp" data-wow-delay="0.3s">Frequently Asked Questions</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.4s" style="margin-left:0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis accumsan nisi Ut ut felis congue nisl hendrerit commodo.</p>
                    </div>

                    <div class="dream-faq-area">
                        <dl>
                            <!-- Single FAQ Area -->
                            <dt class="wave wow fadeInUp" data-wow-delay="0.2s">What are the objectives of this token?</dt>
                            <dd class="wow fadeInUp" data-wow-delay="0.3s">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore omnis quaerat nostrum, pariatur ipsam sunt accusamus enim necessitatibus est fugiat, assumenda dolorem, deleniti corrupti cupiditate ipsum, dolorum voluptatum esse error?</p>
                            </dd>
                            <!-- Single FAQ Area -->
                            <dt class="wave wow fadeInUp" data-wow-delay="0.3s">What is Token Sale and pre-sale?</dt>
                            <dd>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore omnis quaerat nostrum, pariatur ipsam sunt accusamus enim necessitatibus est fugiat, assumenda dolorem, deleniti corrupti cupiditate ipsum, dolorum voluptatum esse error?</p>
                            </dd>
                            <!-- Single FAQ Area -->
                            <dt class="wave wow fadeInUp" data-wow-delay="0.4s">What is the pre-sale start date?</dt>
                            <dd>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore omnis quaerat nostrum, pariatur ipsam sunt accusamus enim necessitatibus est fugiat, assumenda dolorem, deleniti corrupti cupiditate ipsum, dolorum voluptatum esse error?</p>
                            </dd>
                            <!-- Single FAQ Area -->
                            <dt class="wave wow fadeInUp" data-wow-delay="0.5s">how may I take part in pre-sale?</dt>
                            <dd>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore omnis quaerat nostrum, pariatur ipsam sunt accusamus enim necessitatibus est fugiat, assumenda dolorem, deleniti corrupti cupiditate ipsum, dolorum voluptatum esse error?</p>
                            </dd>
                        </dl>
                    </div>
                </div>

                <div class="col-12 col-lg-5 offset-lg-0 col-md-8 offset-md-2 col-sm-10 offset-sm-1">

                    <div class="ico-counter">
                        <div class="counter-down">

                            <div class="content">
                                <div class="conuter-header">
                                    <h3 class="text-center">TOKEN SALE ENDS IN</h3>
                                </div>
                                <div class="counterdown-content">

                                    <div class="ico-sales-status mb-15 o-hidden">
                                         <div class="pull-left">
                                             <h3 class="dollar-earning">$7,575,357</h3>
                                             <p style="padding-left:10px">Worth of DREAM tokens</p>
                                         </div>
                                         <div class="pull-right">
                                             <h3 class="btc-earning">9.764 <span>BTC</span></h3>
                                             <p>BTC Raised</p>
                                         </div>
                                     </div>
                                    <!-- Countdown  -->
                                    <div class="count-down titled circled text-center">
                                        <div class="simple_timer"></div>
                                    </div>
                                    <div class="ico-progress">
                                        <ul class="list-unstyled list-inline clearfix mb-10">
                                            <li class="title">33m</li>
                                            <li class="strength">75m</li>
                                        </ul>
                                        <!-- skill strength -->
                                        <div class="current-progress">
                                            <div class="progress-bar has-gradient" style="width: 75%"></div>
                                        </div>
                                        <span class="pull-left">Softcap in 103 days</span>
                                        <span class="pull-right">Token Hardcap</span>
                                    </div>
                                    <div class="text-center">
                                        <a href="#" class="button mt-30">Buy More Tokens</a>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                    <div class="ico-docs">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="doc-element">
                                    <a class="document-entry" href="#" target="_blank"><span class="title">WhitePaper</span></a>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="doc-element">
                                    <a class="document-entry" href="#" target="_blank"><span class="title">OnePager</span></a>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="doc-element">
                                    <a class="document-entry" href="#" target="_blank"><span class="title">Rating Review</span></a>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="doc-element">
                                    <a class="document-entry" href="#" target="_blank"><span class="title">Marketing Plan</span></a>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- ##### FAQ & Timeline Area End ##### -->



@endsection
