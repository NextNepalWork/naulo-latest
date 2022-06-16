@php
   if(Session::has('locale')){
       $locale = Session::get('locale', Config::get('app.locale'));
   }
   else{
       $locale = 'en';
   }
   $total = 0
@endphp
@php
$generalsetting = \App\GeneralSetting::first();
@endphp
<style>
  .head-nav .nav-box-link {
  	display: block;
    position: relative;
    color: #333;
    padding: 3px 0;
  }
  .head-nav .nav-box-icon{
  	font-size: 25px;
    width: 32px;
    line-height: 32px;
    color: #ffff;
  }
  .head-nav .nav-box-number{
  	position: absolute;
    top: -8px;
    left: 15px;
    min-width: 18px;
    height: 23px;
    line-height: 21px;
    text-align: center;
    border-radius: 4px;
    color: #fff;
    font-size: 12px;
  }
  .view-cart{
  	border-radius: 5px;
    font-size: 14px;
    font-weight: bold;
    display: block;
    background-color: #f7f7f7;
    color: #000!important;
    padding: 10px 20px;
    border: 1px solid #dddddd;
    flex-grow: 1;
    margin-bottom: 10px;
    text-align: center;
  }
  .view-cart:hover{
  	text-decoration:none;
  }
  .subtotal-text{
    font-size: 16px;
    font-weight: bold;
    color: #222;
    text-align: left;
  }
  .subtotal-amount{
  	color: #26901b!important;
    font-size: 18px;
    font-weight: bold;
  }
