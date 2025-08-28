@extends('layout.layout')

@php
    $footer = 'true';
    $header = 'true';
    $topToBottom = 'true';
@endphp

@section('content')
    <style>
        .title {
            text-align: center;
        }

        .shared-bg-section {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(55 52 52 / 50%)), url('assets/images/bg/homebg-2.jpg');
            /* Or use the file you uploaded */
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            padding: 120px 0;
            height: 100%;
        }

        .hover-content h4,
        .hover-content h5 {
            color: #fff;
        }

        .widget {
            height: 500px;
        }

        @media only screen and (max-width: 991px) {
            .widget {
                height: 1000px;
            }
        }

        @media only screen and (min-width: 992px) {
            .widget-text {
                padding-left: 50px;
                padding-right: 50px;
            }
        }

        .active-dark-mode .cta-text {
            color: black;
        }

        .widget-text {
            font-size: 25px;
            line-height: 48px;
            font-weight: 500;
            text-align: center;
            margin-top: 50px;
        }
    </style>

    <!-- Start Side Vav -->

    <x-sideVav />
    <!-- End Side Vav -->


    <a class="close_side_menu" href="javascript:void(0);"></a>

    <div class="rbt-slider-main-wrapper position-relative">
        <!-- Start Banner Area  -->
        <div class="swiper rbt-banner-activation rbt-slider-animation rbt-arrow-between">
            <div class="swiper-wrapper">

                <!-- Start Single Banner  -->
                <div class="swiper-slide">
                    <div class="rbt-banner-area rbt-banner-6 variation-03 bg_image bg_image--21" data-black-overlay="3">
                        <div class="wrapper w-100">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-lg-12">
                                        <div class="inner text-center">
                                            <div class="section-title">
                                                <span class="subtitle bg-white-opacity d-inline-block">THE BEST SERVICE FOR
                                                    YOU</span>
                                            </div>
                                            <h1 class="title w-700">Excellence<br /> <strong class="color-white">
                                                    in Every Transaction</strong></h1>
                                            <div class="button-group mt--30">
                                                <a class="rbt-btn btn-gradient rbt-marquee-btn radius-round" href="#signup">
                                                    <span data-text="Get Started">Get Started</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Banner  -->

                <!-- Start Single Banner  -->
                <div class="swiper-slide">
                    <div class="rbt-banner-area rbt-banner-6 variation-03 bg_image bg_image--17" data-black-overlay="3">
                        <div class="wrapper w-100">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-lg-12">
                                        <div class="inner text-center">
                                            <div class="section-title">
                                                <span class="subtitle bg-white-opacity d-inline-block">THE BEST SERVICE FOR
                                                    YOU</span>
                                            </div>
                                            <h1 class="title w-700">Trade with Confidence, <br /> <strong
                                                    class="color-white">Trade with Us</strong></h1>
                                            <div class="button-group mt--30">
                                                <a class="rbt-btn btn-gradient rbt-marquee-btn radius-round" href="#signup">
                                                    <span data-text="Get Started">Get Started</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Banner  -->

                <!-- Start Single Banner  -->
                <div class="swiper-slide">
                    <div class="rbt-banner-area rbt-banner-6 variation-03 bg_image bg_image--16" data-black-overlay="3">
                        <div class="wrapper w-100">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-lg-12">
                                        <div class="inner text-center">
                                            <div class="section-title">
                                                <span class="subtitle bg-white-opacity d-inline-block">THE BEST SERVICE FOR
                                                    YOU</span>
                                            </div>
                                            <h1 class="title w-700">Your Wealth, <br /> <strong class="color-white">Our
                                                    Priority</strong></h1>
                                            <div class="button-group mt--30">
                                                <a class="rbt-btn btn-gradient rbt-marquee-btn radius-round" href="#signup">
                                                    <span data-text="Get Started">Get Started</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Banner  -->
            </div>

            <div class="rbt-swiper-arrow rbt-arrow-left">
                <div class="custom-overfolow">
                    <i class="rbt-icon feather-arrow-left"></i>
                    <i class="rbt-icon-top feather-arrow-left"></i>
                </div>
            </div>

            <div class="rbt-swiper-arrow rbt-arrow-right">
                <div class="custom-overfolow">
                    <i class="rbt-icon feather-arrow-right"></i>
                    <i class="rbt-icon-top feather-arrow-right"></i>
                </div>
            </div>

        </div>

        <div class="swiper rbt-swiper-thumb rbtmySwiperThumb">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="{{ asset('assets/images/banner/banner-small-02.jpg') }}" alt="Banner Images">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('assets/images/banner/banner-small-01.jpg') }}" alt="Banner Images">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('assets/images/banner/banner-small-03.jpg') }}" alt="Banner Images">
                </div>


            </div>
        </div>
        <!-- End Banner Area  -->
    </div>

    <!-- Start Category Area  -->

    <!-- TradingView Widget END -->
    <div class="rbt-category-area bg-color-white rbt-section-gapTop">

        <div class="container">
            <div class="row g-5 justify-content-center">
                <!-- Start Service Grid  -->
                <div class="col-lg-3 col-xl-3 col-xxl-3 col-md-3 col-sm-6 col-12" data-sal-delay="100" data-sal="slide-up"
                    data-sal-duration="600">
                    <div class="service-card service-card-5 variation-2">
                        <div class="inner">
                            <div style="width: 100px; height: 100px;">
                                <img src="{{ asset('assets/images/icons/keyFeature1.png') }}" alt="Shape Images">
                            </div>
                            <div class="content">
                                <h6 class="title">Ultra-Fast Execution</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Service Grid  -->

                <!-- Start Service Grid  -->
                <div class="col-lg-3 col-xl-3 col-xxl-3 col-md-3 col-sm-6 col-12" data-sal-delay="200" data-sal="slide-up"
                    data-sal-duration="600">
                    <div class="service-card service-card-5 variation-2">
                        <div class="inner">
                            <div style="width: 100px; height: 100px;">
                                <img src="{{ asset('assets/images/icons/keyFeature2.png') }}" alt="Shape Images">
                            </div>
                            <div class="content">
                                <h6 class="title">Regulated & Secure</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Service Grid  -->

                <!-- Start Service Grid  -->
                <div class="col-lg-3 col-xl-3 col-xxl-3 col-md-3 col-sm-6 col-12" data-sal-delay="300" data-sal="slide-up"
                    data-sal-duration="600">
                    <div class="service-card service-card-5 variation-2">
                        <div class="inner">
                            <div style="width: 100px; height: 100px;">
                                <img src="{{ asset('assets/images/icons/keyFeature3.png') }}" alt="Shape Images">
                            </div>
                            <div class="content">
                                <h6 class="title"> Deep Liquidity & Tight Spreads</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Service Grid  -->

                <!-- Start Service Grid  -->
                <div class="col-lg-3 col-xl-3 col-xxl-3 col-md-3 col-sm-6 col-12" data-sal-delay="400"
                    data-sal="slide-up" data-sal-duration="600">
                    <div class="service-card service-card-5 variation-2">
                        <div class="inner">
                            <div style="width: 100px; height: 100px;">
                                <img src="{{ asset('assets/images/icons/keyFeature4.png') }}" alt="Shape Images">
                            </div>
                            <div class="content">
                                <h6 class="title"> Mobile & Web Trading Access</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Service Grid  -->

            </div>
        </div>
    </div>
    <!-- End Category Area  -->

    <!-- Start Button Area  -->
    <div class="rbt-video-area bg-color-white rbt-section-gapTop" id="about">
        <div class="container">
            <div class="row g-4 justify-content-center">
                <div class="col-lg-10">
                    <div class="inner pl--50 pl_lg--0 pl_md--0 pl_sm--0">
                        <div class="section-title text-start">
                            <div data-sal-delay="200" data-sal="slide-up" data-sal-duration="800">
                                <h4 class="title">Why Choose Us?</h4>
                                <p class="description mt--30">
                                    We offer fast trade execution, deep liquidity, and flexible payment methods to make your
                                    trading smooth and easy. With trusted platforms like MT4 and MT5, 24/7 support, and
                                    helpful
                                    tools like copy trading and market analysis, we’re here to support traders at every
                                    level.
                                    Our services are secure, user-friendly, and built to help you grow.
                                </p>
                            </div>

                            <div class="row g-4 mt--40">
                                <div class="col-lg-6">
                                    <div class="rbt-category-gallery shared-bg-section">
                                        <div class="hover-content" style="color: #fff;" data-sal-delay="100"
                                            data-sal="slide-up" data-sal-duration="600">
                                            <h4>Swift Execution & Deep Liquidity</h4>
                                            <p class="p-2">We offer fast trade execution, deep liquidity, and
                                                flexible payment methods to make your trading smooth and easy.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 d-lg-none">
                                    <div class="rbt-category-gallery shared-bg-section">
                                        <div class="hover-content" style="color: #fff;" data-sal-delay="300"
                                            data-sal="slide-up" data-sal-duration="600">
                                            <h4> Industry-Leading Trading Platforms</h4>
                                            <p class="p-2">Trade anytime, anywhere with
                                                MetaTrader 4 and
                                                MetaTrader 5—trusted by millions worldwide. Access powerful
                                                tools, expert advisors, and advanced analytics across desktop
                                                and mobile devices.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 d-lg-none">
                                    <div class="rbt-category-gallery shared-bg-section">
                                        <div class="hover-content" style="color: #fff;" data-sal-delay="500"
                                            data-sal="slide-up" data-sal-duration="600">
                                            <h4>Bonuses & Trading Contests</h4>
                                            <p class="p-2">Take advantage of exclusive
                                                bonuses,
                                                promotions, and trading competitions. From demo account contests
                                                to real cash prizes, we reward both new and experienced traders.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 d-lg-none">
                                    <div class="rbt-category-gallery shared-bg-section">
                                        <div class="hover-content" style="color: #fff;" data-sal-delay="700"
                                            data-sal="slide-up" data-sal-duration="600">
                                            <h4> Daily Market Analysis & News</h4>
                                            <p class="p-2 ">Make informed decisions with access to daily
                                                financial news, technical analysis, trading signals, and economic
                                                calendars—all curated by our in-house market analysts.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 d-none d-lg-block">
                                    <div class="row g-4">
                                        <div class="col-lg-12">
                                            <div class="rbt-category-gallery shared-bg-section">
                                                <div class="hover-content" style="color: #fff;" data-sal-delay="300"
                                                    data-sal="slide-up" data-sal-duration="600">
                                                    <h4> Industry-Leading Trading Platforms</h5>
                                                        <p class="p-2">Trade anytime, anywhere with
                                                            MetaTrader 4 and
                                                            MetaTrader 5—trusted by millions worldwide. Access powerful
                                                            tools, expert advisors, and advanced analytics across
                                                            desktop
                                                            and mobile devices.
                                                        </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="rbt-category-gallery shared-bg-section">
                                                <div class="thumbnail">
                                                    <div class="hover-content" style="color: #fff;" data-sal-delay="500"
                                                        data-sal="slide-up" data-sal-duration="600">
                                                        <h4>Bonuses & Trading Contests</h5>
                                                            <p class="p-2">Take advantage of exclusive
                                                                bonuses,
                                                                promotions, and trading competitions. From demo account
                                                                contests
                                                                to real cash prizes, we reward both new and experienced
                                                                traders.
                                                            </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12  d-none d-lg-block">
                                    <div class="col-lg-12">
                                        <div class="rbt-category-gallery shared-bg-section">
                                            <div class="thumbnail">
                                                <div class="hover-content" style="color: #fff;" data-sal-delay="700"
                                                    data-sal="slide-up" data-sal-duration="600">
                                                    <h4> Daily Market Analysis & News</h4>
                                                    <p class="p-2 ">Make informed decisions with access to daily
                                                        financial news, technical analysis, trading signals, and
                                                        economic
                                                        calendars—all curated by our in-house market analysts.
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
    </div>

    <!-- Start Service Area -->
    <div class="rbt-service-area bg-color-white rbt-section-gap">
        <div class="container">
            <div class="row mb--60">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h4 class="title">Services Provided</h4>
                    </div>
                </div>
            </div>
            <!-- Start Card Area -->
            <div class="row g-5 justify-content-center">
                <!-- Start Service Grid  -->
                <div class="col-lg-2 col-xl-2 col-xxl-2 col-md-3 col-sm-4 col-6"  data-sal-delay="100"
                    data-sal="slide-up" data-sal-duration="600">
                    <div class="service-card service-card-5 variation-2">
                        <div class="inner">
                            <div class="icon">
                                <a href="{{ route('serviceForex') }}"><img
                                        src="{{ asset('assets/images/bg/navbarServiceBg-3.jpg') }}"
                                        alt="Shape Images"></a>
                            </div>
                            <div class="content">
                                <h6 class="title"><a href="{{ route('serviceForex') }}">Forex</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Service Grid  -->

                <!-- Start Service Grid  -->
                <div class="col-lg-2 col-xl-2 col-xxl-2 col-md-3 col-sm-4 col-6"  data-sal-delay="300"
                    data-sal="slide-up" data-sal-duration="600">
                    <div class="service-card service-card-5 variation-2">
                        <div class="inner">
                            <div class="icon">
                                <a href="{{ route('serviceIndices') }}"><img
                                        src="{{ asset('assets/images/bg/navbarServiceBg-4.jpg') }}"
                                        alt="Shape Images"></a>
                            </div>
                            <div class="content">
                                <h6 class="title"><a href="{{ route('serviceIndices') }}">Indices</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Service Grid  -->

                <!-- Start Service Grid  -->
                <div class="col-lg-2 col-xl-2 col-xxl-2 col-md-3 col-sm-4 col-6" data-sal-delay="500"
                    data-sal="slide-up" data-sal-duration="600">
                    <div class="service-card service-card-5 variation-2">
                        <div class="inner">
                            <div class="icon">
                                <a href="{{ route('serviceStock') }}"><img
                                        src="{{ asset('assets/images/bg/navbarServiceBg-5.jpg') }}"
                                        alt="Shape Images"></a>
                            </div>
                            <div class="content">
                                <h6 class="title"><a href="{{ route('serviceStock') }}">Stock</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Service Grid  -->

                <!-- Start Service Grid  -->
                <div class="col-lg-2 col-xl-2 col-xxl-2 col-md-3 col-sm-4 col-6"  data-sal-delay="700"
                    data-sal="slide-up" data-sal-duration="600">
                    <div class="service-card service-card-5 variation-2">
                        <div class="inner">
                            <div class="icon">
                                <a href="{{ route('serviceMetal') }}"><img
                                        src="{{ asset('assets/images/bg/navbarServiceBg-6.jpg') }}"
                                        alt="Shape Images"></a>
                            </div>
                            <div class="content">
                                <h6 class="title"><a href="{{ route('serviceMetal') }}">Precious Metal</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Service Grid  -->

                <!-- Start Service Grid  -->
                <div class="col-lg-2 col-xl-2 col-xxl-2 col-md-3 col-sm-4 col-6"  data-sal-delay="900"
                    data-sal="slide-up" data-sal-duration="600">
                    <div class="service-card service-card-5 variation-2">
                        <div class="inner">
                            <div class="icon">
                                <a href="{{ route('serviceCrypto') }}"><img
                                        src="{{ asset('assets/images/bg/navbarServiceBg-7.jpg') }}"
                                        alt="Shape Images"></a>
                            </div>
                            <div class="content">
                                <h6 class="title"><a href="{{ route('serviceCrypto') }}">CryptoCurrency</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Service Grid  -->
            </div>
            <!-- End Card Area -->
        </div>
    </div>
    <!-- End Service Area -->



    <div class="rbt-testimonial-area bg-color-light mt-5 overflow-hidden" style="padding-top: 60px;">
        <div class="wrapper mb--60">
            <div class="container" data-sal-delay="200" data-sal="slide-left" data-sal-duration="800">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <span class="subtitle bg-primary-opacity">Chart the Market</span>
                            <h2 class="title">Visualize Market Trends <br /> with Interactive Charts</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row g-4 widget mb-5">
                <div class="col-12 col-lg-6" data-sal-delay="300" data-sal="slide-left" data-sal-duration="800">
                    <!-- TradingView Widget BEGIN -->
                    <div class="tradingview-widget-container" style="height:100%;width:100%">
                        <div class="tradingview-widget-container__widget" style="height:calc(100% - 32px);width:100%">
                        </div>
                        <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/"
                                rel="noopener nofollow" target="_blank"><span class="blue-text">Track all markets on
                                    TradingView</span></a></div>
                        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-advanced-chart.js" async>
                            {
                                "width": "100%",
                                "height": "100%",
                                "symbol": "NASDAQ:NVDA",
                                "interval": "15",
                                "timezone": "Etc/UTC",
                                "theme": "light",
                                "style": "2",
                                "locale": "en",
                                "backgroundColor": "rgba(255, 255, 255, 1)",
                                "allow_symbol_change": false,
                                "save_image": false,
                                "hide_volume": true,
                                "support_host": "https://www.tradingview.com"
                            }
                        </script>
                    </div>
                    <!-- TradingView Widget END -->
                </div>

                <div class="col-12 col-lg-6" data-sal-delay="500" data-sal="slide-left" data-sal-duration="800">
                    <p class="widget-text">
                        Analyze price movements and spot trading opportunities with dynamic, real-time charts—customizable
                        to your needs and designed to bring market data to life.
                    </p>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="rbt-testimonial-area mt-5 overflow-hidden" style="padding-top: 60px;">
        <div class="wrapper mb--60" data-sal-delay="200" data-sal="slide-right" data-sal-duration="800">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <span class="subtitle bg-primary-opacity">Monitor Every Move</span>
                            <h2 class="title">Track Global Market Moves
                                <br />in Real Time
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row g-4 widget mt-5">
                <div class="col-12 col-lg-6" data-sal-delay="500" data-sal="slide-right" data-sal-duration="800">
                    <p class="widget-text">
                        Stay ahead of the curve with live updates on global market performance — including opening prices,
                        daily highs and lows, and real-time changes across key financial instruments.
                    </p>
                </div>
                <div class="col-12 col-lg-6" data-sal-delay="300" data-sal="slide-right" data-sal-duration="800">
                    <!-- TradingView Widget BEGIN -->
                    <div class="tradingview-widget-container">
                        <div class="tradingview-widget-container__widget"></div>
                        <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/"
                                rel="noopener nofollow" target="_blank"><span class="blue-text">Track all markets on
                                    TradingView</span></a></div>
                        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-quotes.js" async>
                            {
                                "width": "100%",
                                "height": "100%",
                                "symbolsGroups": [{
                                        "name": "Indices",
                                        "originalName": "Indices",
                                        "symbols": [{
                                                "name": "FOREXCOM:SPXUSD",
                                                "displayName": "S&P 500 Index"
                                            },
                                            {
                                                "name": "FOREXCOM:NSXUSD",
                                                "displayName": "US 100 Cash CFD"
                                            },
                                            {
                                                "name": "FOREXCOM:DJI",
                                                "displayName": "Dow Jones Industrial Average Index"
                                            },
                                            {
                                                "name": "INDEX:NKY",
                                                "displayName": "Japan 225"
                                            },
                                            {
                                                "name": "INDEX:DEU40",
                                                "displayName": "DAX Index"
                                            },
                                            {
                                                "name": "FOREXCOM:UKXGBP",
                                                "displayName": "FTSE 100 Index"
                                            }
                                        ]
                                    },
                                    {
                                        "name": "Forex",
                                        "originalName": "Forex",
                                        "symbols": [{
                                                "name": "FX:EURUSD",
                                                "displayName": "EUR to USD"
                                            },
                                            {
                                                "name": "FX:GBPUSD",
                                                "displayName": "GBP to USD"
                                            },
                                            {
                                                "name": "FX:USDJPY",
                                                "displayName": "USD to JPY"
                                            },
                                            {
                                                "name": "FX:USDCHF",
                                                "displayName": "USD to CHF"
                                            },
                                            {
                                                "name": "FX:AUDUSD",
                                                "displayName": "AUD to USD"
                                            },
                                            {
                                                "name": "FX:USDCAD",
                                                "displayName": "USD to CAD"
                                            }
                                        ]
                                    },
                                    {
                                        "name": "Futures",
                                        "originalName": "Futures",
                                        "symbols": [{
                                                "name": "BMFBOVESPA:ISP1!",
                                                "displayName": "S&P 500 Index Futures"
                                            },
                                            {
                                                "name": "BMFBOVESPA:EUR1!",
                                                "displayName": "Euro Futures"
                                            },
                                            {
                                                "name": "PYTH:WTI3!",
                                                "displayName": "WTI CRUDE OIL"
                                            },
                                            {
                                                "name": "BMFBOVESPA:ETH1!",
                                                "displayName": "Hydrous ethanol"
                                            },
                                            {
                                                "name": "BMFBOVESPA:CCM1!",
                                                "displayName": "Corn"
                                            }
                                        ]
                                    },
                                    {
                                        "name": "Bonds",
                                        "originalName": "Bonds",
                                        "symbols": [{
                                                "name": "EUREX:FGBL1!",
                                                "displayName": "Euro Bund"
                                            },
                                            {
                                                "name": "EUREX:FBTP1!",
                                                "displayName": "Euro BTP"
                                            },
                                            {
                                                "name": "EUREX:FGBM1!",
                                                "displayName": "Euro BOBL"
                                            }
                                        ]
                                    }
                                ],
                                "showSymbolLogo": true,
                                "isTransparent": false,
                                "colorTheme": "light",
                                "locale": "en",
                                "backgroundColor": "#ffffff"
                            }
                        </script>
                    </div>
                    <!-- TradingView Widget END -->
                </div>
            </div>
        </div>
    </div>

    <!-- End Button Area  -->
    <div class="rbt-callto-action-area bg-color-light rbt-section-gap mt--50" id="signup" data-sal="slide-up"
        data-sal-duration="800" data-sal-delay="200">
        <div class="rbt-callto-action rbt-cta-default style-2">
            <div class="container content-wrapper overflow-hidden"
                style="padding: 30px; background: url('assets/images/bg/homebg-1.jpg') no-repeat center center; background-size: cover;">
                <div class="row gy-5 align-items-center justify-content-center">
                    <div class="col-lg-8">
                        <div class="inner">
                            <div class="content text-center">
                                <h3 class="title cta-text">
                                    Powerful trading tools, always at your fingertips.</h3>
                                <h6 class="subtitle cta-text">
                                    Trade smarter, not harder.</h6>
                                <a class="rbt-btn bg-secondary-opacity icon-hover mt-5" href="https://login.asteqfx.com/">
                                    <span class="btn-text">Sign Up Now</span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                </a>
                            </div>
                        </div>

                    </div>
                    <!-- <div class="col-lg-4" style="margin-left: auto; margin-right: auto; text-align: center;">
                        <a href="#" class="rbt-video-popup rbt-popup-youtube">
                            <img src="{{ asset('assets/images/icons/googlePlay.png') }}" alt="Google Play"
                                style="width: 170px; height: 57px; margin:30px; border-radius:12px;" />
                        </a>
                        <a href="#" class="rbt-video-popup rbt-popup-youtube">
                            <svg id="livetype" xmlns="http://www.w3.org/2000/svg" width="170.66407" height="72"
                                viewBox="0 0 119.66407 40">
                                <g>
                                    <g>
                                        <g>
                                            <path
                                                d="M110.13477,0H9.53468c-.3667,0-.729,0-1.09473.002-.30615.002-.60986.00781-.91895.0127A13.21476,13.21476,0,0,0,5.5171.19141a6.66509,6.66509,0,0,0-1.90088.627A6.43779,6.43779,0,0,0,1.99757,1.99707,6.25844,6.25844,0,0,0,.81935,3.61816a6.60119,6.60119,0,0,0-.625,1.90332,12.993,12.993,0,0,0-.1792,2.002C.00587,7.83008.00489,8.1377,0,8.44434V31.5586c.00489.3105.00587.6113.01515.9219a12.99232,12.99232,0,0,0,.1792,2.0019,6.58756,6.58756,0,0,0,.625,1.9043A6.20778,6.20778,0,0,0,1.99757,38.001a6.27445,6.27445,0,0,0,1.61865,1.1787,6.70082,6.70082,0,0,0,1.90088.6308,13.45514,13.45514,0,0,0,2.0039.1768c.30909.0068.6128.0107.91895.0107C8.80567,40,9.168,40,9.53468,40H110.13477c.3594,0,.7246,0,1.084-.002.3047,0,.6172-.0039.9219-.0107a13.279,13.279,0,0,0,2-.1768,6.80432,6.80432,0,0,0,1.9082-.6308,6.27742,6.27742,0,0,0,1.6172-1.1787,6.39482,6.39482,0,0,0,1.1816-1.6143,6.60413,6.60413,0,0,0,.6191-1.9043,13.50643,13.50643,0,0,0,.1856-2.0019c.0039-.3106.0039-.6114.0039-.9219.0078-.3633.0078-.7246.0078-1.0938V9.53613c0-.36621,0-.72949-.0078-1.09179,0-.30664,0-.61426-.0039-.9209a13.5071,13.5071,0,0,0-.1856-2.002,6.6177,6.6177,0,0,0-.6191-1.90332,6.46619,6.46619,0,0,0-2.7988-2.7998,6.76754,6.76754,0,0,0-1.9082-.627,13.04394,13.04394,0,0,0-2-.17676c-.3047-.00488-.6172-.01074-.9219-.01269-.3594-.002-.7246-.002-1.084-.002Z"
                                                style="fill: #a6a6a6" />
                                            <path
                                                d="M8.44483,39.125c-.30468,0-.602-.0039-.90429-.0107a12.68714,12.68714,0,0,1-1.86914-.1631,5.88381,5.88381,0,0,1-1.65674-.5479,5.40573,5.40573,0,0,1-1.397-1.0166,5.32082,5.32082,0,0,1-1.02051-1.3965,5.72186,5.72186,0,0,1-.543-1.6572,12.41351,12.41351,0,0,1-.1665-1.875c-.00634-.2109-.01464-.9131-.01464-.9131V8.44434S.88185,7.75293.8877,7.5498a12.37039,12.37039,0,0,1,.16553-1.87207,5.7555,5.7555,0,0,1,.54346-1.6621A5.37349,5.37349,0,0,1,2.61183,2.61768,5.56543,5.56543,0,0,1,4.01417,1.59521a5.82309,5.82309,0,0,1,1.65332-.54394A12.58589,12.58589,0,0,1,7.543.88721L8.44532.875H111.21387l.9131.0127a12.38493,12.38493,0,0,1,1.8584.16259,5.93833,5.93833,0,0,1,1.6709.54785,5.59374,5.59374,0,0,1,2.415,2.41993,5.76267,5.76267,0,0,1,.5352,1.64892,12.995,12.995,0,0,1,.1738,1.88721c.0029.2832.0029.5874.0029.89014.0079.375.0079.73193.0079,1.09179V30.4648c0,.3633,0,.7178-.0079,1.0752,0,.3252,0,.6231-.0039.9297a12.73126,12.73126,0,0,1-.1709,1.8535,5.739,5.739,0,0,1-.54,1.67,5.48029,5.48029,0,0,1-1.0156,1.3857,5.4129,5.4129,0,0,1-1.3994,1.0225,5.86168,5.86168,0,0,1-1.668.5498,12.54218,12.54218,0,0,1-1.8692.1631c-.2929.0068-.5996.0107-.8974.0107l-1.084.002Z" />
                                        </g>
                                        <g id="_Group_" data-name="&lt;Group&gt;">
                                            <g id="_Group_2" data-name="&lt;Group&gt;">
                                                <g id="_Group_3" data-name="&lt;Group&gt;">
                                                    <path id="_Path_" data-name="&lt;Path&gt;"
                                                        d="M24.76888,20.30068a4.94881,4.94881,0,0,1,2.35656-4.15206,5.06566,5.06566,0,0,0-3.99116-2.15768c-1.67924-.17626-3.30719,1.00483-4.1629,1.00483-.87227,0-2.18977-.98733-3.6085-.95814a5.31529,5.31529,0,0,0-4.47292,2.72787c-1.934,3.34842-.49141,8.26947,1.3612,10.97608.9269,1.32535,2.01018,2.8058,3.42763,2.7533,1.38706-.05753,1.9051-.88448,3.5794-.88448,1.65876,0,2.14479.88448,3.591.8511,1.48838-.02416,2.42613-1.33124,3.32051-2.66914a10.962,10.962,0,0,0,1.51842-3.09251A4.78205,4.78205,0,0,1,24.76888,20.30068Z"
                                                        style="fill: #fff" />
                                                    <path id="_Path_2" data-name="&lt;Path&gt;"
                                                        d="M22.03725,12.21089a4.87248,4.87248,0,0,0,1.11452-3.49062,4.95746,4.95746,0,0,0-3.20758,1.65961,4.63634,4.63634,0,0,0-1.14371,3.36139A4.09905,4.09905,0,0,0,22.03725,12.21089Z"
                                                        style="fill: #fff" />
                                                </g>
                                            </g>
                                            <g>
                                                <path
                                                    d="M42.30227,27.13965h-4.7334l-1.13672,3.35645H34.42727l4.4834-12.418h2.083l4.4834,12.418H43.438ZM38.0591,25.59082h3.752l-1.84961-5.44727h-.05176Z"
                                                    style="fill: #fff" />
                                                <path
                                                    d="M55.15969,25.96973c0,2.81348-1.50586,4.62109-3.77832,4.62109a3.0693,3.0693,0,0,1-2.84863-1.584h-.043v4.48438h-1.8584V21.44238H48.4302v1.50586h.03418a3.21162,3.21162,0,0,1,2.88281-1.60059C53.645,21.34766,55.15969,23.16406,55.15969,25.96973Zm-1.91016,0c0-1.833-.94727-3.03809-2.39258-3.03809-1.41992,0-2.375,1.23047-2.375,3.03809,0,1.82422.95508,3.0459,2.375,3.0459C52.30227,29.01563,53.24953,27.81934,53.24953,25.96973Z"
                                                    style="fill: #fff" />
                                                <path
                                                    d="M65.12453,25.96973c0,2.81348-1.50586,4.62109-3.77832,4.62109a3.0693,3.0693,0,0,1-2.84863-1.584h-.043v4.48438h-1.8584V21.44238H58.395v1.50586h.03418A3.21162,3.21162,0,0,1,61.312,21.34766C63.60988,21.34766,65.12453,23.16406,65.12453,25.96973Zm-1.91016,0c0-1.833-.94727-3.03809-2.39258-3.03809-1.41992,0-2.375,1.23047-2.375,3.03809,0,1.82422.95508,3.0459,2.375,3.0459C62.26711,29.01563,63.21438,27.81934,63.21438,25.96973Z"
                                                    style="fill: #fff" />
                                                <path
                                                    d="M71.71047,27.03613c.1377,1.23145,1.334,2.04,2.96875,2.04,1.56641,0,2.69336-.80859,2.69336-1.91895,0-.96387-.67969-1.541-2.28906-1.93652l-1.60937-.3877c-2.28027-.55078-3.33887-1.61719-3.33887-3.34766,0-2.14258,1.86719-3.61426,4.51855-3.61426,2.624,0,4.42285,1.47168,4.4834,3.61426h-1.876c-.1123-1.23926-1.13672-1.9873-2.63379-1.9873s-2.52148.75684-2.52148,1.8584c0,.87793.6543,1.39453,2.25488,1.79l1.36816.33594c2.54785.60254,3.60645,1.626,3.60645,3.44238,0,2.32324-1.85059,3.77832-4.79395,3.77832-2.75391,0-4.61328-1.4209-4.7334-3.667Z"
                                                    style="fill: #fff" />
                                                <path
                                                    d="M83.34621,19.2998v2.14258h1.72168v1.47168H83.34621v4.99121c0,.77539.34473,1.13672,1.10156,1.13672a5.80752,5.80752,0,0,0,.61133-.043v1.46289a5.10351,5.10351,0,0,1-1.03223.08594c-1.833,0-2.54785-.68848-2.54785-2.44434V22.91406H80.16262V21.44238H81.479V19.2998Z"
                                                    style="fill: #fff" />
                                                <path
                                                    d="M86.065,25.96973c0-2.84863,1.67773-4.63867,4.29395-4.63867,2.625,0,4.29492,1.79,4.29492,4.63867,0,2.85645-1.66113,4.63867-4.29492,4.63867C87.72609,30.6084,86.065,28.82617,86.065,25.96973Zm6.69531,0c0-1.9541-.89551-3.10742-2.40137-3.10742s-2.40039,1.16211-2.40039,3.10742c0,1.96191.89453,3.10645,2.40039,3.10645S92.76027,27.93164,92.76027,25.96973Z"
                                                    style="fill: #fff" />
                                                <path
                                                    d="M96.18606,21.44238h1.77246v1.541h.043a2.1594,2.1594,0,0,1,2.17773-1.63574,2.86616,2.86616,0,0,1,.63672.06934v1.73828a2.59794,2.59794,0,0,0-.835-.1123,1.87264,1.87264,0,0,0-1.93652,2.083v5.37012h-1.8584Z"
                                                    style="fill: #fff" />
                                                <path
                                                    d="M109.3843,27.83691c-.25,1.64355-1.85059,2.77148-3.89844,2.77148-2.63379,0-4.26855-1.76465-4.26855-4.5957,0-2.83984,1.64355-4.68164,4.19043-4.68164,2.50488,0,4.08008,1.7207,4.08008,4.46582v.63672h-6.39453v.1123a2.358,2.358,0,0,0,2.43555,2.56445,2.04834,2.04834,0,0,0,2.09082-1.27344Zm-6.28223-2.70215h4.52637a2.1773,2.1773,0,0,0-2.2207-2.29785A2.292,2.292,0,0,0,103.10207,25.13477Z"
                                                    style="fill: #fff" />
                                            </g>
                                        </g>
                                    </g>
                                    <g id="_Group_4" data-name="&lt;Group&gt;">
                                        <g>
                                            <path
                                                d="M37.82619,8.731a2.63964,2.63964,0,0,1,2.80762,2.96484c0,1.90625-1.03027,3.002-2.80762,3.002H35.67092V8.731Zm-1.22852,5.123h1.125a1.87588,1.87588,0,0,0,1.96777-2.146,1.881,1.881,0,0,0-1.96777-2.13379h-1.125Z"
                                                style="fill: #fff" />
                                            <path
                                                d="M41.68068,12.44434a2.13323,2.13323,0,1,1,4.24707,0,2.13358,2.13358,0,1,1-4.24707,0Zm3.333,0c0-.97607-.43848-1.54687-1.208-1.54687-.77246,0-1.207.5708-1.207,1.54688,0,.98389.43457,1.55029,1.207,1.55029C44.57522,13.99463,45.01369,13.42432,45.01369,12.44434Z"
                                                style="fill: #fff" />
                                            <path
                                                d="M51.57326,14.69775h-.92187l-.93066-3.31641h-.07031l-.92676,3.31641h-.91309l-1.24121-4.50293h.90137l.80664,3.436h.06641l.92578-3.436h.85254l.92578,3.436h.07031l.80273-3.436h.88867Z"
                                                style="fill: #fff" />
                                            <path
                                                d="M53.85354,10.19482H54.709v.71533h.06641a1.348,1.348,0,0,1,1.34375-.80225,1.46456,1.46456,0,0,1,1.55859,1.6748v2.915h-.88867V12.00586c0-.72363-.31445-1.0835-.97168-1.0835a1.03294,1.03294,0,0,0-1.0752,1.14111v2.63428h-.88867Z"
                                                style="fill: #fff" />
                                            <path d="M59.09377,8.437h.88867v6.26074h-.88867Z" style="fill: #fff" />
                                            <path
                                                d="M61.21779,12.44434a2.13346,2.13346,0,1,1,4.24756,0,2.1338,2.1338,0,1,1-4.24756,0Zm3.333,0c0-.97607-.43848-1.54687-1.208-1.54687-.77246,0-1.207.5708-1.207,1.54688,0,.98389.43457,1.55029,1.207,1.55029C64.11232,13.99463,64.5508,13.42432,64.5508,12.44434Z"
                                                style="fill: #fff" />
                                            <path
                                                d="M66.4009,13.42432c0-.81055.60352-1.27783,1.6748-1.34424l1.21973-.07031v-.38867c0-.47559-.31445-.74414-.92187-.74414-.49609,0-.83984.18213-.93848.50049h-.86035c.09082-.77344.81836-1.26953,1.83984-1.26953,1.12891,0,1.76563.562,1.76563,1.51318v3.07666h-.85547v-.63281h-.07031a1.515,1.515,0,0,1-1.35254.707A1.36026,1.36026,0,0,1,66.4009,13.42432Zm2.89453-.38477v-.37646l-1.09961.07031c-.62012.0415-.90137.25244-.90137.64941,0,.40527.35156.64111.835.64111A1.0615,1.0615,0,0,0,69.29543,13.03955Z"
                                                style="fill: #fff" />
                                            <path
                                                d="M71.34816,12.44434c0-1.42285.73145-2.32422,1.86914-2.32422a1.484,1.484,0,0,1,1.38086.79h.06641V8.437h.88867v6.26074h-.85156v-.71143h-.07031a1.56284,1.56284,0,0,1-1.41406.78564C72.0718,14.772,71.34816,13.87061,71.34816,12.44434Zm.918,0c0,.95508.4502,1.52979,1.20313,1.52979.749,0,1.21191-.583,1.21191-1.52588,0-.93848-.46777-1.52979-1.21191-1.52979C72.72121,10.91846,72.26613,11.49707,72.26613,12.44434Z"
                                                style="fill: #fff" />
                                            <path
                                                d="M79.23,12.44434a2.13323,2.13323,0,1,1,4.24707,0,2.13358,2.13358,0,1,1-4.24707,0Zm3.333,0c0-.97607-.43848-1.54687-1.208-1.54687-.77246,0-1.207.5708-1.207,1.54688,0,.98389.43457,1.55029,1.207,1.55029C82.12453,13.99463,82.563,13.42432,82.563,12.44434Z"
                                                style="fill: #fff" />
                                            <path
                                                d="M84.66945,10.19482h.85547v.71533h.06641a1.348,1.348,0,0,1,1.34375-.80225,1.46456,1.46456,0,0,1,1.55859,1.6748v2.915H87.605V12.00586c0-.72363-.31445-1.0835-.97168-1.0835a1.03294,1.03294,0,0,0-1.0752,1.14111v2.63428h-.88867Z"
                                                style="fill: #fff" />
                                            <path
                                                d="M93.51516,9.07373v1.1416h.97559v.74854h-.97559V13.2793c0,.47168.19434.67822.63672.67822a2.96657,2.96657,0,0,0,.33887-.02051v.74023a2.9155,2.9155,0,0,1-.4834.04541c-.98828,0-1.38184-.34766-1.38184-1.21582v-2.543h-.71484v-.74854h.71484V9.07373Z"
                                                style="fill: #fff" />
                                            <path
                                                d="M95.70461,8.437h.88086v2.48145h.07031a1.3856,1.3856,0,0,1,1.373-.80664,1.48339,1.48339,0,0,1,1.55078,1.67871v2.90723H98.69v-2.688c0-.71924-.335-1.0835-.96289-1.0835a1.05194,1.05194,0,0,0-1.13379,1.1416v2.62988h-.88867Z"
                                                style="fill: #fff" />
                                            <path
                                                d="M104.76125,13.48193a1.828,1.828,0,0,1-1.95117,1.30273A2.04531,2.04531,0,0,1,100.73,12.46045a2.07685,2.07685,0,0,1,2.07617-2.35254c1.25293,0,2.00879.856,2.00879,2.27V12.688h-3.17969v.0498a1.1902,1.1902,0,0,0,1.19922,1.29,1.07934,1.07934,0,0,0,1.07129-.5459Zm-3.126-1.45117h2.27441a1.08647,1.08647,0,0,0-1.1084-1.1665A1.15162,1.15162,0,0,0,101.63527,12.03076Z"
                                                style="fill: #fff" />
                                        </g>
                                    </g>
                                </g>
                            </svg>

                        </a>
                    </div> -->
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="rbt-accordion-style rbt-accordion-01 accordion rbt-section-gapTop" data-sal="slide-up"
            data-sal-duration="800" data-sal-delay="200">
            <h4 class="title">Frequently Asked Questions</h4>
            <div class="accordion" id="accordionExamplea1">
                <div class="accordion-item card">
                    <h2 class="accordion-header card-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            What is Forex trading?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExamplea1">
                        <div class="accordion-body card-body">
                            Forex (foreign exchange) trading is the process of buying and selling currencies in the global marketplace. Traders aim to profit from the fluctuations in exchange rates between currency pairs such as EUR/USD, GBP/JPY, etc.
                        </div>
                    </div>
                </div>

                <div class="accordion-item card">
                    <h2 class="accordion-header card-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                            Is Forex trading legal?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExamplea1">
                        <div class="accordion-body card-body">
                            Yes, Forex trading is legal in most countries. However, regulations vary depending on your jurisdiction. Make sure to check the rules in your country and only trade with licensed brokers.
                        </div>
                    </div>
                </div>

                <div class="accordion-item card">
                    <h2 class="accordion-header card-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                            How do I open a trading account?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                        data-bs-parent="#accordionExamplea1">
                        <div class="accordion-body card-body">
                            You can register online by filling out our application form, verifying your identity (KYC), and funding your account. Once approved, you can start trading immediately.
                        </div>
                    </div>
                </div>

                <div class="accordion-item card">
                    <h2 class="accordion-header card-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                            What documents are required for account verification (KYC)?
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                        data-bs-parent="#accordionExamplea1">
                        <div class="accordion-body card-body">
                            Government-issued ID (passport, national ID, or driver’s license)
                            <br>
                            <br>
                            Proof of address (utility bill, bank statement, or official letter)
                            <br>
                            <br>
                            Sometimes additional documents may be requested for compliance.
                        </div>
                    </div>
                </div>

                <div class="accordion-item card">
                    <h2 class="accordion-header card-header" id="headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                            What is the minimum deposit?
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                        data-bs-parent="#accordionExamplea1">
                        <div class="accordion-body card-body">
                            Our minimum deposit starts from $10, depending on your chosen account type.
                        </div>
                    </div>
                </div>

                <div class="accordion-item card">
                    <h2 class="accordion-header card-header" id="headingSix">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                            What are the trading hours?
                        </button>
                    </h2>
                    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                        data-bs-parent="#accordionExamplea1">
                        <div class="accordion-body card-body">
                        The Forex market is open 24 hours a day, 5 days a week, from Monday to Friday. Specific instruments may have different trading hours.
                    </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- <div class="rbt-brand-area bg-color-white rbt-section-gapTop" data-sal="slide-up" data-sal-duration="800"
        data-sal-delay="300">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-12">
                    <div class="section-title text-center mb--40">
                        <span class="small-title w-600">Payment System Supported</span>
                    </div>
                    <ul class="brand-list brand-style-3 justify-content-center justify-content-lg-between">
                        <li><a href="#"><img src="{{ asset('assets/images/payment/bankTransfer.png') }}"
                                    alt="Payment Image"></a></li>
                        <li><a href="#"><img src="{{ asset('assets/images/payment/visa.png') }}"
                                    alt="Payment Image"></a></li>
                        <li><a href="#"><img src="{{ asset('assets/images/payment/masterCard.png') }}"
                                    alt="Payment Image"></a></li>
                        <li><a href="#"><img src="{{ asset('assets/images/payment/unionPay.png') }}"
                                    alt="Payment Image"></a></li>
                        <li><a href="#"><img src="{{ asset('assets/images/payment/alipay.png') }}"
                                    alt="Payment Image"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div> -->

    <x-separator />
@endsection
