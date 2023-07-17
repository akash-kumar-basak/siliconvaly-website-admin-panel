<!-- PROGRAMMING & CODING BY AKASH KUMAR BASAK -->
@extends('frontend.layout.app')
@section('title', 'Siliconvaly')

@section('content')
    <div class="offcanvas-overlay"></div>
    <!-- Breadcrumb Area Start -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumb-content">
                            <ul class="nav">
                                <li><a href="index.html">Home</a></li>
                                <li>Customer Order</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Breadcrumb Area End-->
            <!-- account area start -->
            <div class="checkout-area mtb-60px">
                <div class="container">
                    <div class="row">
                        <div class="ml-auto mr-auto col-lg-9">
                            <div class="checkout-wrapper">
                                <div id="faq" class="panel-group">
                                    <div class="panel panel-default single-my-account">
                                        <div class="panel-heading my-account-title">
                                            <h3 class="panel-title"><span>#</span> <a data-bs-toggle="collapse" data-parent="#faq" href="#my-account-1">My Order Information </a></h3>
                                        </div>
                                        <div id="my-account-1" class="panel-collapse collapse show">
                                            <div class="panel-body">
                                                <div class="myaccount-info-wrapper">
                                                    <div class="account-info-wrapper">
                                                        <!-- <h4>My Order Information</h4> -->
                                                        <!-- <h5>Order Details</h5> -->
                                                    </div>
                                                    <table class="table table-hover align-middle table-nowrap table-striped-columns mb-0">
    <thead class="table-light">
        <tr>
            <th scope="col">SI</th>
            <th scope="col">Customer</th>
            <th scope="col">Product</th>
            <th scope="col">Total Cost(BDT)</th>
            <th scope="col">Shipping Address</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($orders as $order)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>
                <i class="mdi mdi-account"></i> <strong>{{ $order->customer->first_name }} {{ $order->customer->last_name }}</strong> <br>
                <i class="mdi mdi-phone"></i> <strong>{{ $order->customer->phone }}</strong> <br>
                <i class="mdi mdi-image-filter-center-focus-strong"></i> <strong>{{ $order->uuid }}</strong>
            </td>
            <td>
                @foreach(App\Models\frontend\OrderProductModel::where('order_id', $order->id)->get() as $product)
                <img src="{{ asset(App\Models\backend\ProductModel::where('id', $product->product_id )->value('image_one')) }}" with="40px" height="40px"> {{ Str::limit(App\Models\backend\ProductModel::where('id', $product->product_id )->value('name'), 30) }} &#10006; {{ $product->quantity }} 
                @if (!$loop->last)
                    <hr>
                 @endif
                @endforeach
            </td>
            <td>
                @php
                    $subtotal = 0;
                @endphp
            @foreach(App\Models\frontend\OrderProductModel::where('order_id', $order->id)->get() as $product)
                @php
                    $subtotal += App\Models\backend\ProductModel::where('id', $product->product_id )->value('sale_price');
                @endphp
            @endforeach
            <strong>{{ $subtotal }}</strong>
            </td>
            <td>
                {{ $order->customer->house_number }}, {{ $order->customer->street }}, {{ $order->customer->post_code }}, {{ $order->customer->country }}
            </td>
            <td>
                Shipped
        </td>
            <td>
                <div class="btn-group">
                <a>
                <button type="submit" class="btn btn-sm btn-success">&#10003;</button>
                <button type="submit" class="btn btn-sm btn-warning">&#9990;</button>
                <button type="submit" class="btn btn-sm btn-primary">&#9776;</button>
                <button type="submit" class="btn btn-sm btn-danger">&#10006;</button>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table> 
                                                    <div class="row">
                                                    <div class="col-lg-12 col-md-12">
</div>                                                     <div class="col-lg-6 col-md-6">
                                                    </div>
                                                    <div class="billing-back-btn">
                                                        <div class="billing-back">
                                                            <a href="#"><i class="icon-arrow-up-circle"></i> back</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default single-my-account">
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                        </div>
            
    @endsection
<!-- PROGRAMMING & CODING BY AKASH KUMAR BASAK -->