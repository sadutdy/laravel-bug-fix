
@php
    use App\Country;
    $countries = \App\Country::query()->orderBy('name', 'ASC')->get();

@endphp
@extends('layouts.admin')

<style>
.shortcode_widget_tab{
    margin-top:20px;
}
.nav-item{
    color:white;
    margin-top:20px;
}
.nav-link{
    color:white;
}
</style>

@section('content')

@foreach($users as $user)


<div class="row">
<div class="col-md-12" >
<div class="shortcode_widget_tab" >
                                            <!-- <h4>Tabs</h4> -->
                                            <div class="ui_kit_tab mt30">
                                                <ul class="nav nav-tabs" id="myTab" role="tablist" style="background-color:#0e53a0">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">Overview</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link " id="content-tab" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">Purchase History</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="services-tab" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">Enrolled Courses</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="file-tab" data-toggle="tab" href="#tab-4" role="tab" aria-controls="tab-4" aria-selected="false">Documents</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="invoices-tab" data-toggle="tab" href="#tab-5" role="tab" aria-controls="tab-5" aria-selected="false">Invoices</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="notes-tab" data-toggle="tab" href="#tab-6" role="tab" aria-controls="tab-6" aria-selected="false">Notes</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="registration-tab" data-toggle="tab" href="#tab-7" role="tab" aria-controls="tab-7" aria-selected="false">Registration Letter</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="offer-tab" data-toggle="tab" href="#tab-8" role="tab" aria-controls="tab-8" aria-selected="false">Offer Letter</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="record-tab" data-toggle="tab" href="#tab-9" role="tab" aria-controls="tab-9" aria-selected="false">Payment Record</a>
                                                    </li>
                                                  
                                                </ul>

                                                <div class="tab-content" id="myTabContent">
                                                <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="home-tab" style="padding: 0;">
                                                 <br>
                                                 <div class="row">
                                                 <div class="col-md-6" >
                                                    <h4>User Details <a href="" data-toggle="modal" data-target="#edit_personal_details"><i class="la la-pencil"></i></a></h4>
                                                   
                                                    <table class="table table-bordered">
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row">First Name</th>
                                                                <td>{{$user->name}}</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Email</th>
                                                                <td>{{$user->email}}</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">DOB</th>
                                                                <td>{{$user->date_of_birth}}</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Gender</th>
                                                                <td>{{$user->gender}}</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Address</th>
                                                                <td>{{$user->address}}</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Street</th>
                                                                <td>{{$user->address_2}}</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">City</th>
                                                                <td>{{$user->city}}</td>
                                                            </tr>
                                                        
                                                            <tr>
                                                                <th scope="row">Country</th>
                                                                <td colspan="2">{{$user['country']->name}}</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Zip Code</th>
                                                                <td colspan="2">{{$user->zip_code}}</td>
                                                            </tr>
                                                        
                                                            <tr>
                                                                <th scope="row">Phone</th>
                                                                <td colspan="2">{{$user->phone}}</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Do you have a disability,medical condition or specific learning difficulty?</th>
                                                                <td colspan="2">NO</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    </div>
                                                    <div class="col-md-6">
                                                      <h4>Change Password</h4>
                                                    <form method="get" action="{{route('edit_password',$user->id)}}">
                                                    <div class="row">
                                                      <input type="hidden" class="form-control"  name="user_id" value="{{$user->id}}" required>
                                                        <div class="col-md-6">
                                                          <div class="form-group">
                                                            <label for="fname">Password <span>*</span></label>
                                                            <input type="text" class="form-control"  name="password" required>
                                                          </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                  
                                                        <div class="col-md-6">
                                                          <div class="form-group">
                                                            <label for="fname">Confirm Password<span>*</span></label>
                                                            <input type="text" class="form-control"  name="password_confirmation" required>
                                                          </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                          <div class="col-md-6">
                                                            <div class="form-group">
                                                            <input type="submit" class="btn btn-danger" name="passwordSubmit" value="Change Password"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </form>

                                                  </div>

                                                  </div>
                                                </div>
                                                <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="content-tab" style="padding: 0;">
                                                    <br>
                                                    <h4>Purchase History</h4>
                                                            @if(count($users[0]['purchases']))
                                                            <table class="table table-bordered bg-white">

                                                            <tr>
                                                                <th>PurchaseID</th>
                                                                <th>{{__t('price')}}</th>
                                                                <th>Payment Mode</th>
                                                                <th>Date</th>
                                                                <th>Status</th>
                                                                <th>#</th>
                                                            </tr>
                                                            <?php //print_R($users[0]['purchases']);die;?>
                                                                    @foreach($users[0]['purchases'] as $purchase)

                                                                    <tr>
                                                                                <td>
                                                                                    <small class="text-muted">#{{$purchase->id}}</small>
                                                                                </td>
                                                                                <td>
                                                                                    {!!price_format($purchase->amount)!!}
                                                                                </td>
                                                                                <td>{!!ucwords(str_replace('_', ' ', $purchase->payment_method))!!}</td>

                                                                                <td>
                                                                                    <small>
                                                                                        {!!$purchase->created_at->format(get_option('date_format'))!!} <br />
                                                                                        {!!$purchase->created_at->format(get_option('time_format'))!!}
                                                                                    </small>
                                                                                </td>

                                                                                <td>
                                                                                    {!! $purchase->status_context !!}
                                                                                </td>
                                                                                <td>
                                                                                    @if($purchase->status == 'success')
                                                                                        <span class="text-success" data-toggle="tooltip" title="{!!$purchase->status!!}"><i class="fa fa-check-circle-o"></i> </span>
                                                                                    @else
                                                                                        <span class="text-warning" data-toggle="tooltip" title="{!!$purchase->status!!}"><i class="fa fa-exclamation-circle"></i> </span>
                                                                                    @endif

                                                                                    <a href="{!!route('purchase_view', $purchase->id)!!}" class="btn btn-info" target="_blank"><i class="la la-eye"></i> </a>
                                                                                    <!-- @if($purchase->status == 'success')
                                                                                    <a href="{!!route('invoice_view', $purchase->id)!!}" class="btn btn-info" target="_blank"><i class="la la-eye"></i> </a>
                                                                                    @endif -->
                                                                                </td>

                                                                            </tr>
                                                                        @endforeach
                                                            </table>
                                                            @else
                                                        {!! no_data(null, null, 'my-5' ) !!}
                                                    @endif    
                                                </div>
                                                <div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="services-tab" style="padding: 0;">
                                                    <br>
                                                    <h4>Enrolled Courses</h4>
                                                    @if(count($users[0]['enrolls']))
                                                        <table class="table table-bordered bg-white">

                                                            <tr>
                                                                <th>{{__t('thumbnail')}}</th>
                                                                <th>{{__t('title')}}</th>
                                                                <!-- <th>{{__t('price')}}</th> -->
                                                                <th>#</th>
                                                            </tr>

                                                            @foreach($users[0]['enrolls'] as $course)
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
                                                                            $quizzes_count = $course->quizzes->count();
                                                                            @endphp

                                                                            <span class="course-list-lecture-count">{{$lectures_count}} {{__t('lectures')}}</span>

                                                                            @if($assignments_count)
                                                                                , <span class="course-list-assignment-count">{{$assignments_count}} {{__t('assignments')}}</span>
                                                                            @endif

                                                                            @if($quizzes_count)
                                                                                , <span class="course-list-assignment-count">{{$quizzes_count}} {{__t('quizzes')}}</span>
                                                                            @endif

                                                                        </p>
                                                                    </td>
                                                                    <!-- <td>{!! $course->price_html() !!}</td> -->

                                                                    <td>
                                                                        @if($course->status == 1)
                                                                            <a href="{{route('course', $course->slug)}}" class="btn btn-sm btn-primary mt-2" target="_blank"><i class="la la-eye"></i> {{__t('view')}} </a>
                                                                        @endif
                                                                    </td>
                                                                </tr>

                                                            @endforeach

                                                        </table>
                                                    @else
                                                        {!! no_data(null, null, 'my-5' ) !!}
                                                    @endif    
                                                </div>
                                                <div class="tab-pane fade" id="tab-4" role="tabpanel" aria-labelledby="file-tab" style="padding: 0;">
                                                  <br>
                                                  <div class="row">
                                                  <div class="col-md-6">
                                                    <form method="post" enctype="multipart/form-data" action="{{route('uploadFile')}}">
                                                    {{ csrf_field() }}
                                                    <input type="hidden" name="user_id" value="{{$user->id}}">
                                                 
                                                    <input type="file"  name="image"  />
                                                   
                                                    <select name="type_of_document" >
                                                    <option value="ID">ID Card</option>
                                                    <option value="passport">Passport</option>
                                                    </select>
                                                   
                                                    <input type="submit"  name="upload" value="upload" class="btn btn-sm btn-primary ml-2">
                                                    </form>
                                                    </div>
                                                    </div>
                                                    <table class="table table-bordered dataTable">
                                                    <thead>

                                                        <tr>

                                                        <th>Sl. No.</th>

                                                        <th>Documents / Attatchments</th>

                                                        <th>Document Type</th>

                                                        <th colspan="3">File options</th>

                                                        </tr>

                                                        </thead>
                                                        <tbody>
                                                        @foreach($documents as $document)
                                                        <tr>
                                                        <td>{{$document->id}}</td>
                                                        <td>{{$document->document_name}}</td>
                                                        <!-- <td>{{$document->document_url}}</td> -->
                                                        <td>{{$document->type}}</td>
                                                        <td><a href="{{ asset($document->document_url) }}" target="_blank"><img style="width: 30px;height: 30px;" src="{{theme_asset('images/preview.png')}}"></a>
                                                        <a href="{{route('downloadFile',$document->id)}}"><img style="width: 30px;height: 30px;" src="{{theme_asset('images/download (1).png')}}"></a>
                                                        <a href="{{route('delete_document',$document->id)}}"><img style="width: 30px;height: 30px;" src="{{theme_asset('images/delete.png')}}"></a>
                                                        </td>
                                                        </tr>
                                                        @endforeach
                                                        </tbody>


                                                    </table>
     		
        
                                                </div>
                                                <div class="tab-pane fade" id="tab-5" role="tabpanel" aria-labelledby="invoices-tab" style="padding: 0;">
                                                    <table class="table table-bordered" style="margin-top:30px">
                                                        <thead>

                                                            <tr>

                                                            <th>Sl. No.</th>
                                                            <th>Invoice Number</th>
                                                            <th>P O Number</th>
                                                            <th>Course</th>
                                                            <th>Extra Discount</th>
                                                            <th>Reference Number</th>
                                                            <th colspan="3">File options</th>

                                                            </tr>

                                                            </thead>
                                                            <tbody>
                                                          
                                                            @foreach($invoices as $invoice)
                                                            <tr>
                                                            <td>{{$invoice->id}}</td>
                                                            <td>{{$invoice->invoice_number}}</td>
                                                            <td>{{$invoice->po_number}}</td>
                                                            <td>{{$invoice->course_name}}</td>
                                                            <td>{{$invoice->extra_discount}}</td>
                                                            <td>{{$invoice->reference_number}}</td>
                                                            <td>
                                                           
                                                            <button data-toggle="modal" data-target="#edit_invoice_details" onclick="editInvoice({{$invoice->id}});"><i class="la la-pencil"></i></button>
                                                            <!-- <a href="{{ asset($invoice->invoice_url) }}" target="_blank"><img style="width: 30px;height: 30px;" src="{{theme_asset('images/preview.png')}}"></a> -->
                                                            <a href="{{route('downloadInvoice',$invoice->id)}}"><img style="width: 30px;height: 30px;" src="{{theme_asset('images/download (1).png')}}"></a>
                                                            </td>
                                                            </tr>
                                                            @endforeach
                                                          
                                                            </tbody>


                                                        </table>
                                                </div>
                                                <div class="tab-pane fade" id="tab-6" role="tabpanel" aria-labelledby="notes-tab" style="padding: 0;">
                                                    <br>
                                                    <h4>Notes</h4>
                                                  

                                                    <form method="get" action="{{route('add_notes')}}">
                                                    <input type="hidden" class="form-control"  name="user_id" value="{{$user->id}}">
                                                    <div class="col-md-6">
                                                    <div class="form-group">
                                                    <textarea name="notes" class="form-control" style="height:200px;width:700px">@if(count($notes)) @foreach($notes as $note){{$note->notes}}@endforeach @endif</textarea>                                              
                                                    </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                      <div class="form-group">
                                                      
                                                      <input type="submit" class="btn btn-danger" name="notesSubmit" value="Save"/>
                                                      </div>
                                                    </div>
                                                        
                                                    </form>


                                                </div>
                                                <div class="tab-pane fade" id="tab-7" role="tabpanel" aria-labelledby="registration-tab" style="padding: 0;">
                                                    <table class="table table-bordered" style="margin-top:30px">
                                                        <thead>

                                                            <tr>

                                                            <th>Sl. No.</th>
                                                            <th>Invoice Number</th> 
                                                            <th>Course</th>
                                                            <th colspan="3">File options</th>

                                                            </tr>

                                                            </thead>
                                                            <tbody>
                                                          
                                                            @foreach($invoices as $invoice)
                                                            <tr>
                                                            <td>{{$invoice->id}}</td>
                                                            <td>{{$invoice->invoice_number}}</td>
                                                            <td>{{$invoice->course_name}}</td>
                                                            <td>
                                                             <!-- <a href="{{ asset($invoice->invoice_url) }}" target="_blank"><img style="width: 30px;height: 30px;" src="{{theme_asset('images/preview.png')}}"></a> -->
                                                             <a href="{{route('downloadRegister',$invoice->id)}}"><img style="width: 30px;height: 30px;" src="{{theme_asset('images/download (1).png')}}"></a>
                                                            </td>
                                                            </tr>
                                                            @endforeach
                                                          
                                                            </tbody>


                                                        </table>
                                                </div>
                                                <div class="tab-pane fade" id="tab-8" role="tabpanel" aria-labelledby="offer-tab" style="padding: 0;">
                                                    <table class="table table-bordered" style="margin-top:30px">
                                                        <thead>

                                                            <tr>

                                                            <th>Sl. No.</th>
                                                            <th>Invoice Number</th> 
                                                            <th>Course</th>
                                                            <th colspan="3">File options</th>

                                                            </tr>

                                                            </thead>
                                                            <tbody>
                                                          
                                                            @foreach($invoices as $invoice)
                                                            <tr>
                                                            <td>{{$invoice->id}}</td>
                                                            <td>{{$invoice->invoice_number}}</td>
                                                            <td>{{$invoice->course_name}}</td>
                                                            <td>
                                                             <!-- <a href="{{ asset($invoice->invoice_url) }}" target="_blank"><img style="width: 30px;height: 30px;" src="{{theme_asset('images/preview.png')}}"></a> -->
                                                             <a href="{{route('downloadofferletter',$invoice->id)}}"><img style="width: 30px;height: 30px;" src="{{theme_asset('images/download (1).png')}}"></a>
                                                            </td>
                                                            </tr>
                                                            @endforeach
                                                          
                                                            </tbody>


                                                        </table>
                                                </div>
                                                <div class="tab-pane fade" id="tab-9" role="tabpanel" aria-labelledby="record-tab" style="padding: 0;">
                                                    <table class="table table-bordered" style="margin-top:30px">
                                                        <thead>

                                                            <tr>

                                                            <th>Sl. No.</th>
                                                            <th>Invoice Number</th>
                                                            <th>Course</th>
                                                            <th colspan="3">File options</th>

                                                            </tr>

                                                            </thead>
                                                            <tbody>
                                                          
                                                            @foreach($invoices as $invoice)
                                                            <tr>
                                                            <td>{{$invoice->id}}</td>
                                                            <td>{{$invoice->invoice_number}}</td>
                                                            <td>{{$invoice->course_name}}</td>
                                                            <td>
                                                           
                                                            <button data-toggle="modal" data-target="#edit_record_details" onclick="editRecord({{$invoice->id}});"><i class="la la-pencil"></i></button>
                                                           
                                                            </td>
                                                            </tr>
                                                            @endforeach
                                                          
                                                            </tbody>


                                                        </table>
                                                </div>



   
                                              </div>


                                            </div>
                                        </div>
                                        </div>
                                        </div>



                                    


                                        <div class="sb-model">
  <div class="modal fade" id="edit_record_details" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
  
                                                 
        <form method="post" enctype="multipart/form-data" action="{{route('add_record')}}" >
        {{ csrf_field() }}
          <div class="modal-header">
            <h5 class="modal-title">Add Record</h5>
            <div class="clearfix"></div>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span> </button>
          </div>
          <div class="modal-body p-4">
            <div class="row">
            <input type="hidden" class="form-control" value="" name="m_record_user_id" id="m_record_user_id" required>
            <input type="hidden" class="form-control" value="" name="m_record_invoice_id" id="m_record_invoice_id" required>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="fname">Amount Received <span>*</span></label>
                  <input type="text" class="form-control" value="" name="m_record_amount" id="m_record_amount" required>
                </div>
              </div>
             
              <div class="col-md-6">
                <div class="form-group">
                  <label>Payment Date</label>
                  <input type="text" class="form-control" value=""  name="m_record_date"  id="m_record_date">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Payment Mode</label>
                  <input type="text" class="form-control" value=""  name="m_record_mode" id="m_record_mode">
                </div>
              </div>
             
              <div class="col-md-6">
                <div class="form-group">
                  <label>Reference Number</label>
                  <input type="text" class="form-control" value=""  name="m_record_reference" id="m_record_reference">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Notes</label>
                  <input type="text" class="form-control" value=""  name="m_record_notes" id="m_record_notes">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Attachement</label>
                  <input type="file" class="form-control"  name="m_record_attachmenet" id="m_record_attachmenet">
                </div>
              </div>
          
            

            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-primary" type="button" data-dismiss="modal">Cancel</button>
            <input type="submit" class="btn btn-danger" name="edit_invoice_details" value="save"/>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>








                                        <div class="sb-model">
  <div class="modal fade" id="edit_invoice_details" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
     
        <form method="get" action="{{route('edit_invoice_details',$invoice->id)}}">
          <div class="modal-header">
            <h5 class="modal-title">Edit Invoice</h5>
            <div class="clearfix"></div>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span> </button>
          </div>
          <div class="modal-body p-4">
            <div class="row">
            <input type="hidden" class="form-control" value="" name="m_user_id" id="m_user_id" required>
            <input type="hidden" class="form-control" value="" name="m_invoice_id" id="m_invoice_id" required>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="fname">Invoice Number <span>*</span></label>
                  <input type="text" class="form-control" value="" name="m_invoice_number" id="m_invoice_number" required>
                </div>
              </div>
             
              <div class="col-md-6">
                <div class="form-group">
                  <label>P O Number</label>
                  <input type="text" class="form-control" value=""  name="m_po_number"  id="m_po_number">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Extra Discount</label>
                  <input type="text" class="form-control" value=""  name="m_extra_discount" id="m_extra_discount">
                </div>
              </div>
             
              <div class="col-md-6">
                <div class="form-group">
                  <label>Reference Number</label>
                  <input type="text" class="form-control" value=""  name="m_reference_number" id="m_reference_number">
                </div>
              </div>
          
            

            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-primary" type="button" data-dismiss="modal">Cancel</button>
            <input type="submit" class="btn btn-danger" name="edit_invoice_details" value="save"/>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


