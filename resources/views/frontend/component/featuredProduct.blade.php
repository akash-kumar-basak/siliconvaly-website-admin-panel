<!-- Feature Area start -->
<div class="feature-area mt-60px mb-30px">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h2 class="section-heading">Featured Products</h2>
                </div>
            </div>
        </div>
        <div class="feature-slider-two slider-nav-style-1 single-product-responsive">
            <div class="feature-slider-wrapper swiper-wrapper">
                <!-- Single Item -->
                @foreach($product as $products)
                <div class="feature-slider-item swiper-slide">
                    <article class="list-product">
                        <div class="img-block">
                            <a href="/product/{{ CategoryName($products->category_table, $products->category_id) }}/{{$products->id}}" class="thumbnail">
                                <img class="first-img" src="{{ asset($products->image_one) }}" width="230.5" height="230.5" alt="" />
                                <img class="second-img" src="{{ asset($products->image_two) }}" alt="" />
                            </a>
                            <div class="quick-view">
                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <i class="icon-magnifier icons"></i>
                                </a>
                            </div>
                        </div>
                        <ul class="product-flag">
                            <li class="new">New</li>
                        </ul>
                        <div class="product-decs">
                            <a class="inner-link" href="/product/{{ CategoryName($products->category_table, $products->category_id) }}/{{$products->id}}"><span>{{ Str::limit($products->name, 20) }}</span></a>
                            <h2><a href="single-product.html" class="product-link">{{ $products->brand }}</a></h2>
                            <div class="rating-product">
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                            </div>
                            @php  @endphp
                            <div class="pricing-meta">
                                <ul>
                                    <li class="old-price @php if($products->discount<1){echo 'not-cut';} @endphp ">৳{{$products->regular_price}}</li>
                                    <li class="current-price">৳@php if($products->discount>=1){echo $products->sale_price;}@endphp</li>
                                    <li class="discount-price">@php if($products->discount>=1){echo '-'.$products->discount.'%';}@endphp</li>
                                </ul>
                            </div>
                        </div>
                        <div class="add-to-link">
                            <ul>
                                <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                <li>
                                    <a href="wishlist.html"><i class="icon-heart"></i></a>
                                </li>
                                <li>
                                    <a href="compare.html"><i class="icon-shuffle"></i></a>
                                </li>
                            </ul>
                        </div>
                    </article>
                </div>
                @endforeach
            </div>
            <!-- Add Arrows -->
            <div class="swiper-buttons">
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>
</div>
<!-- Feature Area End -->

