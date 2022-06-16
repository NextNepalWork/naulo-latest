@extends('frontend.layouts.app')

@section('content')

<style>
.countdown .countdown-item {
    margin: 0 3px !important;
}
.countdown .countdown-digit {
    font-size: 13px;
    height: 26px;
    width: 26px;
    line-height: 26px;
}
.countdown .countdown-label {
    font-size: 10px;
    width: 100%;
    padding: 0;
    line-height: 1;
}
.countdown-label,
.countdown-separator {
    display: none;
}

.countdown .countdown-item {
    border-radius: 3px;
    margin-left: 15px !important;
    position: relative;
}
.countdown .countdown-item:not(:last-child):before {
    position: absolute;
    content: ":";
    right: -10px;
    top: 3px;
}
.countdown-digit {
    border-radius: 3px;
}
.countdown-label {
    color: white;
}
.countdown-item {
    background:red;
}
  
@media (min-width: 1200px) {
  .ps-component--flash .ps-product--standard:hover {
    height: 440px !important;
  }
  .flash-div{
  	height: 400px;
  }
}
</style>
<style>
  .demo{
      background: #e84506;
    color: #ffff!important;
    padding: 10px 10px 10px 9px;
    font-weight: 800;
    font-size: 15px;
  }
  img.ps-product__thumbnail {
    min-height: 128px;
    max-height: 128px;
    object-fit: contain;
}
 