<div class="sb-model">
  <div class="modal fade" id="edit_personal_details" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
     
        <form method="get" action="{{route('edit_user_details',$user->id)}}">
          <div class="modal-header">
            <h5 class="modal-title">Edit Details</h5>
            <div class="clearfix"></div>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span> </button>
          </div>
          <div class="modal-body p-4">
            <div class="row">
            <input type="hidden" class="form-control" value="{{$user->id}}" name="m_user_id" required>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="fname">Name <span>*</span></label>
                  <input type="text" class="form-control" value="{{$user->name}}" name="m_name" required>
                </div>
              </div>
             
              <div class="col-md-6">
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" class="form-control" value="{{$user->email}}"  name="m_email">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Phone</label>
                  <input type="text" class="form-control" value="{{$user->phone}}"  name="m_phone">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Gender</label>
                 
                  <select name="m_gender" class="form-control">
                  <option value="male" <?php if($user->gender=="male"){ ?> Selected <?php }?>>Male</option>
                  <option value="female" <?php if($user->gender=="female"){ ?> Selected <?php }?>>Female</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Date of Birth</label>
                  <input type="text" class="form-control" value="{{$user->date_of_birth}}"  name="m_date_of_birth">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Address</label>
                  <input type="text" class="form-control" value="{{$user->address}}" name="m_address">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Street</label>
                  <input type="text" class="form-control" value="{{$user->address_2}}" name="m_street">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>City</label>
                  <input type="text" class="form-control" value="{{$user->city}}" name="m_city">
                </div>
              </div>
            
              <div class="col-md-6">
                <div class="form-group">
                  <label>Country <span>*</span></label>
                  <select class="custom-select form-control" name="m_country" required>
                      <option selected value="">Choose...</option>
                     @foreach($countries as $country)
                        <option <?php if($country->id == $user['country']->id){ ?>Selected<?php }?> value="{{$country->id}}">{{$country->name}}</option>
                     @endforeach
                    </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Zip Code</label>
                  <input type="text" class="form-control" value="{{$user->zip_code}}" name="m_zip_code">
                </div>
              </div>
            
           

            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-primary" type="button" data-dismiss="modal">Cancel</button>
            <input type="submit" class="btn btn-danger" name="edit_user_details" value="save"/>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endforeach

@endsection
<script>
function editInvoice(id){
     
         var data = {
            "id":id      
         };
        data = $( this ).serialize() + "&" + $.param( data );
      
            $.ajax({
               type: "GET",
               datatype:"json",
               url:'{{route('edit_invoice')}}',
               data: data,
               success: function ( response ) {
              
                 var result = JSON.parse(response);
                 $('#m_invoice_id').val(id);
                 $('#m_user_id').val(result['user_id']);
                 $('#m_invoice_number').val(result['invoice_number']);
                 $('#m_po_number').val(result['po_number']);
                 $('#m_extra_discount').val(result['extra_discount']);
                 $('#m_reference_number').val(result['reference_number']);

          }
            });
          }
        function editRecord(id){
          var data = {
                    "id":id      
                };
                data = $( this ).serialize() + "&" + $.param( data );
              
                    $.ajax({
                      type: "GET",
                      datatype:"json",
                      url:'{{route('edit_invoice')}}',
                      data: data,
                      success: function ( response ) {
                      
                        var result = JSON.parse(response);
                        $('#m_record_invoice_id').val(id);
                        $('#m_record_user_id').val(result['user_id']);
                  }
                    });
        }
</script>