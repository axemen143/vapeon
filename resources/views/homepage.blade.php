@extends('homepage.layouts.app')

@section('title', 'Homepage')

@section('content')

    @include('homepage.includes.nav')
    
    <body>

        <main>

            <header class="site-header">
                <div class="news-container">
                    <div class="title">
                        Announcement
                    </div>
                    <ul>
                        <li>
                            WARNING: THIS PRODUCT CONTAINS NICOTINE. 21+ AND ABOVE ONLY...
                        </li>
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
                                <h2 class="text-white mb-4">ABOUT VAPE ON</h2>

                                <p class="text-white">We provide making your own vape mods according to your preferences and budget restrictions in addition to selling a variety of goods, including the newest products on the market.</p>

                                <h6 class="text-white mt-4">VISIT NOW!</h6>

                                <p class="text-white">All conclusive evidence shows that these are safer, so why aren't we encouraging smokers to make the shift? ---</p>
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
                                    <img src="images/artists/123.png" class="artists-image img-fluid">
                                </div>

                                <div class="artists-hover">
                                    <p>
                                        <strong>Product Name:</strong>
                                        ELFBAR
                                    </p>

                                    <p>
                                        <strong>Puffs:</strong>
                                        5000 
                                    </p>

                                    <p>
                                        <strong>Price:</strong>
                                        P450/pcs
                                    </p>

                                    <hr>

                                    <p class="mb-0">
                                        <strong>Contact us:</strong>
                                        <a href="#">VapeonButuanOfficial</a>
                                    </p>
                                </div>
                            </div>
                        </div>

                         <div class="col-lg-5 col-12">
                            <div class="artists-thumb">
                                <div class="artists-image-wrap">
                                    <img src="images/artists/123.png" class="artists-image img-fluid">
                                </div>

                                <div class="artists-hover">
                                    <p>
                                        <strong>Name:</strong>
                                        Rihana
                                    </p>

                                    <p>
                                        <strong>Birthdate:</strong>
                                        Feb 20, 1988
                                    </p>

                                    <p>
                                        <strong>Music:</strong>
                                        Country
                                    </p>

                                    <hr>

                                    <p class="mb-0">
                                        <strong>Youtube Channel:</strong>
                                        <a href="#">Rihana Official</a>
                                    </p>
                                </div>
                            </div>
                        </div>

                         <div class="col-lg-5 col-12">
                            <div class="artists-thumb">
                                <div class="artists-image-wrap">
                                    <img src="images/artists/123.png" class="artists-image img-fluid">
                                </div>

                                <div class="artists-hover">
                                    <p>
                                        <strong>Name:</strong>
                                        Rihana
                                    </p>

                                    <p>
                                        <strong>Birthdate:</strong>
                                        Feb 20, 1988
                                    </p>

                                    <p>
                                        <strong>Music:</strong>
                                        Country
                                    </p>

                                    <hr>

                                    <p class="mb-0">
                                        <strong>Youtube Channel:</strong>
                                        <a href="#">Rihana Official</a>
                                    </p>
                                </div>
                            </div>
                        </div>

                         <div class="col-lg-5 col-12">
                            <div class="artists-thumb">
                                <div class="artists-image-wrap">
                                    <img src="images/artists/1.png" class="artists-image img-fluid">
                                </div>

                                <div class="artists-hover">
                                    <p>
                                        <strong>Name:</strong>
                                        Rihana
                                    </p>

                                    <p>
                                        <strong>Birthdate:</strong>
                                        Feb 20, 1988
                                    </p>

                                    <p>
                                        <strong>Music:</strong>
                                        Country
                                    </p>

                                    <hr>

                                    <p class="mb-0">
                                        <strong>Youtube Channel:</strong>
                                        <a href="#">Rihana Official</a>
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

                                        <p>Inclusions:</p>
                                    </div>

                                    
                                </div>

                                <ul class="pricing-list mt-3">
                                    <li class="pricing-list-item">1x GeekVape Device</li>

                                    <li class="pricing-list-item">1x 60ml e-liquid juice</li>

                                    <li class="pricing-list-item">1x Vape Charger</li>

                                    <li class="pricing-list-item">2pcs ENOOK 3600 MAH Vape Battery</li>
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

                                        <p>Inclusions:</p>
                                    </div>
                                </div>

                                <ul class="pricing-list mt-3">
                                    <li class="pricing-list-item">1x GeekVape Device</li>

                                    <li class="pricing-list-item">2pcs CYCLAID 2600 MAH Vape Battery</li>

                                    <li class="pricing-list-item">1x 60ml e-liquid juice</li>
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
                    <div class="row">

                        <div class="col-lg-8 col-12 mx-auto">
                            <h2 class="text-center mb-4">Interested? Let's talk</h2>

                            <nav class="d-flex justify-content-center">
                                <div class="nav nav-tabs align-items-baseline justify-content-center" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-ContactForm-tab" data-bs-toggle="tab" data-bs-target="#nav-ContactForm" type="button" role="tab" aria-controls="nav-ContactForm" aria-selected="false">
                                        <h5>Contact Form</h5>
                                    </button>

                                    <button class="nav-link" id="nav-ContactMap-tab" data-bs-toggle="tab" data-bs-target="#nav-ContactMap" type="button" role="tab" aria-controls="nav-ContactMap" aria-selected="false">
                                        <h5>Google Maps</h5>
                                    </button>
                                </div>
                            </nav>

                            <div class="tab-content shadow-lg mt-5" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-ContactForm" role="tabpanel" aria-labelledby="nav-ContactForm-tab">
                                    <form class="custom-form contact-form mb-5 mb-lg-0" action="#" method="post" role="form">
                                        <div class="contact-form-body">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-12">
                                                    
                                                </div>

                                                <div class="col-lg-6 col-md-6 col-12">
                                                    <input type="email" name="contact-email" id="contact-email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email address" required>
                                                </div>
                                            </div>

                                            <input type="text" name="contact-company" id="contact-company" class="form-control" placeholder="Company" required>

                                            <textarea name="contact-message" rows="3" class="form-control" id="contact-message" placeholder="Message"></textarea>

                                            <div class="col-lg-4 col-md-10 col-8 mx-auto">
                                                <button type="submit" class="form-control">Send message</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="tab-pane fade" id="nav-ContactMap" role="tabpanel" aria-labelledby="nav-ContactMap-tab">
                                    <div>
                                        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63060.35184318622!2d125.47396913125002!3d8.947065500000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3301c187bf28b687%3A0x1f4a6d4e11895e61!2sVape%20On%20Vape%20Shop!5e0!3m2!1sen!2sph!4v1674556353498!5m2!1sen!2sph" frameborder="0" allowfullscreen></iframe>
                                    </div>
                                    <!-- You can easily copy the embed code from Google Maps -> Share -> Embed a map // -->
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </main>

    @include('homepage.includes.footer')

@endsection    