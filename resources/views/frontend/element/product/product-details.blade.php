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
                            <li>Single Product</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End-->
    <!-- Shop details Area start -->
    <section class="product-details-area mtb-60px">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="product-details-img product-details-tab">
                        <div class="zoompro-wrap zoompro-2">
                            <div class="zoompro-border zoompro-span">
                                <img class="zoompro" src="assets/images/product-image/22.jpg" data-zoom-image="assets/images/product-image/zoom/1.jpg" alt="" />
                            </div>
                        </div>
                        <div id="gallery" class="product-dec-slider-2 swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <a class="active" data-image="assets/images/product-image/22.jpg" data-zoom-image="assets/images/product-image/zoom/1.jpg">
                                                <img class="img-responsive" src="assets/images/product-image/22.jpg" alt="" />
                                            </a>
                                </div>
                                <div class="swiper-slide">
                                    <a data-image="assets/images/product-image/21.jpg" data-zoom-image="assets/images/product-image/zoom/2.jpg">
                                                <img class="img-responsive" src="assets/images/product-image/21.jpg" alt="" />
                                            </a>
                                </div>
                                <div class="swiper-slide">
                                    <a data-image="assets/images/product-image/23.jpg" data-zoom-image="assets/images/product-image/zoom/3.jpg">
                                                <img class="img-responsive" src="assets/images/product-image/23.jpg" alt="" />
                                            </a>
                                </div>
                                <div class="swiper-slide">
                                    <a data-image="assets/images/product-image/6.jpg" data-zoom-image="assets/images/product-image/zoom/4.jpg">
                                                <img class="img-responsive" src="assets/images/product-image/6.jpg" alt="" />
                                            </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="product-details-content">
                        <h2>Originals Kaval Windbr</h2>
                        <p class="reference">Reference:<span> demo_17</span></p>
                        <div class="pro-details-rating-wrap">
                            <div class="rating-product">
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                            </div>
                            <span class="read-review"><a class="reviews" href="#">Read reviews (1)</a></span>
                        </div>
                        <div class="pricing-meta">
                            <ul>
                                <li class="old-price not-cut">€18.90</li>
                            </ul>
                        </div>
                        <div class="pro-details-list">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisic elit eiusm tempor incidid ut labore et dolore magna aliqua. Ut enim ad minim venialo quis nostrud exercitation ullamco</p>
                            <ul>
                                <li>- 0.5 mm Dail</li>
                                <li>- Inspired vector icons</li>
                                <li>- Very modern style</li>
                            </ul>
                        </div>
                        <div class="pro-details-quality mt-0px">
                            <div class="cart-plus-minus">
                                <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1" />
                            </div>
                            <div class="pro-details-cart btn-hover">
                                <a href="#">  Add To Cart</a>
                            </div>
                        </div>
                        <div class="pro-details-wish-com">
                            <div class="pro-details-wishlist">
                                <a href="#"><i class="icon-heart"></i>Add to wishlist</a>
                            </div>
                            <div class="pro-details-compare">
                                <a href="#"><i class="icon-shuffle"></i>Add to compare</a>
                            </div>
                        </div>
                        <div class="pro-details-social-info">
                            <span>Share</span>
                            <div class="social-info">
                                <ul>
                                    <li>
                                        <a title="Facebook" href="#"><i class="ion-social-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a title="Twitter" href="#"><i class="ion-social-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a title="Google+" href="#"><i class="ion-social-google"></i></a>
                                    </li>
                                    <li>
                                        <a title="Instagram" href="#"><i class="ion-social-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="pro-details-policy">
                            <ul>
                                <li><img src="assets/images/icons/policy.png" alt="" /><span>Security Policy (Edit With Customer Reassurance Module)</span></li>
                                <li><img src="assets/images/icons/policy-2.png" alt="" /><span>Delivery Policy (Edit With Customer Reassurance Module)</span></li>
                                <li><img src="assets/images/icons/policy-3.png" alt="" /><span>Return Policy (Edit With Customer Reassurance Module)</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop details Area End -->
    <!-- product details description area start -->
    <div class="description-review-area mb-60px">
        <div class="container">
            <div class="description-review-wrapper">
                <div class="description-review-topbar nav">
                    <a data-bs-toggle="tab" href="#des-details1">Description</a>
                    <a class="active" data-bs-toggle="tab" href="#des-details2">Product Details</a>
                    <a data-bs-toggle="tab" href="#des-details3">Reviews (2)</a>
                </div>
                <div class="tab-content description-review-bottom">
                    <div id="des-details2" class="tab-pane active">
                        <div class="product-anotherinfo-wrapper">
                            <ul>
                                <li><span>Weight</span> 400 g</li>
                                <li><span>Dimensions</span>10 x 10 x 15 cm</li>
                                <li><span>Materials</span> 60% cotton, 40% polyester</li>
                                <li><span>Other Info</span> American heirloom jean shorts pug seitan letterpress</li>
                            </ul>
                        </div>
                    </div>
                    <div id="des-details1" class="tab-pane">
                        <div class="product-description-wrapper">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                            <p>
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commo consequat. Duis aute irure dolor in reprehend in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                                occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                            </p>
                        </div>
                    </div>
                    <div id="des-details3" class="tab-pane">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="review-wrapper">
                                    <div class="single-review">
                                        <div class="review-img">
                                            <img src="assets/images/review-image/1.png" alt="" />
                                        </div>
                                        <div class="review-content">
                                            <div class="review-top-wrap">
                                                <div class="review-left">
                                                    <div class="review-name">
                                                        <h4>White Lewis</h4>
                                                    </div>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                </div>
                                                <div class="review-left">
                                                    <a href="#">Reply</a>
                                                </div>
                                            </div>
                                            <div class="review-bottom">
                                                <p>
                                                    Vestibulum ante ipsum primis aucibus orci luctustrices posuere cubilia Curae Suspendisse viverra ed viverra. Mauris ullarper euismod vehicula. Phasellus quam nisi, congue id nulla.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-review child-review">
                                        <div class="review-img">
                                            <img src="assets/images/review-image/2.png" alt="" />
                                        </div>
                                        <div class="review-content">
                                            <div class="review-top-wrap">
                                                <div class="review-left">
                                                    <div class="review-name">
                                                        <h4>White Lewis</h4>
                                                    </div>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                </div>
                                                <div class="review-left">
                                                    <a href="#">Reply</a>
                                                </div>
                                            </div>
                                            <div class="review-bottom">
                                                <p>Vestibulum ante ipsum primis aucibus orci luctustrices posuere cubilia Curae Sus pen disse viverra ed viverra. Mauris ullarper euismod vehicula.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="ratting-form-wrapper pl-50">
                                    <h3>Add a Review</h3>
                                    <div class="ratting-form">
                                        <form action="#">
                                            <div class="star-box">
                                                <span>Your rating:</span>
                                                <div class="rating-product">
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="rating-form-style mb-10">
                                                        <input placeholder="Name" type="text" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="rating-form-style mb-10">
                                                        <input placeholder="Email" type="email" />
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="rating-form-style form-submit">
                                                        <textarea name="Your Review" placeholder="Message"></textarea>
                                                        <input type="submit" value="Submit" />
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product details description area end -->


@endsection
<!-- PROGRAMMING & CODING BY AKASH KUMAR BASAK -->
