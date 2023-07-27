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
                            <li><a href="/">Home</a></li>
                            @if($product->category_table == 'category_one')
                                <li>{{ category1Name($product->category_id) }}</li>
                            @else
                                <li>{{ category1Name($product->category_id) }}</li>
                                <li>{{ CategoryName($product->category_table, $product->category_id) }}</li>
                            @endif
                            <li>{{ $product->name}}</li>
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
                                <img class="zoompro" src="{{ asset($product->image_one) }}" data-zoom-image="{{ asset($product->image_one) }}" alt="" />
                            </div>
                        </div>
                        <div id="gallery" class="product-dec-slider-2 swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <a class="active" data-image="{{ asset($product->image_one) }}" data-zoom-image="{{ asset($product->image_one) }}">
                                                <img class="img-responsive" src="{{ asset($product->image_one) }}" alt="" />
                                            </a>
                                </div>
                                <div class="swiper-slide">
                                    <a data-image="{{ asset($product->image_two) }}" data-zoom-image="{{ asset($product->image_two) }}">
                                                <img class="img-responsive" src="{{ asset($product->image_two) }}" alt="" />
                                            </a>
                                </div>
                                <div class="swiper-slide">
                                    <a data-image="{{ asset($product->image_three) }}" data-zoom-image="{{ asset($product->image_three) }}">
                                                <img class="img-responsive" src="{{ asset($product->image_three) }}" alt="" />
                                            </a>
                                </div>
                                <div class="swiper-slide">
                                    <a data-image="{{ asset($product->image_four) }}" data-zoom-image="{{ asset($product->image_four) }}">
                                                <img class="img-responsive" src="{{ asset($product->image_four) }}" alt="" />
                                            </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="product-details-content">
                        <h2>{{ $product->name }}</h2>
                        <p class="reference">Product Code:<span> SV-{{ $product->sku }}</span></p>
                        <div class="pro-details-rating-wrap">
                            <div class="rating-product">
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                            </div>
                            <!-- <span class="read-review"><a class="reviews" href="#">Read reviews (1)</a></span> -->
                        </div>
                        <div class="pricing-meta">
                            <ul>
                                <li class="old-price not-cut"> ৳{{ $product->sale_price }}</li>
                            </ul>
                        </div>
                        <div class="pro-details-list">
                            <!-- <p>{{ $product->short_description }}</p> -->
                            <!-- <ul> -->
                                <!-- <li>- 0.5 mm Dail</li> -->
                                <!-- <li>- Inspired vector icons</li> -->
                                <!-- <li>- Very modern style</li> -->
                            <!-- </ul> -->
                        </div>
                        <div class="pro-details-quality mt-0px">
                            <div class="cart-plus-minus">
                                <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1" id="quantity" />
                            </div>
                            <div class="pro-details-cart btn-hover" data-id="{{ $product->id }}" style="cursor: pointer !important;" onclick="productToCart(this)">
                                <a>  Add To Cart</a>
                            </div>
                        </div>
                        <div class="pro-details-wish-com">
                            <div class="pro-details-wishlist">
                                <a href="#"><i class="icon-heart"></i>Add to wishlist</a>
                            </div>
                            <div class="pro-details-compare">
                                <!-- <a href="#"><i class="icon-shuffle"></i>Add to compare</a> -->
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
                                <li><img src="assets/images/icons/policy.png" alt="" /><span>Security Policy: Product Return</span></li>
                                <li><img src="assets/images/icons/policy-2.png" alt="" /><span>Delivery Policy: Delivery in 48 hours</span></li>
                                <li><img src="assets/images/icons/policy-3.png" alt="" /><span>Return Policy : Paid Return</span></li>
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
                    <!-- <a data-bs-toggle="tab" href="#des-details3">Reviews (2)</a> -->
                </div>
                <div class="tab-content description-review-bottom">
                    <div id="des-details2" class="tab-pane active">
                        <div class="product-anotherinfo-wrapper">
                        {!! $product->short_description !!}
                        </div>
                    </div>
                    <div id="des-details1" class="tab-pane">
                        <div class="product-description-wrapper">
                            <p>{!! $product->long_description !!}</p>
                        </div>
                    </div>
                    <div id="des-details3" class="tab-pane">
                        <!-Review details->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product details description area end -->

<script>
    function productToCart(element) {
        let productId = $(element).attr("data-id");
        let quantity = document.getElementById('quantity').value;
        let route = '/product_to_cart';
        let data = {ProductId: productId, Quantity: quantity};
        axios.post(route, data).then
        (function (response) {
            let productCart = response.data;
            let totalProductCart = document.getElementById("totalProductCart").setAttribute("data-number", productCart.length);
            let totalProductCartMobile = document.getElementById("totalProductCartMobileView").setAttribute("data-number", productCart.length);
            const container = document.getElementById('allProductCartList');

// Clear the container before adding new list items (optional)
            container.innerHTML = '';

// Loop through the productCart array and add list items to the container
            for (let i = 0; i < productCart.length; i++) {

                // Create a new list item element
                const listItem = document.createElement('li');

                // Set the inner HTML of the list item using backticks for easy formatting
                listItem.innerHTML = `
    <a href="single-product.html" class="image">
      <img src="${productCart[i].product.image_one}" alt="Cart product Image">
    </a>
    <div class="content">
      <a href="single-product.html" class="title">${productCart[i].product.name}</a>
      <span class="quantity-price">${productCart[i].quantity} x <span class="amount">${productCart[i].product.sale_price}</span></span>
      <a href="#" class="remove">×</a>
    </div>
  `;

                // Append the new list item to the container
                container.appendChild(listItem);
            }
            //document.getElementById('subtotal').innerHTML = subtotal;
        })
            .catch(function (error) {
                //
            });
    }
</script>
@endsection
<!-- PROGRAMMING & CODING BY AKASH KUMAR BASAK -->
