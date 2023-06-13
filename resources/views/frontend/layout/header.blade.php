<!----------------------------------- Header Section Start From Here----------------------------------------- -->
<header class="header-wrapper">
    <!-- Header Nav Start -->
    <div class="header-nav">
        <div class="container">
            <div class="header-nav-wrapper d-md-flex d-sm-flex d-xl-flex d-lg-flex justify-content-between">
                <div class="header-static-nav">
                    <p><marquee direction="left" scrollamount="4">{{$CompanyInformation->announcement}}</marquee></p>
                </div>
                <div class="header-menu-nav">
                    <ul class="menu-nav">
                        <li>
                            <div class="dropdown">
                                <button type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Hotline {{ $CompanyInformation->hotline}} </button>
                            </div>
                        </li>
                        <li>
                            <div class="dropdown">
                                <button type="button" id="dropdownMenuButton-2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">BDT ৳ <i class="ion-ios-arrow-down"></i></button>

                                <ul class="dropdown-menu animation slideDownIn" aria-labelledby="dropdownMenuButton-2">
                                    <li><a href="#">BDT ৳</a></li>
                                    <li><a href="#">USD $</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="pr-0">
                            <div class="dropdown">
                                <button type="button" id="dropdownMenuButton-3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="assets/images/flag/1.jpg" alt="" /> English <i class="ion-ios-arrow-down"></i>
                                </button>

                                <ul class="dropdown-menu animation slideDownIn" aria-labelledby="dropdownMenuButton-3">
                                    <li>
                                        <a href="#"><img src="assets/images/flag/1.jpg" alt="" /> English</a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="assets/images/flag/2.jpg" alt="" /> Bangla</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Nav End -->
    <div class="header-top bg-white ptb-30px d-xl-block d-none sticky-nav">
        <div class="container">
            <div class="row">
                <div class="col-md-3 d-flex">
                    <div class="mobile-menu-toggle home-2">
                        <a href="#offcanvas-mobile-menu" class="offcanvas-toggle">
                            <svg viewBox="0 0 800 600">
                                <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" id="top"></path>
                                <path d="M300,320 L540,320" id="middle"></path>
                                <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                            </svg>
                        </a>
                    </div>
                    <div class="logo">
                        <a href="/"><img class="img-responsive" src="{{asset($CompanyInformation->company_logo)}}" /></a>
                    </div>
                </div>
                <div class="col-md-9 align-self-center">
                    <div class="header-right-element d-flex">
                        <div class="search-element media-body mr-120px">
                            <form class="d-flex" action="#">
                                <div class="search-category">
                                    <select>
                                        <option value="0">All categories</option>
                                    </select>
                                </div>
                                <input type="text" placeholder="Enter your search key ... " />
                                <button><i class="icon-magnifier"></i></button>
                            </form>
                        </div>
                        <!--Cart info Start -->
                        <div class="header-tools d-flex">
                            <div class="cart-info d-flex align-self-center">
                                <!-- <a href="compare.html" class="shuffle" data-number="3"><i class="icon-shuffle"></i></a> -->
                                <a href="#offcanvas-wishlist" class="heart offcanvas-toggle" data-number="3"><i class="icon-heart"></i></a>
                                <a href="#offcanvas-cart" class="bag offcanvas-toggle" data-number="3"><i class="icon-bag"></i><span>৳0.00</span></a>
                            </div>
                        </div>
                    </div>
                    <!--Cart info End -->
                </div>
            </div>
        </div>
    </div>
</header>
<!------------------------------------------------- Header Section End Here --------------------------------------------->




































<!--------------------------------------------Mobile Responsive Header Section----------------------------------------->
<!-- Mobile Header Section Start -->
<div class="mobile-header d-xl-none sticky-nav bg-white ptb-10px">
    <div class="container">
        <div class="row align-items-center">

            <!-- Header Logo Start -->
            <div class="col">
                <div class="header-logo">
                    <a href="index.html"><img class="img-responsive" src="{{asset($CompanyInformation->company_logo)}}" alt="logo.jpg" /></a>
                </div>
            </div>
            <!-- Header Logo End -->

            <!-- Header Tools Start -->
            <div class="col-auto">
                <div class="header-tools justify-content-end">
                    <div class="cart-info d-flex align-self-center">
                        <a href="compare.html" class="shuffle d-xs-none" data-number="3"><i class="icon-shuffle"></i></a>
                        <a href="#offcanvas-wishlist" class="heart offcanvas-toggle d-xs-none" data-number="3"><i class="icon-heart"></i></a>
                        <a href="#offcanvas-cart" class="bag offcanvas-toggle" data-number="3"><i class="icon-bag"></i><span>$20.00</span></a>
                    </div>
                    <div class="mobile-menu-toggle">
                        <a href="#offcanvas-mobile-menu" class="offcanvas-toggle">
                            <svg viewBox="0 0 800 600">
                                <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" id="top"></path>
                                <path d="M300,320 L540,320" id="middle"></path>
                                <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Header Tools End -->

        </div>
    </div>
</div>

