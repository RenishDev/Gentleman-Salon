@extends('front-end.layouts.app')

@section('main-section')
    <!--=====================================-->
    <!--=      Page Start Banner Start      =-->
    <!--=====================================-->
    <section class="page-start-banner">
        <div class="container">
            <div class="breadcrumb">
                <ul>
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><a href="{{route('team')}}">Team</a></li>
                    <li><a href="{{route('team.detail')}}" class="active">Team Detail</a></li>
                </ul>
            </div>
            <div class="heading">
                <h2>TEAM detail</h2>
            </div>
        </div>
    </section>
    <!--=====================================-->
    <!--=       Team Detail Area Start      =-->
    <!--=====================================-->
    <section class="team-detail background-1 sec-mar">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 offset-xl-2">
                    <div class="row">
                        <div class="col-lg-6">
                            <img src="/media/team/team-detail.png" alt="">
                        </div>
                        <div class="col-lg-6">
                            <h2 class="name">SOFIA KELLY</h2>
                            <h6 class="job">MASSAGE SPECIALIST</h6>
                            <ul class="list-unstyled social-icons">
                                <li><a href=""><i class="fab fa-snapchat-ghost"></i></a></li>
                                <li><a href=""><i class="fab fa-instagram"></i></a></li>
                                <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href=""><i class="fab fa-pinterest-p"></i></a></li>
                            </ul>
                            <p>
                                It's a fantastic experience, especially because I adore Perri Jonas's haircuts. They are
                                incredibly kind people who know how to cut hair. The entire crew is extremely pleasant and
                                excellent. It comes highly recommended.
                            </p>
                            <a href="{{route('appointment')}}" class="stylen-btn btn-primary right-arrow">BOOK APPOINTMENT</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================-->
    <!--=       Portfolio Area Start        =-->
    <!--=====================================-->
    <section class="gallery background-2 sec-mar">
        <div class="container">
            <div class="heading">
                <h2>RECENT WORK</h2>
                <p>They are creative, talented, and have a strong desire<br>
                    to always better their art. Meet our Stylists.</p>
            </div>
            <div class="row">
                <div class="col-lg-4" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100"
                    data-sal-easing="ease-in-out">
                    <img src="/media/gallery/g-12.png" alt="" class="horizontal">
                    <img src="/media/gallery/g-1.png" alt="" class="horizontal">
                </div>
                <div class="col-lg-4" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100"
                    data-sal-easing="ease-in-out">
                    <img src="/media/gallery/g-13.png" alt="" class="vertical">
                </div>
                <div class="col-lg-4" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100"
                    data-sal-easing="ease-in-out">
                    <img src="/media/gallery/g-9.png" alt="" class="horizontal">
                    <img src="/media/gallery/g-14.png" alt="" class="horizontal">
                </div>
            </div>
        </div>
    </section>
    <!--=====================================-->
    <!--=       Other Team Area Start       =-->
    <!--=====================================-->
    <section class="team background-1 sec-mar text-center">
        <div class="container">
            <div class="heading">
                <h2>OTHER STYLIST</h2>
                <p>They are creative, talented, and have a strong desire<br>
                    to always better their art. Meet our Stylists.</p>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="member-box">
                        <div class="image-box">
                            <img src="/media/team/m-1.png" alt="">
                        </div>
                        <div class="member-detail text-center">
                            <h6 class="m-name"><a href="team-detail.html">PERRI JONAS</a></h6>
                            <p class="job-title">HAIR STYLIST</p>
                            <a href="{{route('appointment')}}" class="stylen-btn btn-sec">BOOK NOW</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="member-box">
                        <div class="image-box">
                            <img src="/media/team/m-2.png" alt="">
                        </div>
                        <div class="member-detail text-center">
                            <h6 class="m-name"><a href="team-detail.html">AIRENE MOLLY</a></h6>
                            <p class="job-title">MAKE UP ARTIST</p>
                            <a href="{{route('appointment')}}" class="stylen-btn btn-sec">BOOK NOW</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="member-box">
                        <div class="image-box">
                            <img src="/media/team/m-3.png" alt="">
                        </div>
                        <div class="member-detail text-center">
                            <h6 class="m-name"><a href="team-detail.html">ALEXI ALLEN</a></h6>
                            <p class="job-title">MASSAGE SPECIALIST</p>
                            <a href="{{route('appointment')}}" class="stylen-btn btn-sec">BOOK NOW</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="member-box">
                        <div class="image-box">
                            <img src="/media/team/m-4.png" alt="">
                        </div>
                        <div class="member-detail text-center">
                            <h6 class="m-name"><a href="team-detail.html">SOFIA KELLY</a></h6>
                            <p class="job-title">MASSAGE SPECIALIST</p>
                            <a href="{{route('appointment')}}" class="stylen-btn btn-sec">BOOK NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
