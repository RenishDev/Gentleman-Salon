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
                    <li><a href="{{ route('product') }}">Product</a></li>
                    <li><a href="{{ route('product.detail') }}" class="active">Product Details</a></li>
                </ul>
            </div>
            <div class="heading">
                <h2>PRODUCT</h2>
            </div>
        </div>
    </section>
    <!--=====================================-->
    <!--=     Product Detail Area Start     =-->
    <!--=====================================-->
    <section class="product-detail sec-pad-80">
        <div class="container">
            <div class="row">
                <div class="col-xl-9">
                    <div class="row">
                        <div class="col-lg-5">
                            <img src="/media/products/p-6.jpg" alt="" class="product-img">
                        </div>
                        <div class="col-lg-7">
                            <h2 class="title">PREMIUM PERFUME</h2>
                            <h6 class="price">$58</h6>
                            <div class="reviews">
                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                    class="fa fa-star"></i> <i class="fa fa-star"></i>
                            </div>
                            <div class="category-row d-flex">
                                <h6>CATEGORY :</h6>
                                <h6 class="category">Perfume</h6>
                            </div>
                            <p>
                                Our products Cosmos and Ecocert certifications are available for all products. Sulphate,
                                paraben, and colourant free. Private Touch Skin-color an ducts will provide your skin with
                                the best skincare possible. Free of sulphates.
                            </p>
                            <div class="d-flex text-center">
                                <div class="quantity quantity-wrap">
                                    <input class="decrement" type="button" value="-">
                                    <input type="text" name="quantity" value="1" maxlength="2" size="1"
                                        class="number">
                                    <input class="increment" type="button" value="+">
                                </div>
                                <a href="cart.html" class="stylen-btn btn-primary cart">ADD TO CART</a>
                            </div>
                        </div>
                        <div>
                            <div class="about-product pt-5">
                                <ul class="nav nav-tabs title-btn" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#description"
                                            type="button" role="tab">Description</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#review"
                                            type="button" role="tab">Reviews</button>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div id="description" class="tab-pane">
                                        <p class="pt-3"><b>Products </b> There are numerous additional clients to take
                                            care of alongside you in a Beauty Salon, and you'll frequently observe,
                                            especially during the holiday season, that the beautician will rush to
                                            accomplish your treatment because many other customers are waiting. It can
                                            happen in a fantastic Salon where you will receive full attention and exclusive
                                            treatment. Morbi sodales fermentum nibh nec facilisis. Morbi pharetra varius
                                            velit, eget varius libero finibus quis. Quisque auctor varius lectus, lacinia
                                            rhoncus velit posuere vel. Cras condimentum tincidunt urna, sed vehicula ipsum
                                            dapibus et. Pellentesque pharetra ultrices varius. Sed viverra nec purus ut
                                            ornare. Aenean auctor sem ac ex efficitur, Non mattis odio bibendum, Sed vitae
                                            enim at tortor finibus, Integer facilisis eleifend vehicula, In hac habitasse
                                            platea dictumst. <br><br> <b>Sed molestie</b> orci sem, at semper est molestie
                                            ac. Suspendisse cursus feugiat erat, eu posuere massa. Nullam posuere nibh non
                                            eros lobortis tempus. Maecenas dignissim elementum massa, vel accumsan urna
                                            elementum in. Suspendisse at dui euismod, rhoncus eros non, imperdiet ipsum.
                                            Vestibulum vehicula vel turpis et vestibulum. Ut porta et ex maximus malesuada.
                                            <br><br>Curabitur egestas malesuada volutpat. Nunc vel vestibulum odio, ac
                                            pellentesque lacus. Pellentesque dapibus nunc nec est imperdiet, a malesuada sem
                                            rutrum. Sed quam odio, porta a finibus quis, sagittis aliquet leo. Nunc ornare
                                            metus urna, eu luctus velit placerat ut. Cras at porttitor lectus. Ut dapibus
                                            aliquam nibh, in imperdiet libero tincidunt sit amet. Morbi sodales fermentum
                                            nibh nec facilisis. Morbi pharetra varius velit, eget varius libero finibus
                                            quis. Quisque auctor varius lectus, lacinia rhoncus velit posuere vel.<br><br>
                                            <b>Cras condimentum</b> tincidunt urna, sed vehicula ipsum dapibus et.
                                            Pellentesque pharetra ultrices varius. Sed viverra nec purus ut ornare. Aenean
                                            auctor sem ac ex efficitur, Non mattis odio bibendum, Sed vitae enim at tortor
                                            finibus, Integer facilisis eleifend vehicula, In hac habitasse platea dictumst.
                                            <br>Sed molestie orci sem, at semper est molestie ac. Suspendisse cursus feugiat
                                            erat, eu posuere massa. Nullam posuere nibh non eros lobortis tempus. Maecenas
                                            dignissim elementum massa, vel accumsan urna elementum in. Suspendisse at dui
                                            euismod, rhoncus eros non, imperdiet ipsum. Vestibulum vehicula vel turpis et
                                            vestibulum. Ut porta et ex maximus malesuada. </p>
                                    </div>
                                    <div id="review" class="tab-pane in active pt-4">
                                        <div class="review-box">
                                            <div class="d-flex mb-2">
                                                <img src="/media/products/user-1.png" alt="">
                                                <div class="user">
                                                    <h6 class="name">JULIA ADAM</h6>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                            class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                            class="fa fa-star"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="review">
                                                Private Touch Skin-color an ducts will provide your skin with the best
                                                skincare possible. Free of sulphates. They are creative, talented, and have
                                                a strong desire to always better their art.
                                            </p>
                                        </div>
                                        <div class="review-box">
                                            <div class="d-flex mb-2">
                                                <img src="/media/products/user-1.png" alt="">
                                                <div class="user">
                                                    <h6 class="name">ALAN ZOE</h6>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                            class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="review">
                                                Private Touch Skin-color an ducts will provide your skin with the best
                                                skincare possible. Free of sulphates. They are creative, talented, and have
                                                a strong desire to always better their art.
                                            </p>
                                        </div>
                                        <h4 class="post-review">WRITE REVIEW</h4>
                                        <form method="get" action="product-detail.html">
                                            <div class="d-flex mb-3">
                                                <h4 class="raiting-label">YOUR RATING :</h4>
                                                <div class="form-group">
                                                    <fieldset>
                                                        <span class="star-cb-group">
                                                            <input type="radio" id="rating-5" name="rating"
                                                                value="5"><label for="rating-5">5</label>
                                                            <input type="radio" id="rating-4" name="rating"
                                                                value="4"><label for="rating-4">4</label>
                                                            <input type="radio" id="rating-3" name="rating"
                                                                value="3"><label for="rating-3">3</label>
                                                            <input type="radio" id="rating-2" name="rating"
                                                                value="2"><label for="rating-2">2</label>
                                                            <input type="radio" id="rating-1" name="rating"
                                                                value="1" checked="checked"><label
                                                                for="rating-1">1</label>
                                                            <input type="radio" id="rating-0" name="rating"
                                                                value="0" class="star-cb-clear"><label
                                                                for="rating-0">0</label>
                                                        </span>
                                                    </fieldset>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-8">
                                                    <div class="form-group mb-4">
                                                        <input type="text" class="form-control" name="name"
                                                            required placeholder="Your Name">
                                                    </div>
                                                    <div class="form-group mb-4">
                                                        <input type="email" class="form-control" name="email"
                                                            required placeholder="email@example.com">
                                                    </div>
                                                    <div class="form-group mb-4">
                                                        <textarea name="message" rows="3" class="form-control" required placeholder="Your Review on this Product"></textarea>
                                                    </div>
                                                    <button type="submit"
                                                        class="stylen-btn btn-primary paper-plane mb-4">Post
                                                        Review</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="row">
                        <div class="col-xl-12 col-lg-4 col-md-6 col-sm-8 offset-lg-0 offset-md-0 offset-sm-2">
                            <h3 class="sidebar-title">RELATED PRODUCTS</h3>
                            <div class="sidebar-products mb-5">
                                <div class="product-box mb-4 d-flex">
                                    <img src="/media/products/ps-1.png" alt="">
                                    <div class="content">
                                        <a href="product-detail.html">
                                            <h6 class="title">EYE LINER</h6>
                                        </a>
                                        <p class="category">Makeup</p>
                                    </div>
                                </div>
                                <div class="product-box mb-4 d-flex">
                                    <img src="/media/products/ps-2.png" alt="">
                                    <div class="content">
                                        <a href="product-detail.html">
                                            <h6 class="title">MAKE UP KIT</h6>
                                        </a>
                                        <p class="category">Makeup</p>
                                    </div>
                                </div>
                                <div class="product-box mb-4 d-flex">
                                    <img src="/media/products/ps-3.png" alt="">
                                    <div class="content">
                                        <a href="product-detail.html">
                                            <h6 class="title">BODY LOTION</h6>
                                        </a>
                                        <p class="category">Makeup</p>
                                    </div>
                                </div>
                                <div class="product-box d-flex">
                                    <img src="/media/products/ps-4.png" alt="">
                                    <div class="content">
                                        <a href="product-detail.html">
                                            <h6 class="title">MOISTURIZER</h6>
                                        </a>
                                        <p class="category">Makeup</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-4 col-md-6 col-sm-8 offset-lg-0 offset-md-0 offset-sm-2">
                            <h3 class="sidebar-title">POPULAR PRODUCTS</h3>
                            <div class="sidebar-products">
                                <div class="product-box mb-4 d-flex">
                                    <img src="/media/products/ps-2.png" alt="">
                                    <div class="content">
                                        <a href="product-detail.html">
                                            <h6 class="title">MAKE UP KIT</h6>
                                        </a>
                                        <p class="category">Makeup</p>
                                    </div>
                                </div>
                                <div class="product-box mb-4 d-flex">
                                    <img src="/media/products/ps-4.png" alt="">
                                    <div class="content">
                                        <a href="product-detail.html">
                                            <h6 class="title">MOISTURIZER</h6>
                                        </a>
                                        <p class="category">Makeup</p>
                                    </div>
                                </div>
                                <div class="product-box mb-4 d-flex">
                                    <img src="/media/products/ps-1.png" alt="">
                                    <div class="content">
                                        <a href="product-detail.html">
                                            <h6 class="title">EYE LINER</h6>
                                        </a>
                                        <p class="category">Makeup</p>
                                    </div>
                                </div>
                                <div class="product-box d-flex">
                                    <img src="/media/products/ps-3.png" alt="">
                                    <div class="content">
                                        <a href="product-detail.html">
                                            <h6 class="title">BODY LOTION</h6>
                                        </a>
                                        <p class="category">Makeup</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
