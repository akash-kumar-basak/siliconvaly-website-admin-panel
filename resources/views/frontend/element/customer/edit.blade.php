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
                                <li>Profile</li>
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
                                            <h3 class="panel-title"><span>1 .</span> <a data-bs-toggle="collapse" data-parent="#faq" href="#my-account-1">Account information for signup </a></h3>
                                        </div>
                                        <form action="{{ route('customer.update', $customer->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div id="my-account-1" class="panel-collapse collapse show">
                                            <div class="panel-body">
                                                <div class="myaccount-info-wrapper">
                                                    <div class="account-info-wrapper">
                                                        <h4>My Account Information</h4>
                                                        <h5>{{ $customer->first_name }} {{ $customer->last_name }}'s Personal Details</h5>
                                                    </div>
                                                    <div class="row">
                                                    <div class="col-lg-12 col-md-12">
    <div class="billing-info">
        <label></label><br>
        <label id="image"><img src="{{ asset($customer->image) }}" width="100px" height="100px" ></label>
    </div>
</div>
                                                        <!-- <div class="col-lg-12 col-md-12"> -->
                                                            <!-- <div class="billing-info"> -->
                                                                <!-- <label>Name</label><br> -->
                                                                <!-- <label><strong>{{ $customer->first_name }} {{ $customer->last_name }}</strong></label> -->
                                                            <!-- </div> -->
                                                        <!-- </div> -->
                                                        <div class="col-lg-6 col-md-6">
    <div class="billing-info">
        <label>First name</label><br>
        <label id="first_name"><strong>{{ $customer->first_name }}</strong></label>
    </div>
</div>
<div class="col-lg-6 col-md-6">
    <div class="billing-info">
        <label>Last Name</label><br>
        <label id="last_name"><strong>{{ $customer->last_name }}</strong></label>
    </div>
</div>
                                                        <div class="col-lg-6 col-md-6">
                                                            <div class="billing-info">
                                                                <label>Email Address</label><br>
                                                                <label id="email"><strong>{{ $customer->email }}</strong></label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6">
                                                            <div class="billing-info">
                                                                <label>Phone</label><br>
                                                                <label id="phone"><strong>{{ $customer->phone }}</strong></label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6">
                                                            <div class="billing-info">
                                                                <label>Password</label><br>
                                                                <label id="password"><strong>*******</strong></label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6">
    <div class="billing-info">
        <label>Country</label><br>
        <label id="country"><strong>{{ $customer->country }}</strong></label>
    </div>
</div>
<div class="col-lg-6 col-md-6">
    <div class="billing-info">
        <label>District</label><br>
        <label id="district"><strong>{{ $customer->district }}</strong></label>
    </div>
</div>
<div class="col-lg-6 col-md-6">
    <div class="billing-info">
        <label>Post Code</label><br>
        <label id="post_code"><strong>{{ $customer->post_code }}</strong></label>
    </div>
</div>
<div class="col-lg-6 col-md-6">
    <div class="billing-info">
        <label>Street</label><br>
        <label id="street"><strong>{{ $customer->street }}</strong></label>
    </div>
</div>
<div class="col-lg-6 col-md-6">
    <div class="billing-info">
        <label>House Number</label><br>
        <label id="house_number"><strong>{{ $customer->house_number }}</strong></label>
    </div>
</div>
<div class="col-lg-6 col-md-6">
    <div class="billing-info">
        <label>Customer ID</label><br>
        <label><strong>#SVC-{{ $customer->id }}</strong></label>
    </div>
</div>
                                                    </div>
                                                    <div class="billing-back-btn">
                                                        <div class="billing-back">
                                                            <a href="#"><i class="icon-arrow-up-circle"></i> back</a>
                                                        </div>
                                                        <div class="billing-btn" id="clickforedit">
                                                            <button onclick="edit()">Click For Edit</button>
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

                        <script>
    function edit() {
        document.getElementById('image').innerHTML = '<input class="form-control" name="image" type="file">';
        document.getElementById('first_name').innerHTML = '<input class="form-control" value="{{ $customer->first_name }}" name="first_name" type="text" required>';
        document.getElementById('last_name').innerHTML = '<input class="form-control" value="{{ $customer->last_name }}" name="last_name" type="text" >';
        document.getElementById('email').innerHTML = '<input class="form-control" value="{{ $customer->email }}" name="email" type="email" readonly>';
        document.getElementById('phone').innerHTML = '<input class="form-control" value="{{ $customer->phone }}" name="phone" type="text" readonly>';
        document.getElementById('password').innerHTML = '<input class="form-control" value="" name="password" type="text" required>';
        document.getElementById('country').innerHTML = '<input class="form-control" value="{{ $customer->country }}" name="country" type="text" >';
        document.getElementById('district').innerHTML = '<input class="form-control" value="{{ $customer->district }}" name="district" type="text" >';
        document.getElementById('post_code').innerHTML = '<input class="form-control" value="{{ $customer->post_code }}" name="post_code" type="text" >';
        document.getElementById('street').innerHTML = '<input class="form-control" value="{{ $customer->street }}" name="street" type="text" >';
        document.getElementById('house_number').innerHTML = '<input class="form-control" value="{{ $customer->house_number }}" name="house_number" type="text" >';
        document.getElementById('clickforedit').innerHTML = '<button type="submit" class="btn btn-primary">Update</button>';
    }
</script>
            
    @endsection
<!-- PROGRAMMING & CODING BY AKASH KUMAR BASAK -->