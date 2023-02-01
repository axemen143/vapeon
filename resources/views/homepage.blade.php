@extends('homepage.layouts.app')

@section('title', 'Homepage')

@section('content')

    @include('homepage.includes.nav')
    
    <body>

        <main>

            <header class="site-header">
                <div class="news-container">
                    <div class="title">
                        Announcements
                    </div>
                    <ul>
                    @foreach($sliders as $SliderItem)
                        <li>
                        {{$SliderItem->description}}
                            {{-- WARNING: THIS PRODUCT CONTAINS NICOTINE. 21+ AND ABOVE ONLY... --}}
                        </li>
                    @endforeach
                    </ul>
                </div>
            </header>

            <section class="hero-section" id="section_1">
                <div class="section-overlay"></div>
                    <div class="container d-flex justify-content-center align-items-center">
                      <div class="row">

                        <div class="col-12 mt-auto mb-5 text-center">
                            <small>keep calm and</small>
                            <h1 class="text-white mb-5">VAPE ON</h1>
                            <a class="btn custom-btn smoothscroll" href="#section_2">Explore</a>
                        </div>

                        <div class="col-lg-12 col-12 mt-auto d-flex flex-column flex-lg-row text-center">
                            <div class="date-wrap">
                                <h5 class="text-white">
                                    <i class="custom-icon bi-clock me-2"></i>
                                    Limited Sale!
                                </h5>
                            </div>

                            <div class="location-wrap mx-auto py-3 py-lg-0">
                                <h5 class="text-white">
                                    <i class="custom-icon bi-geo-alt me-2"></i>
                                    Narra Road, Butuan City
                                </h5>
                            </div>

                            <div class="social-share">
                                <ul class="social-icon d-flex align-items-center justify-content-center">
                                    <span class="text-white me-3">Share:</span>

                                    <li class="social-icon-item">
                                        <a href="https://www.facebook.com/ButuanVapeOn" class="social-icon-link">
                                            <span class="bi-facebook"></span>
                                        </a>
                                    </li>

                                    <li class="social-icon-item">
                                        <a href="https://twitter.com/vapeon_santa" class="social-icon-link">
                                            <span class="bi-twitter"></span>
                                        </a>
                                    </li>

                                    <li class="social-icon-item">
                                        <a href="https://www.instagram.com/vapeon.startvaping/?hl=en" class="social-icon-link">
                                            <span class="bi-instagram"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="video-wrap">
                    <video autoplay="" loop="" muted="" class="custom-video" poster="">
                        <source src="video/videotricks.mp4" type="video/mp4">
                    </video>
                </div>
            </section>
            <section class="about-section section-padding" id="section_2">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12 mb-4 mb-lg-0 d-flex align-items-center">
                            <div class="services-info">
                                <h2 class="text-white mb-4">ABOUT US</h2>

                                <p class="text-white">We provide making your own vape mods according to your preferences and budget restrictions in addition to selling a variety of goods, including the newest products on the market.</p>

                                <h6 class="text-white mt-4">MISSION:</h6>

                                <p class="text-white">We aim to offer the highest quality vaping experience by providing the safest products while ensuring the ultimate in customer satisfaction. Making every customer happy is our guiding principle.</p>

                                <h6 class="text-white mt-4">VISION:</h6>

                                <p class="text-white">Our vision is to become one of the most comprehensive and easily accessible brands of electronic cigarettes in the market, serving as a one-stop shop for vapers. The goal of Vape On is to drastically reduce the number of smokers who use analog cigarettes and convert them to vaping. It is one of the most comprehensive and easily accessible electronic cigarette brands on the market.</p>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="about-text-wrap">
                                <img src="images/vapeon.png" class="about-image img-fluid">
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <section class="artists-section section-padding" id="section_3">
                
                <div class="container">
                    <div class="row justify-content-center">

                        <div class="col-12 text-center">
                            <h2 class="mb-4">Vape Products</h1>
                        </div>

                        <div class="col-lg-5 col-12">
                            <div class="artists-thumb">
                                <div class="artists-image-wrap">
                                    <img src="images/artists/d.png" class="artists-image img-fluid">
                                </div>

                                <div class="artists-hover">
                                    <p>
                                        <strong>Product Name:</strong>
                                        TOHA 
                                    </p>

                                    <p>
                                        <strong>Puffs:</strong>
                                        8000 
                                    </p>

                                    <p>
                                        <strong>Price:</strong>
                                        450 PHP
                                    </p>

                                    <hr>

                                    <p class="mb-0">
                                        <strong>FB PAGE:</strong>
                                        <a href="https://www.facebook.com/ButuanVapeOn">VapeonButuanOfficial</a>
                                    </p>
                                </div>
                            </div>
                        </div>

                         <div class="col-lg-5 col-12">
                            <div class="artists-thumb">
                                <div class="artists-image-wrap">
                                    <img src="images/artists/a.png" class="artists-image img-fluid">
                                </div>

                                <div class="artists-hover">
                                    <p>
                                        <strong>Product Name:</strong>
                                        TOHA 
                                    </p>

                                    <p>
                                        <strong>Puffs:</strong>
                                        8000
                                    </p>

                                    <p>
                                        <strong>Price:</strong>
                                        450 PHP
                                    </p>

                                    <hr>

                                    <p class="mb-0">
                                        <strong>FB PAGE:</strong>
                                        <a href="https://www.facebook.com/ButuanVapeOn">VapeonButuanOfficial</a>
                                    </p>
                                </div>
                            </div>
                        </div>

                         <div class="col-lg-5 col-12">
                            <div class="artists-thumb">
                                <div class="artists-image-wrap">
                                    <img src="images/artists/b.png" class="artists-image img-fluid">
                                </div>

                                <div class="artists-hover">
                                    <p>
                                        <strong>Product Name:</strong>
                                        TOHA
                                    </p>

                                    <p>
                                        <strong>Puffs:</strong>
                                        5000
                                    </p>

                                    <p>
                                        <strong>Price:</strong>
                                        450 PHP
                                    </p>

                                    <hr>

                                    <p class="mb-0">
                                        <strong>FB PAGE:</strong>
                                        <a href="https://www.facebook.com/ButuanVapeOn">VapeonButuanOfficial</a>
                                    </p>
                                </div>
                            </div>
                        </div>

                         <div class="col-lg-5 col-12">
                            <div class="artists-thumb">
                                <div class="artists-image-wrap">
                                    <img src="images/artists/c.png" class="artists-image img-fluid">
                                </div>

                                <div class="artists-hover">
                                    <p>
                                        <strong>Product Name:</strong>
                                        TOHA
                                    </p>

                                    <p>
                                        <strong>Puffs:</strong>
                                        5000
                                    </p>

                                    <p>
                                        <strong>Price:</strong>
                                        450 PHP
                                    </p>

                                    <hr>

                                    <p class="mb-0">
                                        <strong>FB PAGE:</strong>
                                        <a href="https://www.facebook.com/ButuanVapeOn"">VapeonButuanOfficial</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </section>

            <section class="pricing-section section-padding section-bg" id="section_4">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8 col-12 mx-auto">
                            <h2 class="text-center mb-4">Bundle Vape Products</h2>
                        </div>
                        
                        <div class="col-lg-6 col-12">
                            <div class="pricing-thumb">
                                <div class="d-flex">
                                    <div>
                                        <h3><small>GEEKVAPE BUNDLE PROMO</small> $120</h3>

                                        <h3><small>Inclusions:</small></h3>
                                    </div>

                                    
                                </div>

                                <ul class="pricing-list mt-3">
                                    <li class="pricing-list-item"><h3><small>1x GeekVape Device</small></h3></li>

                                    <li class="pricing-list-item"><h3><small>1x 60ml e-liquid juice</small></h3></li>

                                    <li class="pricing-list-item"><h3><small>1x Vape Charger</small></h3></li>

                                    <li class="pricing-list-item"><h3><small>2pcs ENOOK 3600 MAH Vape Battery</small></h3></li>
                                </ul>
                                <a class="link-fx-1 color-contrast-higher mt-4" href="">
                                    <span>Buy Now!</span>
                                    <svg class="icon" viewBox="0 0 32 32" aria-hidden="true"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><circle cx="16" cy="16" r="15.5"></circle><line x1="10" y1="18" x2="16" y2="12"></line><line x1="16" y1="12" x2="22" y2="18"></line></g></svg>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12 mt-4 mt-lg-0">
                            <div class="pricing-thumb">
                                <div class="d-flex">
                                    <div>
                                        <h3><small>GEEKVAPE STANDARD</small> $240</h3>

                                        <h3><small>Inclusions:</small></h3>
                                    </div>
                                </div>

                                <ul class="pricing-list mt-3">
                                    <li class="pricing-list-item"><h3><small>1x GeekVape Device</small></h3></li>

                                    <li class="pricing-list-item"><h3><small>2pcs CYCLAID 2600 MAH Vape Battery</li></small></h3>

                                    <li class="pricing-list-item"><h3><small>1x 60ml e-liquid juice</small></h3></li>
                                </ul>

                                <a class="link-fx-1 color-contrast-higher mt-4" href="">
                                    <span>Buy Now!</span>
                                    <svg class="icon" viewBox="0 0 32 32" aria-hidden="true"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><circle cx="16" cy="16" r="15.5"></circle><line x1="10" y1="18" x2="16" y2="12"></line><line x1="16" y1="12" x2="22" y2="18"></line></g></svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

    <section class="contact-section section-padding" id="section_5">
            <div class="container">
                <h2 class="text-center mb-4">LOCATION</h2>
                    <div>
                        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63060.35184318622!2d125.47396913125002!3d8.947065500000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3301c187bf28b687%3A0x1f4a6d4e11895e61!2sVape%20On%20Vape%20Shop!5e0!3m2!1sen!2sph!4v1674556353498!5m2!1sen!2sph" frameborder="0" allowfullscreen></iframe>
                    </div>
            </div>
        </section>
    </main>

    @include('homepage.includes.footer')

@endsection    