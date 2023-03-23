<div class="header-menu  d-xl-block d-none bg-light-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 custom-col-3">
                        <div class="header-menu-vertical bg-blue">
                            <h4 class="menu-title be-af-none">All Cattegories</h4>
                            <ul class="menu-content display-block">
                                @foreach ($category1s as $category1)
                                <li class="menu-item">
                                    <a href="#">{{ $category1->name}}  <i class="ion-ios-arrow-right"></i></a>
                                    <ul class="sub-menu sub-menu-2">
                                        <li>
                                            <ul class="submenu-item">
                                                @foreach ($category2s as $category2)
                                                <li><a href="#">@if($category2->category_one_id == $category1->id) {{ $category2->name }} @endif</a></li>
                                                @endforeach
                                            </ul>
                                        </li>
                                    </ul>
                                    <!-- sub menu -->
                                </li>
                                @endforeach
                            </ul>
                            <!-- menu content -->
                        </div>
                        <!-- header menu vertical -->
                    </div>
                    <div class="col-lg-7 custom-col custom-col-3">
                        <!-- Slider Start -->
                        <div class="slider-area slider-height-2">
                            <div class="hero-slider swiper-container">
                                <div class="swiper-wrapper">
                                    <!-- Single Slider  -->
                                    <div class="swiper-slide bg-img d-flex" style="background-image: url({{asset('frontend/images/slider-images/slider-image1.jpg')}});">
                                        <div class="container align-self-center">
                                            <div class="slider-content-1 slider-animated-1 text-start pl-60px">
                                                <span class="animated color-white">GALAXY WATCH</span>
                                                <h1 class="animated color-white">
                                                    Pre-Order <br />
                                                    <strong>Exclusive</strong>
                                                </h1>
                                                <a href="shop-4-column.html" class="shop-btn animated">SHOP NOW</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Slider  -->
                                    <div class="swiper-slide bg-img d-flex" style="background-image: url({{asset('frontend/images/slider-images/slider-image2.jpg')}});">
                                        <div class="container align-self-center">
                                            <div class="slider-content-1 slider-animated-1 text-start pl-60px">
                                                <span class="animated color-white">BT HEADPHONE</span>
                                                <h1 class="animated color-white">
                                                    Headset <br />
                                                    <strong>Hyper X</strong>
                                                </h1>
                                                <a href="shop-4-column.html" class="shop-btn animated">SHOP NOW</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Slider  -->
                                </div>
                                <!-- Add Pagination -->
                                <div class="swiper-pagination swiper-pagination-white"></div>
                            </div>
                        </div>
                        <!-- Slider End -->
                    </div>
                    <div class="col-lg-3">
                        <div class="banner-area banner-area-2">
                            <div class="banner-wrapper mb-15px">
                                <a href="shop-4-column.html"><img src="{{asset('frontend/images/banner-images/banner-image1.jpg')}}" alt="" width="230px" height="212px" /></a>
                            </div>
                            <div class="banner-wrapper">
                                <a href="shop-4-column.html"><img src="{{asset('frontend/images/banner-images/banner-image2.jpg')}}" alt="" width="230px" height="212px" /></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row -->
                <!-- row -->
            </div>
            <!-- container -->
    <div class="static-area  ptb-40px">
        <div class="container">
            <div class="static-area-wrap">
                <div class="row">
                    <!-- Static Single Item Start -->
                    <div class="col-lg-3 col-xs-12 col-md-6 col-sm-6 mb-md-30px mb-lm-30px">
                        <div class="single-static">
                            <img src="{{asset('frontend/images/icon/static-icons-2.png')}}" alt="" class="img-responsive" />
                            <div class="single-static-meta">
                                <h4>Paid Returns</h4>
                                <p>Returns are Paid within 7 days</p>
                            </div>
                        </div>
                    </div>
                    <!-- Static Single Item End -->
                    <!-- Static Single Item Start -->
                    <div class="col-lg-3 col-xs-12 col-md-6 col-sm-6 mb-md-30px mb-lm-30px">
                        <div class="single-static">
                            <img src="{{asset('frontend/images/icon/static-icons-1.png')}}" alt="" class="img-responsive" />
                            <div class="single-static-meta">
                                <h4>Free Shipping</h4>
                                <p>On all orders over 1500/-</p>
                            </div>
                        </div>
                    </div>
                    <!-- Static Single Item End -->
                    <!-- Static Single Item Start -->
                    <div class="col-lg-3 col-xs-12 col-md-6 col-sm-6 mb-sm-30px">
                        <div class="single-static">
                            <img src="{{asset('frontend/images/icon/static-icons-3.png')}}" alt="" class="img-responsive" />
                            <div class="single-static-meta">
                                <h4>Support 24/7</h4>
                                <p>Contact us 24 hours a day</p>
                            </div>
                        </div>
                    </div>
                    <!-- Static Single Item End -->
                    <!-- Static Single Item Start -->
                    <div class="col-lg-3 col-xs-12 col-md-6 col-sm-6">
                        <div class="single-static">
                            <img src="{{asset('frontend/images/icon/static-icons-4.png')}}" alt="" class="img-responsive" />
                            <div class="single-static-meta">
                                <h4>100% Payment Secure</h4>
                                <p>Your payment are safe with us.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Static Single Item End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Static Area End -->
        </div>




















