<!-- Search Category Start -->
<div class="mobile-search-area d-xl-none mb-15px">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="search-element media-body">
                    <form class="d-flex" action="#">
                        <div class="search-category">
                            <select>
                                <option value="0">All categories</option>
                            </select>
                        </div>
                        <input type="text" placeholder="Enter your search key ... " />
                        <button><i class="icon-magnifier"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Search Category End -->
<div class="mobile-category-nav d-xl-none mb-15px">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                
            </div>
        </div>
    </div>
</div>
<!-- Mobile Header Section End -->
<!-- OffCanvas Wishlist Start -->
<div id="offcanvas-wishlist" class="offcanvas offcanvas-wishlist">
    <div class="inner">
        <div class="head">
            <span class="title">Wishlist</span>
            <button class="offcanvas-close">×</button>
        </div>
        <div class="body customScroll">
            <ul class="minicart-product-list">
                <li>
                    <a href="single-product.html" class="image"><img src="assets/images/product-image/1.jpg" alt="Cart product Image"></a>
                    <div class="content">
                        <a href="single-product.html" class="title">Walnut Cutting Board</a>
                        <span class="quantity-price">1 x <span class="amount">$100.00</span></span>
                        <a href="#" class="remove">×</a>
                    </div>
                </li>
                <li>
                    <a href="single-product.html" class="image"><img src="assets/images/product-image/2.jpg" alt="Cart product Image"></a>
                    <div class="content">
                        <a href="single-product.html" class="title">Lucky Wooden Elephant</a>
                        <span class="quantity-price">1 x <span class="amount">$35.00</span></span>
                        <a href="#" class="remove">×</a>
                    </div>
                </li>
                <li>
                    <a href="single-product.html" class="image"><img src="assets/images/product-image/3.jpg" alt="Cart product Image"></a>
                    <div class="content">
                        <a href="single-product.html" class="title">Fish Cut Out Set</a>
                        <span class="quantity-price">1 x <span class="amount">$9.00</span></span>
                        <a href="#" class="remove">×</a>
                    </div>
                </li>
            </ul>
        </div>
        <div class="foot">
            <div class="buttons">
                <a href="wishlist.html" class="btn btn-dark btn-hover-primary mt-30px">view wishlist</a>
            </div>
        </div>
    </div>
</div>
<!-- OffCanvas Wishlist End -->

<!-- OffCanvas Cart Start -->
<div id="offcanvas-cart" class="offcanvas offcanvas-cart">
    <div class="inner">
        <div class="head">
            <span class="title">Cart</span>
            <button class="offcanvas-close">×</button>
        </div>
        <div class="body customScroll">
            <ul class="minicart-product-list">
                <li>
                    <a href="single-product.html" class="image"><img src="assets/images/product-image/1.jpg" alt="Cart product Image"></a>
                    <div class="content">
                        <a href="single-product.html" class="title">Walnut Cutting Board</a>
                        <span class="quantity-price">1 x <span class="amount">$100.00</span></span>
                        <a href="#" class="remove">×</a>
                    </div>
                </li>
                <li>
                    <a href="single-product.html" class="image"><img src="assets/images/product-image/2.jpg" alt="Cart product Image"></a>
                    <div class="content">
                        <a href="single-product.html" class="title">Lucky Wooden Elephant</a>
                        <span class="quantity-price">1 x <span class="amount">$35.00</span></span>
                        <a href="#" class="remove">×</a>
                    </div>
                </li>
                <li>
                    <a href="single-product.html" class="image"><img src="assets/images/product-image/3.jpg" alt="Cart product Image"></a>
                    <div class="content">
                        <a href="single-product.html" class="title">Fish Cut Out Set</a>
                        <span class="quantity-price">1 x <span class="amount">$9.00</span></span>
                        <a href="#" class="remove">×</a>
                    </div>
                </li>
            </ul>
        </div>
        <div class="foot">
            <div class="sub-total">
                <strong>Subtotal :</strong>
                <span class="amount">$144.00</span>
            </div>
            <div class="buttons">
                <a href="/product_cart" class="btn btn-dark btn-hover-primary mb-30px">view cart</a>
                <a href="/product_checkout" class="btn btn-outline-dark current-btn">checkout</a>
            </div>
            <p class="minicart-message">Free Shipping on All Orders Over $100!</p>
        </div>
    </div>
</div>
<!-- OffCanvas Cart End -->

