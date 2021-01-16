@extends(theme('dashboard.layout'))
@section('content')
<section>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 offset-xl-3 text-center">
                    @if(get_option('enable_stripe'))
                    <div class="tab-pane fade show active" id="payment-tab-card">
                        <div class="stripe-credit-card-form-wrap ml-auto mr-auto py-5">
                     
                        <form action="/charge" method="post" id="payment-form">
                        <div class="form-group">
                      
                      
                         
                                    <label for="card-element"> Pay with your Credit or debit card via Stripe</label>
                                    <input type="text" name="course_price" class="form-control" placeholder="Type your amount" id="course_price">
                                    <div id="card-element" class="form-control">
                                        <!-- A Stripe Element will be inserted here. -->
                                        
                                        <!-- adding -->
                                    </div>
                                </div>
                                <div id="card-errors" class="text-danger mb-3" role="alert"></div>
                                <div class="ui_kit_button payment_widget_btn">
                                <button type="submit" class="btn dbxshad btn-lg btn-thm3 circle btn-block" id="stripe-payment-form-btn">
                                    <span class="enroll-course-btn-text mr-4 border-right pr-4">{{__t('enroll_in_course')}}</span>
                                    
                                    <span class="enroll-course-btn-price"></span>
                                </button>
                                </div>
                             <input type="hidden" name="payment_id" value="{{$payment_details->id}}" id="payment_id">
                             <input type="hidden" name="course_id" value="{{$course_id}}" id="course_id">
                             <input type="hidden" name="student_invoice_id" value="{{$invoice_details[0]['id']}}" id="student_invoice_id">
                         
                        </form>
                       
                     
                        </div>
                    </div>
                    @endif
                    </div>
                </div>
            </div>
        </section>
      
                 
@endsection
@section('page-js')

    @include(theme('template-part.gateways.gateway-admin-js'))
@endsection
