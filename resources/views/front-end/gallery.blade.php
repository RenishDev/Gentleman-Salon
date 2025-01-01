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
                    <li><a href="{{route('gallery')}}" class="active">Gallery</a></li>
                </ul>
            </div>
            <div class="heading">
                <h2>Beauty Gallery</h2>
            </div>
        </div>
    </section>
    <!--=====================================-->
    <!--=        Gallery Area Start         =-->
    <!--=====================================-->
    <div class="gallery background-1 text-center sec-pad-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <img src="./media/gallery/g-11.png" alt="" data-sal="slide-up" data-sal-duration="800"
                        data-sal-delay="100" data-sal-easing="ease-in-out">
                    <img src="./media/gallery/g-12.png" alt="" data-sal="slide-up" data-sal-duration="800"
                        data-sal-delay="100" data-sal-easing="ease-in-out">
                </div>
                <div class="col-lg-4">
                    <img src="./media/gallery/g-13.png" alt="" data-sal="slide-up" data-sal-duration="800"
                        data-sal-delay="100" data-sal-easing="ease-in-out">
                </div>
                <div class="col-lg-4">
                    <img src="./media/gallery/g-14.png" alt="" data-sal="slide-up" data-sal-duration="800"
                        data-sal-delay="100" data-sal-easing="ease-in-out">
                    <img src="./media/gallery/g-15.png" alt="" data-sal="slide-up" data-sal-duration="800"
                        data-sal-delay="100" data-sal-easing="ease-in-out">
                </div>
                <div class="col-lg-4">
                    <img src="./media/gallery/g-16.png" alt="" data-sal="slide-up" data-sal-duration="800"
                        data-sal-delay="100" data-sal-easing="ease-in-out">
                    <img src="./media/gallery/g-17.png" alt="" data-sal="slide-up" data-sal-duration="800"
                        data-sal-delay="100" data-sal-easing="ease-in-out">
                </div>
                <div class="col-lg-4">
                    <img src="./media/gallery/g-18.png" alt="" data-sal="slide-up" data-sal-duration="800"
                        data-sal-delay="100" data-sal-easing="ease-in-out">
                </div>
                <div class="col-lg-4">
                    <img src="./media/gallery/g-19.png" alt="" data-sal="slide-up" data-sal-duration="800"
                        data-sal-delay="100" data-sal-easing="ease-in-out">
                    <img src="./media/gallery/g-20.png" alt="" data-sal="slide-up" data-sal-duration="800"
                        data-sal-delay="100" data-sal-easing="ease-in-out">
                </div>
                <div class="col-lg-4">
                    <img src="./media/gallery/g-1.png" alt="" data-sal="slide-up" data-sal-duration="800"
                        data-sal-delay="100" data-sal-easing="ease-in-out">
                    <img src="./media/gallery/g-2.png" alt="" data-sal="slide-up" data-sal-duration="800"
                        data-sal-delay="100" data-sal-easing="ease-in-out">
                </div>
                <div class="col-lg-4">
                    <img src="./media/gallery/g-3.png" alt="" data-sal="slide-up" data-sal-duration="800"
                        data-sal-delay="100" data-sal-easing="ease-in-out">
                </div>
                <div class="col-lg-4">
                    <img src="./media/gallery/g-4.png" alt="" data-sal="slide-up" data-sal-duration="800"
                        data-sal-delay="100" data-sal-easing="ease-in-out">
                    <img src="./media/gallery/g-5.png" alt="" data-sal="slide-up" data-sal-duration="800"
                        data-sal-delay="100" data-sal-easing="ease-in-out">
                </div>
                <div class="col-lg-4">
                    <img src="./media/gallery/g-6.png" alt="" data-sal="slide-up" data-sal-duration="800"
                        data-sal-delay="100" data-sal-easing="ease-in-out">
                    <img src="./media/gallery/g-7.png" alt="" data-sal="slide-up" data-sal-duration="800"
                        data-sal-delay="100" data-sal-easing="ease-in-out">
                </div>
                <div class="col-lg-4">
                    <img src="./media/gallery/g-8.png" alt="" data-sal="slide-up" data-sal-duration="800"
                        data-sal-delay="100" data-sal-easing="ease-in-out">
                </div>
                <div class="col-lg-4">
                    <img src="./media/gallery/g-9.png" alt="" data-sal="slide-up" data-sal-duration="800"
                        data-sal-delay="100" data-sal-easing="ease-in-out">
                    <img src="./media/gallery/g-10.png" alt="" data-sal="slide-up" data-sal-duration="800"
                        data-sal-delay="100" data-sal-easing="ease-in-out">
                </div>
            </div>
        </div>
    </div>
@endsection
