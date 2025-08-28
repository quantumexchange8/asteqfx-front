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
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(55 52 52 / 50%)), url('../assets/images/bg/navbarServiceBg-3.jpg');
            /* Or use the file you uploaded */
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
        }

        .bg-img {
            content: '';
            position: absolute;
            bottom: 0;
            right: 0;
            width: 100%;
            height: 100%;
            background-image: url('../assets/images/service/forexBg-1.png');
            background-repeat: no-repeat;
            background-size: contain;
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

        .content {
            position: relative;
            z-index: 1;
        }

        .rbt-flipbox-front {
            display: flex;
            flex-direction: column;
            height: 100%;
            text-align: center;
            justify-content: center;
        }

        @media only screen and (max-width: 350px) {
            .rbt-flipbox .rbt-flipbox-wrap {
                height: 550px;
            }
        }

        @media only screen and (min-width: 351px) and (max-width: 425px) {
            .rbt-flipbox .rbt-flipbox-wrap {
                height: 500px;
            }
        }

        @media only screen and (min-width: 768px) and (max-width: 991px) {
            .rbt-flipbox .rbt-flipbox-wrap {
                height: 450px;
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
                                <h2 class="title">Forex
                                    <br />
                                    <span class="header-caption">
                                        <span class="cd-headline cd-headline clip is-full-width">
                                            <span class="cd-words-wrapper">
                                                <b class="is-visible theme-gradient">24/5 Market, Endless Possibilities.</b>
                                                <b class="is-hidden theme-gradient">Master the
                                                    Market.</b>
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
                            <li class="rbt-breadcrumb-item active">Forex</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb Area -->

    <!-- TradingView Widget BEGIN -->
    <div class="tradingview-widget-container">
        <div class="tradingview-widget-container__widget"></div>
        <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/" rel="noopener nofollow"
                target="_blank"><span class="blue-text">Track all markets on TradingView</span></a></div>
        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
            {
                "symbols": [{
                        "description": "EUR/USD",
                        "proName": "OANDA:EURUSD"
                    },
                    {
                        "description": "GBP/USD",
                        "proName": "OANDA:GBPUSD"
                    },
                    {
                        "description": "USD/JPY",
                        "proName": "OANDA:USDJPY"
                    },
                    {
                        "description": "GBP/JPY",
                        "proName": "OANDA:GBPJPY"
                    },
                    {
                        "description": "AUD/USD",
                        "proName": "FX:AUDUSD"
                    },
                    {
                        "description": "USD/CAD",
                        "proName": "OANDA:USDCAD"
                    },
                    {
                        "description": "NZD/USD",
                        "proName": "OANDA:NZDUSD"
                    },
                    {
                        "description": "EUR/CAD",
                        "proName": "OANDA:EURCAD"
                    }
                ],
                "showSymbolLogo": true,
                "isTransparent": false,
                "displayMode": "adaptive",
                "colorTheme": "light",
                "locale": "en"
            }
        </script>
    </div>
    <!-- TradingView Widget END -->

    <div class="rbt-course-banner-area rbt-section-gap">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-12 text-center" data-sal-delay="100" data-sal="slide-up" data-sal-duration="600">
                    <div class="modern-course-features-box h-100">
                        <div>
                            <div class="content">
                                <h4>Step into the World’s Largest Financial Market.
                                </h4>
                                <p>Access over 50 major, minor, and exotic currency pairs — 24/5. Benefit from ultra-fast
                                    execution, competitive spreads, and zero commission. Harness the power of global price
                                    movements and turn market volatility into opportunity. Start trading on MetaTrader 5
                                    with precision, speed, and total control.</p>
                                <ul class="course-feature-list justify-content-center">
                                    <li>
                                        <div class="icon">
                                            <img src="{{ asset('assets/images/icons/card-icon-1.png') }}" alt="Image Icon">
                                        </div>
                                        <div class="feature-content">
                                            <h4 class="featute-title">Over 10 million
                                                <span>retail forex traders worldwide</span>
                                            </h4>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <img src="{{ asset('assets/images/icons/card-icon-2.png') }}" alt="Image Icon">
                                        </div>
                                        <div class="feature-content">
                                            <h4 class="featute-title">$7.5 trillion
                                                <span> Average daily trading volume</span>
                                            </h4>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <img src="{{ asset('assets/images/icons/card-icon-3.png') }}" alt="Image Icon">
                                        </div>
                                        <div class="feature-content">
                                            <h4 class="featute-title">#1
                                                <span>Largest and most liquid financial market in the
                                                    world</span>
                                            </h4>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6" data-sal-delay="300" data-sal="slide-right" data-sal-duration="600">
                    <div class="modern-course-features-box h-100">
                        <div class="bg-img-2"></div>
                        <div class="content">
                            <h4 class="title mt--2">Why Trade Forex with ASTEQ FX LIMITED?</h4>
                            <ul class="rbt-list-style-1">
                                <li><i class="feather-check"></i>Trade with slim spreads and leverage up to 500:1</li>
                                <li><i class="feather-check"></i>50+ currency pairs available 24/5.</li>
                                <li><i class="feather-check"></i>Lightning-fast execution on reliable servers
                                    Transparent pricing
                                </li>
                                <li><i class="feather-check"></i>
                                    Multilingual support & advanced trading tools
                                </li>
                                <li><i class="feather-check"></i>
                                    Flexible deposits & withdrawals via multiple methods
                                </li>
                            </ul>


                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6" data-sal-delay="300" data-sal="slide-left" data-sal-duration="600">
                    <div class="modern-course-features-box h-100">
                        <div class="content">
                            <h4>Your Funds and Data Are Always Protected</h4>
                            <p>Your trust is our foundation. With ASTEQ FX LIMITED, you’re backed by a secure trading environment,
                                robust technology, and a commitment to transparency — so you can focus on trading the
                                markets, while we protect what matters most.
                            </p>
                        </div>
                        <div class="bg-img"></div>
                    </div>
                </div>

                <div class="col-12">

                </div>
            </div>

            <div class="rbt-section-gapTop h-100">
                <div class="row row--15 mt_dec--30">

                    <div class="content text-center pt-5" data-sal="slide-up" data-sal-duration="600">
                        <h3>Different types of Forex Pairs</h3>
                    </div>

                    <!-- Start Single Card  -->
                    <div class="col-md-6 col-12 mt--30" data-sal-delay="100" data-sal="slide-right" data-sal-duration="600">
                        <div class="rbt-service rbt-service-2 variation-2 rbt-hover-02">
                            <div class="inner" style="flex-direction: column-reverse;">
                                <div class="content text-center">
                                    <h4 class="title">Minor Pairs</h4>

                                    <p style="margin-bottom: 10px; font-size: 20px;">
                                        <strong>Include</strong>:
                                    </p>
                                    <ul class="rbt-list-style-3 text-center" style="margin-bottom: 10px;">
                                        <li><i class="feather-dollar-sign"></i>EUR/GBP</li>
                                        <li><i class="feather-dollar-sign"></i>GBP/JPY</li>
                                        <li><i class="feather-dollar-sign"></i>EUR/CHF</li>
                                    </ul>
                                    <p style="margin-bottom: 10px; font-size: 20px;">
                                        <strong>Recommended for</strong>:
                                    </p>
                                    <ul class="rbt-list-style-3 text-center" style="margin-bottom: 15px;">
                                        <li><i class="feather-users"></i>Intermediate to Advanced traders</li>
                                        <li><i class="feather-users"></i>Swing traders and position traders</li>
                                    </ul>
                                    <p style="margin-top: 30px;">
                                        Minors offer more volatility and less liquidity than majors, appealing to those
                                        seeking diversification or looking to trade specific regional currencies without USD
                                        exposure.
                                    </p>
                                </div>
                                <div class="thumbnail" style="text-align: center;">
                                    <img src="{{ asset('assets/images/icons/card-icon-5.png') }}" alt="Blue-Chip Stocks"
                                        style="max-width: 25%;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Card  -->

                    <!-- Start Single Card  -->
                    <div class="col-md-6 col-12 mt--30" data-sal-delay="100" data-sal="slide-right"
                        data-sal-duration="600">
                        <div class="rbt-service rbt-service-2 variation-2 rbt-hover-02">
                            <div class="inner" style="flex-direction: column-reverse;">
                                <div class="content text-center">
                                    <h4 class="title">Major Pairs</h4>

                                    <p style="margin-bottom: 10px; font-size: 20px;">
                                        <strong>Include</strong>:
                                    </p>
                                    <ul class="rbt-list-style-3 text-center" style="margin-bottom: 10px;">
                                        <li><i class="feather-dollar-sign"></i>EUR/USD</li>
                                        <li><i class="feather-dollar-sign"></i>GBP/USD</li>
                                        <li><i class="feather-dollar-sign"></i>USD/JPY</li>
                                    </ul>
                                    <p style="margin-bottom: 10px; font-size: 20px;">
                                        <strong>Recommended for</strong>:
                                    </p>
                                    <ul class="rbt-list-style-3 text-center" style="margin-bottom: 15px;">
                                        <li><i class="feather-users"></i>Beginner to Advanced traders</li>
                                        <li><i class="feather-users"></i>Day traders & scalpers</li>
                                        <li><i class="feather-users"></i>Traders looking for stability and liquidity</li>
                                    </ul>
                                    <p style="margin-top: 30px;">
                                        Major pairs are the most liquid and stable, with high volume.
                                        Ideal
                                        for those who value low trading costs and consistent market access.
                                    </p>
                                </div>
                                <div class="thumbnail" style="text-align: center;">
                                    <img src="{{ asset('assets/images/icons/card-icon-4.png') }}" alt="Blue-Chip Stocks"
                                        style="max-width: 25%;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Card  -->

                    <!-- Start Single Card  -->
                    <div class="col-12 mt--30" data-sal-delay="100" data-sal="slide-right" data-sal-duration="600">
                        <div class="rbt-service rbt-service-2 variation-2 rbt-hover-02">
                            <div class="inner" style="flex-direction: column-reverse;">
                                <div class="content text-center">
                                    <h4 class="title">Exotic Pairs</h4>

                                    <p style="margin-bottom: 10px; font-size: 20px;">
                                        <strong>Include</strong>:
                                    </p>
                                    <ul class="rbt-list-style-3 text-center" style="margin-bottom: 10px;">
                                        <li><i class="feather-dollar-sign"></i>USD/SGD</li>
                                        <li><i class="feather-dollar-sign"></i>EUR/TRY</li>
                                    </ul>
                                    <p style="margin-bottom: 10px; font-size: 20px;">
                                        <strong>Recommended for</strong>:
                                    </p>
                                    <ul class="rbt-list-style-3 text-center" style="margin-bottom: 15px;">
                                        <li><i class="feather-users"></i>Experienced and high-risk-tolerant traders</li>
                                        <li><i class="feather-users"></i>Speculators and macroeconomic traders</li>
                                        <li><i class="feather-users"></i>Investors interested in emerging markets or
                                            rare
                                            opportunities</li>
                                    </ul>
                                    <p style="margin-top: 30px;">
                                        Exotic pairs come with wider spreads, lower liquidity, and sharp volatility —
                                        attracting traders who want higher reward potential and can manage unpredictable
                                        market moves.
                                    </p>
                                </div>
                                <div class="thumbnail" style="text-align: center;">
                                    <img src="{{ asset('assets/images/icons/card-icon-6.png') }}" alt="Blue-Chip Stocks"
                                        style="max-width: 25%;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Card  -->
                </div>
            </div>

            <div class="rbt-section-gapTop" style="height: 700px;" data-sal-delay="300" data-sal="slide-up"
                data-sal-duration="600">

                <div class="content">
                    <h2 class="title">Spot Market Momentum Instantly</h2>
                    <p>
                        Get a visual overview of real-time currency strength and weakness across major, minor, and
                        exotic
                        pairs. This interactive heatmap offers valuable market insights to
                        help you observe trends and better understand market dynamics at a glance.
                    </p>
                </div>

                <!-- TradingView Widget BEGIN -->
                <div class="tradingview-widget-container" style="margin-top: 50px;">
                    <div class="tradingview-widget-container__widget"></div>
                    <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/"
                            rel="noopener nofollow" target="_blank"><span class="blue-text">Track all markets on
                                TradingView</span></a></div>
                    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-forex-cross-rates.js"
                        async>
                        {
                            "width": "100%",
                            "height": "100%",
                            "currencies": [
                                "EUR",
                                "USD",
                                "JPY",
                                "AUD",
                                "CAD",
                                "NZD",
                                "CNY",
                                "HKD",
                                "SGD",
                                "THB",
                                "MYR"
                            ],
                            "isTransparent": false,
                            "colorTheme": "dark",
                            "locale": "en",
                            "backgroundColor": "rgba(66, 66, 66, 1)"
                        }
                    </script>
                </div>
                <!-- TradingView Widget END -->
            </div>
        </div>
    </div>


    <!-- Start CallTo Action Area  -->
    <div class="rbt-call-to-action-area bg-gradient-8" style="padding: 50px 0; margin-top: 250px;">
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
                                Start Your Trading Journey with ASTEQ FX LIMITED Today! Join our community of successful
                                traders
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
