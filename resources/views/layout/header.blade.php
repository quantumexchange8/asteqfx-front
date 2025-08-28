<!-- Start Header Area -->
<style>
    .mainmenu-nav>.mainmenu>li>a {
        color: black;
    }

    .popup-mobile-menu {
        background: none;
    }

    .my_switcher {
        z-index: 10000;
    }

    .nav-category-item {
        border-radius: 4px;
        margin: 10px 10px;
        background-color: blueviolet;
    }

    /* .nav-category-item .image {
        &::after {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            height: 100%;
            width: 22%;
            background: rgba(0, 0, 0, 0.3);
            pointer-events: none;
            z-index: 1;
            border-radius: 0px 4px 4px 0px;
        }
    } */

    .nav-category-item .image img {
        left: auto;
        top: 10px;
        right: 0;
        width: 25%;
        height: 80%;
        border-radius: 0px 10px 10px 0px;
        opacity: 0;
        transform: translateX(30px);
        transition: all 0.5s ease;
    }

    .nav-category-item .thumbnail a {
        padding: 25px 20px;
    }

    .thumbnail>a {
        color: white;
        position: relative;
        z-index: 2;
    }

    .thumbnail>a:hover {
        color: #cad8ff;
    }

    .thumbnail>a>i {
        color: white;
    }

    .rbt-short-title {
        font-size: 16px;
        padding-bottom: 5px;
        color: #4c689b;
    }

    .glass-effect {
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        border-radius: 10px;
        box-shadow: 0 8px 32px rgba(31, 38, 135, 0.2);
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        transition: all 0.9s ease;
    }

    .glass-effect:hover .image img {
        opacity: 1;
        transform: translateX(-30px);
    }

    /* @media only screen and (max-width: 500px) {
        .headerLogo img{
            content: url({{ asset('assets/images/favicon.png') }});
        }
    } */
</style>

