@extends('front-end.layouts.app')


@section('main-section')
<!-- Main Wrapper Start -->
<div id="main-wrapper" class="main-wrapper">

    <!--=====================================-->
    <!--=         Slider Area Start         =-->
    <!--=====================================-->
    <section class="slider style-1">
        <div
            style="background: url('{{ asset('media/banner/slider-bg-1.png') }}'); background-size: cover; background-position: center;">
            <div class="container">
                <div class="content-wrap" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100"
                    data-sal-easing="ease-in-out">
                    <div class="content position-relative">
                        <h2 class="title">
                            LET’S GET <br>YOU <span>RELAXED</span>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <div
            style="background: url('{{ asset('media/banner/slider-bg-2.png') }}'); background-size: cover; background-position: center;">
            <div class="container">
                <div class="content-wrap" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100"
                    data-sal-easing="ease-in-out">
                    <div class="content position-relative">
                        <h2 class="title">
                            LET’S GET <br>YOU <span>CALM</span>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <div
            style="background: url('{{ asset('media/banner/slider-bg-3.png') }}'); background-size: cover; background-position: center;"
            data-sal-easing="ease-in-out">
            <div class="container">
                <div class="content-wrap" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
                    <div class="content position-relative">
                        <h2 class="title">
                            LET’S GET <br>YOU <span>FRESH</span>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--=====================================-->
    <!--=       Services Area Start         =-->
    <!--=====================================-->
    <section class="services style-1 sec-mar background-1">
        <div class="container">
            <div class="heading">
                <h2>BEAUTY SERVICES</h2>
                <p>Stylen provides a variety of beauty services that will help <br> you appear and feel your best.</p>
            </div>
            <div class="row" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100" data-sal-easing="ease-in-out">
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="service-box right-radius">
                        <div class="img-box">
                            <img src="{{ asset('media/services/s-1.png') }}" alt="Hair Care">
                        </div>
                        <div class="content">
                            <h3><a href="{{ route('service.detail') }}">HAIR CARE</a></h3>
                            <p>We provide a variety of beauty services that will help you appear and feel your best.</p>
                            <a href="{{ route('appointment') }}" class="stylen-btn btn-sec">BOOK NOW</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="service-box left-radius">
                        <div class="img-box">
                            <img src="{{ asset('media/services/s-2.png') }}" alt="Nail Care">
                        </div>
                        <div class="content">
                            <h3><a href="{{ route('service.detail') }}">NAIL CARE</a></h3>
                            <p>We provide a variety of beauty services that will help you appear and feel your best.</p>
                            <a href="{{ route('appointment') }}" class="stylen-btn btn-sec">BOOK NOW</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="service-box right-radius">
                        <div class="img-box">
                            <img src="{{ asset('media/services/s-3.png') }}" alt="Make Up">
                        </div>
                        <div class="content">
                            <h3><a href="{{ route('service.detail') }}">MAKE UP</a></h3>
                            <p>We provide a variety of beauty services that will help you appear and feel your best.</p>
                            <a href="{{ route('appointment') }}" class="stylen-btn btn-sec">BOOK NOW</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="service-box left-radius">
                        <div class="img-box">
                            <img src="{{ asset('media/services/s-4.png') }}" alt="Massage">
                        </div>
                        <div class="content">
                            <h3><a href="{{ route('service.detail') }}">MASSAGE</a></h3>
                            <p>We provide a variety of beauty services that will help you appear and feel your best.</p>
                            <a href="{{ route('appointment') }}" class="stylen-btn btn-sec">BOOK NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================-->
    <!--=     Discount Banner Area Start    =-->
    <!--=====================================-->
    <section class="discont-banner style-1">
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="content sec-pad" data-sal="fade" data-sal-duration="400" data-sal-delay="100" data-sal-easing="ease-in-out">
                        <h2>10 <span class="top-text">%</span> <span class="bottom-text">OFF</span></h2>
                        <h3>ON FIRST <br> SERVICE YOU GET</h3>
                        <p>As a greeting to Salon Services, we are offering 10% off your first attempt when you request for a credit card with your voucher code. Everything you have to do is enter the following code into the shopping cart: NEW10</p>
                        <a href="{{ route('appointment') }}" class="stylen-btn btn-primary btn-white right-arrow">BOOK APPOINTMENT</a>
                    </div>
                </div>
                <div class="col-xl-7">
                    <div class="discount-img-box">
                        <img class="top-image" src="{{ asset('media/banner/discount-top-image.png') }}" alt="" data-sal="slide-down" data-sal-duration="400" data-sal-delay="100">
                        <img class="bottom-image" src="{{ asset('media/banner/discount-bottom-image.png') }}" alt="" data-sal="slide-up" data-sal-duration="400" data-sal-delay="100">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================-->
    <!--=         Pricing Area Start        =-->
    <!--=====================================-->
    <section class="pricing style-1 sec-mar background-1">
        <div class="container">
            <div data-sal="slide-up" data-sal-duration="800" data-sal-delay="100" data-sal-easing="ease-in-out">
                <div class="heading">
                    <h2>PRICE PLANS</h2>
                    <p>Reap the benefits of our special offers and discounts beauty<br>
                        services that will help you appear and feel your best.</p>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="pricing-box">
                            <div class="title">
                                <h4>HAIR CARE</h4>
                            </div>
                            <div class="content">
                                <div class="package">
                                    <p class="p-name"><a href="appointment-1.html">Blow Dry</a></p>
                                    <p class="price"><a href="appointment-1.html">$23</a></p>
                                </div>
                                <div class="package">
                                    <p class="p-name"><a href="appointment-1.html">Basic Tint</a></p>
                                    <p class="price"><a href="appointment-1.html">$45</a></p>
                                </div>
                                <div class="package">
                                    <p class="p-name"><a href="appointment-1.html">Organic Color</a></p>
                                    <p class="price"><a href="appointment-1.html">$75</a></p>
                                </div>
                                <div class="package">
                                    <p class="p-name"><a href="appointment-1.html">Full Highlights</a></p>
                                    <p class="price"><a href="appointment-1.html">$90</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="pricing-box">
                            <div class="title">
                                <h4>NAIL CARE</h4>
                            </div>
                            <div class="content">
                                <div class="package">
                                    <p class="p-name"><a href="appointment-1.html">Pedicure</a></p>
                                    <p class="price"><a href="appointment-1.html">$23</a></p>
                                </div>
                                <div class="package">
                                    <p class="p-name"><a href="appointment-1.html">Menicure</a></p>
                                    <p class="price"><a href="appointment-1.html">$45</a></p>
                                </div>
                                <div class="package">
                                    <p class="p-name"><a href="appointment-1.html">Nail Paint</a></p>
                                    <p class="price"><a href="appointment-1.html">$75</a></p>
                                </div>
                                <div class="package">
                                    <p class="p-name"><a href="appointment-1.html">Nail Art</a></p>
                                    <p class="price"><a href="appointment-1.html">$90</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="pricing-box">
                            <div class="title">
                                <h4>MAKE UP</h4>
                            </div>
                            <div class="content">
                                <div class="package">
                                    <p class="p-name"><a href="appointment-1.html">Basic Makeup</a></p>
                                    <p class="price"><a href="appointment-1.html">$23</a></p>
                                </div>
                                <div class="package">
                                    <p class="p-name"><a href="appointment-1.html">Party Makeup</a></p>
                                    <p class="price"><a href="appointment-1.html">$45</a></p>
                                </div>
                                <div class="package">
                                    <p class="p-name"><a href="appointment-1.html">Bridal Makeup</a></p>
                                    <p class="price"><a href="appointment-1.html">$75</a></p>
                                </div>
                                <div class="package">
                                    <p class="p-name"><a href="appointment-1.html">Makeup</a></p>
                                    <p class="price"><a href="appointment-1.html">$90</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="pricing-box">
                            <div class="title">
                                <h4>MASSAGE</h4>
                            </div>
                            <div class="content">
                                <div class="package">
                                    <p class="p-name"><a href="appointment-1.html">Massage</a></p>
                                    <p class="price"><a href="appointment-1.html">$23</a></p>
                                </div>
                                <div class="package">
                                    <p class="p-name"><a href="appointment-1.html">Back Massage</a></p>
                                    <p class="price"><a href="appointment-1.html">$45</a></p>
                                </div>
                                <div class="package">
                                    <p class="p-name"><a href="appointment-1.html">Face Massage</a></p>
                                    <p class="price"><a href="appointment-1.html">$75</a></p>
                                </div>
                                <div class="package">
                                    <p class="p-name"><a href="appointment-1.html">Body Massage</a></p>
                                    <p class="price"><a href="appointment-1.html">$90</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================-->
    <!--=       Products Area Start         =-->
    <!--=====================================-->
    <section class="products style-1 sec-mar background-2">
        <div class="container">
            <div data-sal="slide-up" data-sal-duration="800" data-sal-delay="100" data-sal-easing="ease-in-out">
                <div class="row">
                    <div class="col-lg-4 order-xl-1 order-lg-1 order-sm-2 order-2">
                        <div class="img-box">
                            <img src="{{ asset('media/products/p-1.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-8 order-xl-2 order-lg-2 order-sm-1 order-1">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="title text-center">
                                    <h2>PRODUCTS</h2>
                                    <p>Our products Cosmos and Ecocert certifications are available for all products.</p>
                                    <a href="{{ url('product') }}" class="stylen-btn btn-primary">
                                        Visit shop <i class="fas fa-long-arrow-alt-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="img-box mb-desktop">
                                    <img src="{{ asset('media/products/p-2.png') }}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="img-box">
                                    <img src="{{ asset('media/products/p-3.png') }}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="img-box">
                                    <img src="{{ asset('media/products/p-4.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================-->
    <!--=          Team Area Start          =-->
    <!--=====================================-->
    <section class="team sec-mar background-1">
        <div class="container">
            <div data-sal="slide-up" data-sal-duration="800" data-sal-delay="100" data-sal-easing="ease-in-out">
                <div class="heading">
                    <h2>MEET STYLIST</h2>
                    <p>They are creative, talented, and have a strong desire<br>
                        to always better their art. Meet our Stylists.</p>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="member-box text-center">
                            <div class="image-box">
                                <img src="{{ asset('media/team/m-1.png') }}" alt="">
                            </div>
                            <div class="member-detail text-center">
                                <h6 class="m-name"><a href="{{ url('team-detail') }}">PERRI JONAS</a></h6>
                                <p class="job-title">HAIR STYLIST</p>
                                <a href="{{ url('appointment-1') }}" class="stylen-btn btn-sec">BOOK NOW</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="member-box text-center">
                            <div class="image-box">
                                <img src="{{ asset('media/team/m-2.png') }}" alt="">
                            </div>
                            <div class="member-detail text-center">
                                <h6 class="m-name"><a href="{{ url('team-detail') }}">AIRENE MOLLY</a></h6>
                                <p class="job-title">MAKE UP ARTIST</p>
                                <a href="{{ url('appointment-1') }}" class="stylen-btn btn-sec">BOOK NOW</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="member-box text-center">
                            <div class="image-box">
                                <img src="{{ asset('media/team/m-3.png') }}" alt="">
                            </div>
                            <div class="member-detail text-center">
                                <h6 class="m-name"><a href="{{ url('team-detail') }}">ALEXI ALLEN</a></h6>
                                <p class="job-title">MASSAGE SPECIALIST</p>
                                <a href="{{ url('appointment-1') }}" class="stylen-btn btn-sec">BOOK NOW</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="member-box text-center">
                            <div class="image-box">
                                <img src="{{ asset('media/team/m-4.png') }}" alt="">
                            </div>
                            <div class="member-detail text-center">
                                <h6 class="m-name"><a href="{{ url('team-detail') }}">SOFIA KELLY</a></h6>
                                <p class="job-title">MASSAGE SPECIALIST</p>
                                <a href="{{ url('appointment-1') }}" class="stylen-btn btn-sec">BOOK NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================-->
    <!--=        Gallery Area Start         =-->
    <!--=====================================-->
    <section class="gallery sec-mar background-2">
        <div class="container">
            <div class="heading">
                <h2>BEAUTY GALLERY</h2>
                <p>There are numerous additional clients to take care of alongside<br>
                    you in a Beauty Salon, and you'll frequently observe.</p>
            </div>
            <div class="row">
                <div class="col-lg-4" data-sal="slide-down" data-sal-duration="800" data-sal-delay="100"
                    data-sal-easing="ease-in-out">
                    <img src="{{ asset('media/gallery/g-1.png') }}" alt="" class="horizontal">
                    <img src="{{ asset('media/gallery/g-2.png') }}" alt="" class="horizontal">
                </div>
                <div class="col-lg-4" data-sal="slide-down" data-sal-duration="800" data-sal-delay="100"
                    data-sal-easing="ease-in-out">
                    <img src="{{ asset('media/gallery/g-3.png') }}" alt="" class="vertical">
                </div>
                <div class="col-lg-4" data-sal="slide-down" data-sal-duration="800" data-sal-delay="100"
                    data-sal-easing="ease-in-out">
                    <img src="{{ asset('media/gallery/g-4.png') }}" alt="" class="horizontal">
                    <img src="{{ asset('media/gallery/g-5.png') }}" alt="" class="horizontal">
                </div>
                <div class="col-lg-4" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100"
                    data-sal-easing="ease-in-out">
                    <img src="{{ asset('media/gallery/g-6.png') }}" alt="" class="horizontal">
                </div>
                <div class="col-lg-4" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100"
                    data-sal-easing="ease-in-out">
                    <img src="{{ asset('media/gallery/g-7.png') }}" alt="" class="horizontal">
                </div>
                <div class="col-lg-4" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100"
                    data-sal-easing="ease-in-out">
                    <img src="{{ asset('media/gallery/g-9.png') }}" alt="" class="horizontal">
                </div>
            </div>
        </div>
    </section>
    <!--=====================================-->
    <!--=        Partner Area Start         =-->
    <!--=====================================-->
    <div class="partners sec-mar text-center">
        <div class="container">
            <div class="row partner-slider">
                <div class="col-lg-2 logo">
                    <img alt="" src="{{ asset('media/partners/p-1.svg') }}">
                </div>
                <div class="col-lg-2 logo">
                    <img alt="" src="{{ asset('media/partners/p-2.svg') }}">
                </div>
                <div class="col-lg-2 logo">
                    <img alt="" src="{{ asset('media/partners/p-3.svg') }}">
                </div>
                <div class="col-lg-2 logo">
                    <img alt="" src="{{ asset('media/partners/p-4.svg') }}">
                </div>
                <div class="col-lg-2 logo">
                    <img alt="" src="{{ asset('media/partners/p-5.svg') }}">
                </div>
                <div class="col-lg-2 logo">
                    <img alt="" src="{{ asset('media/partners/p-6.svg') }}">
                </div>
                <div class="col-lg-2 logo">
                    <img alt="" src="{{ asset('media/partners/p-3.svg') }}">
                </div>
            </div>
        </div>
    </div>
    <!--=====================================-->
    <!--=      Testimonials Area Start      =-->
    <!--=====================================-->
    <section class="testimonials sec-mar background-2">
        <div class="container">
            <div data-sal="slide-up" data-sal-duration="800" data-sal-delay="100" data-sal-easing="ease-in-out">
                <div class="heading">
                    <h2>HAPPY CLIENTS</h2>
                    <p>What do our client think about our salon? Ducimus qui<br>
                        blanditiis praesentium voluptatum deleniti atque corrupti.</p>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-md-6">
                        <div class="testimonial-box border-left">
                            <div class="client d-flex">
                                <img src="{{ asset('media/testimonial/user-1.jpg') }}" alt="">
                                <div class="info">
                                    <h3>LAURA HELM</h3>
                                    <h6>STYLED BY: PERRI JONAS</h6>
                                </div>
                            </div>
                            <p>Style Salon has been providing me with a variety of services for quite some time, and I
                                keep returning because of their expertise.</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="testimonial-box">
                            <div class="client d-flex">
                                <img src="{{ asset('media/testimonial/user-2.jpg') }}" alt="">
                                <div class="info">
                                    <h3>POLY GREY</h3>
                                    <h6>STYLED BY: PERRI JONAS</h6>
                                </div>
                            </div>
                            <p>Stylen Salon provided an incredible hair transformation for both me and my mother.
                                Everything was extremely professional.</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 offset-xl-0 offset-md-3">
                        <div class="testimonial-box">
                            <div class="client d-flex">
                                <img src="{{ asset('media/testimonial/user-3.jpg') }}" alt="">
                                <div class="info">
                                    <h3>SOPHIA ALAN</h3>
                                    <h6>STYLED BY: PERRI JONAS</h6>
                                </div>
                            </div>
                            <p>It's a fantastic experience, especially because I adore Perri Jonas's haircuts. They are
                                incredibly kind people.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================-->
    <!--=         Blogs Area Start          =-->
    <!--=====================================-->
    <section class="blogs sec-mar background-1">
        <div class="container">
            <div data-sal="slide-up" data-sal-duration="800" data-sal-delay="100" data-sal-easing="ease-in-out">
                <div class="heading">
                    <h2>BLOGS</h2>
                    <p>Read latest articles & new about beauty insutry<br>
                        blanditiis praesentium voluptatum deleniti atque corrupti.</p>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="blog-card mb-xl-0 mb-4">
                            <div class="img-box">
                                <img src="media/blogs/b-1.png" alt="">
                            </div>
                            <div class="content">
                                <a href="blog-detail.html" class="title">Beauty is natural</a>
                                <p>Stylen Salon provides a variety of beauty services that will help you feel and appear
                                    your best. Our services range from hair care products and styling to makeup.</p>
                                <div class="author">
                                    <img src="media/blogs/user-1.png" alt="">
                                    <h6 class="name">JULIA ADAM</h6>
                                    <div class="raed-btn text-end">
                                        <a href="blog-detail.html" class="stylen-btn btn-sec">READ MORE</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="blog-card mb-xl-0 mb-4">
                            <div class="img-box">
                                <img src="media/blogs/b-2.png" alt="">
                            </div>
                            <div class="content">
                                <a href="blog-detail.html" class="title">Skin care routine</a>
                                <p>Stylen Salon provides a variety of beauty services that will help you feel and appear
                                    your best. Our services range from hair care products and styling to makeup.</p>
                                <div class="author">
                                    <img src="media/blogs/user-2.png" alt="">
                                    <h6 class="name">ALAN ZOE</h6>
                                    <div class="raed-btn text-end">
                                        <a href="blog-detail.html" class="stylen-btn btn-sec">READ MORE</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 offset-xl-0 offset-lg-3 offset-md-3">
                        <div class="blog-card">
                            <div class="img-box">
                                <img src="media/blogs/b-3.png" alt="">
                            </div>
                            <div class="content">
                                <a href="blog-detail.html" class="title">MAKE UP IS BEAUTY</a>
                                <p>Stylen Salon provides a variety of beauty services that will help you feel and appear
                                    your best. Our services range from hair care products and styling to makeup.</p>
                                <div class="author">
                                    <img src="media/blogs/user-3.png" alt="">
                                    <h6 class="name">MINA MOON</h6>
                                    <div class="raed-btn text-end">
                                        <a href="blog-detail.html" class="stylen-btn btn-sec">READ MORE</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
