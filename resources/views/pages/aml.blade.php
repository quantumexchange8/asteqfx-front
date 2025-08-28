@extends('layout.layout')

@php
    $footer = 'true';
    $header = 'true';
    $topToBottom = 'true';
@endphp

@section('content')
    <!-- Start Side Vav -->
    <x-sideVav />
    <!-- End Side Vav -->
    <a class="close_side_menu" href="javascript:void(0);"></a>

    <style>
        /* ====== Banner Styles ====== */
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
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(55 52 52 / 50%)),
                url('../assets/images/about/aboutbg-1.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            padding: 120px 0;
            height: 100%;
        }

        /* ====== Pamm / Section Styles ====== */
        .bg-pattern-botleft {
            background: url('../assets/images/service/pamm-1-1.png') no-repeat center center;
            background-size: cover;
            width: 300px;
            height: 300px;
            bottom: 0;
            left: 0;
            opacity: 0.8;
        }

        .bg-pattern-topright {
            background: url('../assets/images/service/pamm-1-1.png') no-repeat center center;
            background-size: cover;
            width: 300px;
            height: 300px;
            top: 0;
            right: 0;
            opacity: 0.8;
            rotate: 180deg;
        }

        .active-dark-mode .bg-pattern-botleft {
            content: url({{ asset('assets/images/service/pamm-1-1-dark.png') }});
        }

        .active-dark-mode .bg-pattern-topright {
            content: url({{ asset('assets/images/service/pamm-1-1-dark.png') }});
        }

        .active-dark-mode .pamm-card {
            background: linear-gradient(to bottom right, #32373b, #473a3a);
        }

        .active-dark-mode .pamm-card h2,
        .active-dark-mode .pamm-card p {
            color: white;
        }

        .pamm-card {
            background: linear-gradient(to bottom right, #ffffff, #f7faff);
            border-radius: 20px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
            padding: 40px;
            color: #333;
            transition: box-shadow 0.5s ease, transform 0.5s ease;
        }

        /* .pamm-card:hover {
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.1);
            transform: translateY(-15px);
        } */

        .pamm-card h2 {
            margin-top: 0;
            color: #111;
            font-size: 28px;
        }

        .pamm-card p {
            font-size: 18px;
            line-height: 1.6;
            color: #555;
        }

        .highlight {
            font-weight: 600;
            color: #0044cc;
        }

        .active-dark-mode .highlight {
            color: #66b3ff;
        }

        /* ====== Compliance Cards Styles ====== */
        .bg-img {
            content: '';
            position: absolute;
            bottom: 0;
            right: 0;
            width: 100%;
            height: 100%;
            background-image: url('../assets/images/service/stockBg-1.png');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: right;
            opacity: 0.05;
            z-index: 0;
            border-radius: 10px;
        }

        .bg-img-2 {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('../assets/images/service/forexBg-2.png');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            opacity: 0.05;
            z-index: 0;
            border-radius: 10px;
        }

        i.fas.fa-circle {
            color: black;
        }

        .active-dark-mode i.fas.fa-circle {
            color: white;
        }
    </style>

    <!-- Start Banner Area -->
    <div class="rbt-banner-area rbt-banner-8 variation-02 banner-bg-section">
        <div class="container">
            <div class="row g-5 align-items-center" data-sal="fade" data-sal-duration="600">
                <div class="col-lg-10 offset-lg-1">
                    <div class="content">
                        <div class="inner text-center">
                            <h1 class="title" style="color: white">
                                Anti-Money Laundering (AML) Policy
                            </h1>
                            <p class="description has-medium-font-size mt--20" style="color: white">
                                At AsteqFX, we are committed to maintaining the highest standards of integrity
                                and compliance with all applicable anti-money laundering (AML) and
                                counter-terrorist financing (CTF) laws and regulations.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner Area -->

    <!-- Start Commitment Section -->
    <div class="rbt-about-area about-style-1 bg-color-light rbt-section-gap text-center position-relative" data-sal="slide-up" data-sal-duration="600">

        <span class="position-absolute bg-pattern-botleft"></span>
        <span class="position-absolute bg-pattern-topright"></span>
        <h2 class="p-3">Our Commitment</h2>
        <div class="container pamm-card position-relative">
            <div class="row g-5 align-items-center">
                <div class="col-12">
                    <div class="inner pl--50 pl_sm--5 text-center" style="z-index:0;">
                        <p>
                            We have put in place strict policies and procedures to detect,
                            prevent, and report any suspicious activities that could be
                            related to money laundering or the financing of terrorism.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Commitment Section -->

    <!-- Start Compliance Cards Section -->
    <div class="rbt-course-banner-area rbt-section-gap">
        <div class="container">
            <div class="row g-5 justify-content-center">

                <!-- Customer Verification (KYC) Card -->
                <div class="col-12 col-md-6 col-lg-5" data-sal-delay="300" data-sal="slide-right" data-sal-duration="600">
                    <div class="modern-course-features-box h-100">
                        <div class="content">
                            <h4 class="title mt--2">Customer Verification (KYC)</h4>
                            <ul class="rbt-list-style-1" style="margin-top: 15px;">
                                <li>
                                    <span style="display: flex; justify-content: center; margin-top: 4px;">
                                        <i class="fas fa-circle " style="font-size: 10px;"></i>
                                    </span>
                                    <span>We conduct thorough Know Your Customer (KYC) checks before establishing any business relationship.</span>
                                </li>
                                <li>
                                    <span style="display: flex; justify-content: center; margin-top: 4px;">
                                        <i class="fas fa-circle " style="font-size: 10px;"></i>
                                    </span>
                                    <span>Customers may be required to provide valid identification documents, proof of address, and additional information when necessary.</span>
                                </li>
                                <li>
                                    <span style="display: flex; justify-content: center; margin-top: 4px;">
                                        <i class="fas fa-circle " style="font-size: 10px;"></i>
                                    </span>
                                    <span>Accounts may not be activated until verification is complete.</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Monitoring & Reporting Card -->
                <div class="col-12 col-md-6 col-lg-5" data-sal-delay="500" data-sal="slide-left" data-sal-duration="600">
                    <div class="modern-course-features-box h-100">
                        <div class="content">
                            <h4 class="title mt--2">Monitoring & Reporting</h4>
                            <ul class="rbt-list-style-1" style="margin-top: 15px;">
                                <li>
                                    <span style="display: flex; justify-content: center; margin-top: 4px;">
                                        <i class="fas fa-circle " style="font-size: 10px;"></i>
                                    </span>
                                    <span>Transactions are continuously monitored to identify unusual or suspicious activity.</span>
                                </li>
                                <li>
                                    <span style="display: flex; justify-content: center; margin-top: 4px;">
                                        <i class="fas fa-circle " style="font-size: 10px;"></i>
                                    </span>
                                    <span>Any activity that raises concern may result in requests for further documentation.</span>
                                </li>
                                <li>
                                    <span style="display: flex; justify-content: center; margin-top: 4px;">
                                        <i class="fas fa-circle " style="font-size: 10px;"></i>
                                    </span>
                                    <span>Suspicious transactions will be reported to the relevant regulatory authorities in accordance with applicable laws.</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Compliance Cards Section -->

    <!-- Start Advance Tab -->
    <div class="rbt-advance-tab-area rbt-section-gapTop bg-color-white" style="margin-bottom: 120px;">
        <div class="container">
            <div class="row g-5" data-sal-delay="200" data-sal="slide-up" data-sal-duration="1500">
                
                <!-- Tab Buttons -->
                <div class="col-lg-4 col-md-12 order-2 order-lg-1">
                    <div class="advance-tab-button advance-tab-button-1">
                        <ul class="nav nav-tabs tab-button-list" id="amlTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a href="#" class="nav-link tab-button active" id="responsibility-tab" 
                                    data-bs-toggle="tab" data-bs-target="#responsibility" role="tab" 
                                    aria-controls="responsibility" aria-selected="true">
                                    <div class="tab">
                                        <h4 class="title">Your Responsibility</h4>
                                        <p class="description">What we expect from every client.</p>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a href="#" class="nav-link tab-button" id="goal-tab" 
                                    data-bs-toggle="tab" data-bs-target="#goal" role="tab" 
                                    aria-controls="goal" aria-selected="false">
                                    <div class="tab">
                                        <h4 class="title">Our Goal</h4>
                                        <p class="description">How we protect your interests.</p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Tab Content -->
                <div class="col-lg-8 col-md-12 order-1 order-lg-2">
                    <div class="tab-content">

                        <!-- Responsibility -->
                        <div class="tab-pane fade show active advance-tab-content-1" id="responsibility" role="tabpanel" aria-labelledby="responsibility-tab">
                            <div class="inner" style="box-shadow: 0 1px 3px rgba(0,0,0,0.2); padding:50px; border-radius: 10px;">
                                <div class="section-title text-start">
                                    <span class="subtitle bg-coral-opacity">Your Responsibility</span>
                                </div>
                                <p class="description">
                                    By using our services, you agree to provide accurate and up-to-date information and cooperate with our compliance procedures. 
                                    Attempts to use AsteqFX for money laundering or other illicit purposes will result in account termination and may be reported to authorities.
                                </p>
                            </div>
                        </div>

                        <!-- Goal -->
                        <div class="tab-pane fade advance-tab-content-1" id="goal" role="tabpanel" aria-labelledby="goal-tab">
                            <div class="inner" style="box-shadow: 0 1px 3px rgba(0,0,0,0.2); padding:50px; border-radius: 10px;">
                                <div class="section-title text-start">
                                    <span class="subtitle bg-coral-opacity">Our Goal</span>
                                </div>
                                <p class="description">
                                    We value transparency and integrity. Our AML policy is designed to protect our clients and the wider financial system while ensuring a secure and trusted trading environment.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Advance Tab -->
@endsection