</style>
    <main class="no-main ps-home--dark">
        <div class="section-slide--default">
            <div class="owl-carousel" data-owl-auto="false" data-owl-loop="true" data-owl-speed="10000" data-owl-gap="0"
                data-owl-nav="true" data-owl-dots="true" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1"
                data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000" data-owl-mousedrag="on">

                @foreach (\App\Slider::where('published', 1)->get() as $key => $slider)
                    <div class="ps-banner"><img src="{{ asset($slider->photo) }}"
                            data-src="{{ asset($slider->photo) }}" alt="alt" />
                        <div class="ps-content">
                            <div class="container">
                                <div class="ps-content-box">
                                    <div class="ps-node"></div>
                                    <div class="ps-title"> <b class='text-success'></b> </div>
                                    <div class="ps-subtitle">
                                  <br><br><br><br><br><br><br><br>
                                  </div>
                                    <div class="ps-shopnow"> <a href="{{ $slider->link }}">Shop Now<i
                                                class="icon-chevron-right"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- cat --}}
        @include('frontend.partials.home_categories_section')
        <section class="ps-component">
            <div class="container">
                <div class="component__header">
                    <h3 class="component__title">Top Greatest Offers</h3>
                </div>
                <div class="component__content promotion__carousel">
                    <div class="owl-carousel" data-owl-auto="true" data-owl-loop="true" data-owl-speed="7000"
                        data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="4" data-owl-item-xs="1"
                        data-owl-item-sm="1" data-owl-item-md="2" data-owl-item-lg="4" data-owl-duration="1000"
                        data-owl-mousedrag="on">
                       @foreach (\App\Banner::where('position', 1)->where('published', 1)->get() as $key => $banner)
                        <div class="promotion__thumbnail">
                          <a href="{{$banner->url}}">
                            <img src="{{ asset($banner->photo) }}" data-src="{{ asset($banner->photo) }}" alt="{{ env('APP_NAME') }}" alt>
                          </a>
                      </div>
                       @endforeach
                    </div>
                </div>
            </div>
        </section>
{{-- End Flash Sell --}}
	
      
        {{-- Flash Sell --}}
      
      
   @php
      $data_of_time =[];
      $flash_deals = \App\FlashDeal::where([
                                    ['status', 1],
                                    ['featured', 1],
                                    
                                    ['end_date','>=',strtotime(now())],
                        ])->with('flash_deal_products')->get();
      
   @endphp
     
     @if(!($flash_deals->isEmpty()))
      
      <section class="ps-component ps-component--flash">
            <div class="container">
                <div class="component__header">
                  
                    <h3 class="component__title">Today Flash Sale
                   
                    <span class="demo"></span>
                  </h3>
                      
                    <a class="component__view" href="{{route('flashsale.visit')}}">View All <i class="icon-chevron-right"></i></a>
                </div>
            


                <div class="component__content flash-div">

                    <div class="owl-carousel" data-owl-auto="true" data-owl-speed="8000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="false" data-owl-item="4" data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="4" data-owl-duration="1000" data-owl-mousedrag="on">
                       
                    
                     
                      @foreach ($flash_deals as $key => $flash_deal)
                      
                       @php
                           $enddate=$flash_deal->end_date;
                           $data_of_time=date('m/d/Y H:i', $enddate);
                        @endphp  
                      @if(isset($flash_deal->flash_deal_products) && !empty($flash_deal->flash_deal_products))
                        @foreach ($flash_deal->flash_deal_products as $product)
                           @php
                                $flash_deal_product = \App\Product::find($product->product_id);
                                $flash_deal_product_slug  = ($flash_deal_product->slug)?$flash_deal_product->slug:'';
                           @endphp
                      		@php
                              $image = 'shop/logo/naulo.jpg';

                              if($flash_deal_product->thumbnail_img != ''){
                                  $image = $flash_deal_product->thumbnail_img;
                              }else{
                                      if($flash_deal_product->featured_img != ''){
                                          $image = $flash_deal_product->featured_img;
                                      }else{
                                          $image = 'shop/logo/naulo.jpg';
                                      }

                              }
                           @endphp
                      @php
                                $qty = 0;
                                if($flash_deal_product->variant_product){
                                    foreach ($flash_deal_product->stocks as $key => $stock) {
                                        $qty += $stock->qty;
                                    }
                                }
                                else{
                                        $qty = $detailedProduct->current_stock;
                                }
                            @endphp
                            <div class="ps-sell__product">
                                <div class="ps-product--standard">
                                    <a href="{{ route('product', $flash_deal_product_slug) }}">
                                        <img class="ps-product__thumbnail"
                                            src="{{ asset($flash_deal_product->thumbnail_img) }}" alt="alt" /></a>
                                            <a class="ps-product__expand" href="" onclick="addToWishList({{ $flash_deal_product->id }})"><i
                                                class="icon-heart"></i></a>
                                            @if ($flash_deal_product->tags == 'New')
                                                <span class="ps-badge ps-product__new">New
                                                </span>

                                            @elseif($qty==0)
                                                <span class="ps-badge ps-product__stock">Out of stock
                                                </span>

                                            @elseif($flash_deal_product->discount_type=='amount'  &&  $product->discount > 0)
                                                <span class="ps-badge ps-product__offbadge">Rs {{ $flash_deal_product->discount }}
                                                    Off</span>
                                            @elseif($flash_deal_product->discount_type=='percent'  &&  $product->discount > 0)

                                                <span class="ps-badge ps-product__offbadge">{{ $flash_deal_product->discount }}%
                                                    Off</span>
                                            @endif
                                        <!--    <span class="countdown countdown--style-1 countdown--style-1-v1" data-countdown-date="{{ date('m/d/Y', $enddate) }}" data-countdown-label="show">-->
                                            <!--       </span>-->

                                            
                                        <!-- <div class="countdown countdown--style-1 countdown--style-1-v1 " data-countdown-date="{{ date('m/d/Y', $enddate) }}" data-countdown-label="show"></div> -->
                            
                                    <!-- <span class="ps-badge ps-product__offbadge">35% Off </span> -->
                                    <div class="ps-product__content">

                                        <h5><a class="ps-product__name" href="{{ route('product', $flash_deal_product->slug) }}">{{ $flash_deal_product->name }}</a></h5>
                                        <!-- <p class="ps-product__unit">{{ $flash_deal_product->unit }}</p> -->
                                        {{-- <div class="star-rating star-rating-sm mt-1">
                                            {{ renderStarRating($flash_deal_product->rating) }}
                                        </div> --}}
                                        <div class="ps-product__rating">
                                            {{-- {{ renderStarRating($flash_deal_product->rating) }} --}}
                                            <select class="rating-stars">
                                                {{ renderStarRating($flash_deal_product->rating) }}
                                                {{$a= $flash_deal_product->rating}}
                                                @for ($i = 1; $i < $a; $i++)
                                                <option value="{{ $i }}" selected="selected">{{ $i }}</option>

                                                @endfor

                                            </select><span>{{$flash_deal_product->rating}} </span>
                                        </div>

                                        @if ($flash_deal_product->discount)
                                                <p class="ps-product-price-block">
                                                    <span class="ps-product__sale">{{ home_discounted_price($flash_deal_product->id) }}</span>
                                                    <span class="ps-product__price">{{ home_price($flash_deal_product->id) }}</span>
                                                </p>
                                                @else
                                                <p class="ps-product-price-block">
                                                    <span class="ps-product__sale">{{ home_discounted_price($flash_deal_product->id) }}</span>
                                                
                                                </p>
                                                @endif




                                    </div>
                                    <div class="ps-product__footer">

                                        <button class="ps-product__addcart" onclick="showAddToCartModal({{ $flash_deal_product->id }})">
                                        <i class="icon-cart" ></i>Add to cart</button>

                                        <!-- <span class="ps-countdown-end">Ends in : </span><span class="ps-countdown"><b class="demo"></b></span><span class="ps-countdown mobile"><b class="demo"></b></span></span> -->
                                    </div>

                                </div>
                            </div>

                        @endforeach
                        @endif
                          @endforeach
                        
                    </div>

                </div>


            </div>
        </section>
        <script>
         var data=@json($data_of_time);
