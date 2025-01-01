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
                    <li><a href="{{ route('product') }}"class="active">Product</a></li>
                </ul>
            </div>
            <div class="heading">
                <h2>Shop</h2>
            </div>
        </div>
    </section>
    <!--=====================================-->
    <!--=        Shop Area Start        =-->
    <!--=====================================-->
    <section class="products background-1 sec-mar">
        <div class="container">
            <div class="row mb-3 justify-content-between">
                <div class="col-xl-5 col-lg-4 col-md-6">
                    <div class="search-bar">
                        <form method="get" action="shop.html">
                            <div class="form-group has-search">
                                <button type="submit" class="fa fa-search form-control-shop"></button>
                                <input type="text" class="form-control" placeholder="Search">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-8 col-md-12">
                    <div class="shop-tags">
                        <ul class="list-unstyled">
                            <li>
                                <a class="active" href="./shop.html">ARTICLES</a>
                            </li>
                            <li>
                                <a href="./shop.html">BEAUTY</a>
                            </li>
                            <li>
                                <a href="./shop.html">MAKE UP</a>
                            </li>
                            <li>
                                <a href="./shop.html">MASSAGE</a>
                            </li>
                            <li>
                                <a href="./shop.html">HAIR CUT</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="product-grid" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="100">
                        <img src="./media/products/s-1.png" alt="">
                        <div class="content">
                            <span class="cart-btn">
                                <a href="{{url('cart')}}">
                                    <i class="fas fa-shopping-cart"></i>
                                </a>
                            </span>
                            <a href="product-detail.html">
                                <h5 class="title">Premium Serum</h5>
                            </a>
                            <hr>
                            <p class="price">$19.00</p>
                            <p class="detail">Salon Designers provide you with a wide range of salon equipment.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="product-grid" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="100">
                        <img src="./media/products/p-2.jpg" alt="">
                        <div class="content">
                            <span class="new-tag">New</span>
                            <span class="cart-btn">
                                <a href="{{url('cart')}}">
                                    <i class="fas fa-shopping-cart"></i>
                                </a>
                            </span>
                            <a href="product-detail.html">
                                <h5 class="title">Premium Serum</h5>
                            </a>
                            <hr>
                            <p class="price">$24.00</p>
                            <p class="detail">Salon Designers provide you with a wide range of salon equipment.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="product-grid" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="100">
                        <img src="./media/products/p-4.jpg" alt="">
                        <div class="content">
                            <span class="cart-btn">
                                <a href="{{url('cart')}}">
                                    <i class="fas fa-shopping-cart"></i>
                                </a>
                            </span>
                            <a href="product-detail.html">
                                <h5 class="title">Premium Serum</h5>
                            </a>
                            <hr>
                            <p class="price">$43.00</p>
                            <p class="detail">Salon Designers provide you with a wide range of salon equipment.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="product-grid" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="100">
                        <img src="./media/products/p-3.jpg" alt="">
                        <div class="content">
                            <span class="cart-btn">
                                <a href="{{url('cart')}}">
                                    <i class="fas fa-shopping-cart"></i>
                                </a>
                            </span>
                            <a href="product-detail.html">
                                <h5 class="title">Premium Serum</h5>
                            </a>
                            <hr>
                            <p class="price">$14.00</p>
                            <p class="detail">Salon Designers provide you with a wide range of salon equipment.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="product-grid" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="100">
                        <img src="./media/products/p-5.jpg" alt="">
                        <div class="content">
                            <span class="cart-btn">
                                <a href="{{url('cart')}}">
                                    <i class="fas fa-shopping-cart"></i>
                                </a>
                            </span>
                            <a href="product-detail.html">
                                <h5 class="title">Premium Serum</h5>
                            </a>
                            <hr>
                            <p class="price">$65.00</p>
                            <p class="detail">Salon Designers provide you with a wide range of salon equipment.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="product-grid" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="100">
                        <img src="./media/products/p-6.jpg" alt="">
                        <div class="content">
                            <span class="new-tag">New</span>
                            <span class="cart-btn">
                                <a href="{{url('cart')}}">
                                    <i class="fas fa-shopping-cart"></i>
                                </a>
                            </span>
                            <a href="product-detail.html">
                                <h5 class="title">Premium Serum</h5>
                            </a>
                            <hr>
                            <p class="price">$21.00</p>
                            <p class="detail">Salon Designers provide you with a wide range of salon equipment.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="product-grid" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="100">
                        <img src="./media/products/p-7.jpg" alt="">
                        <div class="content">
                            <span class="cart-btn">
                                <a href="{{url('cart')}}">
                                    <i class="fas fa-shopping-cart"></i>
                                </a>
                            </span>
                            <a href="product-detail.html">
                                <h5 class="title">Premium Serum</h5>
                            </a>
                            <hr>
                            <p class="price">$19.00</p>
                            <p class="detail">Salon Designers provide you with a wide range of salon equipment.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="product-grid" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="100">
                        <img src="./media/products/p-8.jpg" alt="">
                        <div class="content">
                            <span class="new-tag">New</span>
                            <span class="cart-btn">
                                <a href="{{url('cart')}}">
                                    <i class="fas fa-shopping-cart"></i>
                                </a>
                            </span>
                            <a href="product-detail.html">
                                <h5 class="title">Premium Serum</h5>
                            </a>
                            <hr>
                            <p class="price">$24.00</p>
                            <p class="detail">Salon Designers provide you with a wide range of salon equipment.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="product-grid" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="100">
                        <img src="./media/products/p-9.jpg" alt="">
                        <div class="content">
                            <span class="cart-btn">
                                <a href="{{url('cart')}}">
                                    <i class="fas fa-shopping-cart"></i>
                                </a>
                            </span>
                            <a href="product-detail.html">
                                <h5 class="title">Premium Serum</h5>
                            </a>
                            <hr>
                            <p class="price">$39.00</p>
                            <p class="detail">Salon Designers provide you with a wide range of salon equipment.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="product-grid" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="100">
                        <img src="./media/products/p-10.jpg" alt="">
                        <div class="content">
                            <span class="cart-btn">
                                <a href="{{url('cart')}}">
                                    <i class="fas fa-shopping-cart"></i>
                                </a>
                            </span>
                            <a href="product-detail.html">
                                <h5 class="title">Premium Serum</h5>
                            </a>
                            <hr>
                            <p class="price">$49.00</p>
                            <p class="detail">Salon Designers provide you with a wide range of salon equipment.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="product-grid" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="100">
                        <img src="./media/products/p-11.jpg" alt="">
                        <div class="content">
                            <span class="cart-btn">
                                <a href="{{url('cart')}}">
                                    <i class="fas fa-shopping-cart"></i>
                                </a>
                            </span>
                            <a href="product-detail.html">
                                <h5 class="title">Premium Serum</h5>
                            </a>
                            <hr>
                            <p class="price">$89.00</p>
                            <p class="detail">Salon Designers provide you with a wide range of salon equipment.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="product-grid" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="100">
                        <img src="./media/products/p-12.jpg" alt="">
                        <div class="content">
                            <span class="new-tag">New</span>
                            <span class="cart-btn">
                                <a href="{{url('cart')}}">
                                    <i class="fas fa-shopping-cart"></i>
                                </a>
                            </span>
                            <a href="product-detail.html">
                                <h5 class="title">Premium Serum</h5>
                            </a>
                            <hr>
                            <p class="price">$99.00</p>
                            <p class="detail">Salon Designers provide you with a wide range of salon equipment.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pagination-wrape">
                <ul class="pagination">
                    <li class="page-item">
                        <a href="#" class="page-link arrow" aria-label="next">
                            <i class="far fa-chevron-left"></i>
                        </a>
                    </li>
                    <li class="page-item">
                        <a class="page-link current" href="#">1</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">3</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">4</a>
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
