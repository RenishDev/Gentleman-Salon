@extends('front-end.layouts.app')

@section('main-section')

        <!--=====================================-->
        <!--=      Page Start Banner Start      =-->
        <!--=====================================-->
        <section class="page-start-banner">
            <div class="container">
                <div class="breadcrumb">
                    <ul>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('services') }}" class="active">Services</a></li>
                    </ul>
                </div>
                <div class="heading">
                    <h2>BEAUTY SERVICES</h2>
                </div>
            </div>
        </section>
        <!--=====================================-->
        <!--=       Services Area Start         =-->
        <!--=====================================-->
        <section class="services style-1 background-1 sec-mar">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="service-box left-radius m-b-30">
                            <div class="img-box">
                                <img src="{{ asset('media/services/s-1.png') }}" alt="">
                            </div>
                            <div class="content">
                                <h3><a href="{{ route('service.detail', ['slug' => 'hair-care']) }}">HAIR CARE</a></h3>
                                <p>We provide a variety of beauty services that will help you appear and feel your best.</p>
                                <a href="{{ route('appointment') }}" class="stylen-btn btn-sec">BOOK NOW</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="service-box left-radius m-b-30">
                            <div class="img-box">
                                <img src="{{ asset('media/services/s-2.png') }}" alt="">
                            </div>
                            <div class="content">
                                <h3><a href="{{ route('service.detail', ['slug' => 'nail-care']) }}">NAIL CARE</a></h3>
                                <p>We provide a variety of beauty services that will help you appear and feel your best.</p>
                                <a href="{{ route('appointment') }}" class="stylen-btn btn-sec">BOOK NOW</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="service-box left-radius m-b-30">
                            <div class="img-box">
                                <img src="{{ asset('media/services/s-3.png') }}" alt="">
                            </div>
                            <div class="content">
                                <h3><a href="{{ route('service.detail', ['slug' => 'make-up']) }}">MAKE UP</a></h3>
                                <p>We provide a variety of beauty services that will help you appear and feel your best.</p>
                                <a href="{{ route('appointment') }}" class="stylen-btn btn-sec">BOOK NOW</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="service-box left-radius m-b-30">
                            <div class="img-box">
                                <img src="{{ asset('media/services/s-4.png') }}" alt="">
                            </div>
                            <div class="content">
                                <h3><a href="{{ route('service.detail', ['slug' => 'massage']) }}">MASSAGE</a></h3>
                                <p>We provide a variety of beauty services that will help you appear and feel your best.</p>
                                <a href="{{ route('appointment') }}" class="stylen-btn btn-sec">BOOK NOW</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="service-box left-radius">
                            <div class="img-box">
                                <img src="{{ asset('media/services/s-5.png') }}" alt="">
                            </div>
                            <div class="content">
                                <h3>THERAPIES</h3>
                                <p>We provide a variety of beauty services that will help you appear and feel your best.</p>
                                <a href="{{ route('appointment') }}" class="stylen-btn btn-sec">BOOK NOW</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="service-box left-radius">
                            <div class="img-box">
                                <img src="{{ asset('media/services/s-6.png') }}" alt="">
                            </div>
                            <div class="content">
                                <h3>WAXING</h3>
                                <p>We provide a variety of beauty services that will help you appear and feel your best.</p>
                                <a href="{{ route('appointment') }}" class="stylen-btn btn-sec">BOOK NOW</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="service-box left-radius">
                            <div class="img-box">
                                <img src="{{ asset('media/services/s-7.png') }}" alt="">
                            </div>
                            <div class="content">
                                <h3>FACIALS</h3>
                                <p>We provide a variety of beauty services that will help you appear and feel your best.</p>
                                <a href="{{ route('appointment') }}" class="stylen-btn btn-sec">BOOK NOW</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="service-box left-radius">
                            <div class="img-box">
                                <img src="{{ asset('media/services/s-8.png') }}" alt="">
                            </div>
                            <div class="content">
                                <h3>MASSAGE</h3>
                                <p>We provide a variety of beauty services that will help you appear and feel your best.</p>
                                <a href="{{ route('appointment') }}" class="stylen-btn btn-sec">BOOK NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection
