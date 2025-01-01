@extends('front-end.layouts.app')

@section('main-section')
    <!--=====================================-->
    <!--=      Page Start Banner Start      =-->
    <!--=====================================-->
    <section class="page-start-banner">
        <div class="container">
            <div class="breadcrumb">
                <ul>
                    <li><a href="{{route('join-team')}}">Home</a></li>
                    <li><a href="team.html" class="active">Team</a></li>
                </ul>
            </div>
            <div class="heading">
                <h2>MEET OUR TEAM</h2>
            </div>
        </div>
    </section>
    <!--=====================================-->
    <!--=       Founder Area Start          =-->
    <!--=====================================-->
    <section class="founder background-1 sec-pad-80 pb-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="content">
                        <h2><a href="team-detail.html">NATASHA SOFIE</a></h2>
                        <h6>FOUNDER</h6>
                        <p>Style Salon has been providing me with a variety of services for quite some time, and I keep
                            returning because their expertise and customer service are second to none! My absolute favorite
                            experience was obtaining a wax and a facial; the process was easy and the results were perfect!
                            Definitely a returning client.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="/media/team/founder.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <!--=====================================-->
    <!--=          Team Area Start          =-->
    <!--=====================================-->
    <section class="team background-2 sec-pad-80 text-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="member-box m-b-30">
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
                    <div class="member-box m-b-30">
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
                    <div class="member-box m-b-30">
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
                    <div class="member-box m-b-30">
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
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="member-box">
                        <div class="image-box">
                            <img src="/media/team/m-5.png" alt="">
                        </div>
                        <div class="member-detail text-center">
                            <h6 class="m-name"> <a href="team-detail.html">PERRI JONAS</a></h6>
                            <p class="job-title">HAIR STYLIST</p>
                            <a href="{{route('appointment')}}" class="stylen-btn btn-sec">BOOK NOW</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="member-box">
                        <div class="image-box">
                            <img src="/media/team/m-6.png" alt="">
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
                            <img src="/media/team/m-7.png" alt="">
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
                            <img src="/media/team/m-8.png" alt="">
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