<header class="rbt-header rbt-header-4 ">
    <div class="rbt-sticky-placeholder"></div>
    <!-- Start Header Top -->
    <div
        class="rbt-header-top rbt-header-top-1 header-space-betwween bg-not-transparent bg-color-darker top-expended-activation d-none d-xl-block">
        <div class="container-fluid">
            <div class="top-expended-wrapper">
                <div class="top-expended-inner rbt-header-sec align-items-center ">
                    <div class="rbt-header-sec-col rbt-header-left">
                        <div class="rbt-header-content justify-content-center">
                            <!-- Start Header Information List  -->
                            <div class="header-info">
                                <ul class="rbt-information-list">
                                    <li>
                                        <a href="mailto:contact@asteqfx.com"><i class="feather-mail"></i><span>contact@asteqfx.com</span></a>
                                    </li>
                                    <li>
                                        <a href="https://login.asteqfx.com/"><i class="feather-log-in"></i>Client Login</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- End Header Information List  -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top -->

    <div class="rbt-header-wrapper header-space-betwween bg-color-white header-sticky">
        <div class="container-fluid">
            <div class="mainbar-row rbt-navigation-start align-items-center">
                <div class="header-left">
                    <div class="logo headerLogo logo-dark">
                        <a href="{{ route('Home') }}">
                            <img src="{{ asset('assets/images/AsteqLogo.png') }}" alt="Asteq Logo Images">
                        </a>
                    </div>

                    <div class="logo headerLogo d-none logo-light">
                        <a href="{{ route('Home') }}">
                            <img src="{{ asset('assets/images/AsteqLogo.png') }}"
                                alt="Asteq Dark Logo Images">
                        </a>
                    </div>
                </div>
                <div class="rbt-main-navigation d-none d-xl-block">
                    <nav class="mainmenu-nav">
                        <ul class="mainmenu">
                            <li class="with-megamenu has-menu-child-item position-static">
                                <a href="{{ route('Home') }}">Home</a>
                            </li>

                            <li class="with-megamenu has-menu-child-item">
                                <a href="#">Account<i class="feather-chevron-down"></i></a>
                                <!-- Start Mega Menu  -->
                                <div class="rbt-megamenu grid-item-2" style="width: 350px;">
                                    <div class="wrapper">
                                        <div class="row row--15">
                                            <div class="col-12 single-mega-item">
                                                <div class="mega-category-item">
                                                    <h2 class="rbt-short-title">STP Account</h2>
                                                    <!-- Start Single Category  -->
                                                    <div class="nav-category-item glass-effect"
                                                        style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{ asset('assets/images/bg/navbarAccBg-1.jpg') }});">
                                                        <div class="thumbnail">
                                                            <div class="image"><img
                                                                    src="{{ asset('assets/images/icons/navbarService-8.png') }}"
                                                                    alt="Mobile App"></div>
                                                            <a href="{{ route('stpStandard') }}">
                                                                <span>STP Standard</span>
                                                                <i class="feather-chevron-right"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <!-- End Single Category  -->
                                                    <h2 class="rbt-short-title">ECN Account</h2>
                                                    <!-- Start Single Category  -->
                                                    <div class="nav-category-item glass-effect"
                                                        style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{ asset('assets/images/bg/navbarAccBg-2.jpg') }});">
                                                        <div class="thumbnail">
                                                            <div class="image"><img
                                                                    src="{{ asset('assets/images/icons/navbarService-9.png') }}"
                                                                    alt="Course images"></div>
                                                            <a href="{{ route('ecnStandard') }}">
                                                                <span>ECN Standard</span>
                                                                <i class="feather-chevron-right"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <!-- End Single Category  -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Mega Menu  -->
                            </li>

                            <!-- <li class="with-megamenu has-menu-child-item">
                                <a href="#">Tools<i class="feather-chevron-down"></i></a>
                                Start Mega Menu 
                                <div class="rbt-megamenu grid-item-2" style="width: 350px;">
                                    <div class="wrapper">
                                        <div class="row row--15">
                                            <div class="col-12 single-mega-item">
                                                <div class="mega-category-item">
                                                    <h2 class="rbt-short-title">TRADING SOFTWARE</h3>
                                                        Start Single Category 
                                                        <div class="nav-category-item glass-effect"
                                                            style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{ asset('assets/images/course/category2.jpg') }});">
                                                            <div class="thumbnail">
                                                                <div class="image"><img
                                                                        src="{{ asset('assets/images/icons/navbarService-1.png') }}"
                                                                        alt="Mobile App"></div>
                                                                <a href="{{ route('serviceMobileApp') }}">
                                                                    <span>Mobile Application</span>
                                                                    <i class="feather-chevron-right"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        End Single Category 

                                                        <h2 class="rbt-short-title" style="padding-top:2px;">TRADING
                                                            PLATFORM</h2>
                                                        Start Single Category 
                                                        <div class="nav-category-item glass-effect"
                                                            style="background-image: url({{ asset('assets/images/bg/navbarServiceBg-1.webp') }});">
                                                            <div class="thumbnail">
                                                                <div class="image"><img
                                                                        src="{{ asset('assets/images/course/category5.png') }}"
                                                                        alt="Course images"
                                                                        style="top: 5px; width: 22%; height: 80%;">
                                                                </div>
                                                                <a href="{{ route('serviceMT5') }}">
                                                                    <span>Meta Trader 5 (MT5)</span>
                                                                    <i class="feather-chevron-right"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        End Single Category 

                                                        Start Single Category 
                                                        <div class="nav-category-item glass-effect"
                                                            style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{ asset('assets/images/bg/navbarServiceBg-2.jpg') }});">
                                                            <div class="thumbnail">
                                                                <div class="image"><img
                                                                        src="{{ asset('assets/images/course/category4.png') }}"
                                                                        alt="Course images"
                                                                        style="top: 5px; width: 22%; height: 80%;">
                                                                </div>
                                                                <a href="{{ route('serviceMT4') }}">
                                                                    <span>Meta Trader 4 (MT4)</span>
                                                                    <i class="feather-chevron-right"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        End Single Category 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                End Mega Menu 
                            </li> -->

                            <li class="with-megamenu has-menu-child-item position-static">
                                <a href="{{ route('servicePAMM') }}">PAMM</a>
                            </li>

                            <li class="with-megamenu has-menu-child-item position-static">
                                <a href="#">Service<i class="feather-chevron-down"></i></a>
                                <!-- Start Mega Menu  -->
                                <div class="rbt-megamenu grid-item-2" style="width: 900px;">
                                    <div class="wrapper">
                                        <div class="row row--15">
                                            <!-- <div class="col-8 single-mega-item"> -->
                                            <div class="col-12 single-mega-item">
                                                <div class="mega-category-item">
                                                    <h2 class="rbt-short-title" style="padding-top:2px;">TRADING
                                                        PRODUCT</h2>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <!-- Start Single Category  -->
                                                            <div class="nav-category-item glass-effect"
                                                                style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{ asset('assets/images/bg/navbarServiceBg-3.jpg') }});">
                                                                <div class="thumbnail">
                                                                    <div class="image"><img
                                                                            src="{{ asset('assets/images/icons/navbarService-2.png') }}"
                                                                            alt="Course images"></div>
                                                                    <a href="{{ route('serviceForex') }}">
                                                                        <span>Forex</span>
                                                                        <i class="feather-chevron-right"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <!-- End Single Category  -->
                                                        </div>
                                                        <div class="col-6">
                                                            <!-- Start Single Category  -->
                                                            <div class="nav-category-item glass-effect"
                                                                style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{ asset('assets/images/bg/navbarServiceBg-7.jpg') }});">
                                                                <div class="thumbnail">
                                                                    <div class="image"><img
                                                                            src="{{ asset('assets/images/icons/navbarService-6.png') }}"
                                                                            alt="Course images"></div>
                                                                    <a href="{{ route('serviceCrypto') }}">
                                                                        <span>CryptoCurrency</span>
                                                                        <i class="feather-chevron-right"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <!-- End Single Category  -->
                                                        </div>

                                                    </div>

                                                    <div class="row">
                                                        <div class="col-6">
                                                            <!-- Start Single Category  -->
                                                            <div class="nav-category-item glass-effect"
                                                                style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{ asset('assets/images/bg/navbarServiceBg-4.jpg') }});">
                                                                <div class="thumbnail">
                                                                    <div class="image"><img
                                                                            src="{{ asset('assets/images/icons/navbarService-3.png') }}"
                                                                            alt="Course images"></div>
                                                                    <a href="{{ route('serviceIndices') }}">
                                                                        <span>Indices</span>
                                                                        <i class="feather-chevron-right"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <!-- End Single Category  -->
                                                        </div>
                                                        <div class="col-6">
                                                            <!-- Start Single Category  -->
                                                            <div class="nav-category-item glass-effect"
                                                                style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{ asset('assets/images/bg/navbarServiceBg-5.jpg') }});">
                                                                <div class="thumbnail">
                                                                    <div class="image"><img
                                                                            src="{{ asset('assets/images/icons/navbarService-4.png') }}"
                                                                            alt="Course images"></div>
                                                                    <a href="{{ route('serviceStock') }}">
                                                                        <span>Stock</span>
                                                                        <i class="feather-chevron-right"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <!-- End Single Category  -->
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-6">
                                                            <!-- Start Single Category  -->
                                                            <div class="nav-category-item glass-effect"
                                                                style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{ asset('assets/images/bg/navbarServiceBg-6.jpg') }});">

                                                                <div class="thumbnail">
                                                                    <div class="image"><img
                                                                            src="{{ asset('assets/images/icons/navbarService-5.png') }}"
                                                                            alt="Course images"></div>
                                                                    <a href="{{ route('serviceMetal') }}">
                                                                        <span>Precious Metal</span>
                                                                        <i class="feather-chevron-right"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <!-- End Single Category  -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <div class="col-4 single-mega-item">
                                                <div class="mega-category-item">
                                                    <h2 class="rbt-short-title" style="padding-top:2px;">Fund
                                                        Management</h2>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            Start Single Category 
                                                            <div class="nav-category-item glass-effect"
                                                                style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{ asset('assets/images/bg/navbarServiceBg-8.webp') }});">
                                                                <div class="thumbnail">
                                                                    <div class="image"><img
                                                                            src="{{ asset('assets/images/icons/navbarService-7.png') }}"
                                                                            alt="Course images"></div>
                                                                    <a href="{{ route('servicePAMM') }}">
                                                                        <span>PAMM</span>
                                                                        <i class="feather-chevron-right"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            End Single Category 
                                                        </div>
                                                    </div>

                                                </div>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                                <!-- End Mega Menu  -->
                            </li>

                            <li class="with-megamenu has-menu-child-item position-static">
                                <a href="{{ route('contact') }}">Contact</a>
                            </li>

                            <li class="with-megamenu has-menu-child-item position-static">
                                <a href="{{ route('about') }}">About</a>

                            </li>
                        </ul>
                    </nav>
                </div>

                <!-- <div class="header-right">
                    <div class="header-info">
                        <ul class="rbt-dropdown-menu switcher-language d-none d-xl-block">
                            <li class="has-child-menu">
                                <a href="#">
                                    <img class="left-image" src="{{ asset('assets/images/icons/en-us.png') }}"
                                        alt="Language Images">
                                    <span class="menu-item">English</span>
                                    <i class="right-icon feather-chevron-down"></i>
                                </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="#">
                                            <img class="left-image" src="{{ asset('assets/images/icons/fr.png') }}"
                                                alt="Language Images">
                                            <span class="menu-item">Français</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img class="left-image" src="{{ asset('assets/images/icons/de.png') }}"
                                                alt="Language Images">
                                            <span class="menu-item">Deutsch</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div> -->
                <div class="header-right">
                    <!-- Start Mobile-Menu-Bar -->
                    <div class="mobile-menu-bar d-block d-xl-none">
                        <div class="hamberger">
                            <button class="hamberger-button rbt-round-btn">
                                <i class="feather-menu"></i>
                            </button>
                        </div>
                    </div>
                    <!-- Start Mobile-Menu-Bar -->
                </div>
            </div>
        </div>
    </div>

