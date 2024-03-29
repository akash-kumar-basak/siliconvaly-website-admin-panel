<!-- New Arrivals area start -->
    <div class="recent-add-area mt-30px">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h2 class="section-heading">New Arrivals</h2>
                    </div>
                </div>
            </div>
            <div class="recent-slider-two slider-nav-style-1 multi-row">
                <div class="recent-slider-wrapper swiper-wrapper">
                    @foreach($product->shuffle() as $products)
                    <div class="recent-slider-item swiper-slide">
                        <article class="list-product">
                            <div class="img-block">
                                <a href="/product/{{ CategoryName($products->category_table, $products->category_id) }}/{{$products->id}}" class="thumbnail">
                                            <img class="first-img" src="{{ asset($products->image_one) }}" alt="" />
                                        </a>
                                <div class="quick-view">
                                    <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="icon-magnifier icons"></i>
                                            </a>
                                </div>
                            </div>
                            <div class="product-decs">
                                <a class="inner-link" href="/product/{{ CategoryName($products->category_table, $products->category_id) }}/{{$products->id}}"><span>{{ Str::limit($products->name, 20) }}</span></a>
                                <h2><a href="/product/{{ CategoryName($products->category_table, $products->category_id) }}/{{$products->id}}" class="product-link">{{ $products->brand }}</a></h2>
                                <div class="rating-product">
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                </div>
                                <div class="pricing-meta">
                                    <ul>
                                        <li class="old-price">৳{{$products->regular_price}}</li>
                                        <li class="current-price">৳{{$products->sale_price}}</li>
                                        @if($products->discount)
                                        <li class="discount-price">-{{$products->discount}}%</li>
                                        @endif
                                    </ul>
                                </div>
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
            <div class="recent-slider-two slider-nav-style-1 multi-row">
     <div class="recent-slider-wrapper swiper-wrapper">
         @foreach($product->shuffle() as $products)
         <div class="recent-slider-item swiper-slide">
             <article class="list-product">
                 <div class="img-block">
                     <a href="/product/{{ CategoryName($products->category_table, $products->category_id) }}/{{$products->id}}" class="thumbnail">
                                 <img class="first-img" src="{{ asset($products->image_one) }}" alt="" />
                             </a>
                     <div class="quick-view">
                         <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                     <i class="icon-magnifier icons"></i>
                                 </a>
                     </div>
                 </div>
                 <div class="product-decs">
                     <a class="inner-link" href="/product/{{ CategoryName($products->category_table, $products->category_id) }}/{{$products->id}}"><span>{{ Str::limit($products->name, 20) }}</span></a>
                     <h2><a href="/product/{{ CategoryName($products->category_table, $products->category_id) }}/{{$products->id}}" class="product-link">{{ $products->brand }}</a></h2>
                     <div class="rating-product">
                         <i class="ion-android-star"></i>
                         <i class="ion-android-star"></i>
                         <i class="ion-android-star"></i>
                         <i class="ion-android-star"></i>
                         <i class="ion-android-star"></i>
                     </div>
                     <div class="pricing-meta">
                         <ul>
                             <li class="old-price">৳{{$products->regular_price}}</li>
                             <li class="current-price">৳{{$products->sale_price}}</li>
                             @if($products->discount)
                             <li class="discount-price">-{{$products->discount}}%</li>
                             @endif
                         </ul>
                     </div>
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
    <!-- New Arrivals area end -->
