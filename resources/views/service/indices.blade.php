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
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(55 52 52 / 50%)), url('../assets/images/bg/navbarServiceBg-4.jpg');
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
            background-image: url('../assets/images/service/indicesBg-1.png');
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
                                <h2 class="title">Indices
                                    <br />
                                    <span class="header-caption">
                                        <span class="cd-headline cd-headline clip is-full-width">
                                            <span class="cd-words-wrapper">
                                                <b class="is-visible theme-gradient">Invest in Leading
                                                    Global Indices</b>
                                                <b class="is-hidden theme-gradient">One Index at a
                                                    Time</b>
                                                <b class="is-hidden theme-gradient">Trade the Market, Not Just Stocks
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
                            <li class="rbt-breadcrumb-item active">Indices</li>
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
                        "description": "DOW JONES 30",
                        "proName": "BLACKBULL:US30"
                    },
                    {
                        "description": "NASDAQ 100 INDEX",
                        "proName": "NASDAQ:NDX"
                    },
                    {
                        "description": "HANG SENG INDEX",
                        "proName": "HSI:HSI"
                    },
                    {
                        "description": "S&P 500 INDEX",
                        "proName": "OANDA:SPX500USD"
                    },
                    {
                        "description": "US DOLLAR INDEX",
                        "proName": "CAPITALCOM:DXY"
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
                                <h4>Trade the World’s Leading Stock Markets in One Move
                                </h4>
                                <p>Experience the power of index trading with Lucky Star — gain exposure to major global
                                    stock
                                    indices like the S&P 500, NASDAQ, DAX, and more. With competitive leverage, ultra-fast
                                    execution, and zero commissions, you can trade on rising or falling markets without
                                    owning individual stocks. Diversify your strategy, manage your risk, and tap into deep
                                    liquidity with every trade. Start exploring smarter, broader market opportunities — all
                                    in one platform.</p>
                                <ul class="course-feature-list justify-content-center">
                                    <li>
                                        <div class="icon">
                                            <img src="{{ asset('assets/images/icons/card-icon-1.png') }}" alt="Image Icon">
                                        </div>
                                        <div class="feature-content">
                                            <h4 class="featute-title">Over 60%
                                                <span>global retail traders engage in index CFDs</span>
                                            </h4>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <img src="{{ asset('assets/images/icons/card-icon-2.png') }}" alt="Image Icon">
                                        </div>
                                        <div class="feature-content">
                                            <h4 class="featute-title">$2 trillion monthly
                                                <span>Indices trading volume</span>
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
                            <h4 class="title mt--2">Why Trade Indices with Lucky Star?</h4>
                            <ul class="rbt-list-style-1">
                                <li><i class="feather-check"></i>Smarter Trading, Broader Opportunities</li>
                                <li><i class="feather-check"></i>Built-in Risk Protection</li>
                                <li><i class="feather-check"></i>Efficient Risk Distribution
                                </li>
                                <li><i class="feather-check"></i>
                                    Zero Commission, Full Potential
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6" data-sal-delay="500" data-sal="slide-left" data-sal-duration="600">
                    <div class="modern-course-features-box h-100">
                        <div class="content">
                            <h4>Advantages of Index CFD Trading</h4>
                            <h5>Trade Smarter — Without Owning a Single Stock</h5>
                            <p>Index CFDs offer a powerful way to trade the world’s top stock markets — without the hassle
                                of physical ownership. Whether markets rise or fall, you can capitalize on price movements
                                with flexible trade sizes and competitive leverage.
                            </p>
                        </div>
                        <div class="bg-img"></div>
                        <ul class="rbt-list-style-1" style="margin-top: 25px;">
                            <li><i class="feather-thumbs-up"></i>Profit in Any Market Direction </li>
                            <li><i class="feather-thumbs-up"></i>Leverage Your Capitalc</li>
                            <li><i class="feather-thumbs-up"></i>Flexible Position Sizes
                            </li>
                            <li><i class="feather-thumbs-up"></i>
                                High Liquidity
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
                        <h3>Popular Market Indices</h3>
                    </div>
                    <!-- Start Single Card  -->
                    <div class="col-xl-4 col-md-4 col-sm-6 col-12 mt--30" data-sal-delay="100" data-sal="slide-right"
                        data-sal-duration="600">
                        <div class="rbt-service rbt-service-2 variation-2 rbt-hover-02">
                            <div class="inner">
                                <div class="content">
                                    <h4 class="title">S&P 500</h4>
                                    <p>The S&P 500 is one of the most widely followed stock indexes in the world. It tracks
                                        the performance of 500 of the largest publicly traded companies in the United
                                        States, including giants like Apple, Microsoft, and Amazon. It’s considered a strong
                                        indicator of the overall U.S. stock market and economy.</p>
                                </div>
                                <div class="thumbnail">
                                    <img src="{{ asset('assets/images/service/service-01.png') }}" alt="Education Images"
                                        style="width: 100%;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Card  -->

                    <!-- Start Single Card  -->
                    <div class="col-xl-4 col-md-4 col-sm-6 col-12 mt--30" data-sal-delay="300" data-sal="slide-up"
                        data-sal-duration="600">
                        <div class="rbt-service rbt-service-2 variation-2 rbt-hover-02">
                            <div class="inner">
                                <div class="content">
                                    <h4 class="title">NASDAQ Composite</h4>
                                    <p>The NASDAQ Composite is heavily weighted toward technology companies like Google,
                                        Facebook, and Tesla. It includes over 3,000 stocks listed on the NASDAQ exchange,
                                        making it a go-to index for tracking innovation and tech sector trends.</p>
                                </div>
                                <div class="thumbnail">
                                    <img src="{{ asset('assets/images/service/service-02.png') }}"
                                        style="height:113px;width: 100%;" alt="Education Images">
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
                                    <h4 class="title">Dow Jones Industrial Average</h4>
                                    <p>Often called "The Dow," this index measures the performance of 30 major U.S.
                                        companies across various industries. It’s one of the oldest and most recognized
                                        indexes, offering a snapshot of blue-chip stocks and overall economic health.</p>
                                </div>
                                <div class="thumbnail">
                                    <img src="{{ asset('assets/images/service/service-03.png') }}"
                                        style="height:113px;width: 100%;" alt="Education Images">
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
                    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-symbol-overview.js"
                        async>
                        {
                            "symbols": [
                                [
                                    "NASDAQ:NDX|1D"
                                ],
                                [
                                    "OANDA:NAS100USD|1D"
                                ],
                                [
                                    "PEPPERSTONE:NAS100|1D"
                                ],
                                [
                                    "BLACKBULL:US30|1D"
                                ],
                                [
                                    "OANDA:SPX500USD|1D"
                                ]
                            ],
                            "chartOnly": false,
                            "width": "100%",
                            "height": "100%",
                            "locale": "en",
                            "colorTheme": "light",
                            "autosize": true,
                            "showVolume": false,
                            "showMA": false,
                            "hideDateRanges": false,
                            "hideMarketStatus": false,
                            "hideSymbolLogo": false,
                            "scalePosition": "right",
                            "scaleMode": "Normal",
                            "fontFamily": "-apple-system, BlinkMacSystemFont, Trebuchet MS, Roboto, Ubuntu, sans-serif",
                            "fontSize": "10",
                            "noTimeScale": false,
                            "valuesTracking": "1",
                            "changeMode": "price-and-percent",
                            "chartType": "area",
                            "maLineColor": "#2962FF",
                            "maLineWidth": 1,
                            "maLength": 9,
                            "headerFontSize": "medium",
                            "lineWidth": 2,
                            "lineType": 0,
                            "dateRanges": [
                                "1d|1",
                                "1m|30",
                                "3m|60",
                                "12m|1D",
                                "60m|1W",
                                "all|1M"
                            ]
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
                                Start Your Trading Journey with Lucky Star Today! Join our community of successful
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
