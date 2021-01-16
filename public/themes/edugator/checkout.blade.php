@extends('layouts.theme')
<!-- {{$auth_user->address}} -->
@php
    use App\Category;
    use App\Country;
    $categories = Category::whereStep(0)->with('sub_categories')->orderBy('category_name', 'asc')->get();
    $countries = \App\Country::query()->orderBy('name', 'ASC')->get();

@endphp
@section('content')
<section class="inner_page_breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 offset-xl-3 text-center">
                        <div class="breadcrumb_content">
                            <h4 class="breadcrumb_title">Checkout</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('home')}}">{{__t('home')}}</a></li>
                                <li class='breadcrumb-item active'> Checkout</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @if(cart()->count)

    <style>
        .close-btn {
            background-color: #0E53A0;
            padding: 3px 5px;
            margin-left: 10px;
            border-radius: 10px;
            color: #fff;
            font-size: .8rem;
            width: 20px;
            height: 20px;
        }
    </style>

 <!-- Shop Checkouts Content -->
 <section class="shop-checkouts">
            <div class="container">
                <div class="row">
                <div class="col-md-12 col-lg-8 col-xl-8">
                  
                        <div class="order_sidebar_widget mb30">
                            <h4 class="title">Your Order</h4>
                            @php($cart = cart())
                           
                            <ul class="mini-cart-item-checkout">
                                <li class="subtitle">
                                    <p>Product <span class="float-right">Total</span></p>
                                </li>
                                @if($cart->count)
                                @foreach($cart->courses as $cart_course)
                          
                                <li >
                                    <p><span>{{$cart_course['title']}}</span><span class="float-right">{!! price_format(array_get($cart_course, 'price')) !!}<a href="" class="remove-cart-btn" data-cart-id="{{$cart_course['course_id']}}"><i class="fa fa-close close-btn"></i></a></span></p>
                                </li>
                                @endforeach
                               
                                <li class="subtitle">
                                    <p>Subtotal <span class="float-right">Subtotal</span></p>
                                </li>
                                <li class="subtitle">
                                    <p>Total <span class="float-right totals color-orose">{!! price_format($cart->total_amount) !!}</span></p>
                                </li>

                             
                                
                                @endif
                            </ul>
                           
                        </div>
                      
                      
                       
                        <!-- <div class="ui_kit_button payment_widget_btn">
                            <button type="button" class="btn dbxshad btn-lg btn-thm3 circle btn-block">Place Order</button>
                        </div> -->
                    </div>
                <div class="col-lg-4 col-xl-4">
                  
                    <div class="form-group mb-5">
                                <div class="ui_kit_checkbox style2"> 
                                    <div class="bt_details">
                                        <h4>Invoice Address</h4>
                                        
                                        <textarea id="form_message" name="form_message" class="form-control" rows="7" disabled>
                                        {{$auth_user->name}}
                                        {{$auth_user->address}}
                                        {{$auth_user->address_2}}
                                        {{$auth_user->city}}
                                        {{$auth_user->postcode}}
                                        </textarea>
                                    </div>

                                </div>

                    </div>
                     

                </div>
              </div>
          <!-- </div> -->
                <!-- </div> -->
             
                <div class="row">
                <div class="col-md-6 col-lg-8 col-xl-8">
                <div class="order_sidebar_widget mb30">
            
                @include(theme('template-part.gateways.available-gateways'))

             
                </div>
                </div>
                </div>
                </div>
               
            <!-- </div> -->
        </section>

        @else
        <div class="text-center my-5">
            <h2 class="mb-4 mt-5"><i class="la la-frown"></i> {{__t('nothing_to_checkout')}} </h2>
            <a href="{{route('home')}}" class="btn btn-lg btn-warning mb-5"> <i class="la la-home"></i> {{__t('go_to_home')}}</a>
        </div>
    @endif

    
    @endsection
  
    @section('page-js')

@include(theme('template-part.gateways.gateway-js'))
@endsection






