@extends('layout.layout')

@php
    $topToBottom = 'true';
    $header = 'true';
@endphp

@section('content')
    <!-- Start Side Vav -->
    <x-sideVav />
    <!-- End Side Vav -->
    <style>
        .content-1 {
            max-height: 0;
            padding-top: 8px;
            overflow: hidden;
            transition: max-height 1.5s ease;
        }

        .inner:hover .content-1 {
            max-height: 250px;
        }

        .banner-bg-section {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(55 52 52 / 50%)), url('../assets/images/about/aboutbg-1.jpg');
            /* Or use the file you uploaded */
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            padding: 120px 0;
            height: 100%;
        }
    </style>
    <a class="close_side_menu" href="javascript:void(0);"></a>

    <!-- Start Banner Area -->
    <div class="rbt-banner-area rbt-banner-8 variation-02 banner-bg-section">
        <div class="container">
            <div class="row g-5 align-items-center" data-sal="fade" data-sal-duration="600">
                <div class="col-lg-10 offset-lg-1">
                    <div class="content">
                        <div class="inner text-center">

                            <h1 class="title" style="color: white">About Us
                            </h1>
                            <p class="description has-medium-font-size mt--20" style="color: white">Lorem, ipsum dolor sit
                                amet consectetur
                                adipisicing elit. Ex vero nam recusandae quisquam deleniti, eum distinctio totam? Corrupti,
                                aliquam ducimus dolorem aperiam a, cumque in quod dicta, dolore sint autem!
                            </p>
                            <div class="slider-btn rbt-button-group justify-content-center">
                                <a class="rbt-btn hover-icon-reverse btn-white" href="{{ route('contact') }}">
                                    <span class="icon-reverse-wrapper">
                                        <span class="btn-text">Contact Us</span>
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
    </div>
    <!-- End Banner Area -->

    <div class="rbt-about-area about-style-1 bg-color-white rbt-section-gapBottom">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6" data-sal-delay="100" data-sal="slide-right" data-sal-duration="600">
                    <div class="content">
                        <img src="{{ asset('assets/images/about/about1.jpg') }}" alt="About Images">
                    </div>
                </div>
                <div class="col-lg-6" data-sal-delay="300" data-sal="slide-right" data-sal-duration="600">
                    <div class="inner pl--50 pl_sm--5">
                        <div class="content text-start">
                            <span class="rbt-badge-6 bg-primary-opacity">About Lucky Star</span>
                            <h3 class="title">Welcome to Lucky Star — Your Gateway to Smarter Trading.</h3>
                            <p class="description mt--30"><strong>Lucky Star trading platform</strong> empowers you
                                with advanced tools, real-time insights, and seamless execution for a better trading
                                experience.</p>
                            <p class="description">Whether you're a beginner or seasoned trader, our platform
                                provides the flexibility, security, and support you need to navigate the markets
                                with confidence.</p>
                            <div class="read-more-btn mt--40">
                                <a class="rbt-btn rbt-marquee-btn radius-round btn-gradient" href="#">
                                    <span data-text="Start Trading For Free">
                                        Start Trading For Free
                                    </span>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row g-5 hanger-line" data-sal-delay="100" data-sal="slide-up" data-sal-duration="800">
            <!-- Start Single Counter  -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="rbt-counterup rbt-hover-03 border-bottom-gradient">
                    <div class="top-circle-shape"></div>
                    <div class="inner">
                        <div class="rbt-round-icon">
                            <img src="{{ asset('assets/images/icons/counter-01.png') }}" alt="Icons Images">
                        </div>
                        <div class="content">
                            <h3 class="counter"><span class="odometer" data-count="500">00</span>
                            </h3>
                            <span class="subtitle">Learners &amp; counting</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Counter  -->

            <!-- Start Single Counter  -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-12 mt--60 mt_md--30 mt_sm--30 mt_mobile--60">
                <div class="rbt-counterup rbt-hover-03 border-bottom-gradient">
                    <div class="top-circle-shape"></div>
                    <div class="inner">
                        <div class="rbt-round-icon">
                            <img src="{{ asset('assets/images/icons/counter-02.png') }}" alt="Icons Images">
                        </div>
                        <div class="content">
                            <h3 class="counter"><span class="odometer" data-count="800">00</span>
                            </h3>
                            <span class="subtitle">Courses & Video</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Counter  -->

            <!-- Start Single Counter  -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-12 mt_md--60 mt_sm--60">
                <div class="rbt-counterup rbt-hover-03 border-bottom-gradient">
                    <div class="top-circle-shape"></div>
                    <div class="inner">
                        <div class="rbt-round-icon">
                            <img src="{{ asset('assets/images/icons/counter-03.png') }}" alt="Icons Images">
                        </div>
                        <div class="content">
                            <h3 class="counter"><span class="odometer" data-count="1000">00</span>
                            </h3>
                            <span class="subtitle">Certified Students</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Counter  -->

            <!-- Start Single Counter  -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-12 mt--60 mt_md--30 mt_sm--30 mt_mobile--60">
                <div class="rbt-counterup rbt-hover-03 border-bottom-gradient">
                    <div class="top-circle-shape"></div>
                    <div class="inner">
                        <div class="rbt-round-icon">
                            <img src="{{ asset('assets/images/icons/counter-04.png') }}" alt="Icons Images">
                        </div>
                        <div class="content">
                            <h3 class="counter"><span class="odometer" data-count="100">00</span>
                            </h3>
                            <span class="subtitle">Registered Enrolls</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Counter  -->
        </div>


        <!-- Start Advance Tab  -->
        <div class="rbt-advance-tab-area rbt-section-gapTop bg-color-white" style="margin-bottom: 120px;">
            <div class="container">
                <div class="row g-5" data-sal-delay="200" data-sal="slide-up" data-sal-duration="1500">
                    <div class="col-lg-4 col-md-12 col-sm-12 col-12 mt_md--30 mt_sm--30 order-2 order-lg-1">
                        <div class="advance-tab-button advance-tab-button-1">
                            <ul class="nav nav-tabs tab-button-list" id="aboutmyTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a href="#" class="nav-link tab-button" id="home-tab" data-bs-toggle="tab"
                                        data-bs-target="#home" role="tab" aria-controls="home" aria-selected="true">
                                        <div class="tab">
                                            <h4 class="title">Our Vision</h4>
                                            <p class="description">Use Doob template you can build a corporate
                                                website a short time.</p>
                                        </div>
                                    </a>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <a href="#" class="nav-link tab-button" id="profile-tab" data-bs-toggle="tab"
                                        data-bs-target="#profile" role="tab" aria-controls="profile"
                                        aria-selected="false">
                                        <div class="tab">
                                            <h4 class="title">Our Mission</h4>
                                            <p class="description">Use Doob template you can build a corporate
                                                website a short time.</p>
                                        </div>
                                    </a>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <a href="#" class="nav-link tab-button active" id="coreValues-tab"
                                        data-bs-toggle="tab" data-bs-target="#coreValues" role="tab"
                                        aria-controls="coreValues" aria-selected="false">
                                        <div class="tab">
                                            <h4 class="title">Core Values</h4>
                                            <p class="description">Use Doob template you can build a corporate
                                                website a short time.</p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12 col-sm-12 col-12 order-1 order-lg-2 align-content-center">
                        <div class="tab-content">
                            <div class="tab-pane fade advance-tab-content-1" id="home" role="tabpanel"
                                aria-labelledby="home-tab">
                                <div class="inner"
                                    style="text-align: center;box-shadow: 0 1px 3px rgba(0, 0, 0, 0.2);padding:50px; border-radius: 10px;">
                                    <div class="section-title text-start">
                                        <span class="subtitle bg-coral-opacity">Vision</span>
                                    </div>
                                    <p class="description">Far far away, behind the word mountains, far from the
                                        countries Vokalia and Consonantia, there live the blind texts. Separated they live
                                        in
                                        Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                </div>

                            </div>
                            <div class="tab-pane fade advance-tab-content-1" id="profile" role="tabpanel"
                                aria-labelledby="profile-tab">
                                <div class="inner"
                                    style="text-align: center;box-shadow: 0 1px 3px rgba(0, 0, 0, 0.2);padding:50px; border-radius: 10px;">
                                    <div class="section-title text-start">
                                        <span class="subtitle bg-coral-opacity">Mission</span>
                                    </div>
                                    <p class="description">Far far away, behind the word mountains, far from the
                                        countries Vokalia and Consonantia, there live the blind texts. Separated they live
                                        in
                                        Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                </div>
                            </div>

                            <div class="tab-pane fade advance-tab-content-1 active show" id="coreValues" role="tabpanel"
                                aria-labelledby="coreValues-tab">
                                <div class="row g-5">
                                    <!-- Start Category Box Layout  -->
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="100"
                                        data-sal="slide-up" data-sal-duration="400">
                                        <div class="rbt-cat-box rbt-cat-box-1 variation-4 text-center">
                                            <div class="inner">
                                                <div class="icons">
                                                    <i class="theme-gradient feather-layout"></i>
                                                </div>
                                                <div class="content">
                                                    <h5 class="title">Innovation</h5>
                                                    <div class="content-1">
                                                        <p class="description">We embrace forward-thinking solutions and
                                                            cutting-edge technology to constantly improve our services,
                                                            keeping
                                                            you ahead in a fast-evolving financial landscape.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Category Box Layout  -->

                                    <!-- Start Category Box Layout  -->
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="300"
                                        data-sal="slide-up" data-sal-duration="400">
                                        <div class="rbt-cat-box rbt-cat-box-1 variation-4 text-center roundCV">
                                            <div class="inner">
                                                <div class="icons">
                                                    <i class="theme-gradient feather-dollar-sign"></i>
                                                </div>
                                                <div class="content">
                                                    <h5 class="title">Fund Security</h5>
                                                    <div class="content-1">
                                                        <p class="description">
                                                            Your financial safety is our top priority. We follow strict
                                                            regulatory standards and advanced security measures to ensure
                                                            your
                                                            funds are always protected and secure.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Category Box Layout  -->

                                    <!-- Start Category Box Layout  -->
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="500"
                                        data-sal="slide-up" data-sal-duration="400">
                                        <div class="rbt-cat-box rbt-cat-box-1 variation-4 text-center roundCV">
                                            <div class="inner">
                                                <div class="icons">
                                                    <i class="theme-gradient feather-eye"></i>
                                                </div>
                                                <div class="content">
                                                    <h5 class="title">Transparency</h5>
                                                    <div class="content-1">
                                                        <p class="description">
                                                            We operate with honesty and openness, offering clear
                                                            communication
                                                            and real-time information so you can trade with complete trust
                                                            and
                                                            confidence.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Category Box Layout  -->

                                    <!-- Start Category Box Layout  -->
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="700"
                                        data-sal="slide-up" data-sal-duration="400">
                                        <div class="rbt-cat-box rbt-cat-box-1 variation-4 text-center roundCV">
                                            <div class="inner">
                                                <div class="icons">
                                                    <i class="theme-gradient feather-check"></i>
                                                </div>
                                                <div class="content">
                                                    <h5 class="title">Quality</h5>
                                                    <div class="content-1">
                                                        <p class="description">We are committed to delivering premium
                                                            trading
                                                            experiences, top-tier platforms, and exceptional support to meet
                                                            the
                                                            highest standards of excellence.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Category Box Layout  -->


                                    <!-- Start Category Box Layout  -->
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="900"
                                        data-sal="slide-up" data-sal-duration="400">
                                        <div class="rbt-cat-box rbt-cat-box-1 variation-4 text-center roundCV">
                                            <div class="inner">
                                                <div class="icons">
                                                    <i class="theme-gradient feather-align-left"></i>
                                                </div>
                                                <div class="content">
                                                    <h5 class="title">Competence</h5>
                                                    <div class="content-1">
                                                        <p class="description">
                                                            Our expert team brings deep industry knowledge and professional
                                                            insight, providing you with reliable guidance and performance
                                                            you
                                                            can count on.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Category Box Layout  -->

                                    <!-- Start Category Box Layout  -->
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="1000"
                                        data-sal="slide-up" data-sal-duration="400">
                                        <div class="rbt-cat-box rbt-cat-box-1 variation-4 text-center roundCV">
                                            <div class="inner">
                                                <div class="icons">
                                                    <i class="theme-gradient feather-user-check"></i>
                                                </div>
                                                <div class="content">
                                                    <h5 class="title">Customer-Centric</h5>
                                                    <div class="content-1">
                                                        <p class="description">
                                                            You’re at the heart of everything we do. We tailor our services
                                                            to
                                                            your
                                                            needs, ensuring responsive support and a personalized trading
                                                            journey.
                                                        </p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Category Box Layout  -->

                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Advance Tab  -->
        </div>
    </div>

    <!-- Start CallTo Action Area  -->
    <div class="rbt-call-to-action-area bg-gradient-8" style="padding: 30px 0;">
        <div class="rbt-callto-action rbt-cta-default style-6">
            <div class="container" data-sal-delay="200" data-sal="fade" data-sal-duration="1000">
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
                            <p class="color-white"> Start Your Trading Journey with Lucky Star Today! Join our community of
                                successful traders and
                                experience the power of our advanced trading platform.
                            </p>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-6">
                        <div class="call-to-btn text-start text-xl-end">
                            <a class="rbt-btn btn-white hover-icon-reverse" href="#">
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

    <!-- End CallTo Action Area  -->

    <x-separator />
    <!-- Start Footer aera -->

    <x-footer />
    <!-- End Footer aera -->

    <x-separator />
@endsection
