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
                    <form action="{{ route('order.store') }}" method="POST">
                        @csrf
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="billing-info-wrap">
                                <h3>Billing Details</h3>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="billing-info mb-20px">
                                            <label>First Name</label>
                                            <input type="text" value="{{ auth()->guard('customer')->user()->first_name }}" readonly>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="billing-info mb-20px">
                                            <label>Last Name</label>
                                            <input type="text" value="{{ auth()->guard('customer')->user()->last_name }}" readonly>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="billing-select mb-20px">
                                            <label>Country</label>
                                            <select name="country">
                                                <option value="{{ auth()->guard('customer')->user()->country }}">{{ auth()->guard('customer')->user()->country }}</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
    <div class="billing-select mb-20px">
        <label>District</label>
        <select name="district">
            <option value="{{ auth()->guard('customer')->user()->district }}">{{ auth()->guard('customer')->user()->district }}</option>
        </select>
    </div>
</div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="billing-info mb-20px">
                                            <label>Postcode / ZIP</label>
                                            <input type="text" name="post_code" value="{{ auth()->guard('customer')->user()->post_code }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
    <div class="billing-info mb-20px">
        <label>Street Address</label>
        <input class="billing-address" placeholder="House number and street name" type="text" name="street" value="{{ auth()->guard('customer')->user()->street }}">
    </div>
</div>
<div class="col-lg-12">
    <div class="billing-info mb-20px">
        <label>House No.</label>
        <input class="billing-address" placeholder="House number and street name" type="text" name="house_number" value="{{ auth()->guard('customer')->user()->house_number }}">
    </div>
</div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="billing-info mb-20px">
                                            <label>Phone</label>
                                            <input type="text" name="mobile" value="{{ auth()->guard('customer')->user()->phone }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="billing-info mb-20px">
                                            <label>Email Address</label>
                                            <input type="text" name="email" value="{{ auth()->guard('customer')->user()->email }}">
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
                                                <li><span class="order-middle-left">{{ $cart->product->name }} X {{ $cart->quantity }}</span> <span class="order-price">৳{{ $cart->product->sale_price * $cart->quantity }} </span></li>
                                                <input type="hidden" name="product_id[]" value="{{ $cart->product->id }}">
                                                <input type="hidden" name="quantity[]" value="{{ $cart->quantity }}">
                                                <input type="hidden" name="cart_id[]" value="{{ $cart->id }}">
                                                @php 
                                                    $subtotal += $cart->product->sale_price * $cart->quantity;
                                                @endphp
                                                @endforeach
                                            </ul>
                                        </div>
                                        <div class="your-order-bottom">
                                            <ul>
                                                <li class="your-order-shipping">Shipping</li>
                                                <li>৳
                                                    @if(auth()->guard('customer')->user()->district == 'Dhaka')
                                                        {{ companySettings()->shipping_charge_inside_dhaka }}
                                                    @else
                                                        {{ companySettings()->shipping_charge_outside_dhaka }}
                                                    @endif
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="your-order-total">
                                            <ul>
                                                <li class="order-total">Total</li>
                                                <li>৳
                                                @if(auth()->guard('customer')->user()->district == 'Dhaka')
    {{ $subtotal+companySettings()->shipping_charge_inside_dhaka }}
@else
    {{ $subtotal+companySettings()->shipping_charge_outside_dhaka }}
@endif
                                                    </li>
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
                                <button  type="submit" class="Place-order mt-25">
                                    <a class="btn-hover">Place Order</a>
</button>
                            </div>
                        </div>
                    </div>
</form>
                </div>
            </div>
@endsection
<!-- PROGRAMMING & CODING BY AKASH KUMAR BASAK -->