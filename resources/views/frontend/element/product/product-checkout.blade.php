<!-- PROGRAMMING & CODING BY AKASH KUMAR BASAK -->
@extends('frontend.layout.app')
@section('title', 'Siliconvaly')
@section('content')
<div class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumb-content">
                            <ul class="nav">
                                <li><a href="index.html">Home</a></li>
                                <li>Checkout</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="checkout-area mt-60px mb-40px">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="billing-info-wrap">
                                <h3>Billing Details</h3>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="billing-info mb-20px">
                                            <label>First Name</label>
                                            <input type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="billing-info mb-20px">
                                            <label>Last Name</label>
                                            <input type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="billing-info mb-20px">
                                            <label>Company Name</label>
                                            <input type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="billing-select mb-20px">
                                            <label>Country</label>
                                            <select>
                                                <option>Select a country</option>
                                                <option>Azerbaijan</option>
                                                <option>Bahamas</option>
                                                <option>Bahrain</option>
                                                <option>Bangladesh</option>
                                                <option>Barbados</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="billing-info mb-20px">
                                            <label>Street Address</label>
                                            <input class="billing-address" placeholder="House number and street name" type="text">
                                            <input placeholder="Apartment, suite, unit etc." type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="billing-info mb-20px">
                                            <label>Town / City</label>
                                            <input type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="billing-info mb-20px">
                                            <label>State / County</label>
                                            <input type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="billing-info mb-20px">
                                            <label>Postcode / ZIP</label>
                                            <input type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="billing-info mb-20px">
                                            <label>Phone</label>
                                            <input type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="billing-info mb-20px">
                                            <label>Email Address</label>
                                            <input type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="checkout-account mb-30px">
                                    <input class="checkout-toggle2" type="checkbox">
                                    <label>Create an account?</label>
                                </div>
                                <div class="checkout-account-toggle open-toggle2 mb-30">
                                    <input placeholder="Email address" type="email">
                                    <input placeholder="Password" type="password">
                                    <button class="btn-hover checkout-btn" type="submit">register</button>
                                </div>
                                <div class="additional-info-wrap">
                                    <h4>Additional information</h4>
                                    <div class="additional-info">
                                        <label>Order notes</label>
                                        <textarea placeholder="Notes about your order, e.g. special notes for delivery. " name="message"></textarea>
                                    </div>
                                </div>
                                <div class="checkout-account mt-25">
                                    <input class="checkout-toggle" type="checkbox">
                                    <label>Ship to a different address?</label>
                                </div>
                                <div class="different-address open-toggle mt-30px">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="billing-info mb-20px">
                                                <label>First Name</label>
                                                <input type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="billing-info mb-20px">
                                                <label>Last Name</label>
                                                <input type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="billing-info mb-20px">
                                                <label>Company Name</label>
                                                <input type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="billing-select mb-20px">
                                                <label>Country</label>
                                                <select>
                                                    <option>Select a country</option>
                                                    <option>Azerbaijan</option>
                                                    <option>Bahamas</option>
                                                    <option>Bahrain</option>
                                                    <option>Bangladesh</option>
                                                    <option>Barbados</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="billing-info mb-20px">
                                                <label>Street Address</label>
                                                <input class="billing-address" placeholder="House number and street name" type="text">
                                                <input placeholder="Apartment, suite, unit etc." type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="billing-info mb-20px">
                                                <label>Town / City</label>
                                                <input type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="billing-info mb-20px">
                                                <label>State / County</label>
                                                <input type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="billing-info mb-20px">
                                                <label>Postcode / ZIP</label>
                                                <input type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="billing-info mb-20px">
                                                <label>Phone</label>
                                                <input type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="billing-info mb-20px">
                                                <label>Email Address</label>
                                                <input type="text">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 mt-md-30px mt-lm-30px ">
                            <div class="your-order-area">
                                <h3>Your order</h3>
                                <div class="your-order-wrap gray-bg-4">
                                    <div class="your-order-product-info">
                                        <div class="your-order-top">
                                            <ul>
                                                <li>Product</li>
                                                <li>Total</li>
                                            </ul>
                                        </div>
                                        <div class="your-order-middle">
                                            <ul>
                                            @php $subtotal = 0; @endphp
                                            @foreach($carts as $cart)
                                                <li><span class="order-middle-left">{{ $cart->product->name }} X {{ $cart->quantity }}</span> <span class="order-price">${{ $cart->product->sale_price * $cart->quantity }} </span></li>
                                                @php 
                                                    $subtotal += $cart->product->sale_price * $cart->quantity;
                                                @endphp
                                                @endforeach
                                            </ul>
                                        </div>
                                        <div class="your-order-bottom">
                                            <ul>
                                                <li class="your-order-shipping">Shipping</li>
                                                <li>Free shipping</li>
                                            </ul>
                                        </div>
                                        <div class="your-order-total">
                                            <ul>
                                                <li class="order-total">Total</li>
                                                <li>${{ $subtotal }}</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="payment-method">
                                        <div class="payment-accordion element-mrg">
                                            <div class="panel-group" id="accordion">
                                                <div class="panel payment-accordion">
                                                    <div class="panel-heading" id="method-three">
                                                        <h4 class="panel-title">
                                                            <a class="collapsed" data-bs-toggle="collapse" data-parent="#accordion" href="#method3">
                                                                Cash on delivery
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="method3" class="panel-collapse collapse">
                                                        <div class="panel-body">
                                                            <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="Place-order mt-25">
                                    <a class="btn-hover" href="#">Place Order</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
<!-- PROGRAMMING & CODING BY AKASH KUMAR BASAK -->