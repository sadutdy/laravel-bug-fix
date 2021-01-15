@php($hasGateways = get_option('enable_stripe') || get_option('enable_paypal') || get_option('bank_gateway.enable_bank_transfer') || get_option('enable_offline_payment'))

@if($hasGateways)
    <div class="section-payment-methods-wrap">
        <h4  style="margin-left:20px;">{{__t('payment_information')}}</h4>

        <p class="text-muted"   style="margin-left:20px;"> <i class="la la-lock"></i> {{__t('payment_secure_text')}}</p>

        <div class="checkout-section checkout-payment-methods-wrap bg-white p-4 mt-3">

            <ul class="nav bg-light nav-pills mb-3" role="tablist">

                <?php do_action('checkout_available_gateways_nav_before', $cart); ?>


                @if(get_option('enable_stripe'))
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="pill" href="#payment-tab-card">
                            <i class="la la-credit-card"></i> Stripe
                        </a>
                    </li>
                @endif

                <!-- @if(get_option('enable_paypal'))
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#payment-tab-paypal">
                            <i class="la la-paypal"></i> PayPal
                        </a>
                    </li>
                @endif -->

                @if(get_option('bank_gateway.enable_bank_transfer'))
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#payment-tab-bank">
                            <!-- <i class="la la-university"></i>  -->
                             Bank Transfer
                        </a>
                    </li>
                @endif


                @if(get_option('enable_offline_payment'))
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#payment-tab-offline">
                            <i class="la la-wallet"></i>Pay Later
                        </a>
                    </li>
                @endif

                <?php do_action('checkout_available_gateways_nav_after', $cart); ?>

            </ul>



            <div class="tab-content">

                <?php do_action('checkout_available_gateways_tab_content_before', $cart); ?>

                @if(get_option('enable_stripe'))
                    <div class="tab-pane fade show active" id="payment-tab-card">
                        <div class="stripe-credit-card-form-wrap ml-auto mr-auto py-4">
                            <form action="/charge" method="post" id="payment-form">
                            <?php if(isset($response)){ ?>
                            <p> <span style="color:red;">{{$response}}</span></p>
                            <?php } ?>
                            <h4 class="mb15">Billing Details</h4>
                            <div class="ui_kit_checkbox style2">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="stripecustomCheck00">
                                                <label class="custom-control-label" for="stripecustomCheck00">Click when the billing address is the same as your address</label>
                                            </div>
                                          
                                        </div>
                            <div class="row">
                            <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="exampleInputName">First name </label>
                                                <input id="stripe_name" name="stripe_name" class="form-control" required="required" type="text">
                                            </div>
                                        </div>
                                      
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="exampleInputName3">Email Adress</label>
                                                <input id="stripe_email" name="stripe_email" class="form-control" required="required" type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="exampleInputName3">Mobile</label>
                                                <input id="stripe_contact" name="stripe_contact" class="form-control" required="required" type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="exampleInputName3">Address</label>
                                                <input id="stripe_address" name="stripe_address" class="form-control" required="required" type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="exampleInputName3">Street</label>
                                                <input id="stripe_street" name="stripe_street" class="form-control" required="required" type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="exampleInputName3">City</label>
                                                <input id="stripe_city" name="stripe_city" class="form-control" required="required" type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="exampleInputName3">Postcode</label>
                                                <input id="stripe_postcode" name="stripe_postcode" class="form-control" required="required" type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                            
                                            <select class="form-control" name="stripe_country" id="stripe_country" required>
                                            <option value="">Choose a Country</option>
                                            @foreach($countries as $country)
                                            <option value="{{$country->id}}">{{$country->name}}</option>
                                    
                                            @endforeach
                                        </select> </div>
                                        </div>
                            </div>
                           
                         
                            <div class="m-top-50">
                            <h4 style="margin-bottom:10px;font-size:16px ">SUPPORT REQUIREMENTS </h4>
                            <p>* Please complete this section if you have any disability, medical condition or specific learning diffculty.</p>
                            </div>
                         
                            <div class="form-group">
                            <div class="radio">
                                <p>
                                <input type="radio" name="optionsRadios1" id="disability" value="Yes">
                                <label for="disability">Yes </label>
                                </p>
                            </div>
                            <div class="radio">
                                <p>
                                <input type="radio" name="optionsRadios1" id="disability1"  value="No" checked>
                                <label for="disability1">No </label>
                                </p>
                            </div>
                            </div>
                                <div class="form-group">
                                    <label for="card-element"> Pay with your Credit or debit card via Stripe</label>
                                    <div id="card-element" class="form-control">
                                        <!-- A Stripe Element will be inserted here. -->
                                        
                                        <!-- adding -->
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h4 style="margin-bottom:10px;font-size:16px ">TERMS & CONDITIONS</h4>
                                    <input type="radio" name="optionsRadios" id="terms"  value="option2" required>
                                    <label for="terms" style="color: black;line-height: 20px;"><span style="color:red">*</span><span id="msg">Please tick this box to confirm that you have read and agreed to the <a href="/terms-and-conditions" target="new">Terms and Conditions</a>.</label>
                                    <!-- <label for="exampleInputEmail1"><span>*<span id="msg"></span></span></label> -->
                                </div>
                                <!-- Used to display form errors. -->
                                <div id="card-errors" class="text-danger mb-3" role="alert"></div>
                                <div class="ui_kit_button payment_widget_btn">
                                <button type="submit" class="btn dbxshad btn-lg btn-thm3 circle btn-block" id="stripe-payment-form-btn">
                                    <span class="enroll-course-btn-text mr-4 border-right pr-4">{{__t('enroll_in_course')}}</span>
                                    
                                    <span class="enroll-course-btn-price">{!! price_format($cart->total_amount) !!}</span>
                                </button>
                                </div>
                            </form>
                        </div>
                    </div> <!-- tab-pane.// -->
                @endif

                @if(get_option('enable_paypal'))
                    <div class="tab-pane fade" id="payment-tab-paypal">

                        <div class="paypal-payment-form-wrap py-5 text-center">

                            <form action="{{route('paypal_redirect')}}" method="post">
                                @csrf
                                <p>
                                    <button type="submit" class="btn btn-purple btn-lg" id="paypal-payment-form-btn">
                                        <span class="enroll-course-btn-text mr-4 border-right pr-4">
                                            <i class="la la-paypal"></i> Pay with PayPal
                                        </span>
                                        <span class="enroll-course-btn-price">
                                            {!! price_format($cart->total_amount) !!}
                                        </span>
                                    </button>
                                </p>
                            </form>

                        </div>

                    </div>
                @endif

                @if(get_option('bank_gateway.enable_bank_transfer'))
                    <div class="tab-pane fade" id="payment-tab-bank">
                        @include(theme('template-part.gateways.bank-transfer'))
                    </div> <!-- tab-pane.// -->
                @endif

                @if(get_option('enable_offline_payment'))

                    <div class="tab-pane fade" id="payment-tab-offline">
                        <div class="offline-payment-form-wrap pt-2 pb-5">

                            <form action="{{route('pay_offline')}}" method="post">
                                @csrf

                                <div class="form-group">

                                    <label>Write about your payment method </label>

                                    <textarea class="form-control" name="payment_note"></textarea>
                                    <p class="text-muted">
                                        <small>
                                            Write your payment method in details, elobrate as much as you can. We will verify payment and you will get course access after payment verification.
                                        </small>
                                      
                                    </p>

                                </div>
                     
            <div class="m-top-50">
              <h4 style="margin-bottom:10px;font-size:16px ">SUPPORT REQUIREMENTS </h4>
              <p>* Please complete this section if you have any disability, medical condition or specific learning diffculty.</p>
            </div>
            <div class="form-group">
              <div class="radio">
                <p>
                  <input type="radio" name="optionsRadios1" id="disability" value="Yes">
                  <label for="disability">Yes </label>
                </p>
              </div>
              <div class="radio">
                <p>
                  <input type="radio" name="optionsRadios1" id="disability1"  value="No" checked>
                  <label for="disability1">No </label>
                </p>
              </div>
            </div>
            <div class="form-group">
              <h4 style="margin-bottom:10px;font-size:16px ">TERMS & CONDITIONS</h4>
              <input type="radio" name="optionsRadios" id="terms"  value="option2" required>
              <label for="terms" style="color: black;line-height: 20px;">Please tick this box to confirm that you have read and agreed to the <a href="/terms-and-conditions" target="new">Terms and Conditions</a>.</label>
              <label for="exampleInputEmail1"><span>*<span id="msg"></span></span></label>
            </div>
          </div>


                                <p>
                                  

                                <div class="ui_kit_button payment_widget_btn">
                                    <button type="submit" class="btn dbxshad btn-lg btn-thm3 circle btn-block" id="stripe-payment-form-btn">
                                    <span class="enroll-course-btn-text mr-4 border-right pr-4">
                                            <i class="la la-wallet"></i> Pay Later
                                        </span>
                                        <span class="enroll-course-btn-price">
                                            {!! price_format($cart->total_amount) !!}
                                        </span>
                                    </button>
                                </div>


                                </p>
                                <input type="hidden"  name="check" id="check">
                            </form>

                        </div>

                    </div>
                @endif

                <?php do_action('checkout_available_gateways_tab_content_after', $cart); ?>


            </div> <!-- tab-content .// -->

        </div>
    </div>

@else
    <div class="alert alert-warning">
        <i class="la la-exclamation-circle"></i> There is no payment gateway available to complete purchase.
    </div>
@endif
