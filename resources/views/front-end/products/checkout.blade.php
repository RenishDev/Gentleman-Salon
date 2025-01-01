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
                    <li><a href="{{ route('checkout') }}" class="active">CHECKOUT</a></li>
                </ul>

            </div>
            <div class="heading">
                <h2>CHECKOUT</h2>
            </div>
        </div>
    </section>
    <!--=====================================-->
    <!--=        Checkout Area Start        =-->
    <!--=====================================-->
    <section class="checkout sec-pad-80 background-1">
        <div class="container">
            <form method="post" action="checkout.html" id="form-wizard" class="submit-form">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#step-1">
                            <div class="num">1</div>
                            <span class="nav-title">INFORMATION</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#step-2">
                            <span class="num">2</span>
                            <span class="nav-title">SHIPPING</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#step-3">
                            <span class="num">3</span>
                            <span class="nav-title">BILLING</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#step-4">
                            <span class="num">4</span>
                            <span class="nav-title">ORDER SUMMARY</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#step-5">
                            <span class="num">5</span>
                            <span class="nav-title">PAYMENT</span>
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <!-- Step 1 -->
                    <div id="step-1" class="tab-pane" role="tabpanel" aria-labelledby="step-1">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="first_name" placeholder="First Name">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="last_name" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email"
                                        mailto:placeholder="info@example.com">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="phone" placeholder="Your Number">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Step 2 -->
                    <div id="step-2" class="tab-pane" role="tabpanel" aria-labelledby="step-2">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <select class="form-control" name="city">
                                        <option value="">City</option>
                                        <option value="new_york">New York</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <select class="form-control" name="country">
                                        <option value="">Country</option>
                                        <option value="us">United States</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="post_code" placeholder="Post Code">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="address" placeholder="Address">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Step 3 -->
                    <div id="step-3" class="tab-pane" role="tabpanel" aria-labelledby="step-3">
                        <div class="row ">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <select class="form-control" name="city">
                                        <option value="">City</option>
                                        <option value="new_york">New York</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <select class="form-control" name="country">
                                        <option value="">Country</option>
                                        <option value="us">United States</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="billing_address"
                                        placeholder="House Number">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="billing_address"
                                        placeholder="Apartment, Building (optional)">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Step 4 -->
                    <div id="step-4" class="tab-pane" role="tabpanel" aria-labelledby="step-4">
                        <div class="checkout">
                            <div class="row">
                                <div class="col-xl-12 d-none d-xl-block d-lg-block d-md-block">
                                    <table class="table checkout-items text-center mb-3">
                                        <thead>
                                            <tr>
                                                <th class="product-sec text-start">Product</th>
                                                <th class="price">Price</th>
                                                <th class="quantity">Quantity</th>
                                                <th class="sub-total text-end ">Sub total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="row-1">
                                                <td class="product text-start">
                                                    <a href="product-detail.html">
                                                        <h5>PREMIUM PERFUME</h5>
                                                    </a>
                                                </td>
                                                <td class="price-sec">
                                                    <p class="text-center">$58.00</p>
                                                </td>
                                                <td class="quantity-sec">
                                                    <p class="text-center">x2</p>
                                                </td>
                                                <td class="total">
                                                    <p class="text-end">$116.00</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="product text-start">
                                                    <a href="product-detail.html">
                                                        <h5>NAIL POLISH</h5>
                                                    </a>
                                                </td>
                                                <td class="price-sec">
                                                    <p class="text-center">$58.00</p>
                                                </td>
                                                <td class="quantity-sec ">
                                                    <p class="text-center">x2</p>
                                                </td>
                                                <td class="total">
                                                    <p class="text-end">$116.00</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="d-xl-none d-lg-none d-md-none">
                                    <table class="table sm-device text-center mb-4 ">
                                        <tbody>
                                            <tr>
                                                <td colspan="3" class="product text-center pb-0">
                                                    <a href="product-detail.html">
                                                        <h5>PREMIUM PERFUME</h5>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr class="stats">
                                                <td class="price-sec">
                                                    <h6 class="price text-start">Price</h6>
                                                    <p class="text-start">$58.00</p>
                                                </td>
                                                <td class="quantity-sec">
                                                    <h6 class="quantity">Quantity</h6>
                                                    <p class="text-center">x2</p>
                                                </td>
                                                <td class="total">
                                                    <h6 class="sub-total text-end ">Sub total</h6>
                                                    <p class="text-end">$116.00</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="3" class="pt-0 pb-0 mb-0">
                                                    <hr>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="3" class="product text-center pb-0">
                                                    <a href="product-detail.html">
                                                        <h5>PREMIUM PERFUME</h5>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr class="stats">
                                                <td class="price-sec">
                                                    <h6 class="price text-start">Price</h6>
                                                    <p class="text-start">$58.00</p>
                                                </td>
                                                <td
                                                    class="quantity-sec.checkout table.sm-device tbody tr td.quantity-sec{
                                                        padding: 20px 0;
                                                    }">
                                                    <h6 class="quantity">Quantity</h6>
                                                    <p class="text-center">x2</p>
                                                </td>
                                                <td class="total">
                                                    <h6 class="sub-total text-end ">Sub total</h6>
                                                    <p class="text-end">$116.00</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-12">
                                    <div class="total-amount">
                                        <h6>TOTAL AMOUNT</h6>
                                        <h6 class="amount">$232.00</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Step 5 -->
                    <div id="step-5" class="tab-pane" role="tabpanel" aria-labelledby="step-5">
                        <div class="payment-method">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="payment-box">
                                        <i class="fas fa-money-bill-wave"></i>
                                        <h3>CASH ON DELIVERY</h3>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="payment-box active">
                                        <i class="fas fa-university"></i>
                                        <h3>BANK TRANSFER</h3>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="payment-box">
                                        <i class="fas fa-wallet"></i>
                                        <h3>ONLINE WALLET</h3>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="text-center mt-5">
                                        <button type="button" data-bs-toggle="modal" data-bs-target="#successModal"
                                            class="stylen-btn btn-primary">PLACE ORDER</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0"
                        aria-valuemax="100"></div>
                </div>
            </form>
        </div>
        <div class="modal fade" id="successModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="text-center">
                            <i class="fas fa-check-circle"></i>
                            <h3>Order Placed Successfully!</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
