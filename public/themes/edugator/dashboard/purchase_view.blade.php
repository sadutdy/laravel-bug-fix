@extends(theme('dashboard.layout'))

@section('content')

    <div class="purchase-ful-view-wrap p-4 bg-white">
    <h4>Purchase History</h4>
             <table class="table table-bordered bg-white">

                <tr>
                    <th>PurchaseID</th>
                    <th>{{__t('price')}}</th>
                    <th>Payment Mode</th>
                    <th>Date</th>
                    <th>Status</th>
                   
                </tr>

                <tr>
                    <td>
                        <small class="text-muted">#{{$payment->id}}</small>
                    </td>
                    <td>
                        <small class="text-muted">{{$payment->amount}}</small>
                    </td>
                    <td>
                        <small class="text-muted">{!!ucwords(str_replace('_', ' ', $payment->payment_method))!!}</small>
                    </td>
                    <td>
                        <small class="text-muted"> {!!$payment->created_at->format(get_option('date_format'))!!}</small>
                    </td>
                    <td>
                        <small class="text-muted">  {!! $payment->status_context !!}</small>
                    </td>
                  

                </tr>
            </table>

            <div class="row">
                <div class="col-md-6">
                <h5>Card Details</h5>
                <table class="table table-striped table-bordered table-sm">

            @php
            $cols = $payment->toArray();
            unset($cols['user_id'])

            @endphp

            @foreach($cols as $col_name => $col_value)
                @if(trim($col_value))
              
                    <tr>
                        <th>  @if($col_name=="terms_accept") {{"Accept Terms and Conditions"}} @else {{ucwords(str_replace('_', ' ', $col_name))}}@endif</th>
                        <td>
                            @if($col_name === 'status')
                                {!! $payment->status_context !!}
                            @elseif($col_name === 'amount' || $col_name === 'fees_amount' || $col_name === 'total_amount' || $col_name === 'fees_total')
                                {!! price_format($col_value) !!}
                            @elseif($col_name === 'created_at' || $col_name === 'updated_at')
                                {!! date(date_time_format(), strtotime($col_value)) !!}
                            @elseif($col_name === 'terms_accept')
                                {{"Yes"}}
                            @else
                                {{$col_value}}
                            @endif
                        </td>
                  
                    </tr>
                    
                 
                  
                @endif
            @endforeach
        </table>
                </div>
                @if($payment->payment_method=="stripe")
                <div class="col-md-6">
                <h5>Billing Details</h5>
                <table class="table table-striped table-bordered table-sm">
                @foreach($billing_details as $billing)
                <tr><td>Name</td><td>{{$billing->name}}</td></tr>
                <tr><td>Contact</td><td>{{$billing->contact}}</td></tr>
                <tr><td>Email</td><td>{{$billing->email}}</td></tr>
                <tr><td>Address</td><td>{{$billing->address}}</td></tr>
                <tr><td>Street</td><td>{{$billing->street}}</td></tr>
                <tr><td>City</td><td>{{$billing->city}}</td></tr>
                <tr><td>Postcode</td><td>{{$billing->postcode}}</td></tr>
                <tr><td>Country</td><td>{{$billing['countrydtls']->name}}</td></tr>
                </tr>
                @endforeach
                </table>
                </div>
                @endif
            </div>


    
    </div>


    <div class="my-4">

        @if($payment->courses->count() > 0)
            <table class="table table-bordered bg-white">

                <tr>
                    <th>{{__t('thumbnail')}}</th>
                    <th>{{__t('title')}}</th>
                    <!-- <th>{{__t('price')}}</th> -->
                    <th>#</th>
                </tr>

                @foreach($payment->courses as $course)
                    <tr>
                        <td>
                            <img src="{{$course->thumbnail_url}}" width="80" />
                        </td>
                        <td>
                            <p class="mb-3">
                                <strong>{{$course->title}}</strong>
                                {!! $course->status_html() !!}
                            </p>

                            <p class="m-0 text-muted">
                                @php
                                    $lectures_count = $course->lectures->count();
                                    $assignments_count = $course->assignments->count();
                                @endphp

                                <span class="course-list-lecture-count">{{$lectures_count}} {{__t('lectures')}}</span>

                                @if($assignments_count)
                                    , <span class="course-list-assignment-count">{{$assignments_count}} {{__t('assignments')}}</span>
                                @endif
                            </p>
                        </td>
                        <!-- <td>{!! $course->price_html() !!}</td> -->

                        <td>
                        <a href="" data-toggle="modal" data-target="#get_course_details" class="btn btn-sm btn-warning mt-2" onclick="getCourseDetails({{$payment->id}},{{$course->id}})"><i class="la la-eye"></i> Details </a>
                            @if($course->status == 1)
                                <a href="{{route('course', $course->slug)}}" class="btn btn-sm btn-primary mt-2" target="_blank"><i class="la la-eye"></i> {{__t('view')}} </a>
                            @else
                                <a href="{{route('course', $course->slug)}}" class="btn btn-sm btn-purple mt-2" target="_blank"><i class="la la-eye"></i> {{__t('preview')}} </a>
                            @endif
                            <a href="/makePayment/{{$payment->id}}/{{$course->id}}" class="btn btn-sm btn-success mt-2" target="_blank" ><i class="la la-eye"></i> Make Payment </a>
                        </td>
                    </tr>

                @endforeach
            </table>
        @else
            <div class="no-data-wrap">
                <h3>No course found.</h3>
            </div>
        @endif



    </div>


    <div class="sb-model">
  <div class="modal fade" id="get_course_details" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
     <div class="row">
     
     <div class="col-md-6">
      <h4 style="margin-left: 50%;margin-top: 30px;">Course Details</h4>
                <table class="table table-striped table-bordered table-sm" style="margin-left: 50%;">
            
                <tr><td>Course</td><td id="m_course_name"></td></tr>
                <tr><td>Awarding Body</td><td id="m_awarding_body"></td></tr>
                <tr><td>Study Mode</td><td id="m_study_mode"></td></tr>
                <tr><td>Payment Mode</td><td id="m_payment_mode"></td></tr>
                <tr><td>Course Fee</td><td id="m_course_fee"></td></tr>
                <tr><td>Registration Fee</td><td id="m_course_rfee"></td></tr>
                <tr><td>Administration fee</td><td id="m_course_afee"></td></tr>
                <tr><td>Discount</td><td id="m_course_discount"></td></tr>
                <tr><td>Vat</td><td id="m_vat"></td></tr>
                <tr><td>Extra Discount</td><td id="m_extra_discount"></td></tr>
                <tr><td>Total Fee</td><td id="m_total_amount"></td></tr>
                <tr><td>Initial Deposit</td><td id="m_initial_deposit"></td></tr>
                <tr><td>Monthly Installment</td><td id="m_monthly_installment"></td></tr>
                <tr><td>months</td><td id="m_months"></td></tr>
                <tr><td>Invoice Number</td><td id="m_invoice_number"></td></tr>
                </tr>
              

                </table>
                </div>
              
                </div>
                <div class="row" style="margin-left: 0%;margin-top: 30px;">
                <div class="col-md-6" id="fortable">
              
              
                </div>
              
                </div>
      </div>
    </div>
  </div>
