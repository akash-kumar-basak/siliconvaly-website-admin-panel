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
                                <a href="/product/{{ CategoryName($products->category_table, $products->category_id) }}/{{$products->id}}"
                                   class="thumbnail">
                                    <img class="first-img" src="{{ asset($products->image_one) }}" width="230.5"
                                         height="230.5" alt=""/>
                                </a>
                                <div class="quick-view">
                                    <a class="quick_view" href="#" data-link-action="quickview" title="Quick view"
                                       data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="icon-magnifier icons"></i>
                                    </a>
                                </div>
                            </div>
                            <ul class="product-flag">
                                <li class="new">New</li>
                            </ul>
                            <div class="product-decs">
                                <a class="inner-link"
                                   href="/product/{{ CategoryName($products->category_table, $products->category_id) }}/{{$products->id}}"><span>{{ Str::limit($products->name, 20) }}</span></a>
                                <h2>
                                    <a href="/product/{{ CategoryName($products->category_table, $products->category_id) }}/{{$products->id}}"
                                       class="product-link">{{ $products->brand }}</a></h2>
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
                                        <li class="old-price">৳{{$products->regular_price}}</li>
                                        <li class="current-price">৳{{$products->sale_price}}</li>
                                        @if($products->discount)
                                            <li class="discount-price">-{{$products->discount}}%</li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                            <div class="add-to-link">
                                <ul>
                                    <li class="cart" data-id="{{ $products->id }}" onclick="productToCart(this)"><a
                                            class="cart-btn">ADD TO CART </a></li>
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
<script>
    function productToCart(element) {
        let productId = $(element).attr("data-id");
        let quantity = 1;
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
<!-- Feature Area End -->

