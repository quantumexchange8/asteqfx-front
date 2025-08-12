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
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('../assets/images/bg/navbarServiceBg-8.webp');
            /* Or use the file you uploaded */
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: bottom center;
        }

        @media only screen and (max-width: 767px) {
            .mg-y {
                margin: 50px 0;
            }

            .pd-y {
                padding: 50px 0;
            }
        }

        @media only screen and (min-width: 768px) {
            .mg-y {
                margin: 100px 0;
            }

            .pd-y {
                padding: 100px 0;
            }
        }

        @media only screen and (min-width: 992px) {
            .sml-content {
                padding: 0 200px;
            }
        }

        .download-tab {
            padding: 0;
            margin: 0;
        }

        .active-dark-mode #pamm-1 {
            content: url({{ asset('assets/images/service/pamm-1-dark.png') }});
        }

        @media only screen and (max-width: 400px) {
            #pamm-1 {
                width: 100%;
            }
        }

        @media only screen and (min-width:401px) and (max-width: 767px) {
            #pamm-1 {
                width: 75%;
            }
        }

        @media only screen and (min-width: 768px) and (max-width: 991px) {
            #pamm-1 {
                width: 60%;
            }
        }

        @media only screen and (min-width: 992px) {
            #pamm-1 {
                width: 85%;
            }
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

        .pamm-card:hover {
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.1);
            transform: translateY(-15px);
        }

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

        .active-dark-mode .highlight {
            font-weight: 600;
            color: #66b3ff;
        }

        .highlight {
            font-weight: 600;
            color: #0044cc;
        }

        .active-dark-mode .bg-pattern-botleft {
            content: url({{ asset('assets/images/service/pamm-1-1-dark.png') }});
        }

        .active-dark-mode .bg-pattern-topright {
            content: url({{ asset('assets/images/service/pamm-1-1-dark.png') }});
        }

        .active-dark-mode .pammStructureImg {
            content: url({{ asset('assets/images/service/pamm-2-1-dark.png') }});
        }

        .active-dark-mode .pammPoolFund {
            content: url({{ asset('assets/images/service/pamm-3-1-dark.png') }});
        }

        .active-dark-mode .pammTradeOutcome {
            content: url({{ asset('assets/images/service/pamm-3-2-dark.png') }});
        }

        .active-dark-mode .pammEarning {
            content: url({{ asset('assets/images/service/pamm-3-3-dark.png') }});
        }

        .active-dark-mode .investorDark {
            content: url({{ asset('assets/images/icons/investor-dark.png') }});
        }

        .active-dark-mode .fundManagerDark {
            content: url({{ asset('assets/images/icons/fundManager-dark.png') }});

        }

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


        @media only screen and (max-width: 575px) {
            .bg-pattern-botleft {
                border-radius: 0px;
            }

            .bg-pattern-topright {
                border-radius: 0px;
            }

            .pamm-card {
                border-radius: 0px;
            }
        }

        .hanger-line {
            counter-reset: step-counter;
        }


        .hanger-line>.col-lg-3:after {
            position: absolute;
            width: 50px;
            height: 50px;
            border: 4px solid var(--color-primary);
            border-radius: 100%;
            left: 50%;
            bottom: calc(100% + 23px);
            transform: translateX(-50%);
            background: #f9f9ff;
            text-align: center;
            font-size: 25px;
            font-weight: 700;
            counter-increment: step-counter;
            content: counter(step-counter);
        }

        @media only screen and (max-width: 575px) {
            .hanger-line {
                gap: 20px;
            }
        }

        @media only screen and (min-width: 576px) and (max-width: 991px) {
            .hanger-line {
                row-gap: 50px;
            }
        }

        .rbt-counterup .inner .icon img,
        .rbt-counterup .inner .rbt-round-icon img {
            max-width: 70px;
        }

        .rbt-categori-list p {
            padding: 30px 0;
        }

        @media only screen and (max-width: 991px) {
            .reverse-flex {
                display: flex;
                flex-direction: column-reverse;
            }
        }

        .feature-style-1 {
            justify-content: center;
        }
    </style>
    <!-- Start Side Vav -->

    <x-sideVav />
    <!-- End Side Vav -->

    <a class="close_side_menu" href="javascript:void(0);"></a>

    <!-- Start breadcrumb Area -->
    <div class="rbt-breadcrumb-default ptb--100 ptb_md--50 ptb_sm--30 bg">
        <div class="container" data-sal="fade" data-sal-duration="600">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner text-center">
                        <div class="section-title text-center">
                            <div id="animatedHeading" class="rbt-elements-area">
                                <h2 class="title">Percentage Allocation Money Management
                                    <br />
                                    <span class="header-caption">
                                        <span class="cd-headline cd-headline clip is-full-width">
                                            <span class="cd-words-wrapper">
                                                <b class="is-visible theme-gradient">(PAMM)</b>
                                                <b class="is-hidden theme-gradient">Your Capital, Their Strategy, Shared
                                                    Success.</b>
                                                <b class="is-hidden theme-gradient">Let Experts Trade. You Earn.</b>
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
                            <li class="rbt-breadcrumb-item active">PAMM</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb Area -->

    <div class="rbt-about-area about-style-1 bg-color-light rbt-section-gap text-center position-relative"
        data-sal="slide-up" data-sal-duration="600">

        <span class="position-absolute bg-pattern-botleft"></span>
        <span class="position-absolute bg-pattern-topright"></span>
        <h2 class="p-3">PAMM Trading Overview</h2>
        <div class="container pamm-card position-relative">
            <!-- Start Single Section  -->
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 text-center">
                    <div class="content">
                        <img id="pamm-1" src="{{ asset('assets/images/service/pamm-1-light.png') }}" alt="PAMM Images"
                            style="position: relative;">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="inner pl--50 pl_sm--5" style="z-index:0;">
                        <p>
                            <span class="highlight">Percentage Allocation Money Management (PAMM)</span> is an
                            innovative investment solution
                            that connects experienced traders with investors seeking to grow their capital without
                            actively trading.
                        </p>
                        <p>
                            In a PAMM setup, professional fund managers execute trades on behalf of multiple investors
                            by pooling their funds into a single managed account.
                            Profits and losses are automatically distributed based on each investor’s contribution,
                            offering a transparent and hands-free way to grow your wealth.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Single Section  -->
    </div>

    <div class="rbt-about-area about-style-1 bg-color-white rbt-section-gapTop text-center">
        <h2 class="p-3">Why Choose ASTEQ FX LIMITED PAMM?</h2>

        <div class="rbt-categories-area bg-color-white">
            <div class="container reverse-flex">
                <ul class="row g-5 nav nav-tabs  justify-content-center" id="myCategoryTab" role="tablist">
                    <!-- Start Category Box Layout  -->
                    <li class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="100" data-sal="slide-up"
                        data-sal-duration="600">
                        <a class="rbt-cat-box rbt-cat-box-1
                        image-overlaping-content with-image-content active"
                            id="cat-tab-1-tab" data-bs-toggle="tab" data-bs-target="#cat-tab-1" role="tab"
                            aria-controls="cat-tab-1" aria-selected="true">
                            <div class="inner">
                                <div class="thumbnail">
                                    <img src="{{ asset('assets/images/service/pammBg-1.jpg') }}" alt="BG Images">
                                </div>
                                <div class="content">
                                    <h5 class="title">Expert-Driven Fund Management</h5>
                                </div>
                            </div>
                        </a>
                    </li>
                    <!-- End Category Box Layout  -->
                    <!-- Start Category Box Layout  -->
                    <li class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="300" data-sal="slide-up"
                        data-sal-duration="600">
                        <a class="rbt-cat-box rbt-cat-box-1 image-overlaping-content with-image-content" id="cate-tab-2-tab"
                            data-bs-toggle="tab" data-bs-target="#cate-tab-2" role="tab" aria-controls="cate-tab-2"
                            aria-selected="false">
                            <div class="inner">
                                <div class="thumbnail">
                                    <img src="{{ asset('assets/images/service/pammBg-2.jpg') }}" alt="BG Images">
                                </div>
                                <div class="content">
                                    <h5 class="title">Competitive Spreads & Low Costs</h5>
                                </div>
                            </div>
                        </a>
                    </li>
                    <!-- End Category Box Layout  -->

                    <!-- Start Category Box Layout  -->
                    <li class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="500" data-sal="slide-up"
                        data-sal-duration="600">
                        <a class="rbt-cat-box rbt-cat-box-1 image-overlaping-content with-image-content" id="cate-tab-3-tab"
                            data-bs-toggle="tab" data-bs-target="#cate-tab-3" role="tab" aria-controls="cate-tab-3"
                            aria-selected="false">
                            <div class="inner">
                                <div class="thumbnail">
                                    <img src="{{ asset('assets/images/service/pammBg-3.jpg') }}" alt="BG Images">
                                </div>
                                <div class="content">
                                    <h5 class="title">High Leverage, Greater Potential</h5>
                                </div>
                            </div>
                        </a>
                    </li>
                    <!-- End Category Box Layout  -->

                    <!-- Start Category Box Layout  -->
                    <li class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="700" data-sal="slide-up"
                        data-sal-duration="600">
                        <a class="rbt-cat-box rbt-cat-box-1 image-overlaping-content with-image-content"
                            id="cate-tab-4-tab" data-bs-toggle="tab" data-bs-target="#cate-tab-4" role="tab"
                            aria-controls="cate-tab-4" aria-selected="false">
                            <div class="inner">
                                <div class="thumbnail">
                                    <img src="{{ asset('assets/images/service/pammBg-4.jpg') }}" alt="BG Images">
                                </div>
                                <div class="content">
                                    <h5 class="title">Secure & Reliable Trading</h5>
                                </div>
                            </div>
                        </a>
                    </li>
                    <!-- End Category Box Layout  -->

                    <!-- Start Category Box Layout  -->
                    <li class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="900" data-sal="slide-up"
                        data-sal-duration="600">
                        <a class="rbt-cat-box rbt-cat-box-1 image-overlaping-content with-image-content"
                            id="cate-tab-5-tab" data-bs-toggle="tab" data-bs-target="#cate-tab-5" role="tab"
                            aria-controls="cate-tab-5" aria-selected="false">
                            <div class="inner">
                                <div class="thumbnail">
                                    <img src="{{ asset('assets/images/service/pammBg-5.jpg') }}" alt="BG Images">
                                </div>
                                <div class="content">
                                    <h5 class="title">Easy & Instant Deposits/Withdrawals</h5>
                                </div>
                            </div>
                        </a>
                    </li>
                    <!-- End Category Box Layout  -->

                </ul>

                <div class="row justify-content-center">
                    <div class="col-12 col-lg-6">
                        <div class="tab-content" id="myCategoryTabContent" data-sal-delay="100" data-sal="slide-up"
                            data-sal-duration="600">
                            <div class="tab-pane fade show active" id="cat-tab-1" role="tabpanel"
                                aria-labelledby="cat-tab-1-tab">
                                <div class="rbt-categori-list medium-size flex-wrap justify-content-center">
                                    <p>Our PAMM structure allows investors to tap into the expertise of proven fund
                                        managers, who retain full control over trading decisions. This ensures consistent
                                        strategy execution and efficient fund performance management.</p>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="cate-tab-2" role="tabpanel" aria-labelledby="cate-tab-2-tab">
                                <div class="rbt-categori-list medium-size flex-wrap justify-content-center">
                                    <p>ASTEQ FX LIMITED provides ultra-tight spreads and a low-commission structure, allowing both
                                        fund managers and investors to maximize returns by minimizing trading costs.</p>

                                </div>
                            </div>

                            <div class="tab-pane fade" id="cate-tab-3" role="tabpanel" aria-labelledby="cate-tab-3-tab">
                                <div class="rbt-categori-list medium-size flex-wrap justify-content-center">
                                    <p>Take advantage of leverage up to 1:2000, enabling you to trade across 5000+
                                        instruments with just a minimal initial investment — all while magnifying your
                                        potential profits.</p>

                                </div>
                            </div>

                            <div class="tab-pane fade" id="cate-tab-4" role="tabpanel" aria-labelledby="cate-tab-4-tab">
                                <div class="rbt-categori-list medium-size flex-wrap justify-content-center">
                                    <p>Trade with confidence on secure and globally trusted platforms including MT4, MT5,
                                        and WebTrader — ensuring safety, speed, and transparency every step of the way.</p>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="cate-tab-5" role="tabpanel" aria-labelledby="cate-tab-5-tab">
                                <div class="rbt-categori-list medium-size flex-wrap justify-content-center">
                                    <p>Enjoy a seamless trading experience with a wide range of secure, instant deposit and
                                        withdrawal options, designed to make fund management as simple as possible.</p>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>



            </div>
        </div>
    </div>

    <div class="rbt-about-area about-style-1 bg-color-white rbt-section-gapTop text-center" data-sal="slide-up"
        data-sal-duration="600">
        <h2 class="p-3">How Does a PAMM Account Work?</h2>
        <div class="container">
            <!-- Start Single Section  -->
            <div class="row g-5 align-items-center pd-y">
                <div class="col-12 col-lg-7" data-sal-delay="100" data-sal="slide-right" data-sal-duration="600">
                    <div class="content">
                        <img src="{{ asset('assets/images/service/pamm-2-1-light.png') }}" alt="MT5 Images"
                            class="pammStructureImg">
                    </div>
                </div>
                <div class="col-12 col-lg-5 pamm-card" data-sal-delay="300" data-sal="slide-left"
                    data-sal-duration="600">
                    <div class="inners">
                        <div class="content text-center">
                            <h3 class="title">PAMM Trading Structure</h3>
                            <div class="row g-5">
                                <!-- Start List Style  -->
                                <div class="col-lg-12">
                                    <div class="rbt-feature-wrapper">
                                        <div class="rbt-feature feature-style-2" style="align-items: center;">
                                            <div class="icon" style="background: none;">
                                                <img src="{{ asset('assets/images/icons/logo-only.png') }}"
                                                    alt="Icons Images">
                                            </div>
                                            <div class="feature-content">
                                                <h6 class="feature-title">The Broker</h6>
                                                <p class="feature-description">Provides the PAMM platform and
                                                    infrastructure.
                                                </p>
                                            </div>
                                        </div>

                                        <div class="rbt-feature feature-style-2" style="align-items: center;">
                                            <div class="icon" style="background: none;">
                                                <img src="{{ asset('assets/images/icons/fundManager-light.png') }}"
                                                    alt="Icons Images" class="fundManagerDark">
                                            </div>
                                            <div class="feature-content">
                                                <h6 class="feature-title">Fund Managers (Money Managers)</h6>
                                                <p class="feature-description">Trade professionally on behalf of investors
                                                    and earn a performance fee on profits.
                                                </p>
                                            </div>
                                        </div>

                                        <div class="rbt-feature feature-style-2" style="align-items: center;">
                                            <div class="icon" style="background: none;">
                                                <img src="{{ asset('assets/images/icons/investor-light.png') }}"
                                                    alt="Icons Images" class="investorDark">
                                            </div>
                                            <div class="feature-content">
                                                <h6 class="feature-title">Investors </h6>
                                                <p class="feature-description">Provide capital and choose which fund
                                                    manager to follow.
                                                </p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- End List Style  -->
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

        <div class="container">
            <!-- Start Single Section  -->
            <div class="row g-5 align-items-center pd-y reverse-flex">
                <div class="col-12 col-lg-5 pamm-card" data-sal-delay="300" data-sal="slide-left"
                    data-sal-duration="600">
                    <div class="inner">
                        <div class="content text-center">
                            <h3 class="title">Fund Pooling</h3>
                            <div class="row g-5">
                                <!-- Start List Style  -->
                                <div class="col-lg-12">
                                    <p>3 investors decide to access professional trading without directly managing their
                                        trades:
                                    </p>
                                    <div class="rbt-feature-wrapper">
                                        <div class="rbt-feature feature-style-1">
                                            <div class="icon bg-pink-opacity">
                                                <strong>1</strong>
                                            </div>
                                            <div class="feature-content">
                                                <p class="feature-description">Investor 1 deposits <strong> $40,000
                                                    </strong>
                                                </p>
                                            </div>
                                        </div>

                                        <div class="rbt-feature feature-style-1">
                                            <div class="icon bg-primary-opacity">
                                                <strong>2</strong>
                                            </div>
                                            <div class="feature-content">
                                                <p class="feature-description">Investor 2 deposits <strong> $30,000
                                                    </strong></p>
                                            </div>
                                        </div>

                                        <div class="rbt-feature feature-style-1">
                                            <div class="icon bg-coral-opacity">
                                                <strong>3</strong>
                                            </div>
                                            <div class="feature-content">
                                                <p class="feature-description">Investor 3 deposits <strong> $30,000
                                                    </strong></p>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="pt--20">They select a skilled Fund Manager who charges a 15% performance fee
                                        on profits.</p>
                                </div>
                                <!-- End List Style  -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-7" data-sal-delay="100" data-sal="slide-right" data-sal-duration="600">
                    <div class="content">
                        <img src="{{ asset('assets/images/service/pamm-3-1-light.png') }}" alt="MT5 Images"
                            class="pammPoolFund">
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <!-- Start Single Section  -->
            <div class="row g-5 align-items-center pd-y">
                <div class="col-12 col-lg-7" data-sal-delay="100" data-sal="slide-right" data-sal-duration="600">
                    <div class="content">
                        <img src="{{ asset('assets/images/service/pamm-3-2-light.png') }}" alt="MT5 Images"
                            class="pammTradeOutcome">
                    </div>
                </div>
                <div class="col-12 col-lg-5 pamm-card" data-sal-delay="300" data-sal="slide-left"
                    data-sal-duration="600">
                    <div class="inner">
                        <div class="content text-center">
                            <h3 class="title">Trading Outcome</h3>
                            <div class="row g-5">
                                <!-- Start List Style  -->
                                <div class="col-lg-12">
                                    <p>Over the trading period, the manager generates a 10% return, earning $10,000 in total
                                        profit.
                                    </p>
                                    <div class="rbt-feature-wrapper">
                                        <div class="rbt-feature feature-style-1">
                                            <div class="icon bg-pink-opacity">
                                                <strong>1</strong>
                                            </div>
                                            <div class="feature-content">
                                                <p class="feature-description"> Performance Fee:<strong> 15% of $10,000 =
                                                        $1,500</strong>
                                                </p>
                                            </div>
                                        </div>

                                        <div class="rbt-feature feature-style-1">
                                            <div class="icon bg-primary-opacity">
                                                <strong>2</strong>
                                            </div>
                                            <div class="feature-content">
                                                <p class="feature-description">Net Profit for Distribution: <strong> $8,500
                                                    </strong></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End List Style  -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <!-- Start Single Section  -->
            <div class="row g-5 align-items-center pd-y reverse-flex">
                <div class="col-12 col-lg-5  pamm-card" data-sal-delay="300" data-sal="slide-left"
                    data-sal-duration="600">
                    <div class="inner">
                        <div class="content text-center">
                            <h3 class="title">Profit Distribution</h3>
                            <div class="row g-5">
                                <!-- Start List Style  -->
                                <div class="col-lg-12">
                                    <p>The earning profit is distributed to the investors based on the % contribution.
                                    </p>
                                    <div class="rbt-feature-wrapper">
                                        <div class="rbt-feature feature-style-1">
                                            <div class="icon bg-pink-opacity">
                                                <strong>1</strong>
                                            </div>
                                            <div class="feature-content">
                                                <p class="feature-description">Investor 1 (40%) receives<strong>
                                                        $3,400</strong>
                                                </p>
                                            </div>
                                        </div>

                                        <div class="rbt-feature feature-style-1">
                                            <div class="icon bg-primary-opacity">
                                                <strong>2</strong>
                                            </div>
                                            <div class="feature-content">
                                                <p class="feature-description">Investor 2 (30%) receives<strong> $2,550
                                                    </strong></p>
                                            </div>
                                        </div>

                                        <div class="rbt-feature feature-style-1">
                                            <div class="icon bg-coral-opacity">
                                                <strong>3</strong>
                                            </div>
                                            <div class="feature-content">
                                                <p class="feature-description">Investor 3 (30%) receives<strong> $2,550
                                                    </strong></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End List Style  -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-7" data-sal-delay="100" data-sal="slide-right" data-sal-duration="600">
                    <div class="content">
                        <img src="{{ asset('assets/images/service/pamm-3-3-light.png') }}" alt="PAMM Images"
                            class="pammEarning">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Single Section  -->
    </div>

    </div>

    <!-- Start Single Section  -->
    <div class="bg-color-light mg-y row align-items-center justify-content-center position-relative"
        style="padding-bottom: 80px;">
        <span class="position-absolute bg-pattern-botleft"></span>
        <span class="position-absolute bg-pattern-topright"></span>
        <div class="container row g-5 align-items-center justify-content-center"
            style="margin-left: auto; margin-right: auto;">
            <div class="col-lg-6" data-sal-delay="300" data-sal="slide-right" data-sal-duration="600">
                <div class="inner">
                    <div class="content text-center" style="padding: 30px 0;">
                        <h2 class="title">Steps to start your PAMM journey</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-5 hanger-line">
            <!-- Start Single Counter  -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-12  mt_md--60 mt_sm--60" data-sal-delay="100" data-sal="slide-up"
                data-sal-duration="800">
                <div class="rbt-counterup rbt-hover-03 border-bottom-gradient">
                    <div class="top-circle-shape"></div>
                    <div class="inner">
                        <div class="rbt-round-icon">
                            <img src="{{ asset('assets/images/icons/pamm-1.png') }}" alt="Icons Images">
                        </div>
                        <div class="content">
                            <h3>Create <br />an Account</h3>
                            <span class="subtitle">Sign up or log in to access PAMM investment features.</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Counter  -->

            <!-- Start Single Counter  -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-12 mt--60 mt_md--30 mt_sm--30 mt_mobile--60" data-sal-delay="300"
                data-sal="slide-up" data-sal-duration="800">
                <div class="rbt-counterup rbt-hover-03 border-bottom-gradient">
                    <div class="top-circle-shape"></div>
                    <div class="inner">
                        <div class="rbt-round-icon">
                            <img src="{{ asset('assets/images/icons/pamm-4.png') }}" alt="Icons Images">
                        </div>
                        <div class="content">
                            <h3>Select a <br />
                                Fund Manager</h3>
                            <span class="subtitle">Browse from a list of vetted professional traders and choose based
                                on
                                metrics.</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Counter  -->

            <!-- Start Single Counter  -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-12 mt_md--60 mt_sm--60" data-sal-delay="500" data-sal="slide-up"
                data-sal-duration="800">
                <div class="rbt-counterup rbt-hover-03 border-bottom-gradient">
                    <div class="top-circle-shape"></div>
                    <div class="inner">
                        <div class="rbt-round-icon">
                            <img src="{{ asset('assets/images/icons/pamm-2.png') }}" alt="Icons Images">
                        </div>
                        <div class="content">
                            <h3>Allocate Your Investment</h3>
                            <span class="subtitle">Decide how much to invest and allocate funds to the selected
                                manager.</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Counter  -->

            <!-- Start Single Counter  -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-12 mt--60 mt_md--30 mt_sm--30 mt_mobile--60" data-sal-delay="700"
                data-sal="slide-up" data-sal-duration="800">
                <div class="rbt-counterup rbt-hover-03 border-bottom-gradient">
                    <div class="top-circle-shape"></div>
                    <div class="inner">
                        <div class="rbt-round-icon">
                            <img src="{{ asset('assets/images/icons/pamm-3.png') }}" alt="Icons Images">
                        </div>
                        <div class="content">
                            <h3>Track Profits & Performance</h3>
                            <span class="subtitle">Monitor performance and withdraw profits at your convenience.</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Counter  -->
        </div>
        <a class="rbt-btn btn-gradient" href="#" style="width: auto; margin-top:50px;">Create Account</a>
    </div>
    <!-- End Single Section  -->

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
                            <p class="color-white"> Start Your Trading Journey with ASTEQ FX LIMITED Today! Join our
                                community of
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

    <x-separator />
@endsection