</style>
 
  <header class="header ps-header--dark">
                <div class="ps-top-bar">
                    <div class="container">
                        <div class="top-bar">
                            <div class="top-bar__left">
                                <ul class="nav-top-dark">
                                    <li class="nav-top-item"> <a href="javascript:void(0);"><i class='icon-map-marker'></i> {{ $generalsetting->address }}</a>
                                    </li>
                                    <li class="nav-top-item"> <a href="javascript:void(0);"><i class='icon-telephone'></i>  <a href="tel:{{ $generalsetting->phone }}">{{ $generalsetting->phone }}</a></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="top-bar__right">
                                <ul class="nav-top">
                                 
                                    <li class="nav-top-item"><a class="nav-top-link" href="{{ route('orders.track') }}">Order Tracking</a></li>
                                    <!--<li class="nav-top-item languages"><a class="nav-top-link" href="javascript:void(0);"> <span class="current-languages">English</span><i class="icon-chevron-down"></i></a>-->
                                        <div class="select--dropdown">


                                            <!--<ul class="select-languages">-->
                                            <!--    @foreach (\App\Language::all() as $key => $language)-->
                                            <!--    <li class="active language-item" @if($locale == $language) active @endif" data-value="{{ $language->code }}"><a href="javascript:void(0);">{{ $language->name }}</a></li>-->

                                            <!--    @endforeach-->
                                            <!--</ul>-->
                                        </div>
                                    </li>
                                    @auth
                                    <li class="nav-top-item account"><a class="nav-top-link" href="javascript:void(0);"> <i class="icon-user"></i>Hi! <span class="font-bold">{{Auth::user()->name}}</span></a>
                                        <div class="account--dropdown">
                                            <div class="account-anchor">
                                                <div class="triangle"></div>
                                            </div>
                                            <div class="account__content">

                                                <ul class="account-list">

                                                    <li class="title-item">My Account
                                                    </li>
                                                    <li> <a href="{{ route('dashboard') }}">
                                                    <i class="icon-menu-circle">&nbsp;</i> Dashboard</a>
                                                    </li>
                                                    <li> <a href="/profile">
                                                    <i class="icon-users2">&nbsp;</i> My Profile</a>
                                                    </li>
                                                    <li> <a href="{{route('purchase_history.index')}}">
                                                        <i class="icon-cart-add">&nbsp;</i> My Orders</a>
                                                    </li>
                                                    <li> <a href="{{ route('wishlists.index') }}">
                                                    <i class="icon-heart">&nbsp;</i> My Wishlist</a>
                                                    </li>
                                                  
                                                    <li> <a href="{{ route('logout') }}">
                                                    <i class="icon-exit-left">&nbsp;</i>Log Out</a>
                                                    </li>
                                                </ul>
                                               
                                            </div>
                                        </div>
                                    </li>
                                    @else
                                    <li class="nav-top-item account"><a class="nav-top-link" href="{{ route('user.login') }}"> <i class="icon-key"></i>Login</a>

                                    </li>
                                    <li class="nav-top-item account"><a class="nav-top-link" href="{{ route('user.registration') }}"> <i class="icon-user"></i>Register</a>

                                    </li>
                                    @endauth









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
                            <div class="header-inner__center"><a class="logo open" href="/">Naulo<span class="text-black"> Bazar</span></a></div>
                            <div class="header-inner__right">
                                <button class="button-icon icon-sm search-mobile"><i class="icon-magnifier"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <section class="ps-header--center header-desktop">
                    <div class="container">
                        <div class="header-inner">
                            <div class="header-inner__left"><a class="logo" href="/">Naulo<b class="text-white"> Bazar</b></a>
                                <button class="category-toggler"><i class="icon-menu"></i></button>
                            </div>
                            <div class="header-inner__center">
                                <form action="{{ route('search') }}" method="GET">
                                <div class="input-group">
                                    {{-- <div class="input-group-prepend">
                                        <div class="header-search-select"><span class="current">All<i class="icon-chevron-down"></i></span>
                                            <ul class="list">
                                                <li class="category-option active" data-value="option"><a href="javascript:void(0);">All</a></li>
                                                @foreach (\App\Category::all() as $key => $category)
                                                <li class="category-option"><a>Fresh</a><span class="sub-toggle"><i class="icon-chevron-down"></i></span>
                                                    <ul>
                                                        <li> <a href="#">Meat & Poultry</a>
                                                        </li>

                                                    </ul>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </div><i class="icon-magnifier search"></i>
                                    </div> --}}
                                    <input class="form-control input-search" aria-label="Search" id="search" name="q" placeholder="I'm searchching for..." autocomplete="off">
                                    <div class="typed-search-box d-none justify-content-center">
                                        <div class="search-preloader">
                                            <div class="loader"><div></div><div></div><div></div></div>
                                        </div>
                                        <div class="search-nothing d-none">

                                        </div>
                                        <div id="search-content">

                                        </div>
                                    </div>
                                    <div class="input-group-append">
                                        <button class="btn" type="submit">Search</button>
                                    </div>
                                </div>
                            </form>
                            </div>
                            <div class="header-inner__right">
                                <a class="button-icon icon-md" href="{{ route('wishlists.index') }}">
                                    <i class="icon-heart text-white"></i>
                                    @if(Auth::check())
                                    <span class="badge bg-warning" id="wishlist">{{ count(Auth::user()->wishlists)}}</span>
                                    @else
                                    <span class="badge bg-warning">0</span>
                                    @endif
                                </a>


                                <div class="d-inline-block head-nav" data-hover="dropdown">
                                    <div class="nav-cart-box dropdown" id="cart_items">
                                        <a href="" class="nav-box-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="icon-cart icon-shop5 d-inline-block nav-box-icon"></i>
                                            <span class="nav-box-text d-none d-xl-inline-block"></span>
                                            @if(Session::has('cart'))
                                                <span class="nav-box-number bg-warning">{{ count(Session::get('cart'))}}</span>
                                            @else
                                                <span class="nav-box-number bg-warning">0</span>
                                            @endif
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-right px-0">
                                            <li>
                                                <div class="dropdown-cart px-0">
                                                    @if(Session::has('cart'))
                                                        @if(count($cart = Session::get('cart')) > 0)
                                                            <div class="dc-header">
                                                                <h3 class="heading heading-6 strong-700">{{__('Cart Items')}}</h3>
                                                            </div>
                                                            <div class="dropdown-cart-items c-scrollbar">
                                                                @php
                                                                    $total = 0;
                                                                @endphp
                                                                @foreach($cart as $key => $cartItem)
                                                                    @php
                                                                        $product = \App\Product::find($cartItem['id']);
                                                                        $total = $total + $cartItem['price']*$cartItem['quantity'];
                                                                    @endphp
                                                                    <div class="dc-item">
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="dc-image">
                                                                                <a href="{{ route('product', $product->slug) }}">
                                                                                    <img src="{{ asset('frontend/images/placeholder.jpg') }}" data-src="{{ asset($product->thumbnail_img) }}" class="img-fluid lazyload" alt="{{ __($product->name) }}">
                                                                                </a>
                                                                            </div>
                                                                            <div class="dc-content">
                                                                                <span class="d-block dc-product-name text-capitalize strong-600 mb-1">
                                                                                    <a href="{{ route('product', $product->slug) }}">
                                                                                        {{ __($product->name) }}
                                                                                    </a>
                                                                                </span>

                                                                                <span class="dc-quantity">x{{ $cartItem['quantity'] }}</span>
                                                                                <span class="dc-price">{{ single_price($cartItem['price']*$cartItem['quantity']) }}</span>
                                                                            </div>
                                                                            <div class="dc-actions">
                                                                                <button onclick="removeFromCart({{ $key }})">
                                                                                    <i class="la la-close"></i>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                @endforeach
                                                            </div>
                                                            <div class="dc-item py-3">
                                                                <span class="subtotal-text">{{__('Subtotal')}}</span>
                                                                <span class="subtotal-amount">{{ single_price($total) }}</span>
                                                            </div>
                                                            <div class="py-2 text-center dc-btn">
                                                                <ul class="inline-links inline-links--style-3">
                                                                    <li class="px-1">
                                                                        <a href="{{ route('cart') }}" class="link link--style-1 text-capitalize btn btn-base-1 px-3 py-1 view-cart">
                                                                            {{__('View cart')}}
                                                                        </a>
                                                                    </li>
                                                                    @if (Auth::check())
                                                                    <li class="px-1">
                                                                        <a href="{{ route('checkout.shipping_info') }}" class="link link--style-1 text-capitalize btn btn-base-1 px-3 py-1 light-text">
                                                                            <i class="la la-mail-forward"></i> {{__('Checkout')}}
                                                                        </a>
                                                                    </li>
                                                                    @endif
                                                                </ul>
                                                            </div>
                                                        @else
                                                            <div class="dc-header">
                                                                <h3 class="heading heading-6 strong-700">{{__('Your Cart is empty')}}</h3>
                                                            </div>
                                                        @endif
                                                    @else
                                                        <div class="dc-header">
                                                            <h3 class="heading heading-6 strong-700">{{__('Your Cart is empty')}}</h3>
                                                        </div>
                                                    @endif
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="ps-top__total ">Shopping Cart<b><span class="cart-total text-white">Rs. {{$total}}</span> </b></div>
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
                                      
                                        @foreach (\App\Category::all()->take(11) as $key => $category)
                                        @php
                                            $brands = array();
                                        @endphp
                                        <li class="menu-item-has-children category-item"><a href="{{ route('products.category', $category->slug) }}">{{ __($category->name) }}</a><span class="sub-toggle"><i class="icon-chevron-down"></i></span>

                                            <ul class="sub-menu">
                                                @foreach ($category->subCategories as $subcat )
                                                <li>
                                               <a href="{{route('products.category',$subcat->slug)}}"> {{$subcat->name}}</a>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        @endforeach
                                 
                             
                                
                                    </ul>
                                </div>
                            </li>
                        </ul>
                        <ul class="menu">
                            <li class="menu-item-has-children has-mega-menu active"><a class="nav-link active" href="{{url('brands')}}">NauloMall</a>
                            </li>
                            <li class="menu-item-has-children has-mega-menu"><a class="nav-link" href="categories">NauloMart</a>
                            </li>
                            <li class="menu-item-has-children has-mega-menu"><a class="nav-link" href="{{url('naulobazar')}}">Naulo Bazar</a>
                            </li>
                            <li class="menu-item-has-children has-mega-menu"> <a class="nav-link" href="{{route('flashsale.visit')}}">Flash Sale</a>
                            </li>
                            <li class="menu-item-has-children has-mega-menu menu-item-branch"><a class="nav-link" href="categories">Our Top Venders</a>
                                <span class="sub-toggle"><i class="icon-chevron-down"></i></span>
                                <div class="mega-menu mega-brand">
                                    <div class="mega-anchor"></div>
                                    <div class="brand-box">
                                        <div class="brand__title">FEATURED VENDORS</div>
                                        <div class="row">
                                          @php
                                          	use App\User;
                                            $top_vendors = User::with('shop','seller')->where('user_type','seller')->take(9)->get();
                                          @endphp
                                        
                                          @foreach($top_vendors as $tvendors)
                                           @if($tvendors->seller->verification_status == 1)
                                              <div class="col-4">
                                                <a href="{{ route('shop.visit', $tvendors->shop->slug) }}">

                                            @if ($tvendors->shop->logo)
                                                @if (file_exists($tvendors->shop->logo))
                                                    <img src="{{asset($tvendors->shop->logo)}}" alt="{{ $tvendors->shop->name }}" />
                                                @else
                                                    <img src="{{asset('shop/logo/naulo.jpg')}}" alt="{{ $tvendors->shop->name }}" />
                                                @endif         
                                            @else       
                                                    <img src="{{asset('shop/logo/naulo.jpg')}}" alt="{{ $tvendors->shop->name }}" />
                                                  
                                            @endif
                                                 
                                                </a>
                                            </div>

                                            @endif
                                          @endforeach
                                        </div><a class="brand__link" href="{{route('seller')}}">See all Vendors<i class="icon-chevron-right"></i></a>
                                    </div>
                                    <div class="brand__promotion"><a href=""><img src="{{asset('assets/img/brand/brand_01.jpg')}}" alt="alt" /></a></div>
                                    <div class="brand__promotion"><a href=""><img src="{{asset('assets/img/brand/brand_02.jpg')}}" alt="alt" /></a></div>
                                </div>
                            </li>
                        </ul>
                        <div class="navigation-text">
                            <ul class="menu">
                                <li class="menu-item-has-children has-mega-menu"><a class="nav-link" href="{{ route('becomea.vendor')  }}">Become A Vendor</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <div class="mobile-search--slidebar">
                    <div class="mobile-search--content">
                        <div class="mobile-search__header">
                            <div class="mobile-search-box">
                                  <form action="{{ route('search') }}" method="GET" style="width: 100%;">
                                    <div class="input-group">

                                        <input class="form-control input-search" aria-label="Search" id="search" name="q" placeholder="I'm searchching for..." autocomplete="off">
                                        <div class="typed-search-box d-none justify-content-center">
                                            <div class="search-preloader">
                                                <div class="loader"><div></div><div></div><div></div></div>
                                            </div>
                                            <div class="search-nothing d-none">

                                            </div>
                                            <div id="search-content">

                                            </div>
                                        </div>
                                        <div class="input-group-append">
                                            <button class="btn" type="submit" style="background-color: #ff7200;">Search</button>
                                        </div>
                                    </div>
                                </form>
                                <!-- <div class="input-group">
                                    <input class="form-control" placeholder="I'm shopping for..." id="inputSearchMobile">
                                    <div class="input-group-append">
                                        <button class="btn"> <i class="icon-magnifier"></i></button>
                                    </div>
                                </div> -->
                                <button class="cancel-search"><i class="icon-cross"></i></button>
                            </div>
                          </div>
                    </div>
                </div>
            </header>
