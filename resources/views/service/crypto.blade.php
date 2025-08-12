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
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(55 52 52 / 50%)), url('../assets/images/bg/navbarServiceBg-7.jpg');
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
            background-image: url('../assets/images/service/cryptoBg-1.png');
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
            flex-direction: column-reverse;
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
                                <h2 class="title">CryptoCurrency
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
                            <li class="rbt-breadcrumb-item active">Cryptocurrency</li>
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
                        "description": "BITCOIN/USD",
                        "proName": "COINBASE:BTCUSD"
                    },
                    {
                        "description": "ETHEREUM/USD",
                        "proName": "COINBASE:ETHUSD"
                    },
                    {
                        "description": "SOLANA/USD",
                        "proName": "COINBASE:SOLUSD"
                    },
                    {
                        "description": "ETHEREUM/BITCOIN",
                        "proName": "BINANCE:ETHBTC"
                    },
                    {
                        "description": "DODGE/USD",
                        "proName": "COINBASE:DOGEUSD"
                    },
                    {
                        "description": "BINANCE COIN/USD",
                        "proName": "BINANCE:BNBUSD"
                    },
                    {
                        "description": "CARDANO/USD",
                        "proName": "BINANCE:ADAUSD"
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
                                <h4>Unlock the Power of Digital Currencies
                                </h4>
                                <p>
                                    Join the crypto revolution with ASTEQ FX LIMITED. From Bitcoin to emerging altcoins, our
                                    platform gives you access to a wide range of digital assets, with low fees, high-speed
                                    execution, and advanced tools built for performance.Enjoy full control of your crypto
                                    strategy—anytime, anywhere—backed by a seamless trading experience tailored for both
                                    beginners and pros.
                                </p>
                                <ul class="course-feature-list justify-content-center">
                                    <li>
                                        <div class="icon">
                                            <img src="{{ asset('assets/images/icons/card-icon-13.png') }}" alt="Image Icon">
                                        </div>
                                        <div class="feature-content">
                                            <h4 class="featute-title">Over $2.5 trillion
                                                <span>global cryptocurrency market cap</span>
                                            </h4>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <img src="{{ asset('assets/images/icons/card-icon-15.png') }}" alt="Image Icon">
                                        </div>
                                        <div class="feature-content">
                                            <h4 class="featute-title">400 million people
                                                <span>using a crypto wallet</span>
                                            </h4>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <img src="{{ asset('assets/images/icons/card-icon-14.png') }}" alt="Image Icon">
                                        </div>
                                        <div class="feature-content">
                                            <h4 class="featute-title">Exceeds $100 billion
                                                <span>average daily trading volume</span>
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
                            <h4 class="title mt--2">Why Trade Cryptocurrency with ASTEQ FX LIMITED?</h4>
                            <p>
                                Step into the world of digital finance with ASTEQ FX LIMITED, your trusted gateway to global
                                cryptocurrency markets. Whether you're trading Bitcoin, Ethereum, or emerging altcoins, we
                                offer a secure, efficient, and user-centric platform designed to elevate your trading
                                experience.
                            </p>
                            <ul class="rbt-list-style-1">
                                <li><i class="feather-check"></i>Institutional-Grade Security</li>
                                <li><i class="feather-check"></i>0% Commission, Competitive Spreads</li>
                                <li><i class="feather-check"></i>Professional-Grade Tools</li>
                                <li><i class="feather-check"></i>
                                    Expansive Market Coverage
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6" data-sal-delay="500" data-sal="slide-left" data-sal-duration="600">
                    <div class="modern-course-features-box h-100">
                        <div class="content">
                            <h4>Advantages of trading cryptocurrency</h4>
                            <h5>Unlock Unmatched Flexibility, Speed, and Global Opportunity</h5>
                            <p>
                                Cryptocurrency trading offers a dynamic alternative to traditional markets like stocks,
                                forex, or commodities. With 24/7 access, high volatility, and borderless transactions,
                                digital assets provide unique benefits that empower traders of all levels to act faster,
                                diversify smarter, and capture global trends in real time.
                            </p>
                        </div>
                        <div class="bg-img"></div>
                        <ul class="rbt-list-style-1" style="margin-top: 25px;">
                            <li><i class="feather-thumbs-up"></i>High Volatility = More Opportunity</li>
                            <li><i class="feather-thumbs-up"></i>Low Entry Barriers</li>
                            <li><i class="feather-thumbs-up"></i>Decentralized and Transparent
                            </li>
                            <li><i class="feather-thumbs-up"></i>Borderless Trading & Global Reach</li>
                        </ul>
                    </div>
                </div>

                <div class="col-12">

                </div>
            </div>

            <div class="rbt-section-gapTop h-100">
                <div class="row row--15 mt_dec--30">

                    <div class="content text-center pt-5">
                        <h3>Popular CryptoCurrency</h3>
                    </div>
                    <!-- Start Single Card  -->
                    <div class="col-xl-4 col-md-4 col-12 mt--30" data-sal-delay="100" data-sal="slide-right"
                        data-sal-duration="600">
                        <div class="rbt-service rbt-service-2 variation-2 rbt-hover-02">
                            <div class="inner">
                                <div class="content text-center">
                                    <h4 class="title">Ethereum (ETH)</h4>
                                    <h6>– Powering the Decentralized Future</h6>
                                    <p>More than just a currency — Ethereum enables smart contracts, decentralized apps
                                        (dApps), and NFT marketplaces. A true engine behind the next-gen internet.</p>
                                </div>
                                <div class="thumbnail" style="text-align: center;">
                                    <img src="{{ asset('assets/images/service/service-12.png') }}" alt="Silver Images">
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
                                <div class="content text-center">
                                    <h4 class="title">Bitcoin (BTC)</h4>
                                    <h6>– The Digital Gold</h6>
                                    <p>
                                        The original cryptocurrency and the most valuable. Bitcoin is trusted globally as a
                                        store of value and a hedge against inflation, making it a staple in any crypto
                                        portfolio.
                                    </p>
                                </div>
                                <div class="thumbnail" style="text-align: center;">
                                    <img src="{{ asset('assets/images/service/service-13.png') }}" alt="Bitcoin Images">
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
                                <div class="content text-center">
                                    <h4 class="title">Litecoin (LTC)</h4>
                                    <h6> – The Silver to Bitcoin’s Gold</h6>
                                    <p>A proven cryptocurrency with faster transaction times and lower fees than Bitcoin,
                                        making it a popular option for everyday payments.</p>
                                </div>
                                <div class="thumbnail" style="text-align: center;">
                                    <img src="{{ asset('assets/images/service/service-14.png') }}" alt="Litecoin Images">
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
                <div class="tradingview-widget-container" style="margin-top:50px;">
                    <div class="tradingview-widget-container__widget"></div>
                    <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/"
                            rel="noopener nofollow" target="_blank"><span class="blue-text">Track all markets on
                                TradingView</span></a></div>
                    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-symbol-overview.js"
                        async>
                        {
                            "symbols": [
                                [
                                    "BITSTAMP:BTCUSD|1D"
                                ],
                                [
                                    "COINBASE:ETHUSD|1D"
                                ],
                                [
                                    "COINBASE:SOLUSD|1D"
                                ],
                                [
                                    "COINBASE:DOGEUSD|1D"
                                ],
                                [
                                    "COINBASE:LTCUSD|1D"
                                ],
                                [
                                    "BINANCE:BNBUSD|1D"
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
