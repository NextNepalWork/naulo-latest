
@extends('frontend.layouts.newapp')

@section('content')
  <header class="header ps-header--dark">
                <div class="ps-top-bar">
                    <div class="container">
                        <div class="top-bar">
                            <div class="top-bar__left">
                                <ul class="nav-top-dark">
                                    <li class="nav-top-item"> <a href="javascript:void(0);"><i class='icon-map-marker'></i>Gokarna, 44600 Kathmandu, Nepal.</a>
                                    </li>
                                    <li class="nav-top-item"> <a href="javascript:void(0);"><i class='icon-telephone'></i> +977-9810099062</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="top-bar__right">
                                <ul class="nav-top">
                                    <li class="nav-top-item"><a class="nav-top-link" href="vendor-registration.html">Sell on NauloBazar</a></li>
                                    <li class="nav-top-item"><a class="nav-top-link" href="order-tracking.html">Order Tracking</a></li>
                                    <li class="nav-top-item languages"><a class="nav-top-link" href="javascript:void(0);"> <span class="current-languages">English</span><i class="icon-chevron-down"></i></a>
                                        <div class="select--dropdown">
                                            <ul class="select-languages">
                                                <li class="active language-item" data-value="English"><a href="javascript:void(0);">English</a></li>
                                                <li class="language-item" data-value="Nepali"><a href="javascript:void(0);">Nepali</a></li>
                                                <li class="language-item" data-value="Hindi"><a href="javascript:void(0);">Hindi</a></li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li class="nav-top-item account"><a class="nav-top-link" href="javascript:void(0);"> <i class="icon-user"></i>Hi! <span class="font-bold">Bikash Bhandari</span></a>
                                        <div class="account--dropdown">
                                            <div class="account-anchor">
                                                <div class="triangle"></div>
                                            </div>
                                            <div class="account__content">
                                                <ul class="account-list">
                                                    <li class="title-item">My Account
                                                    </li>
                                                    <li> <a href="dashboard.html">
                                                    <i class="icon-menu-circle">&nbsp;</i> Dasdboard</a>
                                                    </li>
                                                    <li> <a href="my_profile.html">
                                                    <i class="icon-users2">&nbsp;</i> My Profile</a>
                                                    </li>
                                                    <li> <a href="my_address.html">
                                                    <i class="icon-map-marker-user">&nbsp;</i> My Address Book</a>
                                                    </li>
                                                    <li> <a href="my_order.html">
                                                        <i class="icon-cart-add">&nbsp;</i> My Orders</a>
                                                    </li>
                                                    <li> <a href="my_returns.html">
                                                    <i class="icon-cart-remove">&nbsp;</i> My Returns</a>
                                                    </li>
                                                    <li> <a href="my_cancel.html"> <i class="icon-stream-error">&nbsp;</i> My Cancellations</a>
                                                    </li>
                                                    <li> <a href="wishlist.html">
                                                    <i class="icon-heart">&nbsp;</i> My Wishlist</a>
                                                    </li>
                                                    <li> <a href="my_reviews.html">
                                                    <i class="icon-star">&nbsp;</i> My Reviews</a>
                                                    </li>
                                                    <li> <a href="change_password.html">
                                                    <i class="icon-eye">&nbsp;</i> Change Password</a>
                                                    </li>
                                                </ul>
                                                <a class="account-logout" href="index.html"><i class="icon-exit-left"></i>Log Out</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="ps-header--center header--mobile">
                    <div class="container">
                        <div class="header-inner">
                            <div class="header-inner__left">
                                <button class="navbar-toggler"><i class="icon-menu"></i></button>
                            </div>
                            <div class="header-inner__center"><a class="logo open" href="index.html">Naulo<span class="text-black"> Bazar</span></a></div>
                            <div class="header-inner__right">
                                <button class="button-icon icon-sm search-mobile"><i class="icon-magnifier"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <section class="ps-header--center header-desktop">
                    <div class="container">
                        <div class="header-inner">
                            <div class="header-inner__left"><a class="logo" href="index.html">Naulo<b class="text-white"> Bazar</b></a>
                                <button class="category-toggler"><i class="icon-menu"></i></button>
                            </div>
                            <div class="header-inner__center">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="header-search-select"><span class="current">All<i class="icon-chevron-down"></i></span>
                                            <ul class="list">
                                                <li class="category-option active" data-value="option"><a href="javascript:void(0);">All</a></li>
                                                <li class="category-option"><a>Fresh</a><span class="sub-toggle"><i class="icon-chevron-down"></i></span>
                                                    <ul>
                                                        <li> <a href="#">Meat & Poultry</a>
                                                        </li>
                                                        <li> <a href="#">Fruit</a>
                                                        </li>
                                                        <li> <a href="#">Vegetables</a>
                                                        </li>
                                                        <li> <a href="#">Milks, Butter & Eggs</a>
                                                        </li>
                                                        <li> <a href="#">Fish</a>
                                                        </li>
                                                        <li> <a href="#">Frozen</a>
                                                        </li>
                                                        <li> <a href="#">Cheese</a>
                                                        </li>
                                                        <li> <a href="#">Pasta & Sauce</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="category-option"><a>Food Cupboard</a><span class="sub-toggle"><i class="icon-chevron-down"></i></span>
                                                    <ul>
                                                        <li> <a href="#">Crisps, Snacks & Nuts</a>
                                                        </li>
                                                        <li> <a href="#">Breakfast Cereals</a>
                                                        </li>
                                                        <li> <a href="#">Tins & Cans</a>
                                                        </li>
                                                        <li> <a href="#">Chocolate & Sweets</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="category-option" data-value="Bakery"><a href="javascript:void(0);">Bakery</a></li>
                                                <li class="category-option" data-value="Drinks, Tea &amp; Coffee"><a href="javascript:void(0);">Drinks, Tea &amp; Coffee</a></li>
                                                <li class="category-option" data-value="Frozen Foods"><a href="javascript:void(0);">Frozen Foods</a></li>
                                                <li class="category-option"><a>Ready Meals</a><span class="sub-toggle"><i class="icon-chevron-down"></i></span>
                                                    <ul>
                                                        <li> <a href="#">Traditional British</a>
                                                        </li>
                                                        <li> <a href="#">Indian</a>
                                                        </li>
                                                        <li> <a href="#">Italian</a>
                                                        </li>
                                                        <li> <a href="#">Chinese</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="category-option" data-value="Beer, Wine &amp; Spirits"><a href="javascript:void(0);">Beer, Wine &amp; Spirits</a></li>
                                                <li class="category-option" data-value="Baby &amp; Child"><a href="javascript:void(0);">Baby &amp; Child</a></li>
                                                <li class="category-option" data-value="Kitchen &amp; Dining"><a href="javascript:void(0);">Kitchen &amp; Dining</a></li>
                                            </ul>
                                        </div><i class="icon-magnifier search"></i>
                                    </div>
                                    <input class="form-control input-search" placeholder="I'm searchching for...">
                                    <div class="input-group-append">
                                        <button class="btn">Search</button>
                                    </div>
                                </div>

                            </div>
                            <div class="header-inner__right"><a class="button-icon icon-md" href="wishlist.html"><i class="icon-heart text-white"></i><span class="badge bg-warning">2</span></a>
                                <div class="button-icon btn-cart-header"><i class="icon-cart icon-shop5 text-white"></i><span class="badge bg-warning">3</span>
                                    <div class="mini-cart">
                                        <div class="mini-cart--content">
                                            <div class="mini-cart--overlay"></div>
                                            <div class="mini-cart--slidebar cart--box">
                                                <div class="mini-cart__header">
                                                    <div class="cart-header-title">
                                                        <h5>Shopping Cart(3)</h5><a class="close-cart" href="javascript:void(0);"><i class="icon-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                                <div class="mini-cart__products">
                                                    <div class="out-box-cart">
                                                        <div class="triangle-box">
                                                            <div class="triangle"></div>
                                                        </div>
                                                    </div>
                                                    <ul class="list-cart">
                                                        <li class="cart-item">
                                                            <div class="ps-product--mini-cart"><a href="product_details.html"><img class="ps-product__thumbnail" src="assets/img/products/01-fresh/01_18a.jpg" alt="alt" /></a>
                                                                <div class="ps-product__content"><a class="ps-product__name" href="product_details.html">Extreme Budweiser Light Can</a>
                                                                    <p class="ps-product__unit">500g</p>
                                                                    <p class="ps-product__meta"> <span class="ps-product__price">Rs34.90</span><span class="ps-product__quantity">(x1)</span>
                                                                    </p>
                                                                </div>
                                                                <div class="ps-product__remove"><i class="icon-trash2"></i></div>
                                                            </div>
                                                        </li>
                                                        <li class="cart-item">
                                                            <div class="ps-product--mini-cart"><a href="product_details.html"><img class="ps-product__thumbnail" src="assets/img/products/01-fresh/01_31a.jpg" alt="alt" /></a>
                                                                <div class="ps-product__content"><a class="ps-product__name" href="product_details.html">Honest Organic Still Lemonade</a>
                                                                    <p class="ps-product__unit">100g</p>
                                                                    <p class="ps-product__meta"> <span class="ps-product__price-sale">Rs5.99</span><span class="ps-product__is-sale">Rs8.99</span><span class="quantity">(x1)</span>
                                                                    </p>
                                                                </div>
                                                                <div class="ps-product__remove"><i class="icon-trash2"></i></div>
                                                            </div>
                                                        </li>
                                                        <li class="cart-item">
                                                            <div class="ps-product--mini-cart"><a href="product_details.html"><img class="ps-product__thumbnail" src="assets/img/products/01-fresh/01_16a.jpg" alt="alt" /></a>
                                                                <div class="ps-product__content"><a class="ps-product__name" href="product_details.html">Matures Own 100% Wheat</a>
                                                                    <p class="ps-product__unit">1.5L</p>
                                                                    <p class="ps-product__meta"> <span class="ps-product__price">Rs12.90</span><span class="ps-product__quantity">(x1)</span>
                                                                    </p>
                                                                </div>
                                                                <div class="ps-product__remove"><i class="icon-trash2"></i></div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="mini-cart__footer row">
                                                    <div class="col-6 title">TOTAL</div>
                                                    <div class="col-6 text-right total">Rs29.98</div>
                                                    <div class="col-12 d-flex"><a class="view-cart" href="shopping-cart.html">View cart</a><a class="checkout" href="checkout.html">Checkout</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ps-top__total">Shopping Cart<b>Rs129.98</b></div>
                            </div>
                        </div>
                    </div>
                </section>
                <nav class="navigation">
                    <div class="container">
                        <ul class="menu menu-dark">
                           <li class="menu-item-has-children has-mega-menu"><a class="nav-link" href="javascript:void(0);"> <i class="icon-text-align-left text-white mr-3"></i>Categories </a><span class="sub-toggle"><i class="icon-chevron-down"></i></span>
                                <div class="mega-menu mega-menu-category">
                                    <ul class="menu--mobile">
                                        <li class="daily-deals category-item"> <a href="flash-sale.html">Daily Deals</a>
                                        </li>
                                        <li class="category-item"> <a href="shop-categories.html">Top Promotions</a>
                                        </li>
                                        <li class="category-item"> <a href="shop-categories.html">New Arrivals</a>
                                        </li>
                                        <li class="menu-item-has-children category-item"><a href="shop-categories.html">Fresh</a><span class="sub-toggle"><i class="icon-chevron-down"></i></span>
                                            <ul class="sub-menu">
                                                <li> <a href="index.html">Meat & Poultry</a>
                                                </li>
                                                <li> <a href="index.html">Fruit</a>
                                                </li>
                                                <li> <a href="index.html">Vegetables</a>
                                                </li>
                                                <li> <a href="index.html">Milks, Butter & Eggs</a>
                                                </li>
                                                <li> <a href="index.html">Fish</a>
                                                </li>
                                                <li> <a href="index.html">Frozen</a>
                                                </li>
                                                <li> <a href="index.html">Cheese</a>
                                                </li>
                                                <li> <a href="index.html">Pasta & Sauce</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children category-item"><a href="shop-categories.html">Food Cupboard</a><span class="sub-toggle"><i class="icon-chevron-down"></i></span>
                                            <ul class="sub-menu">
                                                <li> <a href="index.html">Crisps, Snacks & Nuts</a>
                                                </li>
                                                <li> <a href="index.html">Breakfast Cereals</a>
                                                </li>
                                                <li> <a href="index.html">Tins & Cans</a>
                                                </li>
                                                <li> <a href="index.html">Chocolate & Sweets</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="category-item"> <a href="shop-categories.html">Bakery</a>
                                        </li>
                                        <li class="category-item"> <a href="shop-categories.html">Frozen Foods</a>
                                        </li>
                                        <li class="menu-item-has-children category-item"><a href="shop-categories.html">Ready Meals</a><span class="sub-toggle"><i class="icon-chevron-down"></i></span>
                                            <ul class="sub-menu">
                                                <li> <a href="index.html">Traditional British</a>
                                                </li>
                                                <li> <a href="index.html">Indian</a>
                                                </li>
                                                <li> <a href="index.html">Italian</a>
                                                </li>
                                                <li> <a href="index.html">Chinese</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children category-item"><a href="shop-categories.html">Drinks, Tea &amp; Coffee</a><span class="sub-toggle"><i class="icon-chevron-down"></i></span>
                                            <ul class="sub-menu">
                                                <li> <a href="index.html">Tea & Coffee</a>
                                                </li>
                                                <li> <a href="index.html">Hot Drinks</a>
                                                </li>
                                                <li> <a href="index.html">Fizzy Drinks</a>
                                                </li>
                                                <li> <a href="index.html">Water</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="category-item"> <a href="shop-categories.html">Beer, Wine & Spirits</a>
                                        </li>
                                        <li class="category-item"> <a href="shop-categories.html">Baby & Child</a>
                                        </li>
                                        <li class="category-item"> <a href="shop-categories.html">Kitchen & Dining</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                        <ul class="menu">
                            <li class="menu-item-has-children has-mega-menu active"><a class="nav-link active" href="index.html">NauloMall</a>
                            </li>
                            <li class="menu-item-has-children has-mega-menu"><a class="nav-link" href="javascript:void(0);">NauloMart</a>
                            </li>
                            <li class="menu-item-has-children has-mega-menu"><a class="nav-link" href="javascript:void(0);">Naulo Bazar</a>
                            </li>
                            <li class="menu-item-has-children has-mega-menu"> <a class="nav-link" href="flash-sale.html">Flash Sale</a>
                            </li>
                            <li class="menu-item-has-children has-mega-menu menu-item-branch"><a class="nav-link" href="javascript:void(0);">Our Top Venders</a>
                                <span class="sub-toggle"><i class="icon-chevron-down"></i></span>
                                <div class="mega-menu mega-brand">
                                    <div class="mega-anchor"></div>
                                    <div class="brand-box">
                                        <div class="brand__title">FEATURED VENDERS</div>
                                        <div class="row">
                                            <div class="col-4"><a href="index.html"><img src="assets/img/brand/brand_themeforest.jpg" alt="alt" /></a></div>
                                            <div class="col-4"><a href="index.html"><img src="assets/img/brand/brand_envato.jpg" alt="alt" /></a></div>
                                            <div class="col-4"><a href="index.html"><img src="assets/img/brand/brand_codecanyon.jpg" alt="alt" /></a></div>
                                            <div class="col-4"><a href="index.html"><img src="assets/img/brand/brand_cudicjungle.jpg" alt="alt" /></a></div>
                                            <div class="col-4"><a href="index.html"><img src="assets/img/brand/brand_videohive.jpg" alt="alt" /></a></div>
                                            <div class="col-4"><a href="index.html"><img src="assets/img/brand/brand_photodune.jpg" alt="alt" /></a></div>
                                            <div class="col-4"><a href="index.html"><img src="assets/img/brand/brand_evatotuts.jpg" alt="alt" /></a></div>
                                            <div class="col-4"><a href="index.html"><img src="assets/img/brand/brand_3docean.jpg" alt="alt" /></a></div>
                                            <div class="col-4"><a href="index.html"><img src="assets/img/brand/microlancer.jpg" alt="alt" /></a></div>
                                        </div><a class="brand__link" href="vendor-list.html">See all Venders<i class="icon-chevron-right"></i></a>
                                    </div>
                                    <div class="brand__promotion"><a href="flash-sale.html"><img src="assets/img/brand/brand_01.jpg" alt="alt" /></a></div>
                                    <div class="brand__promotion"><a href="flash-sale.html"><img src="assets/img/brand/brand_02.jpg" alt="alt" /></a></div>
                                </div>
                            </li>
                        </ul>
                        <div class="navigation-text">
                            <ul class="menu">
                                <li class="menu-item-has-children has-mega-menu"><a class="nav-link" href="become-a-vendor.html">Become A Vendor</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <div class="mobile-search--slidebar">
                    <div class="mobile-search--content">
                        <div class="mobile-search__header">
                            <div class="mobile-search-box">
                                <div class="input-group">
                                    <input class="form-control" placeholder="I'm shopping for..." id="inputSearchMobile">
                                    <div class="input-group-append">
                                        <button class="btn"> <i class="icon-magnifier"></i></button>
                                    </div>
                                </div>
                                <button class="cancel-search"><i class="icon-cross"></i></button>
                            </div>
                          </div>
                    </div>
                </div>
            </header>
            <main class="no-main ps-home--dark">
                <div class="section-slide--default">
                    <div class="owl-carousel" data-owl-auto="false" data-owl-loop="true" data-owl-speed="10000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000" data-owl-mousedrag="on">
                        <div class="ps-banner"><img class="mobile-only" src="assets/img/slider/home-dark/slide-mobile-01.jpg" alt="alt" /><img class="desktop-only" src="assets/img/slider/home-dark/slide-dark-01.jpg" alt="alt" />
                            <div class="ps-content">
                                <div class="container">
                                    <div class="ps-content-box">
                                        <div class="ps-node">MART FROM Naulo Bazar</div>
                                        <div class="ps-title">Welcome to <b class='text-success'>NauloBazar</b> Foods & Organic Online.</div>
                                        <div class="ps-subtitle">* Free delivery for your first order</div>
                                        <div class="ps-shopnow"> <a href="index.html">Shop Now<i class="icon-chevron-right"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ps-banner"><img class="mobile-only" src="assets/img/slider/home-dark/slide-mobile-02.jpg" alt="alt" /><img class="desktop-only" src="assets/img/slider/home-dark/slide-dark-02.jpg" alt="alt" />
                            <div class="ps-content">
                                <div class="container">
                                    <div class="ps-content-box">
                                        <div class="ps-node"><span class='text-danger'>Sale up to 30%</span></div>
                                        <div class="ps-title">Best Finger Foods for Babies & Toddlers.</div>
                                        <div class="ps-subtitle">For children from 06 -12 months</div>
                                        <div class="ps-shopnow"> <a href="index.html">Shop Now<i class="icon-chevron-right"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ps-banner ps-banner-center"><img class="mobile-only" src="assets/img/slider/home-dark/slide-mobile-03.jpg" alt="alt" /><img class="desktop-only" src="assets/img/slider/home-dark/slide-dark-03.jpg" alt="alt" />
                            <div class="ps-content">
                                <div class="container">
                                    <div class="ps-content-box">
                                        <div class="ps-node"><span class='text-success'>ALL-NATURAL, NON-GMO & LOCALLY-GROWN</span></div>
                                        <div class="ps-title">Get organic meals prepared & delivered to your home.</div>
                                        <div class="ps-subtitle">Fully prepared & delivered nationwide.</div>
                                        <div class="ps-shopnow"> <a href="index.html">Shop Now<i class="icon-chevron-right"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <section class="ps-component ps-component--category">
                    <div class="container">
                        <div class="component__header">
                            <h3 class="component__title">Shop By Category</h3><a class="component__view" href="shop-categories.html">View All <i class="icon-chevron-right"></i></a>
                        </div>
                        <div class="component__content">
                            <div class="owl-carousel" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="8" data-owl-item-xs="3" data-owl-item-sm="3" data-owl-item-md="5" data-owl-item-lg="8" data-owl-duration="1000" data-owl-mousedrag="on">
                                <div class="ps-category__item"><a href="shop-categories.html"><img class="ps-categories__thumbnail" src="assets/img/products/01-fresh/01_16a.jpg" alt></a><a class="ps-categories__name" href="shop-categories.html">Fresh </a></div>
                                <div class="ps-category__item"><a href="shop-categories.html"><img class="ps-categories__thumbnail" src="assets/img/products/02-foodcupboard/02_19a.jpg" alt></a><a class="ps-categories__name" href="shop-categories.html">Food Cupboard </a></div>
                                <div class="ps-category__item"><a href="shop-categories.html"><img class="ps-categories__thumbnail" src="assets/img/products/03-bakery/03_6a.jpg" alt></a><a class="ps-categories__name" href="shop-categories.html">Barkery </a></div>
                                <div class="ps-category__item"><a href="shop-categories.html"><img class="ps-categories__thumbnail" src="assets/img/products/05-readymeals/05_2a.jpg" alt></a><a class="ps-categories__name" href="shop-categories.html">Ready Meals </a></div>
                                <div class="ps-category__item"><a href="shop-categories.html"><img class="ps-categories__thumbnail" src="assets/img/products/06-softdrinks-teacoffee/06_9a.jpg" alt></a><a class="ps-categories__name" href="shop-categories.html">Drinks, Tea &amp; Coffee </a></div>
                                <div class="ps-category__item"><a href="shop-categories.html"><img class="ps-categories__thumbnail" src="assets/img/products/07-beer-winespirits/07_1a.jpg" alt></a><a class="ps-categories__name" href="shop-categories.html">Beer, Wine &amp; Spirits </a></div>
                                <div class="ps-category__item"><a href="shop-categories.html"><img class="ps-categories__thumbnail" src="assets/img/products/08-babychild/08_5a.jpg" alt></a><a class="ps-categories__name" href="shop-categories.html">Baby &amp; Child </a></div>
                                <div class="ps-category__item"><a href="shop-categories.html"><img class="ps-categories__thumbnail" src="assets/img/products/04-frozenfoods/04_2a.jpg" alt></a><a class="ps-categories__name" href="shop-categories.html">Frozen Foods </a></div>
                                <div class="ps-category__item"><a href="shop-categories.html"><img class="ps-categories__thumbnail" src="assets/img/products/09-kitchendining/09_11a.jpg" alt></a><a class="ps-categories__name" href="shop-categories.html">Kitchen &amp; Dining </a></div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="ps-component">
                    <div class="container">
                        <div class="component__header">
                            <h3 class="component__title">Top Greatest Offers</h3>
                            <a class="component__view" href="shop-categories.html">View All <i class="icon-chevron-right"></i></a>
                        </div>
                        <div class="component__content promotion__carousel">
                            <div class="owl-carousel" data-owl-auto="true" data-owl-loop="true" data-owl-speed="7000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="4" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="2" data-owl-item-lg="4" data-owl-duration="1000" data-owl-mousedrag="on">
                                <div class="promotion__thumbnail"><a href="index.html"><img src="assets/img/promotion/promotion_01.jpg" alt></a></div>
                                <div class="promotion__thumbnail"><a href="index.html"><img src="assets/img/promotion/promotion_02.jpg" alt></a></div>
                                <div class="promotion__thumbnail"><a href="index.html"><img src="assets/img/promotion/promotion_03.jpg" alt></a></div>
                                <div class="promotion__thumbnail"><a href="index.html"><img src="assets/img/promotion/promotion_01.jpg" alt></a></div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="ps-component ps-component--flash">
                    <div class="container">
                        <div class="component__header">
                            <h3 class="component__title">Today Flash Sale<span class="ps-countdown"><span class="ps-countdown-end">Ends in : </span><span class="ps-countdown"><b class="hours">00</b> hours : <b class="minutes">12</b> mins : <b class="seconds">45</b> secs</span><span class="ps-countdown mobile"><b class="hours">00</b> h : <b class="minutes">12</b> m : <b class="seconds">45</b> s</span></span></h3>
                            <a class="component__view" href="flash-sale.html">View All <i class="icon-chevron-right"></i></a>
                        </div>
                        <div class="component__content">
                            <div class="owl-carousel" data-owl-auto="true" data-owl-loop="true" data-owl-speed="8000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="false" data-owl-item="5" data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="5" data-owl-duration="1000" data-owl-mousedrag="on">
                                <div class="ps-flash__product">
                                    <div class="ps-product--standard"><a href="product_details.html"><img class="ps-product__thumbnail" src="assets/img/products/01-fresh/01_16a.jpg" alt="alt" />
                                    </a>
                                    <a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Onemart</p>
                                            <h5><a class="ps-product__name" href="product_details.html">Cornboat Holders</a></h5>
                                            <p class="ps-product__unit">4 per pack</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(0)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span class="ps-product__sale">Rs2.90</span><span class="ps-product__price">Rs4.90</span><span class="ps-product__off">25% Off</span>
                                            </p>
                                            <div class="progress">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 0%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <p class="ps-product__sold">Sold: 0/40</p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>Rs2.90</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="ps-flash__product">
                                    <div class="ps-product--standard"><a href="product_details.html"><img class="ps-product__thumbnail" src="assets/img/products/01-fresh/01_20a.jpg" alt="alt" />
                                    </a>
                                    <a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Sun Farm</p>
                                            <h5><a class="ps-product__name" href="product_details.html">Saute Pan Silver</a></h5>
                                            <p class="ps-product__unit">500ml</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3" selected="selected">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(7)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span class="ps-product__sale">Rs1.49</span><span class="ps-product__price">Rs4.90</span><span class="ps-product__off">9% Off</span>
                                            </p>
                                            <div class="progress">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 90%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <p class="ps-product__sold">Sold: 9/10</p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>Rs1.49</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="ps-flash__product">
                                    <div class="ps-product--standard"><a href="product_details.html"><img class="ps-product__thumbnail" src="assets/img/products/07-beer-winespirits/07_10a.jpg" alt="alt" /></a>
                                        <a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Nesco</p>
                                            <h5><a class="ps-product__name" href="product_details.html">Crock Pot Slow Cooker</a></h5>
                                            <p class="ps-product__unit">$ per pack</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(0)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span class="ps-product__sale">Rs3.99</span><span class="ps-product__price">Rs4.90</span><span class="ps-product__off">26% Off</span>
                                            </p>
                                            <div class="progress">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <p class="ps-product__sold">Sold: 20/40</p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>Rs3.99</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="ps-flash__product">
                                    <div class="ps-product--standard"><a href="product_details.html"><img class="ps-product__thumbnail" src="assets/img/products/01-fresh/01_25a.jpg" alt="alt" /></a>
                                        <a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Karery</p>
                                            <h5><a class="ps-product__name" href="product_details.html">Emoticon Cookie</a></h5>
                                            <p class="ps-product__unit">330ml</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5" selected="selected">5</option>
                                                </select><span>(13)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span class="ps-product__sale">Rs5.99</span><span class="ps-product__price">Rs6.90</span><span class="ps-product__off">55% Off</span>
                                            </p>
                                            <div class="progress">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 25%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <p class="ps-product__sold">Sold: 5/20</p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>Rs5.99</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="ps-flash__product">
                                    <div class="ps-product--standard"><a href="product_details.html"><img class="ps-product__thumbnail" src="assets/img/products/01-fresh/01_2a.jpg" alt="alt" /></a>
                                        <a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Karey Store</p>
                                            <h5><a class="ps-product__name" href="product_details.html">Broccoli Crowns</a></h5>
                                            <p class="ps-product__unit">4 per pack</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5" selected="selected">5</option>
                                                </select><span>(15)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span class="ps-product__sale">Rs3.99</span><span class="ps-product__price">Rs4.90</span><span class="ps-product__off">30% Off</span>
                                            </p>
                                            <div class="progress">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 0%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <p class="ps-product__sold">Sold: 0/10</p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>Rs3.99</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="ps-flash__product">
                                    <div class="ps-product--standard"><a href="product_details.html"><img class="ps-product__thumbnail" src="assets/img/products/05-readymeals/05_11a.jpg" alt="alt" /></a>
                                        <a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Naulobazar</p>
                                            <h5><a class="ps-product__name" href="product_details.html">Arla Organic Free Range Milk</a></h5>
                                            <p class="ps-product__unit">1 per pack</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(0)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span class="ps-product__sale">Rs3.39</span><span class="ps-product__price">Rs4.90</span><span class="ps-product__off">15% Off</span>
                                            </p>
                                            <div class="progress">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 10%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <p class="ps-product__sold">Sold: 1/10</p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>Rs3.39</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="ps-flash__product">
                                    <div class="ps-product--standard"><a href="product_details.html"><img class="ps-product__thumbnail" src="assets/img/products/01-fresh/01_20a.jpg" alt="alt" /></a>
                                        <a class="ps-product__expand" href="javascript:void(0);" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Sun Farm</p>
                                            <h5><a class="ps-product__name" href="product_details.html">Saute Pan Silver</a></h5>
                                            <p class="ps-product__unit">500ml</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3" selected="selected">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(7)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span class="ps-product__sale">Rs1.49</span><span class="ps-product__price">Rs4.90</span><span class="ps-product__off">9% Off</span>
                                            </p>
                                            <div class="progress">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 90%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <p class="ps-product__sold">Sold: 9/10</p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>Rs1.49</span>
                                            </div>
                                            <button class="ps-product__addcart" data-toggle="modal" data-target="#popupAddToCart"><i class="icon-cart"></i>Add to cart</button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section--storeList">
                    <div class="container">
                        <div class="storeList__content pb-0">
                            <div class="component__header">
                                <h3 class="component__title">Our Top Venders</h3>
                            </div>
                            <div class="owl-carousel" data-owl-auto="true" data-owl-loop="true" data-owl-speed="8000" data-owl-gap="10" data-owl-nav="true" data-owl-dots="true" data-owl-item="4" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="2" data-owl-item-lg="4" data-owl-item-xl="4" data-owl-duration="1000" data-owl-mousedrag="on">
                                <div class="storeList__item">
                                    <div class="item__header"><img src="assets/img/store_list_1.jpg" alt="alt" />
                                        <div class="item__content">
                                            <h5 class="item__title">Enter Western Mart </h5>
                                            <div class="item__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3" selected="selected">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div>
                                            <div class="item__street">Bu.Na.Pa-14, Kapan Road</div>
                                            <div class="item__address">44600, Kathmandu, Nepal</div>
                                            <div class="item__phone"> <i class="fa fa-phone"></i>(+977) 9810099062</div>
                                        </div>
                                    </div>
                                    <div class="item__footer"><a class="item__store" href="vendor-store.html">Visit Store</a>
                                        <div class="item__avatar">
                                            <div class="avatar"><img src="assets/img/store_list_logo1.jpg" alt="alt" /></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="storeList__item">
                                    <div class="item__header"><img src="assets/img/store_list_2.jpg" alt="alt" />
                                        <div class="item__content">
                                            <div class="item__feature">Featured</div>
                                            <h5 class="item__title">Ganesh Store</h5>
                                            <div class="item__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2" selected="selected">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div>
                                            <div class="item__street">Bu.Na.Pa-14, Kapan Road</div>
                                            <div class="item__address">44600, Kathmandu, Nepal</div>
                                            <div class="item__phone"> <i class="fa fa-phone"></i>(+977) 9810099062</div>
                                        </div>
                                    </div>
                                    <div class="item__footer"><a class="item__store" href="vendor-store.html">Visit Store</a>
                                        <div class="item__avatar">
                                            <div class="avatar"><img src="assets/img/store_list_no_avatar.jpg" alt="alt" /></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="storeList__item">
                                    <div class="item__header"><img src="assets/img/store_list_1.jpg" alt="alt" />
                                        <div class="item__content">
                                            <h5 class="item__title">Sangita Ymart</h5>
                                            <div class="item__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5" selected="selected">5</option>
                                                </select>
                                            </div>
                                            <div class="item__street">Bu.Na.Pa-14, Kapan Road</div>
                                            <div class="item__address">44600, Kathmandu, Nepal</div>
                                            <div class="item__phone"> <i class="fa fa-phone"></i>(+977) 9810099062</div>
                                        </div>
                                    </div>
                                    <div class="item__footer"><a class="item__store" href="vendor-store.html">Visit Store</a>
                                        <div class="item__avatar">
                                            <div class="avatar"><img src="assets/img/store_list_logo3.jpg" alt="alt" /></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="storeList__item">
                                    <div class="item__header"><img src="assets/img/store_list_2.jpg" alt="alt" />
                                        <div class="item__content">
                                            <h5 class="item__title">Tina Dmart</h5>
                                            <div class="item__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div>
                                            <div class="item__street">Bu.Na.Pa-14, Kapan Road</div>
                                            <div class="item__address">44600, Kathmandu, Nepal</div>
                                            <div class="item__phone"> <i class="fa fa-phone"></i>(+977) 9810099062</div>
                                        </div>
                                    </div>
                                    <div class="item__footer"><a class="item__store" href="vendor-store.html">Visit Store</a>
                                        <div class="item__avatar">
                                            <div class="avatar"><img src="assets/img/store_list_no_avatar.jpg" alt="alt" /></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="storeList__item">
                                    <div class="item__header"><img src="assets/img/store_list_5.jpg" alt="alt" />
                                        <div class="item__content">
                                            <div class="item__feature">Featured</div>
                                            <h5 class="item__title">Diya Imart</h5>
                                            <div class="item__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4" selected="selected">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div>
                                            <div class="item__street">Bu.Na.Pa-14, Kapan Road</div>
                                            <div class="item__address">44600, Kathmandu, Nepal</div>
                                            <div class="item__phone"> <i class="fa fa-phone"></i>(+977) 9810099062</div>
                                        </div>
                                    </div>
                                    <div class="item__footer"><a class="item__store" href="vendor-store.html">Visit Store</a>
                                        <div class="item__avatar">
                                            <div class="avatar"><img src="assets/img/store_list_no_avatar.jpg" alt="alt" /></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="storeList__item">
                                    <div class="item__header"><img src="assets/img/store_list_2.jpg" alt="alt" />
                                        <div class="item__content">
                                            <h5 class="item__title">Enter Western Mart </h5>
                                            <div class="item__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3" selected="selected">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div>
                                            <div class="item__street">Bu.Na.Pa-14, Kapan Road</div>
                                            <div class="item__address">44600, Kathmandu, Nepal</div>
                                            <div class="item__phone"> <i class="fa fa-phone"></i>(+977) 9810099062</div>
                                        </div>
                                    </div>
                                    <div class="item__footer"><a class="item__store" href="vendor-store.html">Visit Store</a>
                                        <div class="item__avatar">
                                            <div class="avatar"><img src="assets/img/store_list_logo1.jpg" alt="alt" /></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="storeList__item">
                                    <div class="item__header"><img src="assets/img/store_list_5.jpg" alt="alt" />
                                        <div class="item__content">
                                            <div class="item__feature">Featured</div>
                                            <h5 class="item__title">Ganesh Store</h5>
                                            <div class="item__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2" selected="selected">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div>
                                            <div class="item__street">Bu.Na.Pa-14, Kapan Road</div>
                                            <div class="item__address">44600, Kathmandu, Nepal</div>
                                            <div class="item__phone"> <i class="fa fa-phone"></i>(+977) 9810099062</div>
                                        </div>
                                    </div>
                                    <div class="item__footer"><a class="item__store" href="vendor-store.html">Visit Store</a>
                                        <div class="item__avatar">
                                            <div class="avatar"><img src="assets/img/store_list_no_avatar.jpg" alt="alt" /></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                {{-- <section class="ps-component ps-component--selling">
                    <div class="container">
                        <div class="component__header">
                            <h3 class="component__title">Top Best Selling Items</h3>
                            <a class="component__view" href="shop-categories.html">View All <i class="icon-chevron-right"></i></a>
                        </div>
                        <div class="component__content">
                            <div class="owl-carousel" data-owl-auto="true" data-owl-loop="true" data-owl-speed="12000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="5" data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="5" data-owl-duration="1000" data-owl-mousedrag="on">
                                <div class="ps-sell__product">
                                    <div class="ps-product--standard"><a href="product_details.html"><img class="ps-product__thumbnail" src="assets/img/products/01-fresh/01_16a.jpg" alt="alt" /></a><a class="ps-product__expand" href="javascript:void(0);"><i class="icon-heart"></i></a><span class="ps-badge ps-product__offbadge">35% Off </span>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Karery Store</p>
                                            <h5><a class="ps-product__name" href="product_details.html">Broccoli Crowns</a></h5>
                                            <p class="ps-product__unit">300g</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5" selected="selected">5</option>
                                                </select><span>(4)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span class="ps-product__sale">Rs3.90</span><span class="ps-product__price">Rs9.99</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>Rs3.90</span>
                                            </div>
                                            <button class="ps-product__addcart" ><i class="icon-cart"></i>Add to cart</button>

                                        </div>
                                    </div>
                                </div>
                                <div class="ps-sell__product">
                                    <div class="ps-product--standard"><a href="product_details.html"><img class="ps-product__thumbnail" src="assets/img/products/01-fresh/01_22a.jpg" alt="alt" /></a><a class="ps-product__expand" href="javascript:void(0);"><i class="icon-heart"></i></a><span class="ps-badge ps-product__new">New </span>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Shannan Yu</p>
                                            <h5><a class="ps-product__name" href="product_details.html">Bar S -Classic Bun Length Franks</a></h5>
                                            <p class="ps-product__unit">454g</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(0)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span class="ps-product__price-default">Rs14.99</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>Rs14.99</span>
                                            </div>
                                            <button class="ps-product__addcart" ><i class="icon-cart"></i>Add to cart</button>

                                        </div>
                                    </div>
                                </div>
                                <div class="ps-sell__product">
                                    <div class="ps-product--standard"><a href="product_details.html"><img class="ps-product__thumbnail" src="assets/img/products/01-fresh/01_21a.jpg" alt="alt" /></a><a class="ps-product__expand" href="javascript:void(0);"><i class="icon-heart"></i></a><span class="ps-badge ps-product__new">New </span>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Shannan Yu</p>
                                            <h5><a class="ps-product__name" href="product_details.html">Bar S -Classic Bun Length Franks</a></h5>
                                            <p class="ps-product__unit">500ml</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(0)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span class="ps-product__price-default">Rs4.99</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>Rs4.99</span>
                                            </div>
                                            <button class="ps-product__addcart" ><i class="icon-cart"></i>Add to cart</button>

                                        </div>
                                    </div>
                                </div>
                                <div class="ps-sell__product">
                                    <div class="ps-product--standard"><a href="product_details.html"><img class="ps-product__thumbnail" src="assets/img/products/01-fresh/01_27a.jpg" alt="alt" /></a><a class="ps-product__expand" href="javascript:void(0);"><i class="icon-heart"></i></a><span class="ps-badge ps-product__stock">Out of stock </span>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Shannan Yu</p>
                                            <h5><a class="ps-product__name" href="product_details.html">Fresh Organic Milk</a></h5>
                                            <p class="ps-product__unit">100g</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3" selected="selected">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(6)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span class="ps-product__price-default">Rs5.99</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>Rs5.99</span>
                                            </div>
                                            <button class="ps-product__addcart" ><i class="icon-cart"></i>Add to cart</button>

                                        </div>
                                    </div>
                                </div>
                                <div class="ps-sell__product">
                                    <div class="ps-product--standard"><a href="product_details.html"><img class="ps-product__thumbnail" src="assets/img/products/01-fresh/01_6a.jpg" alt="alt" /></a><a class="ps-product__expand" href="javascript:void(0);"><i class="icon-heart"></i></a><span class="ps-badge ps-product__offbadge">25% Off </span>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Shannan Yu</p>
                                            <h5><a class="ps-product__name" href="product_details.html">Honest Organic Still Lemonade</a></h5>
                                            <p class="ps-product__unit">100g</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5" selected="selected">5</option>
                                                </select><span>(14)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span class="ps-product__sale">Rs6.99</span><span class="ps-product__price">Rs9.90</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>Rs6.99</span>
                                            </div>
                                            <button class="ps-product__addcart" ><i class="icon-cart"></i>Add to cart</button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section> --}}

                {{-- <section class="section-recommendations--default">
                    <div class="container">
                        <div class="recommendations__header">
                            <h3 class="recommendations__title">Recommendations</h3>
                        </div>
                        <div class="recommendations__content">
                            <div class="owl-carousel" data-owl-auto="true" data-owl-loop="true" data-owl-speed="15000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="5" data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="5" data-owl-duration="1000" data-owl-mousedrag="on">
                                <div class="ps-recommendation__product">
                                    <div class="ps-product--standard"><a href="product_details.html"><img class="ps-product__thumbnail" src="assets/img/products/06-softdrinks-teacoffee/06_5a.jpg" alt="alt" /></a><a class="ps-product__expand" href="javascript:void(0);"><i class="icon-heart"></i></a><span class="ps-badge ps-product__offbadge">25% Off </span>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Kinaraa Store</p>
                                            <h5><a class="ps-product__name" href="product_details.html">Michelob Ultra Cans</a></h5>
                                            <p class="ps-product__unit">250g</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4" selected="selected">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(2)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span class="ps-product__sale">Rs15.99</span><span class="ps-product__price">Rs20.90</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>Rs15.99</span>
                                            </div>
                                            <button class="ps-product__addcart" ><i class="icon-cart"></i>Add to cart</button>

                                        </div>
                                    </div>
                                </div>
                                <div class="ps-recommendation__product">
                                    <div class="ps-product--standard"><a href="product_details.html"><img class="ps-product__thumbnail" src="assets/img/products/06-softdrinks-teacoffee/06_11a.jpg" alt="alt" /></a><a class="ps-product__expand" href="javascript:void(0);"><i class="icon-heart"></i></a><span class="ps-badge ps-product__offbadge">25% Off </span>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Karery Store</p>
                                            <h5><a class="ps-product__name" href="product_details.html">Broccoli Crowns</a></h5>
                                            <p class="ps-product__unit">1 box</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4" selected="selected">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(4)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span class="ps-product__sale">Rs9.99</span><span class="ps-product__price">Rs5.90</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>Rs9.99</span>
                                            </div>
                                            <button class="ps-product__addcart" ><i class="icon-cart"></i>Add to cart</button>

                                        </div>
                                    </div>
                                </div>
                                <div class="ps-recommendation__product">
                                    <div class="ps-product--standard"><a href="product_details.html"><img class="ps-product__thumbnail" src="assets/img/products/01-fresh/01_18a.jpg" alt="alt" /></a><a class="ps-product__expand" href="javascript:void(0);"><i class="icon-heart"></i></a><span class="ps-badge ps-product__stock">Out of stock </span>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Sun Farm</p>
                                            <h5><a class="ps-product__name" href="product_details.html">Oniins, Green</a></h5>
                                            <p class="ps-product__unit">300g</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4" selected="selected">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(2)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span class="ps-product__sale">Rs6.90</span><span class="ps-product__price">Rs9.99</span><span class="ps-product__off">35% Off</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>Rs6.90</span>
                                            </div>
                                            <button class="ps-product__addcart" ><i class="icon-cart"></i>Add to cart</button>

                                        </div>
                                    </div>
                                </div>
                                <div class="ps-recommendation__product">
                                    <div class="ps-product--standard"><a href="product_details.html"><img class="ps-product__thumbnail" src="assets/img/products/01-fresh/01_1a.jpg" alt="alt" /></a><a class="ps-product__expand" href="javascript:void(0);"><i class="icon-heart"></i></a><span class="ps-badge ps-product__new">New </span>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>NauloBazar</p>
                                            <h5><a class="ps-product__name" href="product_details.html">Corn, Yellow Sweet</a></h5>
                                            <p class="ps-product__unit">4 per pack</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(0)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span class="ps-product__price-default">Rs4.49</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>Rs4.49</span>
                                            </div>
                                            <button class="ps-product__addcart" ><i class="icon-cart"></i>Add to cart</button>

                                        </div>
                                    </div>
                                </div>
                                <div class="ps-recommendation__product">
                                    <div class="ps-product--standard"><a href="product_details.html"><img class="ps-product__thumbnail" src="assets/img/products/01-fresh/01_32a.jpg" alt="alt" /></a><a class="ps-product__expand" href="javascript:void(0);"><i class="icon-heart"></i></a>
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i class="icon-store"></i>Shannan Yu</p>
                                            <h5><a class="ps-product__name" href="product_details.html">Large Green Bell Pepper</a></h5>
                                            <p class="ps-product__unit">250g</p>
                                            <div class="ps-product__rating">
                                                <select class="rating-stars">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4" selected="selected">4</option>
                                                    <option value="5">5</option>
                                                </select><span>(2)</span>
                                            </div>
                                            <p class="ps-product-price-block"><span class="ps-product__price-default">Rs14.99</span>
                                            </p>
                                        </div>
                                        <div class="ps-product__footer">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <div class="ps-product__total">Total: <span>Rs14.99</span>
                                            </div>
                                            <button class="ps-product__addcart" ><i class="icon-cart"></i>Add to cart</button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section> --}}

                {{-- <section class="ps-component ps-component--selling jfu-NauloBazar-sell">
                    <div class="container">
                        <div class="component__header">
                        <h3 class="component__title">Just For You</h3>
                    </div>
                        <div class="component__content">
                            <div class="row m-0">
                                <div class="col-6 col-md-4 col-lg-3 col-xl-2 p-0">
                                    <div class="ps-sell__product">
                                        <div class="ps-product--standard"><a href="product_details.html"><img class="ps-product__thumbnail" src="assets/img/products/01-fresh/01_22a.jpg" alt="alt" /></a><a class="ps-product__expand" href="javascript:void(0);"><i class="icon-heart"></i></a><span class="ps-badge ps-product__new">New </span>
                                            <div class="ps-product__content">
                                                <p class="ps-product__type"><i class="icon-store"></i>Shannan Yu</p>
                                                <h5><a class="ps-product__name" href="product_details.html">Bar S -Classic Bun Length Franks</a></h5>
                                                <p class="ps-product__unit">454g</p>
                                                <div class="ps-product__rating">
                                                    <select class="rating-stars">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select><span>(0)</span>
                                                </div>
                                                <p class="ps-product-price-block"><span class="ps-product__price-default">Rs14.99</span>
                                                </p>
                                            </div>
                                            <div class="ps-product__footer">
                                                <div class="def-number-input number-input safari_only">
                                                    <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                    <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                                    <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                                </div>
                                                <div class="ps-product__total">Total: <span>Rs14.99</span>
                                                </div>
                                                <button class="ps-product__addcart" ><i class="icon-cart"></i>Add to cart</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 col-xl-2 p-0">
                                    <div class="ps-sell__product">
                                        <div class="ps-product--standard"><a href="product_details.html"><img class="ps-product__thumbnail" src="assets/img/products/01-fresh/01_16a.jpg" alt="alt" /></a><a class="ps-product__expand" href="javascript:void(0);"><i class="icon-heart"></i></a><span class="ps-badge ps-product__offbadge">35% Off </span>
                                            <div class="ps-product__content">
                                                <p class="ps-product__type"><i class="icon-store"></i>Karery Store</p>
                                                <h5><a class="ps-product__name" href="product_details.html">Broccoli Crowns</a></h5>
                                                <p class="ps-product__unit">300g</p>
                                                <div class="ps-product__rating">
                                                    <select class="rating-stars">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5" selected="selected">5</option>
                                                    </select><span>(4)</span>
                                                </div>
                                                <p class="ps-product-price-block"><span class="ps-product__sale">Rs3.90</span><span class="ps-product__price">Rs9.99</span>
                                                </p>
                                            </div>
                                            <div class="ps-product__footer">
                                                <div class="def-number-input number-input safari_only">
                                                    <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                    <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                                    <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                                </div>
                                                <div class="ps-product__total">Total: <span>Rs3.90</span>
                                                </div>
                                                <button class="ps-product__addcart" ><i class="icon-cart"></i>Add to cart</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 col-xl-2 p-0">
                                    <div class="ps-sell__product">
                                        <div class="ps-product--standard"><a href="product_details.html"><img class="ps-product__thumbnail" src="assets/img/products/01-fresh/01_27a.jpg" alt="alt" /></a><a class="ps-product__expand" href="javascript:void(0);"><i class="icon-heart"></i></a><span class="ps-badge ps-product__stock">Out of stock </span>
                                            <div class="ps-product__content">
                                                <p class="ps-product__type"><i class="icon-store"></i>Shannan Yu</p>
                                                <h5><a class="ps-product__name" href="product_details.html">Fresh Organic Milk</a></h5>
                                                <p class="ps-product__unit">100g</p>
                                                <div class="ps-product__rating">
                                                    <select class="rating-stars">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3" selected="selected">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select><span>(6)</span>
                                                </div>
                                                <p class="ps-product-price-block"><span class="ps-product__price-default">Rs5.99</span>
                                                </p>
                                            </div>
                                            <div class="ps-product__footer">
                                                <div class="def-number-input number-input safari_only">
                                                    <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                    <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                                    <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                                </div>
                                                <div class="ps-product__total">Total: <span>Rs5.99</span>
                                                </div>
                                                <button class="ps-product__addcart" ><i class="icon-cart"></i>Add to cart</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 col-xl-2 p-0">
                                    <div class="ps-sell__product">
                                        <div class="ps-product--standard"><a href="product_details.html"><img class="ps-product__thumbnail" src="assets/img/products/01-fresh/01_6a.jpg" alt="alt" /></a><a class="ps-product__expand" href="javascript:void(0);"><i class="icon-heart"></i></a><span class="ps-badge ps-product__offbadge">25% Off </span>
                                            <div class="ps-product__content">
                                                <p class="ps-product__type"><i class="icon-store"></i>Shannan Yu</p>
                                                <h5><a class="ps-product__name" href="product_details.html">Honest Organic Still Lemonade</a></h5>
                                                <p class="ps-product__unit">100g</p>
                                                <div class="ps-product__rating">
                                                    <select class="rating-stars">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5" selected="selected">5</option>
                                                    </select><span>(14)</span>
                                                </div>
                                                <p class="ps-product-price-block"><span class="ps-product__sale">Rs6.99</span><span class="ps-product__price">Rs9.90</span>
                                                </p>
                                            </div>
                                            <div class="ps-product__footer">
                                                <div class="def-number-input number-input safari_only">
                                                    <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                    <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                                    <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                                </div>
                                                <div class="ps-product__total">Total: <span>Rs6.99</span>
                                                </div>
                                                <button class="ps-product__addcart" ><i class="icon-cart"></i>Add to cart</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 col-xl-2 p-0">
                                    <div class="ps-sell__product">
                                        <div class="ps-product--standard"><a href="product_details.html"><img class="ps-product__thumbnail" src="assets/img/products/01-fresh/01_27a.jpg" alt="alt" /></a><a class="ps-product__expand" href="javascript:void(0);"><i class="icon-heart"></i></a><span class="ps-badge ps-product__stock">Out of stock </span>
                                            <div class="ps-product__content">
                                                <p class="ps-product__type"><i class="icon-store"></i>Shannan Yu</p>
                                                <h5><a class="ps-product__name" href="product_details.html">Fresh Organic Milk</a></h5>
                                                <p class="ps-product__unit">100g</p>
                                                <div class="ps-product__rating">
                                                    <select class="rating-stars">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3" selected="selected">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select><span>(6)</span>
                                                </div>
                                                <p class="ps-product-price-block"><span class="ps-product__price-default">Rs5.99</span>
                                                </p>
                                            </div>
                                            <div class="ps-product__footer">
                                                <div class="def-number-input number-input safari_only">
                                                    <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                    <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                                    <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                                </div>
                                                <div class="ps-product__total">Total: <span>Rs5.99</span>
                                                </div>
                                                <button class="ps-product__addcart" ><i class="icon-cart"></i>Add to cart</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-6 col-md-4 col-lg-3 col-xl-2 p-0">
                                    <div class="ps-sell__product">
                                        <div class="ps-product--standard"><a href="product_details.html"><img class="ps-product__thumbnail" src="assets/img/products/01-fresh/01_22a.jpg" alt="alt" /></a><a class="ps-product__expand" href="javascript:void(0);"><i class="icon-heart"></i></a><span class="ps-badge ps-product__new">New </span>
                                            <div class="ps-product__content">
                                                <p class="ps-product__type"><i class="icon-store"></i>Shannan Yu</p>
                                                <h5><a class="ps-product__name" href="product_details.html">Bar S -Classic Bun Length Franks</a></h5>
                                                <p class="ps-product__unit">454g</p>
                                                <div class="ps-product__rating">
                                                    <select class="rating-stars">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select><span>(0)</span>
                                                </div>
                                                <p class="ps-product-price-block"><span class="ps-product__price-default">Rs14.99</span>
                                                </p>
                                            </div>
                                            <div class="ps-product__footer">
                                                <div class="def-number-input number-input safari_only">
                                                    <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                    <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                                    <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                                </div>
                                                <div class="ps-product__total">Total: <span>Rs14.99</span>
                                                </div>
                                                <button class="ps-product__addcart" ><i class="icon-cart"></i>Add to cart</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 col-xl-2 p-0">
                                    <div class="ps-sell__product">
                                        <div class="ps-product--standard"><a href="product_details.html"><img class="ps-product__thumbnail" src="assets/img/products/01-fresh/01_16a.jpg" alt="alt" /></a><a class="ps-product__expand" href="javascript:void(0);"><i class="icon-heart"></i></a><span class="ps-badge ps-product__offbadge">35% Off </span>
                                            <div class="ps-product__content">
                                                <p class="ps-product__type"><i class="icon-store"></i>Karery Store</p>
                                                <h5><a class="ps-product__name" href="product_details.html">Broccoli Crowns</a></h5>
                                                <p class="ps-product__unit">300g</p>
                                                <div class="ps-product__rating">
                                                    <select class="rating-stars">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5" selected="selected">5</option>
                                                    </select><span>(4)</span>
                                                </div>
                                                <p class="ps-product-price-block"><span class="ps-product__sale">Rs3.90</span><span class="ps-product__price">Rs9.99</span>
                                                </p>
                                            </div>
                                            <div class="ps-product__footer">
                                                <div class="def-number-input number-input safari_only">
                                                    <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                    <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                                    <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                                </div>
                                                <div class="ps-product__total">Total: <span>Rs3.90</span>
                                                </div>
                                                <button class="ps-product__addcart" ><i class="icon-cart"></i>Add to cart</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 col-xl-2 p-0">
                                    <div class="ps-sell__product">
                                        <div class="ps-product--standard"><a href="product_details.html"><img class="ps-product__thumbnail" src="assets/img/products/01-fresh/01_27a.jpg" alt="alt" /></a><a class="ps-product__expand" href="javascript:void(0);"><i class="icon-heart"></i></a><span class="ps-badge ps-product__stock">Out of stock </span>
                                            <div class="ps-product__content">
                                                <p class="ps-product__type"><i class="icon-store"></i>Shannan Yu</p>
                                                <h5><a class="ps-product__name" href="product_details.html">Fresh Organic Milk</a></h5>
                                                <p class="ps-product__unit">100g</p>
                                                <div class="ps-product__rating">
                                                    <select class="rating-stars">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3" selected="selected">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select><span>(6)</span>
                                                </div>
                                                <p class="ps-product-price-block"><span class="ps-product__price-default">Rs5.99</span>
                                                </p>
                                            </div>
                                            <div class="ps-product__footer">
                                                <div class="def-number-input number-input safari_only">
                                                    <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                    <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                                    <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                                </div>
                                                <div class="ps-product__total">Total: <span>Rs5.99</span>
                                                </div>
                                                <button class="ps-product__addcart" ><i class="icon-cart"></i>Add to cart</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 col-xl-2 p-0">
                                    <div class="ps-sell__product">
                                        <div class="ps-product--standard"><a href="product_details.html"><img class="ps-product__thumbnail" src="assets/img/products/01-fresh/01_6a.jpg" alt="alt" /></a><a class="ps-product__expand" href="javascript:void(0);"><i class="icon-heart"></i></a><span class="ps-badge ps-product__offbadge">25% Off </span>
                                            <div class="ps-product__content">
                                                <p class="ps-product__type"><i class="icon-store"></i>Shannan Yu</p>
                                                <h5><a class="ps-product__name" href="product_details.html">Honest Organic Still Lemonade</a></h5>
                                                <p class="ps-product__unit">100g</p>
                                                <div class="ps-product__rating">
                                                    <select class="rating-stars">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5" selected="selected">5</option>
                                                    </select><span>(14)</span>
                                                </div>
                                                <p class="ps-product-price-block"><span class="ps-product__sale">Rs6.99</span><span class="ps-product__price">Rs9.90</span>
                                                </p>
                                            </div>
                                            <div class="ps-product__footer">
                                                <div class="def-number-input number-input safari_only">
                                                    <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                    <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                                    <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                                </div>
                                                <div class="ps-product__total">Total: <span>Rs6.99</span>
                                                </div>
                                                <button class="ps-product__addcart" ><i class="icon-cart"></i>Add to cart</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 col-xl-2 p-0">
                                    <div class="ps-sell__product">
                                        <div class="ps-product--standard"><a href="product_details.html"><img class="ps-product__thumbnail" src="assets/img/products/01-fresh/01_27a.jpg" alt="alt" /></a><a class="ps-product__expand" href="javascript:void(0);"><i class="icon-heart"></i></a><span class="ps-badge ps-product__stock">Out of stock </span>
                                            <div class="ps-product__content">
                                                <p class="ps-product__type"><i class="icon-store"></i>Shannan Yu</p>
                                                <h5><a class="ps-product__name" href="product_details.html">Fresh Organic Milk</a></h5>
                                                <p class="ps-product__unit">100g</p>
                                                <div class="ps-product__rating">
                                                    <select class="rating-stars">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3" selected="selected">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select><span>(6)</span>
                                                </div>
                                                <p class="ps-product-price-block"><span class="ps-product__price-default">Rs5.99</span>
                                                </p>
                                            </div>
                                            <div class="ps-product__footer">
                                                <div class="def-number-input number-input safari_only">
                                                    <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                    <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                                    <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                                </div>
                                                <div class="ps-product__total">Total: <span>Rs5.99</span>
                                                </div>
                                                <button class="ps-product__addcart" ><i class="icon-cart"></i>Add to cart</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 col-xl-2 p-0">
                                    <div class="ps-sell__product">
                                        <div class="ps-product--standard"><a href="product_details.html"><img class="ps-product__thumbnail" src="assets/img/products/01-fresh/01_22a.jpg" alt="alt" /></a><a class="ps-product__expand" href="javascript:void(0);"><i class="icon-heart"></i></a><span class="ps-badge ps-product__new">New </span>
                                            <div class="ps-product__content">
                                                <p class="ps-product__type"><i class="icon-store"></i>Shannan Yu</p>
                                                <h5><a class="ps-product__name" href="product_details.html">Bar S -Classic Bun Length Franks</a></h5>
                                                <p class="ps-product__unit">454g</p>
                                                <div class="ps-product__rating">
                                                    <select class="rating-stars">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select><span>(0)</span>
                                                </div>
                                                <p class="ps-product-price-block"><span class="ps-product__price-default">Rs14.99</span>
                                                </p>
                                            </div>
                                            <div class="ps-product__footer">
                                                <div class="def-number-input number-input safari_only">
                                                    <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                    <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                                    <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                                </div>
                                                <div class="ps-product__total">Total: <span>Rs14.99</span>
                                                </div>
                                                <button class="ps-product__addcart" ><i class="icon-cart"></i>Add to cart</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 col-xl-2 p-0">
                                    <div class="ps-sell__product">
                                        <div class="ps-product--standard"><a href="product_details.html"><img class="ps-product__thumbnail" src="assets/img/products/01-fresh/01_16a.jpg" alt="alt" /></a><a class="ps-product__expand" href="javascript:void(0);"><i class="icon-heart"></i></a><span class="ps-badge ps-product__offbadge">35% Off </span>
                                            <div class="ps-product__content">
                                                <p class="ps-product__type"><i class="icon-store"></i>Karery Store</p>
                                                <h5><a class="ps-product__name" href="product_details.html">Broccoli Crowns</a></h5>
                                                <p class="ps-product__unit">300g</p>
                                                <div class="ps-product__rating">
                                                    <select class="rating-stars">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5" selected="selected">5</option>
                                                    </select><span>(4)</span>
                                                </div>
                                                <p class="ps-product-price-block"><span class="ps-product__sale">Rs3.90</span><span class="ps-product__price">Rs9.99</span>
                                                </p>
                                            </div>
                                            <div class="ps-product__footer">
                                                <div class="def-number-input number-input safari_only">
                                                    <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                    <input class="quantity" min="0" name="quantity" value="1" type="number" />
                                                    <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                                </div>
                                                <div class="ps-product__total">Total: <span>Rs3.90</span>
                                                </div>
                                                <button class="ps-product__addcart" ><i class="icon-cart"></i>Add to cart</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flashSale__loading">
                            <p>LOADING...</p>
                        </div>
                    </div>
                </section> --}}

                    {{-- <section class="ps-promotion--default">
                        <div class="container">
                            <div class="row m-0">
                                <div class="col-6 col-lg-3"><a href="shop-view-grid.html"><img src="assets/img/promotion/home-dark-promo-01.jpg" alt="alt"></a></div>
                                <div class="col-6 col-lg-3"><a href="shop-view-grid.html"><img src="assets/img/promotion/home-dark-promo-02.jpg" alt="alt"></a></div>
                                <div class="col-6 col-lg-3"><a href="shop-view-grid.html"><img src="assets/img/promotion/home-dark-promo-03.jpg" alt="alt"></a></div>
                                <div class="col-6 col-lg-3"><a href="shop-view-grid.html"><img src="assets/img/promotion/home-dark-promo-04.jpg" alt="alt"></a></div>
                            </div>
                        </div>
                    </section> --}}



                    <!-- <section class="ps-component ps-component--customer">
                        <div class="container">
                            <div class="component__header">
                                <h3 class="component__title">Our Happy customers</h3>
                            </div>
                            <div class="component__content">
                                <div class="owl-carousel" data-owl-auto="true" data-owl-loop="true" data-owl-speed="10000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="2" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="2" data-owl-item-lg="2" data-owl-item-xl="2" data-owl-duration="1000" data-owl-mousedrag="on">
                                    <div class="ps-customer--block">
                                        <div class="ps-customer__thumbnail"><img src="assets/img/blogs/customer-01.png" alt></div>
                                        <div class="ps-customer__content"><i class="ps-customer__icon icon-quote-open"></i>
                                            <h4 class="ps-customer__name">Bikash Bhandari / <span class="ps-customer__position">MD at Tejobindu Solutions.</span></h4>
                                            <p class="ps-customer__des">???You won't regret it. It's really wonderful. I made back the purchase price in just 48 hours! Your company is truly upstanding and is behind its product 100%.???</p>
                                        </div>
                                    </div>
                                    <div class="ps-customer--block">
                                        <div class="ps-customer__thumbnail"><img src="assets/img/blogs/customer-02.png" alt></div>
                                        <div class="ps-customer__content"><i class="ps-customer__icon icon-quote-open"></i>
                                            <h4 class="ps-customer__name">Sangita Dhital / <span class="ps-customer__position">Housewife</span></h4>
                                            <p class="ps-customer__des">???It's really wonderful. I'd be lost without NauloBazar. I love NauloBazar. I am completely blown away.???</p>
                                        </div>
                                    </div>
                                    <div class="ps-customer--block">
                                        <div class="ps-customer__thumbnail"><img src="assets/img/blogs/post_auth.png" alt></div>
                                        <div class="ps-customer__content"><i class="ps-customer__icon icon-quote-open"></i>
                                            <h4 class="ps-customer__name">Bipin Dhakal / <span class="ps-customer__position">CEO at Tejobindu Solutions.</span></h4>
                                            <p class="ps-customer__des">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section> -->

                    <section class="ps-home--block">
                        <div class="container">
                            <div class="ps-block--promo"><a href="shop-view-grid.html"><img class="desktop-only" src="assets/img/promotion/promo-03.jpg" alt=""></a><a href="shop-view-grid.html"><img class="mobile-only" src="assets/img/promotion/promo-03-mobile.jpg" alt=""></a></div>
                        </div>
                    </section>

                    <section class="ps-component--register">
                        <div class="container">
                            <h3 class="component__title">Get started to Naulo Bazar! Your first delivery is free</h3>
                            <p>Join other shoppers in your area, and try naulobazar.com today.</p><a class="ps-button" href="index.html">Register An Account</a>
                        </div>
                    </section>
                <div class="modal fade" id="popupQuickview" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-xl ps-quickview">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                                <div class="container-fluid quickview-body">
                                    <div class="row">
                                        <div class="col-12 col-lg-5">
                                            <div class="owl-carousel" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-item-xl="1" data-owl-duration="1000" data-owl-mousedrag="on">
                                                <div class="quickview-carousel"><img class="carousel__thumbnail" src="assets/img/products/01-fresh/01_1a.jpg" alt="alt" /></div>
                                                <div class="quickview-carousel"><img class="carousel__thumbnail" src="assets/img/products/01-fresh/01_2a.jpg" alt="alt" /></div>
                                                <div class="quickview-carousel"><img class="carousel__thumbnail" src="assets/img/products/01-fresh/01_4a.jpg" alt="alt" /></div>
                                                <div class="quickview-carousel"><img class="carousel__thumbnail" src="assets/img/products/01-fresh/01_9a.jpg" alt="alt" /></div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-7">
                                            <div class="quickview__product">
                                                <div class="product__header">
                                                    <div class="product__title">Hovis Farmhouse Soft White Bread</div>
                                                    <div class="product__meta">
                                                        <div class="product__rating">
                                                            <select class="rating-stars">
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4" selected="selected">4</option>
                                                                <option value="5">5</option>
                                                            </select><span>4 customer reviews</span>
                                                        </div>
                                                        <div class="product__code"><span>SKU: </span>#VEG20938</div>
                                                    </div>
                                                </div>
                                                <div class="product__content">
                                                    <div class="product__price"><span class="sale">Rs5.49</span><span class="price">Rs6.90</span><span class="off">25% Off</span></div>
                                                    <p class="product__unit">300g</p>
                                                    <div class="alert__success">Availability: <span>34 in stock</span></div>
                                                    <ul>
                                                        <li>Type: Organic</li>
                                                        <li>MFG: Jun 4, 2020</li>
                                                        <li>LIFE: 365 days</li>
                                                    </ul>
                                                </div>
                                                <div class="product__action">
                                                    <label>Quantity: </label>
                                                    <div class="def-number-input number-input safari_only">
                                                        <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                        <input class="quantity" min="0" name="quantity" value="1" type="number">
                                                        <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                                    </div>
                                                    <button class="btn product__addcart"> <i class="icon-cart"></i>Add to cart</button>
                                                    <button class="btn button-icon icon-md"><i class="icon-heart"></i></button>
                                                </div>
                                                <div class="product__footer">
                                                    <div class="ps-social--share"><a class="ps-social__icon facebook" href="#"><i class="fa fa-thumbs-up"></i><span>Like</span><span class="ps-social__number">0</span></a><a class="ps-social__icon facebook" href="#"><i class="fa fa-facebook-square"></i><span>Like</span><span class="ps-social__number">0</span></a><a class="ps-social__icon twitter" href="#"><i class="fa fa-twitter"></i><span>Like</span></a><a class="ps-social__icon" href="#"><i class="fa fa-plus-square"></i><span>Like</span></a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="popupAddToCart" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-xl ps-addcart">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <div class="alert__success"><i class="icon-checkmark-circle"></i> "Morrisons The Best Beef Topside" successfully added to you cart. <a href="shopping-cart.html">View cart(3)</a></div>
                                    <hr>
                                    <h3 class="cart__title">CUSTOMERS WHO BOUGHT THIS ALSO BOUGHT:</h3>
                                    <div class="cart__content">
                                        <div class="owl-carousel" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="0" data-owl-nav="false" data-owl-dots="true" data-owl-item="4" data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="2" data-owl-item-lg="4" data-owl-item-xl="4" data-owl-duration="1000" data-owl-mousedrag="on">
                                            <div class="cart-item">
                                                <div class="ps-product--standard"><a href="product_details.html"><img class="ps-product__thumbnail" src="assets/img/products/07-beer-winespirits/07_10a.jpg" alt="alt" /></a>
                                                    <div class="ps-product__content">
                                                        <p class="ps-product__type"><i class="icon-store"></i>NauloBazarMart</p><a href="product_details.html">
                                                            <h5 class="ps-product__name">Extreme Budweiser Light Can</h5>
                                                        </a>
                                                        <p class="ps-product__unit">500g</p>
                                                        <div class="ps-product__rating">
                                                            <select class="rating-stars">
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4" selected="selected">4</option>
                                                                <option value="5">5</option>
                                                            </select><span>(4)</span>
                                                        </div>
                                                        <p class="ps-product-price-block"><span class="ps-product__sale">Rs8.90</span><span class="ps-product__price">Rs9.90</span><span class="ps-product__off">15% Off</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cart-item">
                                                <div class="ps-product--standard"><a href="product_details.html"><img class="ps-product__thumbnail" src="assets/img/products/01-fresh/01_16a.jpg" alt="alt" /></a>
                                                    <div class="ps-product__content">
                                                        <p class="ps-product__type"><i class="icon-store"></i>Karery Store</p><a href="product_details.html">
                                                            <h5 class="ps-product__name">Honest Organic Still Lemonade</h5>
                                                        </a>
                                                        <p class="ps-product__unit">100g</p>
                                                        <div class="ps-product__rating">
                                                            <select class="rating-stars">
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5" selected="selected">5</option>
                                                            </select><span>(14)</span>
                                                        </div>
                                                        <p class="ps-product-price-block"><span class="ps-product__price-default">Rs1.99</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cart-item">
                                                <div class="ps-product--standard"><a href="product_details.html"><img class="ps-product__thumbnail" src="assets/img/products/07-beer-winespirits/07_10a.jpg" alt="alt" /></a>
                                                    <div class="ps-product__content">
                                                        <p class="ps-product__type"><i class="icon-store"></i>Ganesh Farm</p><a href="product_details.html">
                                                            <h5 class="ps-product__name">Natures Own 100% Wheat</h5>
                                                        </a>
                                                        <p class="ps-product__unit">100g</p>
                                                        <div class="ps-product__rating">
                                                            <select class="rating-stars">
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                            </select><span>(0)</span>
                                                        </div>
                                                        <p class="ps-product-price-block"><span class="ps-product__price-default">Rs4.49</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cart-item">
                                                <div class="ps-product--standard"><a href="product_details.html"><img class="ps-product__thumbnail" src="assets/img/products/01-fresh/01_15a.jpg" alt="alt" /></a>
                                                    <div class="ps-product__content">
                                                        <p class="ps-product__type"><i class="icon-store"></i>Naulo Mart</p><a href="product_details.html">
                                                            <h5 class="ps-product__name">Avocado, Hass Large</h5>
                                                        </a>
                                                        <p class="ps-product__unit">300g</p>
                                                        <div class="ps-product__rating">
                                                            <select class="rating-stars">
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3" selected="selected">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                            </select><span>(6)</span>
                                                        </div>
                                                        <p class="ps-product-price-block"><span class="ps-product__sale">Rs6.99</span><span class="ps-product__price">Rs9.90</span><span class="ps-product__off">25% Off</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cart-item">
                                                <div class="ps-product--standard"><a href="product_details.html"><img class="ps-product__thumbnail" src="assets/img/products/07-beer-winespirits/07_10a.jpg" alt="alt" /></a>
                                                    <div class="ps-product__content">
                                                        <p class="ps-product__type"><i class="icon-store"></i>Sun Farm</p><a href="product_details.html">
                                                            <h5 class="ps-product__name">Kevita Kom Ginger</h5>
                                                        </a>
                                                        <p class="ps-product__unit">200g</p>
                                                        <div class="ps-product__rating">
                                                            <select class="rating-stars">
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4" selected="selected">4</option>
                                                                <option value="5">5</option>
                                                            </select><span>(6)</span>
                                                        </div>
                                                        <p class="ps-product-price-block"><span class="ps-product__sale">Rs4.90</span><span class="ps-product__price">Rs3.99</span><span class="ps-product__off">15% Off</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <footer class="ps-footer">
                <div class="container">
                    <div class="ps-footer--contact">
                        <div class="row">
                            <div class="col-12 col-lg-4">
                                <p class="contact__title">Contact Us</p>
                                <p><b><i class="icon-telephone"> </i>Hotline: </b><span>(7:00 - 21:30)</span></p>
                                <p class="telephone">+977-9810099062<br>+977-9849622959</p>
                                <p> <b>Head office: </b>44600 Ring Road. Chabahil,KTM Nepal.</p>
                                <p> <b>Email us: </b><a href="index.html" class="">NauloBazar.com.np@gmail.com</a></p>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="row">
                                    <div class="col-12 col-lg-6">
                                        <p class="contact__title">Help & Info<span class="footer-toggle"><i class="icon-chevron-down"></i></span></p>
                                        <ul class="footer-list">
                                            <li> <a href="#">About Us</a>
                                            </li>
                                            <li> <a href="#">Contact</a>
                                            </li>
                                            <li> <a href="#">Store Locations</a>
                                            </li>
                                            <li> <a href="#">Terms of Use</a>
                                            </li>
                                            <li> <a href="#">Privacy Policy</a>
                                            </li>
                                            <li> <a href="#">FAQs / Help</a>
                                            </li>
                                        </ul>
                                        <hr>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <p class="contact__title">Corporate<span class="footer-toggle"><i class="icon-chevron-down"></i></span></p>
                                        <ul class="footer-list">
                                            <li> <a href="#">Become a Vendor</a>
                                            </li>
                                            <li> <a href="#">Affiliate Program</a>
                                            </li>
                                            <li> <a href="#">Store Business</a>
                                            </li>
                                            <li> <a href="#">Careers</a>
                                            </li>
                                            <li> <a href="#">Our Suppliers</a>
                                            </li>
                                            <li> <a href="#">Accessibility</a>
                                            </li>
                                        </ul>
                                        <hr>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <p class="contact__title">Newsletter Subscription</p>
                                <p>Join our email subscription now to get updates on <b>promotions </b>and <b>coupons.</b></p>
                                <div class="input-group">
                                    <div class="input-group-prepend"><i class="icon-envelope"></i></div>
                                    <input class="form-control" type="text" placeholder="Enter your email...">
                                    <div class="input-group-append">
                                        <button class="btn">Subscribe</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ps-footer--service">
                        <div class="row">
                            <div class="col-12 col-lg-4">
                                <div class="service__payment">
        							<img src="assets/img/promotion/payment_paypal.jpg" alt>
        							<img src="assets/img/promotion/payment_visa.jpg" alt>
        							<img src="assets/img/promotion/payment_esewa.jpg" alt>
        							<img src="assets/img/promotion/payment_imepay.png" alt>
        						</div>
                                <p class="service__app">Get NauloBazar App to <span class="text-success">get Rs15 coupon</span></p>
                                <div class="service__download"><a href="index.html"><img src="assets/img/promotion/appstore.jpg" alt></a><a href="index.html"><img src="assets/img/promotion/googleplay.jpg" alt></a></div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <table class="table table-bordered">
                                    <tr>
                                        <td><a href="index.html"><img src="assets/img/promotion/badges_01.jpg" alt></a></td>
                                        <td><a href="index.html"><img src="assets/img/promotion/badges_02.jpg" alt></a></td>
                                        <td><a href="index.html"><img src="assets/img/promotion/badges_03.jpg" alt></a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="index.html"><img src="assets/img/promotion/badges_04.jpg" alt></a></td>
                                        <td><a href="index.html"><img src="assets/img/promotion/badges_05.jpg" alt></a></td>
                                        <td><a href="index.html"><img src="assets/img/promotion/badges_06.jpg" alt></a></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="service--block">
                                    <p class="service__item"> <i class="icon-speed-fast"></i><span> <b>Fast Delivery </b>& Shipping</span></p>
                                    <p class="service__item"> <i class="icon-color-sampler"></i><span>Top <b>Offers</b></span></p>
                                    <p class="service__item"> <i class="icon-wallet"></i><span>Money <b>Cashback</b></span></p>
                                    <p class="service__item"> <i class="icon-bubble-user"></i><span>Friendly <b>Support 24/7</b></span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ps-footer--categories">
                        <div class="categories__list"><b>Fresh: </b>
                            <ul class="menu--vertical">
                                <li class="menu-item"> <a href="shop-categories.html">Meat & Poultry</a>
                                </li>
                                <li class="menu-item"> <a href="shop-categories.html">Fruit</a>
                                </li>
                                <li class="menu-item"> <a href="shop-categories.html">Vegetables</a>
                                </li>
                                <li class="menu-item"> <a href="shop-categories.html">Salad & Herbs</a>
                                </li>
                                <li class="menu-item"> <a href="shop-categories.html">Yoghurts</a>
                                </li>
                                <li class="menu-item"> <a href="shop-categories.html">Milk, Butter & Eggs</a>
                                </li>
                                <li class="menu-item"> <a href="shop-categories.html">Ham, Deli & Dips</a>
                                </li>
                                <li class="menu-item"> <a href="shop-categories.html">Cheese</a>
                                </li>
                                <li class="menu-item"> <a href="shop-categories.html">Fish</a>
                                </li>
                                <li class="menu-item"> <a href="shop-categories.html">Pizza & Garlic Bread</a>
                                </li>
                            </ul>
                        </div>
                        <div class="categories__list"><b>Food Cupboard: </b>
                            <ul class="menu--vertical">
                                <li class="menu-item"> <a href="shop-categories.html">Crisps, Snacks & Nuts</a>
                                </li>
                                <li class="menu-item"> <a href="shop-categories.html">Breakfast Cereals</a>
                                </li>
                                <li class="menu-item"> <a href="shop-categories.html">Tins & Cans</a>
                                </li>
                                <li class="menu-item"> <a href="shop-categories.html">Chocolate & Sweets</a>
                                </li>
                                <li class="menu-item"> <a href="shop-categories.html">Biscuits</a>
                                </li>
                                <li class="menu-item"> <a href="shop-categories.html">Rice, Pasta & Pulses</a>
                                </li>
                                <li class="menu-item"> <a href="shop-categories.html">Cooking Ingredients</a>
                                </li>
                            </ul>
                        </div>
                        <div class="categories__list"><b>Bakery: </b>
                            <ul class="menu--vertical">
                                <li class="menu-item"> <a href="shop-categories.html">Bread</a>
                                </li>
                                <li class="menu-item"> <a href="shop-categories.html">Rolls, Bagels & Thins</a>
                                </li>
                                <li class="menu-item"> <a href="shop-categories.html">Cakes & Treats</a>
                                </li>
                                <li class="menu-item"> <a href="shop-categories.html">Wraps, Pitta & Naan Bread</a>
                                </li>
                                <li class="menu-item"> <a href="shop-categories.html">Crumpets, Muffins & Pancakes</a>
                                </li>
                                <li class="menu-item"> <a href="shop-categories.html">Croissants & Brioche</a>
                                </li>
                            </ul>
                        </div>
                        <div class="categories__list"><b>Frozen Foods: </b>
                            <ul class="menu--vertical">
                                <li class="menu-item"> <a href="shop-categories.html">Ice Cream</a>
                                </li>
                                <li class="menu-item"> <a href="shop-categories.html">Fruit, Vegetables & Herbs</a>
                                </li>
                                <li class="menu-item"> <a href="shop-categories.html">Chips, Potatoes & Rice</a>
                                </li>
                                <li class="menu-item"> <a href="shop-categories.html">Fish</a>
                                </li>
                                <li class="menu-item"> <a href="shop-categories.html">Vegetarian</a>
                                </li>
                                <li class="menu-item"> <a href="shop-categories.html">Meat & Poultry</a>
                                </li>
                                <li class="menu-item"> <a href="shop-categories.html">Ready Meals & Party Food</a>
                                </li>
                            </ul>
                        </div>
                        <div class="categories__list"><b>Ready Meals: </b>
                            <ul class="menu--vertical">
                                <li class="menu-item"> <a href="shop-categories.html">Meals for 1</a>
                                </li>
                                <li class="menu-item"> <a href="shop-categories.html">Indian</a>
                                </li>
                                <li class="menu-item"> <a href="shop-categories.html">Italian</a>
                                </li>
                                <li class="menu-item"> <a href="shop-categories.html">Chinese</a>
                                </li>
                                <li class="menu-item"> <a href="shop-categories.html">Traditional British</a>
                                </li>
                                <li class="menu-item"> <a href="shop-categories.html">Thai & Oriental</a>
                                </li>
                                <li class="menu-item"> <a href="shop-categories.html">Mediterranean & Moroccan</a>
                                </li>
                                <li class="menu-item"> <a href="shop-categories.html">Mexican & Caribbean</a>
                                </li>
                                <li class="menu-item"> <a href="shop-categories.html">Kids' Meals</a>
                                </li>
                            </ul>
                        </div>
                        <div class="categories__list"><b>Soft Drinks, Tea & Coffee: </b>
                            <ul class="menu--vertical">
                                <li class="menu-item"> <a href="shop-categories.html">Fizzy Drinks</a>
                                </li>
                                <li class="menu-item"> <a href="shop-categories.html">Water</a>
                                </li>
                                <li class="menu-item"> <a href="shop-categories.html">Tea, Coffee & Hot Drinks</a>
                                </li>
                                <li class="menu-item"> <a href="shop-categories.html">Squash</a>
                                </li>
                                <li class="menu-item"> <a href="shop-categories.html">Juices</a>
                                </li>
                                <li class="menu-item"> <a href="shop-categories.html">Mixers</a>
                                </li>
                                <li class="menu-item"> <a href="shop-categories.html">Diet & No Added Sugar</a>
                                </li>
                                <li class="menu-item"> <a href="shop-categories.html">Still & Sparkling</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row ps-footer__copyright">
                        <div class="col-12 col-lg-6 ps-footer__text">&copy; 2021 Naulo Bazar Marhetplace. All Rights Reversed.</div>
                        <div class="col-12 col-lg-6 ps-footer__social"> <a class="icon_social facebook" href="#"><i class="fa fa-facebook-f"></i></a><a class="icon_social twitter" href="#"><i class="fa fa-twitter"></i></a><a class="icon_social google" href="#"><i class="fa fa-instagram"></i></a><a class="icon_social youtube" href="#"><i class="fa fa-youtube"></i></a><a class="icon_social wifi" href="#"><i class="fa fa-wifi"></i></a></div>
                    </div>
                </div>
            </footer>
            <div class="ps-footer-mobile">
                <div class="menu__content">
                    <ul class="menu--footer">
                        <li class="nav-item"><a class="nav-link" href="index.html"><i class="icon-home3"></i><span>Home</span></a></li>
                        <li class="nav-item"><a class="nav-link footer-category" href="javascript:void(0);"><i class="icon-list"></i><span>Category</span></a></li>
                        <li class="nav-item"><a class="nav-link footer-cart" href="shopping-cart.html"><i class="icon-cart"></i><span class="badge bg-warning">3</span><span>Cart</span></a></li>
                        <li class="nav-item"><a class="nav-link" href="wishlist.html"><i class="icon-heart"></i><span>Wishlist</span></a></li>
                        <li class="nav-item"><a class="nav-link" href="index.html"><i class="icon-user"></i><span>Account</span></a></li>
                    </ul>
                </div>
            </div>
            <button class="btn scroll-top"><i class="icon-chevron-up"></i></button>
            <div class="ps-preloader" id="preloader">
                <div class="ps-preloader-section ps-preloader-left"></div>
                <div class="ps-preloader-section ps-preloader-right"></div>
            </div>
            <div class="ps-category--mobile">
                <div class="category__header">
                    <div class="category__title">All Category</div><span class="category__close"><i class="icon-cross"></i></span>
                </div>
                <div class="category__content">
                    <ul class="menu--mobile">
                        <li class="daily-deals category-item"> <a href="flash-sale.html">Daily Deals</a>
                        </li>
                        <li class="category-item"> <a href="shop-categories.html">Top Promotions</a>
                        </li>
                        <li class="category-item"> <a href="shop-categories.html">New Arrivals</a>
                        </li>
                        <li class="menu-item-has-children category-item"><a href="shop-categories.html">Fresh</a><span class="sub-toggle"><i class="icon-chevron-down"></i></span>
                            <ul class="sub-menu">
                                <li> <a href="index.html">Meat & Poultry</a>
                                </li>
                                <li> <a href="index.html">Fruit</a>
                                </li>
                                <li> <a href="index.html">Vegetables</a>
                                </li>
                                <li> <a href="index.html">Milks, Butter & Eggs</a>
                                </li>
                                <li> <a href="index.html">Fish</a>
                                </li>
                                <li> <a href="index.html">Frozen</a>
                                </li>
                                <li> <a href="index.html">Cheese</a>
                                </li>
                                <li> <a href="index.html">Pasta & Sauce</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children category-item"><a href="shop-categories.html">Food Cupboard</a><span class="sub-toggle"><i class="icon-chevron-down"></i></span>
                            <ul class="sub-menu">
                                <li> <a href="index.html">Crisps, Snacks & Nuts</a>
                                </li>
                                <li> <a href="index.html">Breakfast Cereals</a>
                                </li>
                                <li> <a href="index.html">Tins & Cans</a>
                                </li>
                                <li> <a href="index.html">Chocolate & Sweets</a>
                                </li>
                            </ul>
                        </li>
                        <li class="category-item"> <a href="shop-categories.html">Bakery</a>
                        </li>
                        <li class="category-item"> <a href="shop-categories.html">Frozen Foods</a>
                        </li>
                        <li class="menu-item-has-children category-item"><a href="shop-categories.html">Ready Meals</a><span class="sub-toggle"><i class="icon-chevron-down"></i></span>
                            <ul class="sub-menu">
                                <li> <a href="index.html">Traditional British</a>
                                </li>
                                <li> <a href="index.html">Indian</a>
                                </li>
                                <li> <a href="index.html">Italian</a>
                                </li>
                                <li> <a href="index.html">Chinese</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children category-item"><a href="shop-categories.html">Drinks, Tea &amp; Coffee</a><span class="sub-toggle"><i class="icon-chevron-down"></i></span>
                            <ul class="sub-menu">
                                <li> <a href="index.html">Tea & Coffee</a>
                                </li>
                                <li> <a href="index.html">Hot Drinks</a>
                                </li>
                                <li> <a href="index.html">Fizzy Drinks</a>
                                </li>
                                <li> <a href="index.html">Water</a>
                                </li>
                            </ul>
                        </li>
                        <li class="category-item"> <a href="shop-categories.html">Beer, Wine & Spirits</a>
                        </li>
                        <li class="category-item"> <a href="shop-categories.html">Baby & Child</a>
                        </li>
                        <li class="category-item"> <a href="shop-categories.html">Kitchen & Dining</a>
                        </li>
                    </ul>
                </div>
            </div>
            <nav class="navigation--mobile">
                <div class="navigation__header">
                    <div class="navigation__select">
                        <div class="languages"><a class="nav-top-link" href="javascript:void(0);"> <span class="current-languages">English</span><i class="icon-chevron-down"></i></a>
                            <div class="select--dropdown">
                                <ul class="select-languages">
                                    <li class="active language-item" data-value="English"><a href="javascript:void(0);">English</a></li>
                                    <li class="language-item" data-value="Nepali"><a href="javascript:void(0);">Nepali</a></li>
                                    <li class="language-item" data-value="Hindi"><a href="javascript:void(0);">Hindi</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="navigation-title">
                        <button class="close-navbar-slide"><i class="icon-arrow-left"></i></button>
                        <div><span> <i class="icon-user"></i>Hi, </span><span class="account">Bikash Bhandari</span><a class="dropdown-user" href="#" id="dropdownAccount" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-chevron-down"></i></a>
                            <div class="dropdown-menu" aria-labelledby="dropdownAccount">
        						<a class="dropdown-item" href="user-profile.html"><b>My Account</b></a>
        						<a class="dropdown-item" href="dashboard.html">Dashboard</a>
        						<a class="dropdown-item" href="#">Account Setting</a>
        						<a class="dropdown-item" href="shopping-cart.html">Orders</a>
        						<a class="dropdown-item" href="wishlist.html">Wishlist</a>
        						<a class="dropdown-item" href="#">Shipping Address</a>
        						<a class="dropdown-divider"></a>
        						<a class="dropdown-item" href="index.html">
        						<i class="icon-exit-left"></i>Log out</a>
        					</div>
                        </div>
                    </div>
                </div>
                <div class="navigation__content">
                    <ul class="menu--mobile">
                        <li class="menu-item-has-children"><a href="shop-categories.html">NauloMall</a>
                        </li>
                        <li class="menu-item-has-children"><a href="shop-categories.html">NauloMart</a>
                        </li>
                        <li class="menu-item-has-children"><a href="shop-categories.html">eStore</a>
                        </li>
                        <li class="menu-item-has-children"><a href="flash-sale.html">Flash Sale</a>
                        </li>
                        <li class="menu-item-has-children"> <a href="vendor-list.html">Brand</a>
                        </li>
                        <li class="menu-item-has-children"> <a href="vendor-list.html">oUR Top Venders</a>
                        </li>
                    </ul>
                    <ul class="menu--mobile">
                        <li class="daily-deals"><a>Sell On Naulo Bazar</a></li>
                    </ul>
                </div>
                <div class="navigation__footer">
                    <ul class="menu--icon">
                        <li class="footer-item"><a class="footer-link" href="#"><i class="icon-history2"></i><span>Recent viewed product</span></a></li>
                        <li class="footer-item"><a class="footer-link" href="#"><i class="icon-cube"></i><span>Become a vendor</span></a></li>
                        <li class="footer-item"><a class="footer-link" href="#"><i class="icon-question-circle"></i><span>Help & Contact</span></a></li>
                        <li class="footer-item"><a class="footer-link" href="#"><i class="icon-telephone"></i><span>HOTLINE: <span class='text-success'>(+977) 9810099062 </span> (Free)</span></a></li>
                    </ul>
                </div>
            </nav>

            @endsection
