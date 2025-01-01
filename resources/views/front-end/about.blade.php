@extends('front-end.layouts.app')

@section('main-section')
    <!--=====================================-->
    <!--=      Page Start Banner Start      =-->
    <!--=====================================-->
    <section class="page-start-banner">
        <div class="container">
            <div class="breadcrumb">
                <ul>
                    <li><a href="{{ url('home') }}">Home</a></li>
                    <li><a href="{{ url('about') }}" class="active">ABOUT</a></li>
                </ul>
            </div>
            <div class="heading">
                <h2>ABOUT US</h2>
            </div>
        </div>
    </section>


    <!--=====================================-->
    <!--=        Mission Area Start         =-->
    <!--=====================================-->
    <section class="mission sec-mar background-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="content" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300"
                        data-sal-easing="ease-in">
                        <h2>OUR MISSION</h2>
                        <p>Stylen Salon provides a variety of beauty services that will help you feel and appear your best.
                            Our services range from hair care products and styling to makeup appointments, skincare
                            services, and much more. Facilisis aliquam aliquam adipiscing turpis sed eu sagittis.</p>
                        <h3 class="quote">WE CARE FOR YOUR SKIN</h3>
                    </div>
                </div>
                <div class="col-lg-6" data-sal="slide-down" data-sal-duration="800" data-sal-delay="100"
                    data-sal-easing="ease-in">
                    <img src="{{ asset('media/team/founder.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>

    <!--=====================================-->
    <!--=        About Area Start         =-->
    <!--=====================================-->
    <section class="about sec-mar background-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="img-box" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100"
                        data-sal-easing="ease-in">
                        <img src="{{ asset('media/about/about.png') }}" alt="">
                        <div class="experience" data-sal="flip" data-sal-duration="1000" data-sal-delay="200"
                            data-sal-easing="ease-in-quint">
                            <p><span>30+</span>Years Experience</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="content" data-sal="" data-sal-duration="800" data-sal-delay="300"
                        data-sal-easing="ease-in">
                        <h2>ABOUT STYLEN</h2>
                        <p>Stylen Salon provides a variety of beauty services that will help you feel and appear your best.
                            Our services range from hair care products and styling to makeup.</p>
                        <br>
                        <p>Amet etiam erat amet tellus eget quam. Massa est nibh in sed donec. Facilisis aliquam aliquam
                            adipiscing turpis sed eu sagittis. Eget dignissim eu congue risus gravida pretium amet. Morbi
                            eget commodo aliquet varius mauris. Tristique lorem vel egestas dignissim. Lorem ipsum dolor sit
                            amet consectetur. Amet potenti placerat id amet congue porttitor diam duis dui.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--=====================================-->
    <!--=          Team Area Start          =-->
    <!--=====================================-->
    <section class="team sec-mar background-1 text-center">
        <div class="container">
            <div class="heading">
                <h2>MEET STYLIST</h2>
                <p>They are creative, talented, and have a strong desire<br>
                    to always better their art. Meet our Stylists.</p>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="member-box" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100"
                        data-sal-easing="ease-in-out">
                        <div class="image-box">
                            <img src="{{ asset('media/team/m-1.png') }}" alt="">
                        </div>
                        <div class="member-detail text-center">
                            <h6 class="m-name"><a href="{{ url('team.detail') }}">PERRI JONAS</a></h6>
                            <p class="job-title">HAIR STYLIST</p>
                            <a href="{{ route('appointment') }}" class="stylen-btn btn-sec">BOOK NOW</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="member-box" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100"
                        data-sal-easing="ease-in-out">
                        <div class="image-box">
                            <img src="{{ asset('media/team/m-2.png') }}" alt="">
                        </div>
                        <div class="member-detail text-center">
                            <h6 class="m-name"><a href="{{ route('team.detail') }}">AIRENE MOLLY</a></h6>
                            <p class="job-title">MAKE UP ARTIST</p>
                            <a href="{{ route('appointment') }}" class="stylen-btn btn-sec">BOOK NOW</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="member-box" data-sal="slide-up" data-sal-duration="900" data-sal-delay="100"
                        data-sal-easing="ease-in-out">
                        <div class="image-box">
                            <img src="{{ asset('media/team/m-3.png') }}" alt="">
                        </div>
                        <div class="member-detail text-center">
                            <h6 class="m-name"><a href="{{ route('team.detail') }}">ALEXI ALLEN</a></h6>
                            <p class="job-title">MASSAGE SPECIALIST</p>
                            <a href="{{ route('appointment') }}" class="stylen-btn btn-sec">BOOK NOW</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="member-box" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="100"
                        data-sal-easing="ease-in-out">
                        <div class="image-box">
                            <img src="{{ asset('media/team/m-4.png') }}" alt="">
                        </div>
                        <div class="member-detail text-center">
                            <h6 class="m-name"><a href="{{ route('team.detail') }}">SOFIA KELLY</a></h6>
                            <p class="job-title">MASSAGE SPECIALIST</p>
                            <a href="{{ route('appointment') }}" class="stylen-btn btn-sec">BOOK NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