</div>
@endsection
<script>
function getCourseDetails(payment_id,course_id){
    var data = {
            "payment_id":payment_id,"course_id":course_id
         };
        data = $( this ).serialize() + "&" + $.param( data );
      
            $.ajax({
               type: "GET",
               datatype:"json",
               url:'{{route('getCourseDetails')}}',
               data: data,
             
               success: function ( response ) {
                   //alert(response);
                 var result = JSON.parse(response);
              
                 var aw_body;
                 var payment_type;
                 var payment_mode;
               if(result[0]['courses']['awarding_body'] == "1"){
                aw_body = "CMI";
               }else if(result[0]['courses']['awarding_body'] == "2"){
                aw_body = "Qualify";
               }else if(result[0]['courses']['awarding_body'] == "3"){
                aw_body = "IBT";
                }else if(result[0]['courses']['awarding_body'] == "4"){
                    aw_body = "NCC";
                }else{
                    aw_body = "Other";
                }
                if(result[0]['payment_type']=="online_single"){
                    payment_type = "Online";
                    payment_mode = "Single";
                }else if(result[0]['payment_type']=="online_monthly"){
                    payment_type = "Online";
                    payment_mode = "Monthly";
                }else if(result[0]['payment_type']=="blended_single"){
                    payment_type = "Blended";
                    payment_mode = "Single";
                }else{
                    payment_type = "Blended";
                    payment_mode = "Monthly";
                }
                 $('#m_course_name').html(result[0]['course_name']);
                 $('#m_awarding_body').html(aw_body);
                 $('#m_study_mode').html(payment_type);
                 $('#m_payment_mode').html(payment_mode);
                 $('#m_course_fee').html(result[0]['course_fee']);
                 $('#m_course_rfee').html(result[0]['r_fee']);
                 $('#m_course_afee').html(result[0]['a_fee']);
                 $('#m_course_discount').html(result[0]['discount']);
                 $('#m_vat').html(20);
                 $('#m_extra_discount').html(result[0]['extra_discount']);
                 $('#m_total_amount').html(result[0]['final_cost']);
                 $('#m_initial_deposit').html(result[0]['initial_deposit']);
                 $('#m_monthly_installment').html(result[0]['monthly_installment']);
                 $('#m_invoice_number').html(result[0]['invoice_number']);



                 var eTable="<h4 style='margin-left: 50%;margin-top: 30px;'>Payment Details</h4><table class='table table-striped table-bordered table-md' style='margin-left: 50%;'><thead><tr><th>ID</th><th>Amount</th><th>Due</th><th>Date</th></tr></thead><tbody>"
  for(var i=0; i<result[0]['payment_records'].length;i++)
  {
    eTable += "<tr>";
    eTable += "<td>"+result[0]['payment_records'][i]['id']+"</td>";
    eTable += "<td>"+result[0]['payment_records'][i]['amount_paid']+"</td>";
    eTable += "<td>"+result[0]['payment_records'][i]['due']+"</td>";
    var dt_to = $.datepicker.formatDate('yy-mm-dd', new Date(result[0]['payment_records'][i]['created_at']));
    eTable += "<td>"+dt_to+"</td>";
    eTable += "</tr>";
  }
  eTable +="</tbody></table>";
  $('#fortable').html(eTable);


          }
            });
}

</script>


