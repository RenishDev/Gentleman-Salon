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
                <li><a href="{{ route('blogs') }}" class="active">Blogs</a></li>
            </ul>
        </div>
        <div class="heading">
            <h2>Blogs</h2>
        </div>
    </div>
</section>

<!--=====================================-->
<!--=         Blogs Area Start          =-->
<!--=====================================-->
<section class="blogs background-1 sec-mar">
    <div class="container">
        <div class="row mb-3">
            <div class="col-xl-5 col-lg-4 col-md-6">
                <div class="search-bar">
                    <form method="get" action="blogs-2.html">
                        <div class="form-group has-search">
                            <button type="submit" class="fa fa-search form-control-blogs"></button>
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-xl-7 col-lg-8 col-md-12">
                <div class="blog-tags">
                    <ul class="list-unstyled">
                        <li><a class="active" href="{{ route('blogs') }}">ARTICLES</a></li>
                        <li><a href="{{ route('blogs') }}">BEAUTY</a></li>
                        <li><a href="{{ route('blogs') }}">MAKE UP</a></li>
                        <li><a href="{{ route('blogs') }}">MASSAGE</a></li>
                        <li><a href="{{ route('blogs') }}">HAIR CUT</a></li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 col-lg-6" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="300"
                data-sal-easing="ease-in-out">
                <div class="blog-card list m-b-30">
                    <div class="row">
                        <div class="col-xl-4 col-lg-12 col-md-4 pe-xl-0 pe-lg-3 pe-md-0 position-relative">
                            <img src="{{ asset('media/blogs/b-1.png') }}" alt="">
                            <span class="date">09 FEB 2023</span>
                        </div>
                        <div class="col-xl-8 col-lg-12 col-md-8 ps-xl-0 ps-lg-3 ps-md-0">
                            <div class="content">
                                <a href="{{ route('blog.detail') }}" class="title">Skin care routine</a>
                                <p>To assist you feel and look your absolute best, we provide a variety of hair
                                    procedures and treatments including Hair Cut, Hair Straightening.</p>
                                <div class="author">
                                    <img src="{{ asset('media/blogs/user-2.png') }}" alt="">
                                    <h6 class="name">ALAN ZOE</h6>
                                    <div class="raed-btn text-end">
                                        <a href="{{ route('blog.detail') }}" class="stylen-btn btn-sec">READ MORE</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="300"
                data-sal-easing="ease-in-out">
                <div class="blog-card list m-b-30">
                    <div class="row">
                        <div class="col-xl-4 col-lg-12 col-md-4 pe-xl-0 pe-lg-3 pe-md-0 position-relative">
                            <img src="{{ asset('media/blogs/b-2.png') }}" alt="">
                            <span class="date">09 FEB 2023</span>
                        </div>
                        <div class="col-xl-8 col-lg-12 col-md-8 ps-xl-0 ps-lg-3 ps-md-0">
                            <div class="content">
                                <a href="{{ route('blog.detail') }}" class="title">Skin care routine</a>
                                <p>To assist you feel and look your absolute best, we provide a variety of hair
                                    procedures and treatments including Hair Cut, Hair Straightening.</p>
                                <div class="author">
                                    <img src="{{ asset('media/blogs/user-2.png') }}" alt="">
                                    <h6 class="name">ALAN ZOE</h6>
                                    <div class="raed-btn text-end">
                                        <a href="{{ route('blog.detail') }}" class="stylen-btn btn-sec">READ MORE</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="300"
                data-sal-easing="ease-in-out">
                <div class="blog-card list m-b-30">
                    <div class="row">
                        <div class="col-xl-4 col-lg-12 col-md-4 pe-xl-0 pe-lg-3 pe-md-0 position-relative">
                            <img src="{{ asset('media/blogs/b-2.png') }}" alt="">
                            <span class="date">09 FEB 2023</span>
                        </div>
                        <div class="col-xl-8 col-lg-12 col-md-8 ps-xl-0 ps-lg-3 ps-md-0">
                            <div class="content">
                                <a href="{{ route('blog.detail') }}" class="title">Skin care routine</a>
                                <p>To assist you feel and look your absolute best, we provide a variety of hair
                                    procedures and treatments including Hair Cut, Hair Straightening.</p>
                                <div class="author">
                                    <img src="{{ asset('media/blogs/user-2.png') }}" alt="">
                                    <h6 class="name">ALAN ZOE</h6>
                                    <div class="raed-btn text-end">
                                        <a href="{{ route('blog.detail') }}" class="stylen-btn btn-sec">READ MORE</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="300"
                data-sal-easing="ease-in-out">
                <div class="blog-card list m-b-30">
                    <div class="row">
                        <div class="col-xl-4 col-lg-12 col-md-4 pe-xl-0 pe-lg-3 pe-md-0 position-relative">
                            <img src="{{ asset('media/blogs/b-1.png') }}" alt="">
                            <span class="date">09 FEB 2023</span>
                        </div>
                        <div class="col-xl-8 col-lg-12 col-md-8 ps-xl-0 ps-lg-3 ps-md-0">
                            <div class="content">
                                <a href="{{ route('blog.detail') }}" class="title">Skin care routine</a>
                                <p>To assist you feel and look your absolute best, we provide a variety of hair
                                    procedures and treatments including Hair Cut, Hair Straightening.</p>
                                <div class="author">
                                    <img src="{{ asset('media/blogs/user-2.png') }}" alt="">
                                    <h6 class="name">ALAN ZOE</h6>
                                    <div class="raed-btn text-end">
                                        <a href="{{ route('blog.detail') }}" class="stylen-btn btn-sec">READ MORE</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="300"
                data-sal-easing="ease-in-out">
                <div class="blog-card list m-b-30">
                    <div class="row">
                        <div class="col-xl-4 col-lg-12 col-md-4 pe-xl-0 pe-lg-3 pe-md-0 position-relative">
                            <img src="{{ asset('media/blogs/b-2.png') }}" alt="">
                            <span class="date">09 FEB 2023</span>
                        </div>
                        <div class="col-xl-8 col-lg-12 col-md-8 ps-xl-0 ps-lg-3 ps-md-0">
                            <div class="content">
                                <a href="{{ route('blog.detail') }}" class="title">Skin care routine</a>
                                <p>To assist you feel and look your absolute best, we provide a variety of hair
                                    procedures and treatments including Hair Cut, Hair Straightening.</p>
                                <div class="author">
                                    <img src="{{ asset('media/blogs/user-2.png') }}" alt="">
                                    <h6 class="name">ALAN ZOE</h6>
                                    <div class="raed-btn text-end">
                                        <a href="{{ route('blog.detail') }}" class="stylen-btn btn-sec">READ MORE</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="300"
                data-sal-easing="ease-in-out">
                <div class="blog-card list m-b-30">
                    <div class="row">
                        <div class="col-xl-4 col-lg-12 col-md-4 pe-xl-0 pe-lg-3 pe-md-0 position-relative">
                            <img src="{{ asset('media/blogs/b-3.png') }}" alt="">
                            <span class="date">09 FEB 2023</span>
                        </div>
                        <div class="col-xl-8 col-lg-12 col-md-8 ps-xl-0 ps-lg-3 ps-md-0">
                            <div class="content">
                                <a href="{{ route('blog.detail') }}" class="title">Skin care routine</a>
                                <p>To assist you feel and look your absolute best, we provide a variety of hair
                                    procedures and treatments including Hair Cut, Hair Straightening.</p>
                                <div class="author">
                                    <img src="{{ asset('media/blogs/user-2.png') }}" alt="">
                                    <h6 class="name">ALAN ZOE</h6>
                                    <div class="raed-btn text-end">
                                        <a href="{{ route('blog.detail') }}" class="stylen-btn btn-sec">READ MORE</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="300"
                data-sal-easing="ease-in-out">
                <div class="blog-card list m-b-30">
                    <div class="row">
                        <div class="col-xl-4 col-lg-12 col-md-4 pe-xl-0 pe-lg-3 pe-md-0 position-relative">
                            <img src="{{ asset('media/blogs/b-1.png') }}" alt="">
                            <span class="date">09 FEB 2023</span>
                        </div>
                        <div class="col-xl-8 col-lg-12 col-md-8 ps-xl-0 ps-lg-3 ps-md-0">
                            <div class="content">
                                <a href="{{ route('blog.detail') }}" class="title">Skin care routine</a>
                                <p>To assist you feel and look your absolute best, we provide a variety of hair
                                    procedures and treatments including Hair Cut, Hair Straightening.</p>
                                <div class="author">
                                    <img src="{{ asset('media/blogs/user-2.png') }}" alt="">
                                    <h6 class="name">ALAN ZOE</h6>
                                    <div class="raed-btn text-end">
                                        <a href="{{ route('blog.detail') }}" class="stylen-btn btn-sec">READ MORE</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="300"
                data-sal-easing="ease-in-out">
                <div class="blog-card list m-b-30">
                    <div class="row">
                        <div class="col-xl-4 col-lg-12 col-md-4 pe-xl-0 pe-lg-3 pe-md-0 position-relative">
                            <img src="{{ asset('media/blogs/b-2.png') }}" alt="">
                            <span class="date">09 FEB 2023</span>
                        </div>
                        <div class="col-xl-8 col-lg-12 col-md-8 ps-xl-0 ps-lg-3 ps-md-0">
                            <div class="content">
                                <a href="{{ route('blog.detail') }}" class="title">Skin care routine</a>
                                <p>To assist you feel and look your absolute best, we provide a variety of hair
                                    procedures and treatments including Hair Cut, Hair Straightening.</p>
                                <div class="author">
                                    <img src="{{ asset('media/blogs/user-2.png') }}" alt="">
                                    <h6 class="name">ALAN ZOE</h6>
                                    <div class="raed-btn text-end">
                                        <a href="{{ route('blog.detail') }}" class="stylen-btn btn-sec">READ MORE</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="300"
                data-sal-easing="ease-in-out">
                <div class="blog-card list m-b-30">
                    <div class="row">
                        <div class="col-xl-4 col-lg-12 col-md-4 pe-xl-0 pe-lg-3 pe-md-0 position-relative">
                            <img src="{{ asset('media/blogs/b-3.png') }}" alt="">
                            <span class="date">09 FEB 2023</span>
                        </div>
                        <div class="col-xl-8 col-lg-12 col-md-8 ps-xl-0 ps-lg-3 ps-md-0">
                            <div class="content">
                                <a href="{{ route('blog.detail') }}" class="title">Skin care routine</a>
                                <p>To assist you feel and look your absolute best, we provide a variety of hair
                                    procedures and treatments including Hair Cut, Hair Straightening.</p>
                                <div class="author">
                                    <img src="{{ asset('media/blogs/user-2.png') }}" alt="">
                                    <h6 class="name">ALAN ZOE</h6>
                                    <div class="raed-btn text-end">
                                        <a href="{{ route('blog.detail') }}" class="stylen-btn btn-sec">READ MORE</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="300"
                data-sal-easing="ease-in-out">
                <div class="blog-card list m-b-30">
                    <div class="row">
                        <div class="col-xl-4 col-lg-12 col-md-4 pe-xl-0 pe-lg-3 pe-md-0 position-relative">
                            <img src="{{ asset('media/blogs/b-1.png') }}" alt="">
                            <span class="date">09 FEB 2023</span>
                        </div>
                        <div class="col-xl-8 col-lg-12 col-md-8 ps-xl-0 ps-lg-3 ps-md-0">
                            <div class="content">
                                <a href="{{ route('blog.detail') }}" class="title">Skin care routine</a>
                                <p>To assist you feel and look your absolute best, we provide a variety of hair
                                    procedures and treatments including Hair Cut, Hair Straightening.</p>
                                <div class="author">
                                    <img src="{{ asset('media/blogs/user-2.png') }}" alt="">
                                    <h6 class="name">ALAN ZOE</h6>
                                    <div class="raed-btn text-end">
                                        <a href="{{ route('blog.detail') }}" class="stylen-btn btn-sec">READ MORE</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pagination-wrape">
            <ul class="pagination">
                <li class="page-item">
                    <a href="#" class="page-link arrow" aria-label="Previous">
                        <i class="far fa-chevron-left"></i>
                    </a>
                </li>
                <li class="page-item">
                    <a href="#" class="page-link current">1</a>
                </li>
                <li class="page-item">
                    <a href="#" class="page-link">2</a>
                </li>
                <li class="page-item">
                    <a href="#" class="page-link">3</a>
                </li>
                <li class="page-item">
                    <a href="#" class="page-link">4</a>
                </li>
                <li class="page-item">
                    <a href="#" class="page-link arrow" aria-label="next">
                        <i class="far fa-chevron-right"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</section>


@endsection