var countDownDate = new Date(data).getTime();

// Update the count down every 1 second
var x = setInterval(function() {

// Get today's date and time
var now = new Date().getTime();
//   alert(countDownDate);

// Find the distance between now and the count down date
var distance = countDownDate - now;

// Time calculations for days, hours, minutes and seconds
var days = Math.floor(distance / (1000 * 60 * 60 * 24));
var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
var seconds = Math.floor((distance % (1000 * 60)) / 1000);
// console.log(document.getElementsByClassName("demo"));

// Output the result in an element with id="demo"
  $('.demo').text(days + " days : " + hours + " hours : "+ minutes + " minutes : " + seconds + " seconds");
//document.getElementsByClassName("demo").innerHTML = days + "d " + hours + "h "+ minutes + "m " + seconds + "s ";

// If the count down is over, write some text
if (distance < 0) {
clearInterval(x);

  $('.ps-component--flash').css('display','none');
  $('.demo').text("EXPIRED");
//document.getElementsByClassName("demo").innerHTML = "EXPIRED";
}
}, 1000);
    </script>
        @endif
        

{{-- End Flash Sell --}}
        {{-- best seller top vendors --}}
        @include('frontend.partials.best_sellers_section')
        {{-- Top Selling Items --}}
        {{-- @if ($bestSelling->count() > 0) --}}
        @if (\App\BusinessSetting::where('type', 'best_selling')->first()->value == 1)
            <section class="ps-component ps-component--selling">
                <div class="container">
                    <div class="component__header">
                        <h3 class="component__title">Top Best Selling Items</h3>
                        <a class="component__view" href="{{route('topsell')}}">View All <i class="icon-chevron-right"></i></a>
                    </div>
                    <div class="component__content">
                        <div class="owl-carousel" data-owl-auto="true" data-owl-loop="false" data-owl-speed="12000"
                            data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="5" data-owl-item-xs="2"
                            data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="5" data-owl-duration="1000"
                            data-owl-mousedrag="on">
                          
                            @foreach (filter_products(\App\Product::where([ ['published', 1] , ['current_stock', '>', 0]])->orderBy('num_of_sale', 'desc'))->limit(20)->get() as $key => $product)
                                <div class="ps-sell__product">
                                    <div class="ps-product--standard">
                                        <a href="{{ route('product', $product->slug) }}">
                                            <img class="ps-product__thumbnail"
                                                src="{{ asset($product->thumbnail_img) }}" alt="alt" /></a>
                                                <a class="ps-product__expand" href="" onclick="addToWishList({{ $product->id }})"><i
                                                    class="icon-heart"></i></a>
                                        @if ($product->tags == 'New')
                                            <span class="ps-badge ps-product__new">New
                                            </span>

                                        @elseif($product->current_stock==0)
                                            <span class="ps-badge ps-product__stock">Out of stock
                                            </span>

                                        @elseif($product->discount_type=='amount' && $product->discount > 0)
                                            <span class="ps-badge ps-product__offbadge">Rs {{ $product->discount }}
                                                Off</span>
                                        @elseif($product->discount_type=='percent' && $product->discount > 0)

                                            <span class="ps-badge ps-product__offbadge">{{ $product->discount }}%
                                                Off</span>
                                        @endif

                                        <!-- <span class="ps-badge ps-product__offbadge">35% Off </span> -->
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i
                                                    class="icon-store"></i>
                                          
                                          
                                          @if ($product->added_by == 'seller' && \App\BusinessSetting::where('type', 'vendor_system_activation')->first()->value == 1)
                                             <span></span>Sold By:<a href="{{ route('shop.visit', $product->user->shop->slug) }}"><b> {{ $product->user->shop->name }}</b></a>
                                            @else
                                             <a href=""><b>  {{ __('Inhouse product') }}</b></a>
                                            @endif
                                          </p>
                                            <h5><a class="ps-product__name" href="{{ route('product', $product->slug) }}">{{ $product->name }}</a></h5>
                                            <!-- <p class="ps-product__unit">{{ $product->unit }}</p> -->
                                            {{-- <div class="star-rating star-rating-sm mt-1">
                                                {{ renderStarRating($product->rating) }}
                                            </div> --}}
                                            <div class="ps-product__rating">
                                                {{-- {{ renderStarRating($product->rating) }} --}}
                                                <select class="rating-stars">
                                                    {{ renderStarRating($product->rating) }}
                                                    {{$a= $product->rating}}
                                                    @for ($i = 1; $i < $a; $i++)
                                                    <option value="{{ $i }}" selected="selected">{{ $i }}</option>

                                                    @endfor
                                                    <option value="3" selected="selected">3</option>
                                                </select><span>{{$product->rating}} </span>
                                            </div>
                                            
                                             @if ($product->discount)
                                               <p class="ps-product-price-block">
                                                <span class="ps-product__sale">{{ home_discounted_price($product->id) }}</span>
                                                <span class="ps-product__price">{{ home_price($product->id) }}</span>
                                            </p>
                                            @else
                                               <p class="ps-product-price-block">
                                                <span class="ps-product__sale">{{ home_discounted_price($product->id) }}</span>
                                               
                                            </p>
                                             @endif
                                         
                                            
                                            <!--<p class="ps-product-price-block">-->
                                            <!--    <span class="ps-product__sale">Rs.{{ $product->selling_price }}</span>-->
                                            <!--    @if ($product->discount)-->
                                            <!--        <span class="ps-product__price">Rs.{{ $product->unit_price }}</span>-->
                                            <!--    @endif-->
                                            <!--</p>-->

                                        </div>
                                        <div class="ps-product__footer">
                                            
                                            <button class="ps-product__addcart" onclick="showAddToCartModal({{ $product->id }})"><i class="icon-cart" ></i>Add to
                                                cart</button>

                                        </div>

                                    </div>
                                </div>
                            @endforeach

                            


                        </div>
                    </div>
                </div>
            </section>
        @endif
        {{-- End Top Selling --}}

        {{-- Recommendation Section --}}
        @if ($recommended->count() > 0)
            <section class="section-recommendations--default">
                <div class="container">
                    <div class="recommendations__header">
                        <h3 class="recommendations__title">Recommendations</h3>
                    </div>
                    <div class="recommendations__content">
                        <div class="owl-carousel" data-owl-auto="true" data-owl-loop="false" data-owl-speed="15000"
                            data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="5" data-owl-item-xs="2"
                            data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="5" data-owl-duration="1000"
                            data-owl-mousedrag="on">
                            @foreach ($recommended as $product)
                                 <div class="ps-sell__product">
                                    <div class="ps-product--standard">
                                        <a href="{{ route('product', $product->slug) }}">
                                        @php
                                            $image = 'shop/logo/naulo.jpg';

                                            if($product->thumbnail_img != ''){
                                                if(file_exists($product->thumbnail_img)){
                                                    $image = $product->thumbnail_img;
                                                }
                                            }else{
                                                if($product->featured_img != ''){
                                                    if(file_exists($product->featured_img)){
                                                        $image = $product->featured_img;
                                                    }
                                                }
                                            }
                                        @endphp
                                            <img class="ps-product__thumbnail" src="{{ asset($product->thumbnail_img) }}" alt="alt" /></a>
                                                <a class="ps-product__expand" href="" onclick="addToWishList({{ $product->id }})"><i
                                                    class="icon-heart"></i></a>
                                        @if ($product->tags == 'New')
                                            <span class="ps-badge ps-product__new">New
                                            </span>

                                      

                                        @elseif($product->discount_type=='amount' && $product->discount > 0)
                                            <span class="ps-badge ps-product__offbadge">Rs {{ $product->discount }}
                                                Off</span>
                                        @elseif($product->discount_type=='percent' && $product->discount > 0)

                                            <span class="ps-badge ps-product__offbadge">{{ $product->discount }}%
                                                Off</span>
                                        @endif

                                        <!-- <span class="ps-badge ps-product__offbadge">35% Off </span> -->
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i
                                                    class="icon-store"></i>
                                          
                                          
                                          @if ($product->added_by == 'seller' && \App\BusinessSetting::where('type', 'vendor_system_activation')->first()->value == 1)
                                             <span></span>Sold By:<a href="{{ route('shop.visit', $product->user->shop->slug) }}"><b> {{ $product->user->shop->name }}</b></a>
                                            @else
                                             <a href=""><b>  {{ __('Inhouse product') }}</b></a>
                                            @endif
                                          </p>
                                            <h5><a class="ps-product__name" href="{{ route('product', $product->slug) }}">{{ $product->name }}</a></h5>
                                            <!-- <p class="ps-product__unit">{{ $product->unit }}</p> -->
                                            {{-- <div class="star-rating star-rating-sm mt-1">
                                                {{ renderStarRating($product->rating) }}
                                            </div> --}}
                                            <div class="ps-product__rating">
                                                {{-- {{ renderStarRating($product->rating) }} --}}
                                                <select class="rating-stars">
                                                    {{ renderStarRating($product->rating) }}
                                                    {{$a= $product->rating}}
                                                    @for ($i = 1; $i < $a; $i++)
                                                    <option value="{{ $i }}" selected="selected">{{ $i }}</option>

                                                    @endfor
                                                    <option value="3" selected="selected">3</option>
                                                </select><span>{{$product->rating}} </span>
                                            </div>
                                            
                                             @if ($product->discount)
                                               <p class="ps-product-price-block">
                                                <span class="ps-product__sale">{{ home_discounted_price($product->id) }}</span>
                                                <span class="ps-product__price">{{ home_price($product->id) }}</span>
                                            </p>
                                            @else
                                               <p class="ps-product-price-block">
                                                <span class="ps-product__sale">{{ home_discounted_price($product->id) }}</span>
                                               
                                            </p>
                                             @endif
                                         
                                            
                                            <!--<p class="ps-product-price-block">-->
                                            <!--    <span class="ps-product__sale">Rs.{{ $product->selling_price }}</span>-->
                                            <!--    @if ($product->discount)-->
                                            <!--        <span class="ps-product__price">Rs.{{ $product->unit_price }}</span>-->
                                            <!--    @endif-->
                                            <!--</p>-->

                                        </div>
                                        <div class="ps-product__footer">
                                            
                                            <button class="ps-product__addcart" onclick="showAddToCartModal({{ $product->id }})"><i class="icon-cart" ></i>Add to
                                                cart</button>

                                        </div>

                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>
        @endif
        {{-- End Recommendation --}}
        <section class="ps-component ps-component--selling jfu-NauloBazar-sell">
            <div class="container">
                <div class="component__header">
                    <h3 class="component__title">Just For You</h3>
                </div>
                <div class="component__content">
                    <div class="row m-0">


                        @foreach ($allproducts as $product)
                    @php
                            $image = 'shop/logo/naulo.jpg';

                            if($product->thumbnail_img != ''){
                                $image = $product->thumbnail_img;
                            }else{
                                    if($product->featured_img != ''){
                                        $image = $product->featured_img;
                                    }else{
                                        $image = 'shop/logo/naulo.jpg';
                                    }

                            }
                           @endphp

                            <div class="col-6 col-md-4 col-lg-3 col-xl-2 p-0">
                                <div class="ps-sell__product">
                                    <div class="ps-product--standard">
                                        <a href="{{ route('product', $product->slug) }}">
                                            <img class="ps-product__thumbnail"
                                                src="{{ asset($image) }}" alt="alt" /></a>
                                                <a class="ps-product__expand" href="" onclick="addToWishList({{ $product->id }})"><i
                                                    class="icon-heart"></i></a>
                                      
                                           	@php
                                              $qty = 0;
                                              if($product->variant_product){
                                                  foreach ($product->stocks as $key => $stock) {
                                                      $qty += $stock->qty;
                                                  }
                                              }
                                              else{
                                                     $qty = $product->current_stock ;
                                              }
                                             
                                			@endphp
                                       

                                        @if($qty <= 0)
                                  
                                            <span class="ps-badge ps-product__stock">Out of stock
                                            </span>
                                        @else

                                        @if($product->discount_type=='amount'  && $product->discount > 0)
                                            <span class="ps-badge ps-product__offbadge">Rs {{ $product->discount }}
                                                Off</span>
											@elseif($product->discount_type=='percent' && $product->discount > 0)
                                            <span class="ps-badge ps-product__offbadge">{{ $product->discount }}%
                                                Off</span>
                                                @endif
                                        @endif

                                      
                                        <div class="ps-product__content">
                                            <p class="ps-product__type"><i
                                                    class="icon-store"></i>
                                          
                                          
                                          @if ($product->added_by == 'seller' && \App\BusinessSetting::where('type', 'vendor_system_activation')->first()->value == 1)
                                             <span></span>Sold By:<a href="{{ route('shop.visit', $product->user->shop->slug) }}"><b> {{ $product->user->shop->name }}</b></a>
                                            @else
                                             <a href=""><b>  {{ __('Naulo') }}</b></a>
                                            @endif
                                          </p>
                                            <h5><a class="ps-product__name" href="{{ route('product', $product->slug) }}">{{ $product->name }}</a></h5>
                                            <!-- <p class="ps-product__unit">{{ $product->unit }}</p> -->
                                            {{-- <div class="star-rating star-rating-sm mt-1">
                                                {{ renderStarRating($product->rating) }}
                                            </div> --}}
                                            <div class="ps-product__rating">
                                                {{-- {{ renderStarRating($product->rating) }} --}}
                                                <select class="rating-stars">
                                                    {{ renderStarRating($product->rating) }}
                                                    {{$a= $product->rating}}
                                                    @for ($i = 1; $i < $a; $i++)
                                                    <option value="{{ $i }}" selected="selected">{{ $i }}</option>

                                                    @endfor
                                                    <option value="3" selected="selected">3</option>
                                                </select><span>{{$product->rating}} </span>
                                            </div>
                                            
                                             @if ($product->discount)
                                               <p class="ps-product-price-block">
                                                <span class="ps-product__sale">{{ home_discounted_price($product->id) }}</span>
                                                <span class="ps-product__price">{{ home_price($product->id) }}</span>
                                            </p>
                                            @else
                                               <p class="ps-product-price-block">
                                                <span class="ps-product__sale">{{ home_discounted_price($product->id) }}</span>
                                               
                                            </p>
                                             @endif
                                         
                                            
                                            <!--<p class="ps-product-price-block">-->
                                            <!--    <span class="ps-product__sale">Rs.{{ $product->selling_price }}</span>-->
                                            <!--    @if ($product->discount)-->
                                            <!--        <span class="ps-product__price">Rs.{{ $product->unit_price }}</span>-->
                                            <!--    @endif-->
                                            <!--</p>-->

                                        </div>
                                        <div class="ps-product__footer">
                                            
                                            <button class="ps-product__addcart" onclick="showAddToCartModal({{ $product->id }})"><i class="icon-cart" ></i>Add to
                                                cart</button>

                                        </div>

                                    </div>
                                </div>

                            </div>
                        @endforeach




                    </div>
                </div>
              
            </div>
        </section>
      
         
                <section class="ps-promotion--default">
                    <div class="container">
                        <div class="row m-0">
                          @foreach (\App\Banner::where('position', 2)->where('published', 1)->get() as $key => $banner)
                            <div class="col-6 col-lg-3"><a href="{{$banner->url}}">
                              <img src="{{ asset($banner->photo) }}" data-src="{{ asset($banner->photo) }}" alt="{{ env('APP_NAME') }} promo"></a>
                          </div>
                          @endforeach
                             
                        </div>
                    </div>
                </section>

         



        <section class="ps-home--block">
            <div class="container">
                <div class="ps-block--promo"><a href="shop-view-grid.html"><img class="desktop-only"
                            src="" alt=""></a><a href="shop-view-grid.html"><img
                            class="mobile-only" src="" alt=""></a></div>
            </div>
        </section>

        <section class="ps-component--register">
            <div class="container">
                <h3 class="component__title">Get started to Naulo Bazar! Your first delivery is free</h3>
                <p>Join other shoppers in your area, and try naulobazar.com today.</p><a class="ps-button"
                    href="{{url('become-a-vendor')}}">Register An Account</a>
            </div>
        </section>
        <div class="modal fade" id="popupQuickview" data-backdrop="static" data-keyboard="false" tabindex="-1"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl ps-quickview">
                <div class="modal-content">
                    <div class="modal-header">
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid quickview-body">
                            <div class="row">
                                <div class="col-12 col-lg-5">
                                    <div class="owl-carousel" data-owl-auto="true" data-owl-loop="true"
                                        data-owl-speed="5000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true"
                                        data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1"
                                        data-owl-item-lg="1" data-owl-item-xl="1" data-owl-duration="1000"
                                        data-owl-mousedrag="on">
                                        <div class="quickview-carousel"><img class="carousel__thumbnail"
                                                src="" alt="alt" /></div>
                                        <div class="quickview-carousel"><img class="carousel__thumbnail"
                                                src="" alt="alt" /></div>
                                        <div class="quickview-carousel"><img class="carousel__thumbnail"
                                                src="" alt="alt" /></div>
                                        <div class="quickview-carousel"><img class="carousel__thumbnail"
                                                src="" alt="alt" /></div>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
    </main>


@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $.post('{{ route('home.section.featured') }}', {
                _token: '{{ csrf_token() }}'
            }, function(data) {
                $('#section_featured').html(data);
                slickInit();
            });

            $.post('{{ route('home.section.best_selling') }}', {
                _token: '{{ csrf_token() }}'
            }, function(data) {
                $('#section_best_selling').html(data);
                slickInit();
            });

            $.post('{{ route('home.section.home_categories') }}', {
                _token: '{{ csrf_token() }}'
            }, function(data) {
                $('#section_home_categories').html(data);
                slickInit();
            });

            $.post('{{ route('home.section.best_sellers') }}', {
                _token: '{{ csrf_token() }}'
            }, function(data) {
                $('#section_best_sellers').html(data);
                slickInit();
            });
        });
    </script>
@endsection