<!--------------------------------------- Mobile Responsive---------------------------------------------->



<!-- Header Nav End -->
<div class="header-menu  d-xl-none bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <!-- Slider Start -->
                <div class="slider-area slider-height-2 mb-md-30px mb-lm-30px mb-sm-30px">
                    <div class="hero-slider swiper-container">
                        <div class="swiper-wrapper">
                            <!-- Single Slider  -->
                            <div class="swiper-slide bg-img d-flex" style="background-image: url({{asset('images/slider-images/slider-image1.jpg')}});">
                                <div class="container align-self-center">
                                    <div class="slider-content-1 slider-animated-1 text-start pl-60px">
                                        <span class="animated color-white">GALAXY WATCH</span>
                                        <h1 class="animated color-white">
                                            Pre-Order <br />
                                            <strong>Exclusive</strong>
                                        </h1>
                                        <a href="shop-4-column.html" class="shop-btn animated">SHOP NOW</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Slider  -->
                            <div class="swiper-slide bg-img d-flex" style="background-image: url({{asset('images/slider-images/slider-image2.jpg')}});">
                                <div class="container align-self-center">
                                    <div class="slider-content-1 slider-animated-1 text-start pl-60px">
                                        <span class="animated color-white">BT HEADPHONE</span>
                                        <h1 class="animated color-white">
                                            Headset <br />
                                            <strong>Hyper X</strong>
                                        </h1>
                                        <a href="shop-4-column.html" class="shop-btn animated">SHOP NOW</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Slider  -->
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination swiper-pagination-white"></div>
                    </div>
                </div>
                <!-- Slider End -->
            </div>
            <div class="col-lg-3">
                <div class="banner-area">
                    <div class="banner-wrapper mb-md-30px mb-lm-30px mb-sm-30px">
                        <a href="shop-4-column.html"><img src="{{asset('images/banner-images/banner-image1.jpg')}}" alt="" /></a>
                    </div>
                    <div class="banner-wrapper mb-0px">
                        <a href="shop-4-column.html"><img src="{{asset('images/banner-images/banner-image2.jpg')}}" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- row -->
    </div>
    <!-- container -->
    <!-- Static Area Start -->
    <div class="static-area  ptb-40px">
        <div class="container">
            <div class="static-area-wrap">
                <div class="row">
                    <!-- Static Single Item Start -->
                    <div class="col-lg-3 col-xs-12 col-md-6 col-sm-6 mb-md-30px mb-lm-30px">
                        <div class="single-static">
                            <img src="{{asset('/images/icon/static-icons-2.png')}}" alt="" class="img-responsive" />
                            <div class="single-static-meta">
                                <h4>Paid Returns</h4>
                                <p>Returns are Paid within 7 days</p>
                            </div>
                        </div>
                    </div>
                    <!-- Static Single Item End -->
                    <!-- Static Single Item Start -->
                    <div class="col-lg-3 col-xs-12 col-md-6 col-sm-6 mb-md-30px mb-lm-30px">
                        <div class="single-static">
                            <img src="{{asset('/images/icon/static-icons-1.png')}}" alt="" class="img-responsive" />
                            <div class="single-static-meta">
                                <h4>Free Shipping</h4>
                                <p>On all orders over 1500/-</p>
                            </div>
                        </div>
                    </div>
                    <!-- Static Single Item End -->
                    <!-- Static Single Item Start -->
                    <div class="col-lg-3 col-xs-12 col-md-6 col-sm-6 mb-sm-30px">
                        <div class="single-static">
                            <img src="{{asset('/images/icon/static-icons-3.png')}}" alt="" class="img-responsive" />
                            <div class="single-static-meta">
                                <h4>Support 24/7</h4>
                                <p>Contact us 24 hours a day</p>
                            </div>
                        </div>
                    </div>
                    <!-- Static Single Item End -->
                    <!-- Static Single Item Start -->
                    <div class="col-lg-3 col-xs-12 col-md-6 col-sm-6">
                        <div class="single-static">
                            <img src="{{asset('/images/icon/static-icons-4.png')}}" alt="" class="img-responsive" />
                            <div class="single-static-meta">
                                <h4>100% Payment Secure</h4>
                                <p>Your payment are safe with us.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Static Single Item End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Static Area End -->
</div>
<!-- header menu -->
<!--------------------------------------- Mobile Responsive---------------------------------------------->
