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
                    <li><a href="{{ route('cart') }}" class="active">CART</a></li>
                </ul>

            </div>
            <div class="heading">
                <h2>CART</h2>
            </div>
        </div>
    </section>
    <!--=====================================-->
    <!--=       Cart Area Start         =-->
    <!--=====================================-->
    <section class="cart sec-pad-80">
        <div class="container">
            <div class="row">
                <div class="col-8 d-none d-xl-block d-lg-block mb-4">
                    <table class="table cart-items text-center">
                        <thead>
                            <tr>
                                <th class="product-detail-sec text-start">Product Detail</th>
                                <th class="price">Price</th>
                                <th class="quantity">Quantity</th>
                                <th class="sub-total">Sub total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="product text-start d-flex">
                                    <div class="product-image">
                                        <img src="{{ asset('media/products/cp-1.png') }}" alt="">
                                    </div>
                                    <div class="title">
                                        <a href="{{ route('product.detail') }}">Product Detail</a>
                                        <h5>Body Perfume</h5>
                                        </a>
                                        <a href="" class="d-block remove ms-3 mt-3"><i
                                                class="fas fa-times text-danger me-1"></i> Remove</a>
                                    </div>
                                </td>
                                <td class="price-sec">
                                    <p class="text-center">$58.00</p>
                                </td>
                                <td class="quantity-sec ">
                                    <div class="quantity text-center quantity-wrap">
                                        <input class="decrement symbol" type="button" value="-">
                                        <input type="text" name="quantity" value="1" maxlength="2" size="1"
                                            class="number">
                                        <input class="increment symbol" type="button" value="+">
                                    </div>
                                </td>
                                <td class="total-sec">
                                    <p class="text-end pe-2">$58.00</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table cart-items text-center">
                        <tbody>
                            <tr>
                                <td class="product text-start d-flex">
                                    <div class="product-image">
                                        <img src="{{ asset('media/products/cp-2.png') }}" alt="">
                                    </div>
                                    <div class="title">
                                        <a href="{{ route('product.detail') }}">
                                            <h5>Hair Oil</h5>
                                        </a>
                                        <a href="" class="d-block remove ms-3 mt-3"><i
                                                class="fas fa-times text-danger me-1"></i> Remove</a>
                                    </div>
                                </td>
                                <td class="price-sec">
                                    <p class="text-center">$38.00</p>
                                </td>
                                <td class="quantity-sec ">
                                    <div class="quantity text-center quantity-wrap">
                                        <input class="decrement" type="button" value="-">
                                        <input type="text" name="quantity" value="1" maxlength="2" size="1"
                                            class="number">
                                        <input class="increment" type="button" value="+">
                                    </div>
                                </td>
                                <td class="total-sec">
                                    <p class="text-end pe-2">$38.00</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table cart-items text-center">
                        <tbody>
                            <tr>
                                <td class="product text-start d-flex">
                                    <div class="product-image">
                                        <img src="{{ asset('media/products/p-3.png') }}" alt="">
                                    </div>
                                    <div class="title">
                                        <a href="{{ route('product.detail') }}">
                                            <h5>Moisturizer</h5>
                                        </a>
                                        <a href="" class="d-block remove ms-3 mt-3"><i
                                                class="fas fa-times text-danger me-1"></i> Remove</a>
                                    </div>
                                </td>
                                <td class="price-sec">
                                    <p class="text-center">$22.00</p>
                                </td>
                                <td class="quantity-sec ">
                                    <div class="quantity text-center quantity-wrap">
                                        <input class="decrement" type="button" value="-">
                                        <input type="text" name="quantity" value="1" maxlength="2" size="1"
                                            class="number">
                                        <input class="increment" type="button" value="+">
                                    </div>
                                </td>
                                <td class="total-sec">
                                    <p class="text-end pe-2">$22.00</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="mt-5">
                        <a href="{{ route('product') }}" class="float-start text-black fw-bold"><i
                                class="fas fa-long-arrow-left me-2"></i> CONTINUE SHOPPING</a>
                    </div>
                </div>
                <div class="d-lg-none">
                    <div class="sm-device">
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="mobile-cart-item">
                                    <div class="product-image">
                                        <img src="{{ asset('media/products/cp-1.png') }}" alt="">
                                    </div>
                                    <div class="title">
                                        <a href="{{ route('product.detail') }}">
                                            <h5 class="mt-3">Body Perfume</h5>
                                        </a>
                                        <a href="" class="d-block remove ms-3 mt-3 mb-3"><i
                                                class="fas fa-times text-danger me-1"></i> Remove</a>
                                    </div>
                                    <table class="table">
                                        <tr>
                                            <th class="text-start">Price</th>
                                            <td class="text-end">$20.00</td>

                                        </tr>
                                        <tr>
                                            <th class="text-start">Quantity</th>
                                            <td class="text-end">
                                                <div class="quantity quantity-wrap m-0 w-auto d-inline-block">
                                                    <input class="decrement" type="button" value="-">
                                                    <input type="text" name="quantity" value="1" maxlength="2"
                                                        size="1" class="number">
                                                    <input class="increment" type="button" value="+">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="text-start">Sub Total</th>
                                            <td class="text-end">$20.00</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="mobile-cart-item">
                                    <div class="product-image">
                                        <img src="{{ asset('media/products/cp-2.png') }}" alt="">
                                    </div>
                                    <div class="title">
                                        <a href="{{ route('product.detail') }}">
                                            <h5 class="mt-3">Hair oil</h5>
                                        </a>
                                        <a href="" class="d-block remove ms-3 mt-3 mb-3"><i
                                                class="fas fa-times text-danger me-1"></i> Remove</a>
                                    </div>
                                    <table class="table">
                                        <tr>
                                            <th class="text-start">Price</th>
                                            <td class="text-end">$20.00</td>

                                        </tr>
                                        <tr>
                                            <th class="text-start">Quantity</th>
                                            <td class="text-end">
                                                <div class="quantity quantity-wrap m-0 w-auto d-inline-block">
                                                    <input class="decrement" type="button" value="-">
                                                    <input type="text" name="quantity" value="1" maxlength="2"
                                                        size="1" class="number">
                                                    <input class="increment" type="button" value="+">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="text-start">Sub Total</th>
                                            <td class="text-end">$20.00</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4">
                    <form method="get" action="checkout.html" class="order-summary">
                        <h3>Order Summary</h3>
                        <hr>
                        <h5>Items 2 <span class="float-end">$96.00</span></h5>

                        <div class="form-group mt-3">
                            <label class="text-white">Shipping</label>
                            <select name="shipping" class="form-control">
                                <option value="standard">Standard Delivery - $2.00</option>
                                <option value="instant">Instant Delivery - $5.00</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="text-white">Promo Code</label>
                            <input type="text" class="form-control mb-3" placeholder="Enter your code">
                            <button type="button" class="stylen-btn btn-primary btn-sm right-arrow fs-6">Apply</button>
                        </div>
                        <hr>
                        <h4 class="mb-5">Total Cost <span class="float-end">$100.00</span></h4>
                        <a href="{{route('checkout')}}" class="stylen-btn btn-primary right-arrow w-100">Checkout</a>

                    </form>
                </div>
            </div>

        </div>
    </section>
@endsection
