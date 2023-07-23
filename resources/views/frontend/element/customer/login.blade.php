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
                                <li>Signin</li>
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
                                            <h3 class="panel-title"><span>1 .</span> <a data-bs-toggle="collapse" data-parent="#faq" href="#my-account-1">Account information for signin </a></h3>
                                        </div>
                                        <form action="{{ route('customer_login') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div id="my-account-1" class="panel-collapse collapse show">
                                            <div class="panel-body">
                                                <div class="myaccount-info-wrapper">
                                                    <div class="account-info-wrapper">
                                                        <h4>My Account Information</h4>
                                                        <h5>Your Signin Details</h5>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12">
                                                            <div class="billing-info">
                                                                <label>Email Address</label>
                                                                <input type="email" name="email" />
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12">
                                                            <div class="billing-info">
                                                                <label>Password</label>
                                                                <input type="password" name="password" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="billing-back-btn">
                                                        <div class="billing-back">
                                                            <a href="#"><i class="icon-arrow-up-circle"></i> back</a>
                                                        </div>
                                                        <div class="billing-back">
                                                            <a href="{{ route('customer.create') }}"><i class="icon-user"></i> Register For New User Account</a>
                                                        </div>
                                                        <div class="billing-btn">
                                                            <button type="submit">Signin</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
</form>
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