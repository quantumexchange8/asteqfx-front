@extends('layout.layout')

@php
    $topToBottom = 'true';
    $header = 'true';
@endphp

@section('content')
    <!-- Start Side Vav -->
    <x-sideVav />
    <!-- End Side Vav -->
    <style>
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
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(55 52 52 / 50%)), url('../assets/images/bg/contactbg-1.jpg');
            /* Or use the file you uploaded */
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            padding: 120px 0;
            height: 100%;
        }
    </style>
    <a class="close_side_menu" href="javascript:void(0);"></a>

    <!-- Start Banner Area -->
    <div class="rbt-banner-area rbt-banner-8 variation-02 banner-bg-section">
        <div class="container">
            <div class="row g-5 align-items-center" data-sal="fade" data-sal-duration="600">
                <div class="col-lg-10 offset-lg-1">
                    <div class="content">
                        <div class="inner text-center">
                            <h4 class="title" style="color: white">Contact</h4>
                            <p class="description has-medium-font-size mt--20" style="color: white">Lorem, ipsum dolor sit
                                amet consectetur
                                adipisicing elit. Ex vero nam recusandae quisquam deleniti, eum distinctio totam? Corrupti,
                                aliquam ducimus dolorem aperiam a, cumque in quod dicta, dolore sint autem!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner Area -->

    <div class="rbt-contact-area rbt-section-gap">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 sal-animate" data-sal="slide-up" data-sal-delay="150"
                    data-sal-duration="800">
                    <div class="rbt-address">
                        <div class="icon">
                            <i class="feather-headphones"></i>
                        </div>
                        <div class="inner">
                            <h4 class="title">Contact Phone Number</h4>
                            <p><a href="tel:+444555666777">+444 555 666 777</a></p>
                            <p><a href="tel:+222222222333">+222 222 222 333</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 sal-animate" data-sal="slide-up" data-sal-delay="200"
                    data-sal-duration="800">
                    <div class="rbt-address">
                        <div class="icon">
                            <i class="feather-mail"></i>
                        </div>
                        <div class="inner">
                            <h4 class="title">Our Email Address</h4>
                            <p><a href="mailto:admin@gmail.com">admin@gmail.com</a></p>
                            <p><a href="mailto:example@gmail.com">example@gmail.com</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 sal-animate" data-sal="slide-up" data-sal-delay="250"
                    data-sal-duration="800">
                    <div class="rbt-address">
                        <div class="icon">
                            <i class="feather-map-pin"></i>
                        </div>
                        <div class="inner">
                            <h4 class="title">Our Location</h4>
                            <p>5678 Bangla Main Road, cities 580 <br> GBnagla, example 54786</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="rbt-contact-address rbt-section-gap">
                <div class="container">
                    <div class="row g-5">

                        <div class="col-12">
                            <div class="rbt-contact-form contact-form-style-1 max-width-auto">
                                <div class="section-title text-start">
                                    <span class="subtitle bg-primary-opacity">Contact Now</span>
                                </div>
                                <h3 class="title">LET'S GET IN TOUCH WITH US</h3>
                                <form id="contact-form" method="POST" action="mail.php"
                                    class="rainbow-dynamic-form max-width-auto">
                                    <div class="form-group">
                                        <input name="contact-name" id="contact-name" type="text">
                                        <label>Name</label>
                                        <span class="focus-border"></span>
                                    </div>
                                    <div class="form-group">
                                        <input name="contact-phone" type="email">
                                        <label>Email</label>
                                        <span class="focus-border"></span>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" id="subject" name="subject">
                                        <label>Your Subject</label>
                                        <span class="focus-border"></span>
                                    </div>
                                    <div class="form-group">
                                        <textarea name="contact-message" id="contact-message"></textarea>
                                        <label>Message</label>
                                        <span class="focus-border"></span>
                                    </div>
                                    <div class="form-submit-group">
                                        <button name="submit" type="submit" id="submit"
                                            class="rbt-btn btn-md btn-gradient hover-icon-reverse w-100">
                                            <span class="icon-reverse-wrapper">
                                                <span class="btn-text">Send</span>
                                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                            </span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="rbt-google-map bg-color-white">
                <iframe class="w-100"
                    src="{{ asset('https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2965.0824050173574!2d-93.63905729999999!3d41.998507000000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sWebFilings%2C+University+Boulevard%2C+Ames%2C+IA!5e0!3m2!1sen!2sus!4v1390839289319') }}"
                    height="600" style="border:0"></iframe>
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

        <!-- End CallTo Action Area  -->

        <x-separator />
        <!-- Start Footer aera -->

        <x-footer />
        <!-- End Footer aera -->

        <x-separator />
    @endsection
