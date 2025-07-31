@extends('layout.layout')

@php
    $footer = 'true';
    $header = 'true';
    $topToBottom = 'true';
@endphp

@section('content')
    <style>
        .bg {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('../assets/images/bg/navbarAccBg-2.jpg');
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

        .active-dark-mode .highlight {
            font-weight: 600;
            color: #66b3ff;
        }

        .highlight {
            font-weight: 600;
            color: #0044cc;
        }

        .wrapper {
            height: 100%;
        }

        .rbt-btn.btn-gradient {
            border: 2px solid white;
            background-image: linear-gradient(to right, var(--color-primary), #6680af, #6680af, var(--color-primary));
        }

        .rbt-btn.btn-border {
            border: none;
            color: white;
        }

        .rbt-btn.btn-border:hover {
            background: #657DAE;
        }

        .advance-pricing .pricing-left .price-wrapper .price-amount {
            color: white;
        }

        .advance-pricing .pricing-left {
            background: linear-gradient(354deg, rgba(50, 84, 138, 1) 0%, rgba(101, 125, 174, 1) 50%, rgba(127, 145, 190, 1) 100%);
            border-radius: 10px;
        }

        .active-dark-mode .advance-pricing .pricing-left {
            background: linear-gradient(354deg, rgb(151 174 209) 0%, rgb(157 178 221) 50%, rgb(81 105 167) 100%);
        }

        .active-dark-mode .rbt-btn.btn-border {
            color: white;
            border: none;
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
                                <h2 class="title">ECN Standard Account
                                    <br />
                                    <span class="header-caption">
                                        <span class="cd-headline cd-headline clip is-full-width">
                                            <span class="cd-words-wrapper">
                                                <b class="is-visible theme-gradient">Trade at the Speed of the Market.</b>
                                                <b class="is-hidden theme-gradient">Precision Trading Starts Here.</b>
                                                <b class="is-hidden theme-gradient">Built for Pros. Trusted by Experts.</b>
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
                            <li class="rbt-breadcrumb-item active">ECN Standard Account</li>
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
        <h2 class="p-3">What is a ECN Standard Account?</h2>
        <div class="container pamm-card position-relative">
            <!-- Start Single Section  -->
            <div class="row g-5 align-items-center">
                <div class="col-12">
                    <div class="inner pl--50 pl_sm--5 text-center" style="z-index:0;">
                        <p>
                            An <span class="highlight">ECN (Electronic Communication Network)</span> connects traders
                            directly to the
                            interbank market—matching their trades with other participants (like banks, hedge funds, and
                            other
                            traders) without a dealing desk.
                        </p>
                        <p>This provides tighter spreads, faster execution, and more
                            transparency.

                            It's ideal for experienced traders who want raw pricing and high-speed access to the market.
                        </p>

                    </div>
                </div>
            </div>
        </div>
        <!-- End Single Section  -->


    </div>

    <div class="rbt-categories-area rbt-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h2 class="title">Key Features</h2>
                    </div>
                </div>
            </div>
            <div class="row g-5 mt--30 justify-content-center">
                <!-- Start Category Box Layout  -->
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 rbt-cat-box rbt-cat-box-1 text-center" data-sal-delay="100"
                    data-sal="slide-up" data-sal-duration="600">
                    <div class="inner wrapper">
                        <div class="icons">
                            <img src="{{ asset('assets/images/icons/stpAcc-5.png') }}" alt="Icons Images">
                        </div>
                        <div class="content">
                            <h5 class="title">No Dealing Desk (NDD)</h5>
                            <div class="hover-mask">
                                <p>Your orders are routed directly to top-tier liquidity providers.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Category Box Layout  -->

                <!-- Start Category Box Layout  -->
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 rbt-cat-box rbt-cat-box-1 text-center" data-sal-delay="300"
                    data-sal="slide-up" data-sal-duration="600">
                    <div class="inner wrapper">
                        <div class="icons">
                            <img src="{{ asset('assets/images/icons/stpAcc-4.png') }}" alt="Icons Images">
                        </div>
                        <div class="content row">
                            <div class="col-12">
                                <h5 class="title">Raw Spreads Starting from 0.0 Pips</h5>
                            </div>
                            <div class="col-12">
                                <p>
                                    With spreads as low as 0.0 pips during high-liquidity sessions, the ECN account is
                                    perfect for scalpers, day traders, and precision-focused strategies.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Category Box Layout  -->

                <!-- Start Category Box Layout  -->
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 rbt-cat-box rbt-cat-box-1 text-center" data-sal-delay="500"
                    data-sal="slide-up" data-sal-duration="600">
                    <div class="inner wrapper">
                        <div class="icons">
                            <img src="{{ asset('assets/images/icons/ecnAcc-1.png') }}" alt="Icons Images">
                        </div>
                        <div class="content">
                            <h5 class="title">Transparent, Commission-Based Trading</h5>
                            <div class="hover-mask">
                                <p>Instead of wider spreads, enjoy tight spreads with a low, fixed commission per trade.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Category Box Layout  -->

                <!-- Start Category Box Layout  -->
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 rbt-cat-box rbt-cat-box-1 text-center" data-sal-delay="700"
                    data-sal="slide-up" data-sal-duration="600">
                    <div class="inner wrapper">
                        <div class="icons">
                            <img src="{{ asset('assets/images/icons/ecnAcc-3.png') }}" alt="Icons Images">
                        </div>
                        <div class="content">
                            <h5 class="title">Access to Market Depth (Level 2 Pricing)</h5>
                            <div class="hover-mask">
                                <p>In supported ECN setups, get insights into the full order book—see real-time bids, asks,
                                    and trade volume.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Category Box Layout  -->

                <!-- Start Category Box Layout  -->
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 rbt-cat-box rbt-cat-box-1 text-center" data-sal-delay="900"
                    data-sal="slide-up" data-sal-duration="600">
                    <div class="inner wrapper">
                        <div class="icons">
                            <img src="{{ asset('assets/images/icons/ecnAcc-2.png') }}" alt="Icons Images">
                        </div>
                        <div class="content">
                            <h5 class="title">Optimal Conditions During Peak Market Hours</h5>
                            <div class="hover-mask">
                                <p>Take advantage of tighter spreads and deeper liquidity during key overlaps</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Category Box Layout  -->
            </div>
        </div>
    </div>

    <div class="rbt-pricing-area bg-color-white rbt-section-gap">
        <div class="container">
            <div class="section-title text-center">
                <h2 class="title">Trade with ECN Account Now</h2>
            </div>
            <div class="advance-pricing mt--30" data-sal-delay="100" data-sal="slide-up" data-sal-duration="1000">
                <div class="inner">
                    <div class="row row--0 justify-content-center">
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="pricing-left text-center"
                                style="display: flex; flex-direction:column; justify-content:center;">
                                <h3 class="main-title color-white">ECN Standard Account</h3>

                                <div class="price-wrapper pt--50">
                                    <h6 class="text-white">Minimum Deposit</h6>
                                    <span class="price-amount text-white">$500</span>
                                </div>

                                <div class="price-wrapper pt--50">
                                    <h6 class="text-white">Maximum Leverage</h6>
                                    <span class="price-amount text-white">
                                        1:1000</span>
                                </div>
                                <div class="pricing-btn-group pt--50">
                                    <button class="rbt-btn btn-gradient w-100" style="white-space: nowrap;">Open
                                        Account</button>
                                    <button class="rbt-btn btn-border w-100">Try Demo</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <div class="pricing-right position-relative">
                                <div class="pricing-offer">
                                    <div class="single-list">
                                        <ul class="plan-offer-list text-center">
                                            <div style="margin-bottom: 30px;">
                                                <h6 style="margin-bottom: 5px;">Account Currency</h6>
                                                <li style="padding-left: 10px;">
                                                    USD, EUR, GBP, CNY, ZAR, NGN, INR, BRL, JPY, CLP, TZS, KES, GHS, UGX,
                                                    ZMW, RWF, CZK, SEK, DKK, NOK, HUF, KZT, KRW, COP, TWD
                                                </li>
                                            </div>

                                            <div style="margin-bottom: 30px;">
                                                <h6 style="margin-bottom: 5px;">Spread (Pips)</h6>
                                                <li style="padding-left: 10px;">
                                                    From 0.8 Pip
                                                </li>
                                            </div>
                                            <div style="margin-bottom: 10px;"></div>
                                            <div style="margin-bottom: 30px;">

                                                <h6 style="margin-bottom: 5px;">Lot size</h6>
                                                <li style="padding-left: 10px;">
                                                    100,000USD
                                                </li>
                                            </div>
                                            <div style="margin-bottom: 30px;">

                                                <h6 style="margin-bottom: 5px;">Commision</h6>
                                                <li style="padding-left: 10px;">
                                                    $7
                                                </li>
                                            </div>
                                            <div style="margin-bottom: 30px;">
                                                <h6 style="margin-bottom: 5px;">Swaps</h6>
                                                <li style="padding-left: 10px;">
                                                    Yes
                                                </li>
                                            </div>
                                            <div style="margin-bottom: 30px;">

                                                <h6 style="margin-bottom: 5px;">Spread</h6>
                                                <li style="padding-left: 10px;">
                                                    Floating
                                                </li>
                                            </div>
                                            <div style="margin-bottom: 30px;">

                                                <h6 style="margin-bottom: 5px;">Max Volume Per Order</h6>
                                                <li style="padding-left: 10px;">
                                                    100 lots
                                                </li>
                                            </div>
                                            <div style="margin-bottom: 30px;">
                                                <h6 style="margin-bottom: 5px;">Trading Instruments</h6>
                                                <li style="padding-left: 10px;">
                                                    FX, Metals, Indices, Commodities, Cryptos, Stocks & ETFs
                                                </li>
                                            </div>
                                            <h6 style="margin-bottom: 5px;">Order Execution</h6>
                                            <li style="padding-left: 10px;">
                                                Market
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pricing-badge"><span>Popular</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                            <p class="color-white"> Start Your Trading Journey with Lucky Star Today! Join our
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
