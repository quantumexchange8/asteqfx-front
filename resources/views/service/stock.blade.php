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
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(55 52 52 / 50%)), url('../assets/images/bg/navbarServiceBg-5.jpg');
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
                                <h2 class="title">Stock
                                    <br />
                                    <span class="header-caption">
                                        <span class="cd-headline cd-headline clip is-full-width">
                                            <span class="cd-words-wrapper">
                                                <b class="is-visible theme-gradient">Buy. Sell. Profit</b>
                                                <b class="is-hidden theme-gradient">Your Gateway to the World's Leading
                                                    Companies.</b>
                                                <b class="is-hidden theme-gradient">Own the Trend. Trade the Opportunity.
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
                            <li class="rbt-breadcrumb-item active">Stock</li>
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
                        "description": "TESLA",
                        "proName": "NASDAQ:TSLA"
                    },
                    {
                        "description": "NVIDIA",
                        "proName": "NASDAQ:NVDA"
                    },
                    {
                        "description": "APPLE",
                        "proName": "NASDAQ:AAPL"
                    },
                    {
                        "description": "AMAZON",
                        "proName": "NASDAQ:AMZN"
                    },
                    {
                        "description": "META",
                        "proName": "NASDAQ:META"
                    },
                    {
                        "description": "MICROSOFT",
                        "proName": "NASDAQ:MSFT"
                    },
                    {
                        "description": "AMD",
                        "proName": "NASDAQ:AMD"
                    },
                    {
                        "description": "ALPHABET",
                        "proName": "NASDAQ:GOOGL"
                    },
                    {
                        "description": "ALIBABA",
                        "proName": "NYSE:BABA"
                    },
                    {
                        "description": "NIKE",
                        "proName": "NYSE:NKE"
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
                                <h4>Trade the World’s Most Popular Stocks with Flexibility and Precision
                                </h4>
                                <p>
                                    Step into the global stock markets with the power of CFDs and trade leading brands like
                                    Tesla, Amazon, and Apple—without owning the shares. With ASTEQ FX LIMITED, you can go long or
                                    short, access competitive leverage, and benefit from real-time execution on a secure,
                                    professional platform. Maximize your opportunities across industries while managing your
                                    risk with advanced tools and deep liquidity. Discover smarter ways to trade stocks and
                                    diversify your portfolio with ease. with ASTEQ FX LIMITED and harness the potential of these
                                    powerful, real-world
                                    assets.
                                </p>
                                <ul class="course-feature-list justify-content-center">
                                    <li>
                                        <div class="icon">
                                            <img src="{{ asset('assets/images/icons/card-icon-10.png') }}" alt="Image Icon">
                                        </div>
                                        <div class="feature-content">
                                            <h4 class="featute-title">$115.0 trillion
                                                <span>total market capitalization of global equities in 2023 </span>
                                            </h4>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <img src="{{ asset('assets/images/icons/card-icon-11.png') }}" alt="Image Icon">
                                        </div>
                                        <div class="feature-content">
                                            <h4 class="featute-title">approximately 55,214
                                                <span>companies are publicly traded globally</span>
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
                            <h4 class="title mt--2">Why Trade Stock with ASTEQ FX LIMITED?</h4>
                            <ul class="rbt-list-style-1">
                                <li><i class="feather-check"></i>Controlled Risk, Unlimited Potential</li>
                                <li><i class="feather-check"></i>Maximise Exposure with High Leverage</li>
                                <li><i class="feather-check"></i>Easy, Hassle-Free Funding
                                </li>
                                <li><i class="feather-check"></i>
                                    Zero Commission Trading
                                </li>
                            </ul>
                            <p style="margin-top: 10px;">
                                Ready to trade smarter? Join ASTEQ FX LIMITED and experience a powerful, transparent stock trading
                                platform built for your success.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6" data-sal-delay="500" data-sal="slide-left" data-sal-duration="600">
                    <div class="modern-course-features-box h-100">
                        <div class="content">
                            <h4>Advantages of trading stock</h4>
                            <h5>Empowering Your Portfolio, One Trade at a Time.</h5>
                        </div>
                        <div class="bg-img"></div>
                        <ul class="rbt-list-style-1" style="margin-top: 25px;">
                            <li><i class="feather-thumbs-up"></i>Passive Income through Dividends</li>
                            <li><i class="feather-thumbs-up"></i>Regulated and Transparent Markets</li>
                            <li><i class="feather-thumbs-up"></i>Long-Term Growth Potential
                            </li>
                            <li><i class="feather-thumbs-up"></i>Wide Range of Investment Options
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
                        <h3>Types of Stock</h3>
                    </div>
                    <!-- Start Single Card  -->
                    <div class="col-md-6 col-12 mt--30" data-sal-delay="100" data-sal="slide-right" data-sal-duration="600">
                        <div class="rbt-service rbt-service-2 variation-2 rbt-hover-02">
                            <div class="inner" style="flex-direction: column-reverse;">
                                <div class="content text-center">
                                    <h4 class="title">Blue-Chip Stocks</h4>
                                    <p>Blue-chip stocks represent shares of large, well-established companies with a strong
                                        track record of stability, profitability, and reliable performance—even in tough
                                        market conditions. They are considered safe investments and often pay consistent
                                        dividends, making them ideal for long-term investors.
                                    </p>
                                    <strong>Examples:</strong>
                                    <ul style="list-style-type: none; padding: 0;">
                                        <li><i class="feather-chevron-right"></i> Apple</li>
                                        <li><i class="feather-chevron-right"></i> Microsoft</li>
                                    </ul>
                                </div>
                                <div class="thumbnail" style="text-align: center;">
                                    <img src="{{ asset('assets/images/service/service-07.png') }}" alt="Blue-Chip Stocks"
                                        style="max-width: 25%;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Card  -->

                    <!-- Start Single Card  -->
                    <div class="col-md-6 col-12 mt--30" data-sal-delay="300" data-sal="slide-left"
                        data-sal-duration="600">
                        <div class="rbt-service rbt-service-2 variation-2 rbt-hover-02">
                            <div class="inner" style="flex-direction: column-reverse;">
                                <div class="content text-center">
                                    <h4 class="title">Growth Stocks</h4>
                                    <p>
                                        Growth stocks belong to companies that are expected to grow at an above-average rate
                                        compared to the market. These companies often reinvest earnings to fuel further
                                        growth, so they may not pay dividends. Ideal for investors seeking capital
                                        appreciation rather than income.
                                    </p>
                                    <strong>Examples:</strong>
                                    <ul style="list-style-type: none; padding: 0;">
                                        <li><i class="feather-chevron-right"></i>Tesla</li>
                                        <li><i class="feather-chevron-right"></i>Amazon</li>
                                    </ul>
                                </div>
                                <div class="thumbnail" style="text-align: center;">
                                    <img src="{{ asset('assets/images/service/service-08.png') }}" alt="Growth Stocks"
                                        style="max-width: 25%;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Card  -->

                    <!-- Start Single Card  -->
                    <div class="col-md-6 col-12 mt--30" data-sal-delay="300" data-sal="slide-right"
                        data-sal-duration="600">
                        <div class="rbt-service rbt-service-2 variation-2 rbt-hover-02">
                            <div class="inner" style="flex-direction: column-reverse;">
                                <div class="content text-center">
                                    <h4 class="title">Dividend Stocks</h4>
                                    <p>
                                        Dividend stocks are known for paying regular dividends to shareholders. These stocks
                                        provide a steady income stream and are often found in mature, financially sound
                                        companies. Great for income-focused investors and retirees.
                                    </p>
                                    <strong>Examples:</strong>
                                    <ul style="list-style-type: none; padding: 0;">
                                        <li><i class="feather-chevron-right"></i>Coca-Cola</li>
                                    </ul>
                                </div>
                                <div class="thumbnail" style="text-align: center;">
                                    <img src="{{ asset('assets/images/service/service-09.png') }}" alt="Dividend Stocks"
                                        style="max-width: 25%;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Card  -->

                    <!-- Start Single Card  -->
                    <div class="col-md-6 col-12 mt--30" data-sal-delay="400" data-sal="slide-up"
                        data-sal-duration="600">
                        <div class="rbt-service rbt-service-2 variation-2 rbt-hover-02">
                            <div class="inner" style="flex-direction: column-reverse;">
                                <div class="content text-center">
                                    <h4 class="title">Penny Stocks</h4>
                                    <p>
                                        Penny stocks trade at low prices—usually under $5—and are often from small or
                                        emerging companies. They offer high-risk, high-reward opportunities but tend to be
                                        highly volatile and less liquid than mainstream stocks. Suitable for experienced or
                                        speculative traders.
                                    </p>
                                    <strong>Examples:</strong>
                                    <ul style="list-style-type: none; padding: 0;">
                                        <li><i class="feather-chevron-right"></i>Any small-cap companies with limited
                                            market history</li>
                                    </ul>
                                </div>
                                <div class="thumbnail" style="text-align: center;">
                                    <img src="{{ asset('assets/images/service/service-11.png') }}" alt="Penny Stocks"
                                        style="max-width: 25%;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Card  -->

                    <!-- Start Single Card  -->
                    <div class="col-12 mt--30" data-sal-delay="400" data-sal="slide-right" data-sal-duration="600">
                        <div class="rbt-service rbt-service-2 variation-2 rbt-hover-02">
                            <div class="inner" style="flex-direction: column-reverse;">
                                <div class="content text-center">
                                    <h4 class="title">Value Stocks</h4>
                                    <p>
                                        Value stocks are shares of companies that appear to be undervalued relative to their
                                        fundamentals, such as earnings or revenue. These stocks are typically priced lower
                                        than their intrinsic worth, offering potential for significant price appreciation
                                        when the market corrects the undervaluation.
                                    </p>
                                    <strong>Examples:</strong>
                                    <ul style="list-style-type: none; padding: 0;">
                                        <li><i class="feather-chevron-right"></i>Nike</li>
                                        <li><i class="feather-chevron-right"></i>Pfizer</li>
                                        <li><i class="feather-chevron-right"></i>Alphabet</li>

                                    </ul>
                                </div>
                                <div class="thumbnail" style="text-align: center;">
                                    <img src="{{ asset('assets/images/service/service-10.png') }}" alt="Value Stocks"
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
                    <h2 class="title">
                        Live Stock Market Insights at Your Fingertips
                    </h2>
                    <p>
                        Stay ahead of the curve with our real-time stock chart. Monitor global stock price movements, track
                        market trends, and make informed decisions—all in one dynamic, easy-to-use interface.
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
                                    "NASDAQ:NVDA|1D"
                                ],
                                [
                                    "NASDAQ:TSLA|1D"
                                ],
                                [
                                    "NASDAQ:GOOGL|1D"
                                ],
                                [
                                    "NASDAQ:AAPL|1D"
                                ],
                                [
                                    "NASDAQ:AMZN|1D"
                                ],
                                [
                                    "NASDAQ:META|1D"
                                ],
                                [
                                    "NASDAQ:MSFT|1D"
                                ],
                                [
                                    "NASDAQ:AMD|1D"
                                ],
                                [
                                    "NYSE:BABA|1D"
                                ],
                                [
                                    "NASDAQ:INTC|1D"
                                ],
                                [
                                    "NYSE:NKE|1D"
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
                            "chartType": "candlesticks",
                            "maLineColor": "#2962FF",
                            "maLineWidth": 1,
                            "maLength": 9,
                            "headerFontSize": "medium",
                            "lineType": 0,
                            "dateRanges": [
                                "1d|1",
                                "1m|30",
                                "3m|60",
                                "12m|1D",
                                "60m|1W",
                                "all|1M"
                            ],
                            "downColor": "#f7525f",
                            "upColor": "#22ab94",
                            "borderUpColor": "#22ab94",
                            "borderDownColor": "#f7525f",
                            "wickUpColor": "#22ab94",
                            "wickDownColor": "#f7525f"
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
