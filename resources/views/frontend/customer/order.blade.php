@extends('frontend.layouts.app')

@section('content')
<main class="no-main">
    <div class="ps-breadcrumb">
        <div class="container">
            <ul class="ps-breadcrumb__list">
                <li class="active"><a href="index.html">Home</a></li>
                <li><a href="javascript:void(0);">My Order</a></li>
            </ul>
        </div>
    </div>

    <section class="section--become">

        <h2 class="page__title">My Order</h2>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-3">
                       @include('frontend.inc.customer_side_nav');
                    </div>
                    <div class="col-12 col-lg-9">
                        <div class="product_tbl">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Order ID #</th>
                                        <th scope="col">Product Name</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Manage</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                @forelse($myOrders as $orders)
                                    @foreach($orders->orderDetails as $order)
                                    <tr>
                                        <td>
                                            <div class="order_id">
                                                {{$orders->code}}
                                            </div>
                                        </td>
                                        <td>
                                            <div class="ps-product--vertical"><a href=""><img class="ps-product__thumbnail" src="{{asset($order->product->thumbnail_img)}}" alt="{{$order->product->name}}" /></a>
                                                <div class="ps-product__content">
                                                    <h5><a class="ps-product__name" href="">{{$order->product->name}}</a></h5>
                                                    <p class="ps-product__unit">{{$order->product->unit}}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <small>Shipping Processed</small>
                                        </td>
                                        <td>
                                          <button onclick="show_purchase_history_details({{ $orders->id }})" class="btn btn-sm btn-light">{{__('Order Details')}}</button>

                                        </td>
                                    </tr>
                                    
                                 @endforeach
                                
                                @empty
                                <tr>
                                  <td>No Order Yet</td>
                                </tr>
                                @endforelse
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <div class="clearfix"></div>
                </div>
            </div> 
        <div class="modal fade" id="order_details" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-zoom product-modal" id="modal-size" role="document">
            <div class="modal-content position-relative">
                <div class="c-preloader">
                    <i class="fa fa-spin fa-spinner"></i>
                </div>
                <div id="order-details-modal-body">

                </div>
            </div>
        </div>
    </div>
    </section>
</main>
@endsection