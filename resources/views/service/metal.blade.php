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
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(55 52 52 / 50%)), url('../assets/images/bg/navbarServiceBg-6.jpg');
            /* Or use the file you uploaded */
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: bottom;
        }

        .bg-img {
            content: '';
            position: absolute;
            bottom: 0;
            right: 0;
            width: 100%;
            height: 100%;
            background-image: url('../assets/images/service/metalBg-1.png');
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

        .content {
            position: relative;
            z-index: 1;
        }

        .inner {
            gap: 10px;
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
                                <h2 class="title">Precious Metals
                                    <br />
                                    <span class="header-caption">
                                        <span class="cd-headline cd-headline clip is-full-width">
                                            <span class="cd-words-wrapper">
                                                <b class="is-visible theme-gradient">Strength. Stability. Strategy.</b>
                                                <b class="is-hidden theme-gradient">Forge Profits with the Power of
                                                    Metals.</b>
                                                <b class="is-hidden theme-gradient">Explore the World of Metal Trading.
                                                </b>
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
                            <li class="rbt-breadcrumb-item active">Precious Metals</li>
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
                        "description": "Gold/USD",
                        "proName": "FOREXCOM:XAUUSD"
                    },
                    {
                        "description": "Silver/USD",
                        "proName": "OANDA:XAGUSD"
                    },
                    {
                        "description": "Copper/USD",
                        "proName": "CAPITALCOM:COPPER"
                    },
                    {
                        "description": "Palladium/USD",
                        "proName": "CAPITALCOM:PALLADIUM"
                    },
                    {
                        "description": "Platinum/USD",
                        "proName": "CAPITALCOM:PLATINUM"
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
                                <h4>Secure Your Wealth with Precious Metals
                                </h4>
                                <p>
                                    Precious metals like gold, silver, platinum, and palladium have long been trusted as
                                    safe-haven assets, offering stability during economic uncertainty. Trading these
                                    commodities allows you to diversify your investment portfolio, hedge against inflation,
                                    and profit from both rising and falling market conditions. Whether you're a beginner or
                                    a seasoned investor, precious metals provide a timeless and globally valued opportunity.
                                    Start trading with ASTEQ FX LIMITED and harness the potential of these powerful, real-world
                                    assets.
                                </p>
                                <ul class="course-feature-list justify-content-center">
                                    <li>
                                        <div class="icon">
                                            <img src="{{ asset('assets/images/icons/card-icon-7.png') }}" alt="Image Icon">
                                        </div>
                                        <div class="feature-content">
                                            <h4 class="featute-title">Over $300 billion
                                                <span>global precious metals market</span>
                                            </h4>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <img src="{{ asset('assets/images/icons/card-icon-8.png') }}" alt="Image Icon">
                                        </div>
                                        <div class="feature-content">
                                            <h4 class="featute-title">1.2 billion ounces
                                                <span>global silver demand</span>
                                            </h4>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <img src="{{ asset('assets/images/icons/card-icon-9.png') }}" alt="Image Icon">
                                        </div>
                                        <div class="feature-content">
                                            <h4 class="featute-title">Exceeds $130 billion
                                                <span>in gold market daily trading volume in the gold market</span>
                                            </h4>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6" data-sal-delay="300" data-sal="slide-right" data-sal-duration="600">
                    <div class="modern-course-features-box h-100">
                        <div class="bg-img-2"></div>
                        <div class="content">
                            <h4 class="title mt--2">Why Trade Precious Metals with ASTEQ FX LIMITED?</h4>
                            <p>
                                At ASTEQ FX LIMITED, we combine modern technology with time-tested market reliability to help you
                                seize opportunities in precious metal trading — whether it's gold, silver, platinum, or
                                beyond.
                            </p>
                            <ul class="rbt-list-style-1">
                                <li><i class="feather-check"></i>Fast, Reliable Execution</li>
                                <li><i class="feather-check"></i>Security You Can Count On</li>
                                <li><i class="feather-check"></i>Advanced Trading Tools
                                </li>
                                <li><i class="feather-check"></i>
                                    Tailored for All Levels
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6" data-sal-delay="500" data-sal="slide-left" data-sal-duration="600">
                    <div class="modern-course-features-box h-100">
                        <div class="content">
                            <h4>Advantages of trading precious metal</h4>
                            <h5>Timeless Value, Modern Opportunity</h5>
                            <p>
                                Precious metals like gold, silver, platinum, and palladium have stood the test of time — and
                                now offer traders a powerful way to diversify, hedge, and grow.
                            </p>
                        </div>
                        <div class="bg-img"></div>
                        <ul class="rbt-list-style-1" style="margin-top: 25px;">
                            <li><i class="feather-thumbs-up"></i>Hedge Against Inflation</li>
                            <li><i class="feather-thumbs-up"></i>Long-Term Growth Potential</li>
                            <li><i class="feather-thumbs-up"></i>High Liquidity, Global Demand
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-12">

                </div>
            </div>

            <div class="rbt-section-gapTop h-100">
                <div class="row row--15 mt_dec--30">

                    <div class="content text-center pt-5">
                        <h3>Popular Metals CFDs</h3>
                    </div>
                    <!-- Start Single Card  -->
                    <div class="col-xl-4 col-md-4 col-12 mt--30" data-sal-delay="100" data-sal="slide-right"
                        data-sal-duration="600">
                        <div class="rbt-service rbt-service-2 variation-2 rbt-hover-02">
                            <div class="inner">
                                <div class="content">
                                    <h4 class="title">SILVER</h4>
                                    <p>Silver is both a precious and industrial metal. Its price tends to be more volatile
                                        than gold, offering greater short-term opportunities. It’s used in electronics,
                                        solar panels, and medicine, adding to its global demand.</p>
                                </div>
                                <div class="thumbnail" style="text-align: center;">
                                    <img src="{{ asset('assets/images/service/service-04.png') }}" alt="Silver Images">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Card  -->

                    <!-- Start Single Card  -->
                    <div class="col-xl-4 col-md-4 col-12 mt--30" data-sal-delay="300" data-sal="slide-up"
                        data-sal-duration="600">
                        <div class="rbt-service rbt-service-2 variation-2 rbt-hover-02">
                            <div class="inner">
                                <div class="content">
                                    <h4 class="title">GOLD</h4>
                                    <p>
                                        Often referred to as the "ultimate safe-haven asset," gold is highly valued for its
                                        ability to retain value during market turmoil. It’s widely traded for hedging
                                        against inflation, currency volatility, and geopolitical risk.
                                    </p>
                                </div>
                                <div class="thumbnail" style="text-align: center;">
                                    <img src="{{ asset('assets/images/service/service-05.png') }}" alt="Gold Images">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Card  -->

                    <!-- Start Single Card  -->
                    <div class="col-xl-4 col-md-4 col-12 mt--30" data-sal-delay="500" data-sal="slide-left"
                        data-sal-duration="600">
                        <div class="rbt-service rbt-service-2 variation-2 rbt-hover-02">
                            <div class="inner">
                                <div class="content">
                                    <h4 class="title">PLATINUM</h4>
                                    <p>Platinum is rarer than gold and silver, with strong industrial applications,
                                        particularly in automotive catalytic converters. It’s a popular metal for those
                                        looking to diversify within the precious metals market.</p>
                                </div>
                                <div class="thumbnail" style="text-align: center;">
                                    <img src="{{ asset('assets/images/service/service-06.png') }}" alt="Platinum Images">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Card  -->

                </div>
            </div>

            <div class="rbt-section-gapTop" style="height: 700px;" data-sal-delay="400" data-sal="slide-up"
                data-sal-duration="600">

                <div class="content">
                    <h2 class="title">Track Global Market Performance Now</h2>
                    <p>
                        Follow real-time movements of major global indices all in one place. Whether you're monitoring
                        trends or planning your next trade, our interactive chart gives you the data you need—fast, clear,
                        and up-to-date.
                    </p>
                </div>

                <!-- TradingView Widget BEGIN -->
                <div class="tradingview-widget-container" style="margin-top: 50px;">
                    <div class="tradingview-widget-container__widget"></div>
                    <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/"
                            rel="noopener nofollow" target="_blank"><span class="blue-text">Track all markets on
                                TradingView</span></a></div>
                    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js"
                        async>
                        {
                            "colorTheme": "light",
                            "dateRange": "12M",
                            "showChart": true,
                            "locale": "en",
                            "width": "100%",
                            "height": "100%",
                            "largeChartUrl": "",
                            "isTransparent": false,
                            "showSymbolLogo": true,
                            "showFloatingTooltip": false,
                            "plotLineColorGrowing": "rgba(0, 255, 0, 1)",
                            "plotLineColorFalling": "rgba(182, 215, 168, 1)",
                            "gridLineColor": "rgba(240, 243, 250, 0)",
                            "scaleFontColor": "rgba(15, 15, 15, 1)",
                            "belowLineFillColorGrowing": "rgba(56, 118, 29, 0.12)",
                            "belowLineFillColorFalling": "rgba(106, 168, 79, 0.12)",
                            "belowLineFillColorGrowingBottom": "rgba(41, 98, 255, 0)",
                            "belowLineFillColorFallingBottom": "rgba(41, 98, 255, 0)",
                            "symbolActiveColor": "rgba(106, 168, 79, 0.12)",
                            "tabs": [{
                                "title": "Indices",
                                "symbols": [{
                                        "s": "CAPITALCOM:PLATINUM"
                                    },
                                    {
                                        "s": "CAPITALCOM:PALLADIUM"
                                    },
                                    {
                                        "s": "CAPITALCOM:COPPER"
                                    },
                                    {
                                        "s": "OANDA:XAGUSD"
                                    },
                                    {
                                        "s": "FOREXCOM:XAUUSD"
                                    },
                                    {
                                        "s": "CAPITALCOM:SILVER"
                                    }
                                ],
                                "originalTitle": "Indices"
                            }]
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
