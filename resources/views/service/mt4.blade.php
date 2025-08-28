@extends('layout.layout')

@php
    $footer = 'true';
    $header = 'true';
    $topToBottom = 'true';
@endphp

@section('content')
    <style>
        .split-wrapper {
            margin-left: auto;
            margin-right: auto;
            text-align: center;
        }

        .card-hover {
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease;
            padding: 50px;
        }

        .card-hover:hover {
            transform: translateY(-5px);
        }

        .active-dark-mode .mac-logo {
            content: url({{ asset('assets/images/icons/apple-light.png') }});
        }

        .bg {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(55 52 52 / 50%)), url('../assets/images/bg/navbarServiceBg-2.jpg');
            /* Or use the file you uploaded */
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
        }

        @media only screen and (max-width: 767px) {
            .mg-y {
                margin: 50px 0;
            }

            .pd-y {
                padding: 50px 25px;
            }
        }

        @media only screen and (min-width: 768px) {
            .mg-y {
                margin: 100px 0;
            }

            .pd-y {
                padding: 100px 50px;
            }
        }

        @media only screen and (min-width: 992px) {
            .sml-content {
                padding: 0 200px;
            }
        }
    </style>
    <!-- Start Side Vav -->

    <x-sideVav />
    <!-- End Side Vav -->

    <a class="close_side_menu" href="javascript:void(0);"></a>

    <!-- Start breadcrumb Area -->
    <div class="rbt-breadcrumb-default ptb--100 ptb_md--50 ptb_sm--30 bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12" data-sal="fade" data-sal-duration="600">
                    <div class="breadcrumb-inner text-center">
                        <div class="section-title text-center">
                            <div id="animatedHeading" class="rbt-elements-area">
                                <h2 class="title">MetaTrader 4
                                    <br />
                                    <span class="header-caption">
                                        <span class="cd-headline cd-headline clip is-full-width">
                                            <span class="cd-words-wrapper">
                                                <b class="is-visible theme-gradient">(MT4)</b>
                                                <b class="is-hidden theme-gradient">Precision. Speed. Control.</b>
                                                <b class="is-hidden theme-gradient">Next-Level Trading Starts with MT5</b>
                                            </span>
                                        </span>
                                    </span>
                                </h2>
                            </div>
                        </div>
                        <ul class="page-list">
                            <li class="rbt-breadcrumb-item"><a href="{{ route('Home') }}">Home</a></li>
                            <li>
                                <div class="icon-right"><i class="feather-chevron-right"></i></div>
                            </li>
                            <li class="rbt-breadcrumb-item active">MT4</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb Area -->

    <div class="rbt-split-area bg-color-white overflow-hidden" style="padding-top:30px;" data-sal-delay="0"
        data-sal="slide-up" data-sal-duration="800">
        <div class="wrapper">
            <div class="rbt-splite-style">
                <div class="split-wrapper">
                    <div class="row g-0 align-items-center">
                        <div class="col-lg-12 col-xl-12 col-12">
                            <div class="split-inner">
                                <div class="shape">
                                    <img src="{{ asset('assets/images/course/category4.png') }}" style="border-radius: 8px;"
                                        alt="Shape Images">
                                </div>
                                <h5 class="description sal-animate" data-sal="slide-up" data-sal-duration="400"
                                    data-sal-delay="300"> Join millions of traders worldwide on MetaTrader 4 (MT4) — the
                                    industry’s most trusted trading platform. With advanced charting tools, real-time
                                    analysis, and automated trading through Expert Advisors (EAs), MT4 delivers fast,
                                    flexible, and efficient trading.
                                </h5>
                                <h5 class="description sal-animate" data-sal="slide-up" data-sal-duration="400"
                                    data-sal-delay="300">

                                    Designed for both beginners and pros, MT4 is your gateway to smarter trading.
                                </h5>
                                <h5>
                                    — Access the
                                    markets from anywhere with desktop or mobile and trade confidently with ASTEQ FX LIMITED —
                                </h5>
                                <!-- Start List Style  -->
                                <div class="col-lg-6 col-md-8 col-12"
                                    style="margin-left: auto;margin-right:auto; padding-top:50px;">
                                    <div class="bg-gradient-7 rbt-shadow-box">
                                        <ul class="plan-offer-list rbt-list-white-opacity ">
                                            <li class="color-white">
                                                <i class="feather-check"></i> Secure and Reliable Trading Environment
                                            </li>
                                            <li class="color-white">
                                                <i class="feather-check"></i> Multi-Device Access
                                            </li>
                                            <li class="color-white">
                                                <i class="feather-check"></i> Real-Time Market Data and Execution
                                            </li>
                                            <li class="color-white">
                                                <i class="feather-check"></i> Automated Trading with Expert Advisors (EAs)
                                            </li>
                                            <li class="color-white">
                                                <i class="feather-check"></i> Powerful Charting and Analysis Tools
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End List Style  -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="rbt-tab-area bg-color-white " data-sal-delay="0" data-sal="slide-up" data-sal-duration="800">
        <div class="container">
            <div class="row row row--30 align-items-center download-tab ">
                <div class="col-md-8 col-lg-7 col-xl-6 mt_md--40 mt_sm--40 order-2 order-lg-1"
                    style="margin-left: auto; margin-right:auto;">
                    <div class="rbt-default-tab" style="box-shadow: 0 1px 3px rgba(0, 0, 0, 0.2); border-radius:20px;">
                        <ul class="nav nav-tabs tab-button" role="tablist"
                            style=" border-bottom: 1px solid rgb(236, 233, 233);">

                            <li class="nav-item tabs__tab col-4" role="presentation">
                                <button class="nav-link active" id="home-tab-5" data-bs-toggle="tab"
                                    data-bs-target="#android" type="button" role="tab" aria-controls="android"
                                    aria-selected="true" style="border-radius: 20px 0 0 0; width:100%; height:100%;">
                                    <div class="icon">
                                        <img src="{{ asset('assets/images/icons/android.png') }}" width="45px"
                                            height="45px" alt="Icons Images" style="padding: 10px;">
                                    </div>
                                    Android
                                </button>
                            </li>
                            <li class="nav-item tabs__tab col-4" role="presentation">
                                <button class="nav-link" id="home-tab-5" data-bs-toggle="tab" data-bs-target="#windows"
                                    type="button" role="tab" aria-controls="windows" aria-selected="true"
                                    style="width:100%; height:100%;">
                                    <div class="icon">
                                        <img src="{{ asset('assets/images/icons/windows.png') }}" width="45px"
                                            height="45px" alt="Icons Images" style="padding: 10px;">
                                    </div>
                                    Windows
                                </button>
                            </li>
                            <li class="nav-item tabs__tab col-4" role="presentation">
                                <button class="nav-link" id="home-tab5" data-bs-toggle="tab" data-bs-target="#Mac"
                                    type="button" role="tab" aria-controls="Mac" aria-selected="true"
                                    style="border-radius: 0 20px 0 0; width:100%; height:100%;">
                                    <div class="icon">
                                        <img src="{{ asset('assets/images/icons/mac-os-logo.png') }}" class="mac-logo"
                                            width="45px" height="45px" alt="Icons Images" style="padding: 10px;">
                                    </div>
                                    Mac
                                </button>
                            </li>
                            {{-- <li class="nav-item tabs__tab col-4" role="presentation">
                                <button class="nav-link" id="home-tab5" data-bs-toggle="tab" data-bs-target="#Mac"
                                    type="button" role="tab" aria-controls="Mac" aria-selected="false">
                                    <div class="icon">
                                        <img src="{{ asset('assets/images/icons/mac-os-logo.png') }}" 
                                            width="45px" height="45px" alt="Icons Images" style="padding: 10px;">Mac
                                    </div>
                                </button>
                            </li> --}}
                        </ul>
                        <div class="rainbow-tab-content tab-content" style="border-radius: 0 0 20px 20px;">
                            <div class="tab-pane fade show active" id="android" role="tabpanel"
                                aria-labelledby="android" style="text-align: center;">
                                <a class="rbt-btn btn-gradient hover-icon-reverse" href="#">
                                    <span class="icon-reverse-wrapper">
                                        <span class="btn-text">Download</span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        <span class="btn-icon"><img
                                                src="{{ asset('assets/images/icons/android-light.png') }}" width="45px"
                                                height="45px" alt="Icons Images" style="padding: 10px;"></i></span>
                                    </span>
                                </a>
                            </div>

                            <div class="tab-pane fade" id="windows" role="tabpanel" aria-labelledby="windows"
                                style="text-align: center;">
                                <a class="rbt-btn btn-gradient hover-icon-reverse" href="#">
                                    <span class="icon-reverse-wrapper">
                                        <span class="btn-text">Download</span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        <span class="btn-icon"><img
                                                src="{{ asset('assets/images/icons/windows-light.png') }}" width="45px"
                                                height="45px" alt="Icons Images" style="padding: 10px;"></i></span>
                                    </span>
                                </a>
                            </div>

                            <div class="tab-pane fade" id="Mac" role="tabpanel" aria-labelledby="Mac"
                                style="text-align: center;">
                                <a class="rbt-btn btn-gradient hover-icon-reverse" href="#">
                                    <span class="icon-reverse-wrapper">
                                        <span class="btn-text">Download</span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        <span class="btn-icon"><img
                                                src="{{ asset('assets/images/icons/apple-light.png') }}" width="45px"
                                                height="45px" alt="Icons Images" style="padding: 10px;"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Start Course Area -->
    <div class="rbt-course-area rbt-section-gapBottom">

        <!-- Start Single Section  -->
        <div class="row g-5 align-items-center mg-y pd-y">
            <div class="col-lg-6" data-sal-delay="100" data-sal="slide-right" data-sal-duration="600">
                <div class="content text-center">
                    <img src="{{ asset('assets/images/service/mt4-1.avif') }}" alt="MT4 Images">
                </div>
            </div>
            <div class="col-lg-6" data-sal-delay="300" data-sal="slide-left" data-sal-duration="600">
                <div class="inner pl--50 pl_sm--5">

                    <div class="content text-start">
                        <div class="icon">
                            <img src="{{ asset('assets/images/icons/mt4-1.png') }}" width="60px" height="60px"
                                alt="Icons Images" style="margin-bottom: 20px;">
                        </div>
                        <h3 class="title">Advanced Charting Tools</h3>
                        <p class="rbt-card-text" style="font-size: 18px;">Maximize your strategy with MT5’s built-in
                            support for automated
                            trading and professional forex trading signals. Choose from thousands of verified signal
                            providers in the MetaTrader Market and automatically mirror the trades of top-performing
                            professionals. </p>
                        <br />
                        <p class="rbt-card-text" style="font-size: 18px;">
                            You can also explore and purchase over 2,000 expert advisors (EAs) and
                            technical indicators to customize and automate your trading experience.</p>

                    </div>
                </div>
            </div>
        </div>
        <!-- End Single Section  -->

        <!-- Start Single Section  -->
        <div class="row g-5 align-items-center bg-color-light mg-y pd-y">
            <div class="col-lg-6" data-sal-delay="300" data-sal="slide-right" data-sal-duration="600">
                <div class="inner pl--50 pl_sm--5">

                    <div class="content text-start">
                        <div class="icon">
                            <img src="{{ asset('assets/images/icons/mt4-2.png') }}" width="60px" height="60px"
                                alt="Icons Images" style="margin-bottom: 20px;">
                        </div>
                        <h3 class="title">Why Traders Choose MT4?</h3>
                        <p class="rbt-card-text" style="font-size: 18px;">MetaTrader 4 remains a top choice for
                            traders globally thanks to its intuitive design and comprehensive functionality. The
                            platform combines simplicity with powerful features, making it ideal for both beginners and
                            professionals. </p>
                        <br />
                        <p class="rbt-card-text" style="font-size: 18px;">Access your account on desktop, web, or
                            mobile — and trade with confidence anytime, anywhere.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-sal-delay="100" data-sal="slide-left" data-sal-duration="600">
                <div class="content text-center">
                    <img src="{{ asset('assets/images/service/mt4-2.png') }}" alt="MT4 Images">
                </div>
            </div>
        </div>
        <!-- End Single Section  -->

        <!-- Start Single Section  -->
        <div class="row g-5 align-items-center mg-y pd-y">
            <div class="col-lg-6" data-sal-delay="100" data-sal="slide-right" data-sal-duration="600">
                <div class="content text-center">
                    <img src="{{ asset('assets/images/service/mt4-3.jpg') }}" alt="MT4 Images"
                        style="border-radius: 20px;">
                </div>
            </div>
            <div class="col-lg-6" data-sal-delay="300" data-sal="slide-left" data-sal-duration="600">
                <div class="inner pl--50 pl_sm--5">

                    <div class="content text-start">
                        <div class="icon">
                            <img src="{{ asset('assets/images/icons/mt4-3.png') }}" width="60px" height="60px"
                                alt="Icons Images" style="margin-bottom: 20px;">
                        </div>
                        <h3 class="title">Automated Trading with Expert Advisors (EAs)</h3>
                        <p class="rbt-card-text" style="font-size: 18px;">Boost your trading efficiency with Expert
                            Advisors (EAs) — fully customisable automation tools within MT4.</p>
                        <br />
                        <p class="rbt-card-text" style="font-size: 18px;"> These smart trading bots analyse price data
                            and execute trades based on predefined strategies, allowing you to automate your trading
                            around the clock, without manual intervention.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Single Section  -->

        <!-- Start Single Section  -->
        <div class="row g-5 align-items-center bg-color-light mg-y pd-y">
            <div class="col-lg-6" data-sal-delay="300" data-sal="slide-right" data-sal-duration="600">
                <div class="inner pl--50 pl_sm--5">

                    <div class="content text-start">
                        <div class="icon">
                            <img src="{{ asset('assets/images/icons/mt4-4.png') }}" width="60px" height="60px"
                                alt="Icons Images" style="margin-bottom: 20px;">
                        </div>
                        <h3 class="title">Real-Time Trading Signals</h3>
                        <p class="rbt-card-text" style="font-size: 18px;">Stay informed and responsive with MT4’s
                            built-in trading signal system. Subscribe to free or paid signal providers and automatically
                            mirror their trades.</p>
                        <br />
                        <p class="rbt-card-text" style="font-size: 18px;">Each signal is ranked by performance,
                            helping you identify high-potential strategies and act on opportunities as they arise — with
                            no guesswork.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-sal-delay="100" data-sal="slide-left" data-sal-duration="600">
                <div class="content text-center">
                    <img src="{{ asset('assets/images/service/mt4-4.png') }}" alt="MT4 Images" style="height: 350px;">
                </div>
            </div>
        </div>
        <!-- End Single Section  -->
    </div>
    <!-- End Course Area -->

    <!-- Start CallTo Action Area  -->
    <div class="rbt-call-to-action-area bg-gradient-8" style="padding: 50px 0;">
        <div class="rbt-callto-action rbt-cta-default style-6">
            <div class="container" data-sal-delay="100" data-sal="fade" data-sal-duration="1000">
                <div class="row g-5 align-items-center content-wrapper">
                    <div class="col-xxl-3 col-xl-3 col-lg-6">
                        <div class="inner">
                            <div class="content text-start">
                                <h2 class="title color-white mb--0">Trade With Us</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                        <div class="inner-content text-start">
                            <p class="color-white">
                                Start Your Trading Journey with ASTEQ FX LIMITED Today! Join our community of successful traders
                                and
                                experience the power of our advanced trading platform.
                            </p>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-6">
                        <div class="call-to-btn text-start text-xl-end">
                            <a class="rbt-btn btn-white hover-icon-reverse" href="https://login.asteqfx.com/">
                                <span class="icon-reverse-wrapper">
                                    <span class="btn-text">Try It Now</span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-separator />
@endsection
