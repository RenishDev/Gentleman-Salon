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
                    <li><a href="{{route('services')}}">Services</a></li>
                    <li><a href="{{route('service-detail')}}" class="active">SERVICE DETAIL</a></li>
                </ul>
            </div>
            <div class="heading">
                <h2>SERVICE DETAIL</h2>
            </div>
        </div>
    </section>
    <!--=====================================-->
    <!--=      SERVICE DETAIL Area Start    =-->
    <!--=====================================-->
    <section class="service-detail background-1 sec-mar">
        <div class="container">
            <!-- Styling -->
            <div class="detail-row">
                <div class="row">
                    <div class="col-lg-5" data-sal="fade" data-sal-duration="400" data-sal-delay="100" data-sal-easing="ease-in-out">
                        <div class="content">
                            <div class="title">
                                <h2>Styling</h2>
                                <h6 class="price">$23</h6>
                            </div>
                            <p>
                                To assist you feel and look your absolute best, we provide a variety of hair procedures and treatments including Hair Cut, Hair Straightening, Keratin Treatment, Hair Protein Treatment, X-tenso / Rebonding, Blow dry, and much more. Our skilled beauticians can soften and even out your skin. You can obtain full body waxing services in the privacy of your own.
                            </p>
                            <a href="{{route('appointment')}}" class="stylen-btn btn-sec">BOOK NOW</a>
                        </div>
                    </div>
                    <div class="col-lg-7" data-sal="slide-up" data-sal-duration="400" data-sal-delay="100" data-sal-easing="ease-in-out">
                        <div class="img-frame">
                            <img src="{{ asset('media/services/sd-1.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Braiding -->
            <div class="detail-row">
                <div class="row">
                    <div class="col-lg-7" data-sal="slide-up" data-sal-duration="400" data-sal-delay="100" data-sal-easing="ease-in-out">
                        <div class="img-frame">
                            <img src="{{ asset('media/services/sd-2.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-5" data-sal="fade" data-sal-duration="400" data-sal-delay="100" data-sal-easing="ease-in-out">
                        <div class="content">
                            <div class="title">
                                <h2>Braiding</h2>
                                <h6 class="price">$45</h6>
                            </div>
                            <p>
                                Our skilled beauticians can soften and even out your skin. You can obtain full body waxing services in the privacy of your own. We offer Rica and Sugar wax procedures to quickly remove undesired hair. Our well-trained beauty arrives at your specified time using their own waxing beds, giving you the salon experience in the comfort. Don't accept anything less.
                            </p>
                            <a href="{{route('appointment')}}" class="stylen-btn btn-sec">BOOK NOW</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Shading -->
            <div class="detail-row">
                <div class="row">
                    <div class="col-lg-5" data-sal="fade" data-sal-duration="400" data-sal-delay="100" data-sal-easing="ease-in-out">
                        <div class="content">
                            <div class="title">
                                <h2>Shading</h2>
                                <h6 class="price">$60</h6>
                            </div>
                            <p>
                                We provide a wide range of skin Therapies, such as facials, manicures and pedicures, hydra skin treatments, body waxing, and more. Our services are designed to address a variety of skin issues, such as acne, ageing, hyperpigmentation, and more. Our skilled beauticians can soften and even out your skin. You can obtain full body waxing services in the privacy of your own.
                            </p>
                            <a href="{{route('appointment')}}" class="stylen-btn btn-sec">BOOK NOW</a>
                        </div>
                    </div>
                    <div class="col-lg-7" data-sal="slide-up" data-sal-duration="400" data-sal-delay="100" data-sal-easing="ease-in-out">
                        <div class="img-frame">
                            <img src="{{ asset('media/services/sd-3.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Rebonding -->
            <div class="detail-row">
                <div class="row">
                    <div class="col-lg-7" data-sal="slide-up" data-sal-duration="400" data-sal-delay="100" data-sal-easing="ease-in-out">
                        <div class="img-frame">
                            <img src="{{ asset('media/services/sd-4.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-5" data-sal="fade" data-sal-duration="400" data-sal-delay="100" data-sal-easing="ease-in-out">
                        <div class="content">
                            <div class="title">
                                <h2>Rebonding</h2>
                                <h6 class="price">$99</h6>
                            </div>
                            <p>
                                We offer the greatest facials in the USA that are focused on a certain issue. Cleansing, exfoliation, a mild facial massage, and moisturizing are all included. Extractions are not required. A genuinely cleansing facial that uses the stimulating and medicinal properties. Our skilled beauticians can soften and even out your skin. You can obtain full body waxing services in the privacy of your own.
                            </p>
                            <a href="{{route('appointment')}}" class="stylen-btn btn-sec">BOOK NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