<!-- OffCanvas Search Start -->
<div id="offcanvas-mobile-menu" class="offcanvas offcanvas-mobile-menu">
    <div class="inner customScroll">
        <div class="head">
            <span class="title">&nbsp;</span>
            <button class="offcanvas-close">×</button>
        </div>
        <div class="offcanvas-menu-search-form">
            <form action="#">
                <input type="text" placeholder="Search...">
                <button><i class="icon-magnifier"></i></button>
            </form>
        </div>
        <div class="offcanvas-menu">
            <ul>
                <li><a href="#"><span class="menu-text">Home</span></a>
                    <ul class="sub-menu">
                        <li><a href="index.html"><span class="menu-text">Home 1</span></a></li>
                        <li><a href="index-2.html"><span class="menu-text">Home 2</span></a></li>
                        <li> <a href="index-3.html"><span class="menu-text">Home 3</span></a></li>
                        <li><a href="index-4.html"><span class="menu-text">Home 4</span></a></li>
                    </ul>
                </li>
                <li><a href="#"><span class="menu-text">Shop</span></a>
                    <ul class="sub-menu">
                        <li>
                            <a href="#"><span class="menu-text">Shop Grid</span></a>
                            <ul class="sub-menu">
                                <li><a href="shop-3-column.html">Shop Grid 3 Column</a></li>
                                <li><a href="shop-4-column.html">Shop Grid 4 Column</a></li>
                                <li><a href="shop-left-sidebar.html">Shop Grid Left Sidebar</a></li>
                                <li><a href="shop-right-sidebar.html">Shop Grid Right Sidebar</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><span class="menu-text">Shop List</span></a>
                            <ul class="sub-menu">
                                <li><a href="shop-list.html">Shop List</a></li>
                                <li><a href="shop-list-left-sidebar.html">Shop List Left Sidebar</a></li>
                                <li><a href="shop-list-right-sidebar.html">Shop List Right Sidebar</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><span class="menu-text">Shop Single</span></a>
                            <ul class="sub-menu">
                                <li><a href="single-product.html">Shop Single</a></li>
                                <li><a href="single-product-variable.html">Shop Variable</a></li>
                                <li><a href="single-product-affiliate.html">Shop Affiliate</a></li>
                                <li><a href="single-product-group.html">Shop Group</a></li>
                                <li><a href="single-product-tabstyle-2.html">Shop Tab 2</a></li>
                                <li><a href="single-product-tabstyle-3.html">Shop Tab 3</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><span class="menu-text">Shop Single</span></a>
                            <ul class="sub-menu">
                                <li><a href="single-product-slider.html">Shop Slider</a></li>
                                <li><a href="single-product-gallery-left.html">Shop Gallery Left</a></li>
                                <li><a href="single-product-gallery-right.html">Shop Gallery Right</a></li>
                                <li><a href="single-product-sticky-left.html">Shop Sticky Left</a></li>
                                <li><a href="single-product-sticky-right.html">Shop Sticky Right</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="#"><span class="menu-text">Pages</span></a>
                    <ul class="sub-menu">
                        <li><a href="about.html">About Page</a></li>
                        <li><a href="cart.html">Cart Page</a></li>
                        <li><a href="checkout.html">Checkout Page</a></li>
                        <li><a href="compare.html">Compare Page</a></li>
                        <li><a href="login.html">Login & Register Page</a></li>
                        <li><a href="my-account.html">Account Page</a></li>
                        <li><a href="wishlist.html">Wishlist Page</a></li>
                        <li><a href="thank-you-page.html">Thank You Page</a></li>
                    </ul>
                </li>
                <li><a href="#"><span class="menu-text">Blog</span></a>
                    <ul class="sub-menu">
                        <li><a href="#"><span class="menu-text">Blog Grid</span></a>
                            <ul class="sub-menu">
                                <li><a href="blog-grid-left-sidebar.html">Blog Grid Left Sidebar</a></li>
                                <li><a href="blog-grid-right-sidebar.html">Blog Grid Right Sidebar</a></li>
                            </ul>
                        </li>
                        <li><a href="#"><span class="menu-text">Blog List</span></a>
                            <ul class="sub-menu">
                                <li><a href="blog-list-left-sidebar.html">Blog List Left Sidebar</a></li>
                                <li><a href="blog-list-right-sidebar.html">Blog List Right Sidebar</a></li>
                            </ul>
                        </li>
                        <li><a href="#"><span class="menu-text">Blog Single</span></a>
                            <ul class="sub-menu">
                                <li><a href="blog-single-left-sidebar.html">Blog Single Left Sidebar</a></li>
                                <li><a href="blog-single-right-sidebar.html">Blog Single Right Sidbar</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="contact.html">Contact Us</a></li>
            </ul>
        </div>
        <div class="offcanvas-buttons mt-30px">
            <div class="header-tools d-flex">
                <div class="cart-info d-flex align-self-center">
                    <a href="{{ route('customer.create') }}" class="user"><i class="icon-user"></i></a>
                    <a href="wishlist.html" data-number="3"><i class="icon-heart"></i></a>
                    <a href="cart.html" data-number="3"><i class="icon-bag"></i></a>
                </div>
            </div>
        </div>
        <div class="offcanvas-social mt-30px">
            <ul>
                <li>
                    <a href="#"><i class="icon-social-facebook"></i></a>
                </li>
                <li>
                    <a href="#"><i class="icon-social-twitter"></i></a>
                </li>
                <li>
                    <a href="#"><i class="icon-social-instagram"></i></a>
                </li>
                <li>
                    <a href="#"><i class="icon-social-google"></i></a>
                </li>
                <li>
                    <a href="#"><i class="icon-social-instagram"></i></a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- OffCanvas Search End -->

<div class="offcanvas-overlay"></div>
<!--------------------------------------------End Mobile Responsive Header Section----------------------------------------->