</header>

<!-- Mobile Menu Section -->
<div class="popup-mobile-menu">
    <div class="inner-wrapper" style="color: black;">
        <div class="inner-top">
            <div class="content">
                <div class="logo">
                    <div class="logo logo-dark">
                        <a href="#">
                            <img src="{{ asset('assets/images/AsteqLogo.png') }}" alt="Asteq Logo Images">
                        </a>
                    </div>

                    <div class="logo d-none logo-light">
                        <a href="#">
                            <img src="{{ asset('assets/images/AsteqLogo.png') }}"
                                alt="Asteq Logo Images">
                        </a>
                    </div>
                </div>
                <div class="rbt-btn-close">
                    <button class="close-button rbt-round-btn"><i class="feather-x"></i></button>
                </div>
            </div>
            <p class="description">Histudy is a education website template. You can customize all.</p>
            <ul class="navbar-top-left rbt-information-list justify-content-start">
                <li>
                    <a href="mailto:contact@asteqfx.com"><i class="feather-mail"></i>contact@asteqfx.com</a>
                </li>
                <li>
                    <a href="#"><i class="feather-phone"></i>(302) 555-0107</a>
                </li>
            </ul>
        </div>

        <nav class="mainmenu-nav">
            <ul class="mainmenu">
                <li class="position-static">
                    <a href="{{ route('Home') }}">Home</i></a>
                </li>

                <li class="with-megamenu has-menu-child-item position-static">
                    <a href="#">Account <i class="feather-chevron-down"></i></a>
                    <!-- Start Mega Menu  -->
                    <div class="rbt-megamenu grid-item-2" style="width: 350px;">
                        <div class="wrapper">
                            <div class="row row--15" style="margin-top:10px;">
                                <div class="col-12 single-mega-item">
                                    <div class="mega-category-item">
                                        <h2 class="rbt-short-title">STP Account</h2>
                                        <!-- Start Single Category  -->
                                        <div class="nav-category-item glass-effect"
                                            style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{ asset('assets/images/bg/navbarAccBg-1.jpg') }});">
                                            <div class="thumbnail">
                                                <div class="image"><img
                                                        src="{{ asset('assets/images/icons/navbarService-8.png') }}"
                                                        alt="STP Standard" style="top:5px; width: 22%; height: 90%;">
                                                </div>
                                                <a href="{{ route('stpStandard') }}">
                                                    <span>STP Standard</span>
                                                    <i class="feather-chevron-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- End Single Category  -->
                                        <h2 class="rbt-short-title">ECN Account</h2>
                                        <!-- Start Single Category  -->
                                        <div class="nav-category-item glass-effect"
                                            style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{ asset('assets/images/bg/navbarAccBg-2.jpg') }});">
                                            <div class="thumbnail">
                                                <div class="image"><img
                                                        src="{{ asset('assets/images/icons/navbarService-9.png') }}"
                                                        alt="ECN Standard" style="top:5px; width: 22%; height: 90%;">
                                                </div>
                                                <a href="{{ route('ecnStandard') }}">
                                                    <span>ECN Standard</span>
                                                    <i class="feather-chevron-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- End Single Category  -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Mega Menu  -->
                </li>

                <!-- <li class="with-megamenu has-menu-child-item position-static">
                    <a href="#">Tools <i class="feather-chevron-down"></i></a>
                    Start Mega Menu 
                    <div class="rbt-megamenu grid-item-4">
                        <div class="wrapper">
                            <div class="row row--15" style="margin-top:10px;">
                                <div class="col-lg-12 col-xl-3 col-xxl-3 single-mega-item">
                                    <div class="mega-category-item">
                                        <h2 class="rbt-short-title">TRADING SOFTWARE</h3>
                                            Start Single Category 
                                            <div class="nav-category-item glass-effect"
                                                style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{ asset('assets/images/course/category2.jpg') }});">
                                                <div class="thumbnail">
                                                    <div class="image"><img style="top:5px; width: 18%; height: 85%;"
                                                            src="{{ asset('assets/images/icons/navbarService-1.png') }}"
                                                            alt="Mobile App"></div>
                                                    <a href="{{ route('serviceMobileApp') }}">
                                                        <span>Mobile Application</span>
                                                        <i class="feather-chevron-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            End Single Category 

                                            <h2 class="rbt-short-title" style="padding-top:2px;">TRADING
                                                PLATFORM</h2>
                                            Start Single Category 
                                            <div class="nav-category-item glass-effect"
                                                style="background-image: url({{ asset('assets/images/bg/navbarServiceBg-1.webp') }});">
                                                <div class="thumbnail">
                                                    <div class="image"><img style="top:5px; width: 18%; height: 85%;"
                                                            src="{{ asset('assets/images/course/category5.png') }}"
                                                            alt="Course images"></div>
                                                    <a href="{{ route('serviceMT5') }}">
                                                        <span>Meta Trader 5 (MT5)</span>
                                                        <i class="feather-chevron-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            End Single Category 

                                            Start Single Category 
                                            <div class="nav-category-item glass-effect"
                                                style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{ asset('assets/images/bg/navbarServiceBg-2.jpg') }});">
                                                <div class="thumbnail">
                                                    <div class="image"><img style="top:5px; width: 18%; height: 85%;"
                                                            src="{{ asset('assets/images/course/category4.png') }}"
                                                            alt="Course images"></div>
                                                    <a href="{{ route('serviceMT4') }}">
                                                        <span>Meta Trader 4 (MT4)</span>
                                                        <i class="feather-chevron-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            End Single Category 

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    End Mega Menu 
                </li> -->

                <li class="position-static">
                    <a href="{{ route('servicePAMM') }}">PAMM</a>
                </li>

                <li class="with-megamenu has-menu-child-item position-static">
                    <a href="#">Service <i class="feather-chevron-down"></i></a>
                    <!-- Start Mega Menu  -->
                    <div class="rbt-megamenu grid-item-2" style="width: 350px;">
                        <div class="wrapper">
                            <div class="row row--15" style="margin-top:10px;">
                                <div class="col-12 single-mega-item">
                                    <div class="mega-category-item">
                                        <h2 class="rbt-short-title" style="padding-top:2px;">TRADING
                                            PRODUCT</h2>
                                        <!-- Start Single Category  -->
                                        <div class="nav-category-item glass-effect"
                                            style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{ asset('assets/images/bg/navbarServiceBg-3.jpg') }});">
                                            <div class="thumbnail">
                                                <div class="image"><img style="width: 18%; height: 85%;"
                                                        src="{{ asset('assets/images/icons/navbarService-2.png') }}"
                                                        alt="Course images"></div>
                                                <a href="{{ route('serviceForex') }}">
                                                    <span>Forex</span>
                                                    <i class="feather-chevron-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- End Single Category  -->
                                        <!-- Start Single Category  -->
                                        <div class="nav-category-item glass-effect"
                                            style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{ asset('assets/images/bg/navbarServiceBg-4.jpg') }});">
                                            <div class="thumbnail">
                                                <div class="image"><img style="width: 18%; height: 85%;"
                                                        src="{{ asset('assets/images/icons/navbarService-3.png') }}"
                                                        alt="Course images"></div>
                                                <a href="{{ route('serviceIndices') }}">
                                                    <span>Indices</span>
                                                    <i class="feather-chevron-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- End Single Category  -->
                                        <!-- Start Single Category  -->
                                        <div class="nav-category-item glass-effect"
                                            style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{ asset('assets/images/bg/navbarServiceBg-6.jpg') }});">

                                            <div class="thumbnail">
                                                <div class="image"><img style="width: 18%; height: 85%;"
                                                        src="{{ asset('assets/images/icons/navbarService-5.png') }}"
                                                        alt="Course images"></div>
                                                <a href="{{ route('serviceMetal') }}">
                                                    <span>Precious Metal</span>
                                                    <i class="feather-chevron-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- End Single Category  -->
                                        <!-- Start Single Category  -->
                                        <div class="nav-category-item glass-effect"
                                            style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{ asset('assets/images/bg/navbarServiceBg-5.jpg') }});">
                                            <div class="thumbnail">
                                                <div class="image"><img style="width: 18%; height: 85%;"
                                                        src="{{ asset('assets/images/icons/navbarService-4.png') }}"
                                                        alt="Course images"></div>
                                                <a href="{{ route('serviceStock') }}">
                                                    <span>Stock</span>
                                                    <i class="feather-chevron-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- End Single Category  -->
                                        <!-- <h2 class="rbt-short-title" style="padding-top:2px;">Fund
                                            Management</h2>
                                        <div class="row">
                                            <div class="col-12">
                                                Start Single Category 
                                                <div class="nav-category-item glass-effect"
                                                    style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{ asset('assets/images/bg/navbarServiceBg-8.webp') }});">
                                                    <div class="thumbnail">
                                                        <div class="image"><img
                                                                src="{{ asset('assets/images/icons/navbarService-7.png') }}"
                                                                alt="Course images"
                                                                style="top: 5px; width: 20%; height: 90%;"></div>
                                                        <a href="{{ route('servicePAMM') }}">
                                                            <span>PAMM</span>
                                                            <i class="feather-chevron-right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                End Single Category 
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                            <!-- End Mega Menu  -->
                </li>

                <li class="position-static">
                    <a href="{{ route('contact') }}">Contact</a>
                </li>

                <li class="position-static">
                    <a href="{{ route('about') }}">About</a>
                </li>
            </ul>
        </nav>

        <!-- <div class="header-info">
            <ul class="rbt-dropdown-menu switcher-language">
                <li class="has-child-menu">
                    <a href="#">
                        <img class="left-image" src="{{ asset('assets/images/icons/en-us.png') }}"
                            alt="Language Images">
                        <span class="menu-item">English</span>
                        <i class="right-icon feather-chevron-down"></i>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="#">
                                <img class="left-image" src="{{ asset('assets/images/icons/fr.png') }}"
                                    alt="Language Images">
                                <span class="menu-item">Français</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img class="left-image" src="{{ asset('assets/images/icons/de.png') }}"
                                    alt="Language Images">
                                <span class="menu-item">Deutsch</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div> -->

    </div>
</div>
