@extends('layouts.admin')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">

@section('page-header-right')
<a href="{{route('leads')}}" class="btn btn-dark ml-2" > <i class="la la-book"></i> All</a>
<a href="#" data-toggle="modal" data-target="#add_lead" class="btn btn-dark ml-2" > <i class="la la-plus"></i> Add</a>

   <!-- <a href="{{route('leads', ['status' => 'approved'])}}" class="btn btn-success ml-2" > <i class="la la-check-circle"></i> Approved</a>
    <a href="{{route('leads', ['status' => 'rejected'])}}" class="btn btn-warning ml-2" > <i class="la la-exclamation-circle"></i> Rejected</a>
    <a href="{{route('leads', ['status' => 'all'])}}" class="btn btn-light ml-2" > <i class="la la-th-list"></i> All</a> -->

@endsection

@section('content')

    <div class="withdraws-list-wrap">

        <form action="" method="get">

  
            @if($leads->count() > 0)

                <div class="row">
              
                    <div class="col-sm-2">
                        <div class="input-group">
                            <button type="submit" name="bulk_action_btn" value="delete" class="btn btn-danger delete_confirm"> <i class="la la-trash"></i> {{__a('delete')}}</button>
                        </div>
                        
                    </div>
                    <div class="col-md-2">
                      <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for date, name,email,phone,course " id="myInput" onkeyup="srch();">
                      </div>
                    </div>
      
                    <div class="col-md-3">
        <div class="input-group">
        <select class="custom-select form-control" id="s_manager" onchange="selectManagers();">
                      <option selected value="">Choose Manager</option>
                      <option value="Nikitha">Nikitha</option>
                          <option value="Lindhina">Lindhina</option>
                          <option value="Arya">Arya</option>
                          <option value="Syndia">Syndia</option>
                          <option value="Kavya">Kavya</option>
                          <option value="Shilpa">Shilpa</option>
                          <option value="Neethu">Neethu</option>
                          <option value="Leema">Leema</option>
                    </select>
        </div>
      </div>

      <div class="col-md-3">
        <div class="input-group">
        <select class="custom-select form-control" id="s_status" onchange="selectStatus();">
                      <option selected value="">Choose Status</option>
                      <option value="converted"> Converted</option>
                          <option value="possible">Possible</option>
                          <option value="highlypossible">Highly Possible</option>
                          <option value="maybe">Maybe</option>
                          <option value="nointerest">Not Prospective</option>
                          <option value="notprospective">No Interest</option>
                    </select>
        </div>
      </div>

                </div>



                <p class="text-muted my-3"> <small>Showing {{$leads->count()}} from {{$leads->total()}} results</small> </p>



                <table class="table table-bordered table-striped" id="myTable">
                    <tr>
                        <th><input class="bulk_check_all" type="checkbox" /></th>
                        <th>Date</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Course</th>
                        <th>Status</th>
                        <th>Follow up</th>
                        <th>Manager</th>
                        <th>Notes</th>
                    </tr>

                    @foreach($leads as $lead)
                 
                        <tr class="{{$lead->manager}} {{$lead->l_status}}">
                      <td>  <input class="check_bulk_item" name="bulk_ids[]" type="checkbox" value="{{$lead->id}}" /></td>

                   
                   
                      

                            <td>{{\Carbon\Carbon::parse($lead->created_at)->format('d M Y')}}</td>  
                            <td>{{$lead->fname}} {{$lead->lname}} </td>
                            <td>{{$lead->email}} </td>
                            <td>{{$lead->phone}} </td> 
                            <td>{{$lead->aw_body }}  {{$lead['course_details']->title}} </td>
                           
                            <td>  <input type="hidden" value="{{$lead->l_status }}" >                   
                      <select class="selectpicker" id="{{$lead->id }}" onchange="change_status({{$lead->id }});">
                      <option <?php if($lead->l_status ==""){echo 'selected';}?> value="blank">No Option choosed</option>
                       
            
                          <option value="converted" <?php if($lead->l_status =="converted"){echo 'selected';}?>><span class="btn btn-primary">Converted</span></option>
                          <option value="possible" <?php if($lead->l_status =="possible"){echo 'selected';}?>>Possible</option>
                          <option value="highlypossible"  <?php if($lead->l_status =="highlypossible"){echo 'selected';}?>>Highly Possible</option>
                          <option value="maybe"  <?php if($lead->l_status =="maybe"){echo 'selected';}?>>Maybe</option>
                          <option value="nointerest" <?php if($lead->l_status =="nointerest"){echo 'selected';}?>>Not Prospective</option>
                          <option value="notprospective"   <?php if($lead->l_status =="notprospective"){echo 'selected';}?>>No Interest</option>
                         
                      </select>
                    </td>

                    <td>                      
                      <select class="selectpicker" id="follow{{$lead->id }}" onchange="change_follow_up({{$lead->id }});">
                      <option <?php if($lead->follow_up ==""){echo 'selected';}?> value="blank">No Option choosed</option>
                       
            
                          <option value="level_1"  <?php if($lead->follow_up  =="level_1"){echo 'selected';}?>>Level 1</option>
                          <option value="level_2"  <?php if($lead->follow_up  =="level_2"){echo 'selected';}?>>Level 2</option>
                          <option value="level_3"  <?php if($lead->follow_up  =="level_3"){echo 'selected';}?>>Level 3</option>
                          <option value="level_4"  <?php if($lead->follow_up  =="level_4"){echo 'selected';}?>>Level 4</option>
                          <option value="level_5"  <?php if($lead->follow_up  =="level_5"){echo 'selected';}?>>Level 5</option>
                          <option value="level_6"  <?php if($lead->follow_up  =="level_6"){echo 'selected';}?>>Level 6</option>
                          <option value="level_7"  <?php if($lead->follow_up  =="level_7"){echo 'selected';}?>>Level 7</option>
                         
                      </select>
                    </td>
                           

                 
                            <td>                      
                      <select class="selectpicker" id="mg{{$lead->id }}" onchange="change_manager({{$lead->id }});">
                      <option <?php if($lead->manager ==""){echo 'selected';}?> value="blank">No Option choosed</option>
                       
            
                          <option value="Nikitha" id="Nikitha" <?php if($lead->manager =="Nikitha"){echo 'selected';}?>><span class="btn btn-primary">Nikitha</span></option>
                          <option value="Lindhina" id="Lindhina" <?php if($lead->manager =="Lindhina"){echo 'selected';}?>>Lindhina</option>
                          <option value="Arya" id="Arya" <?php if($lead->manager =="Arya"){echo 'selected';}?>>Arya</option>
                          <option value="Syndia" id="Syndia"  <?php if($lead->manager =="Syndia"){echo 'selected';}?>>Syndia</option>
                          <option value="Kavya" id="Kavya" <?php if($lead->manager =="Kavya"){echo 'selected';}?>>Kavya</option>
                          <option value="Shilpa" id="Shilpa"  <?php if($lead->manager =="Shilpa"){echo 'selected';}?>>Shilpa</option>
                          <option value="Neethu" id="Neethu" <?php if($lead->manager =="Neethu"){echo 'selected';}?>>Neethu</option>
                          <option value="Leema" id="Leema"  <?php if($lead->manager =="Leema"){echo 'selected';}?>>Leema</option>
                         
                      </select>
                    </td> 
                    <td style="display: flex;align-items: center;"><textarea name="notes" id="notes{{$lead->id}}" >{{$lead->notes}}</textarea><button type="button" class="btn .btn-info
 la la-check" onclick="savetext({{$lead->id}});"></button></td>


                            <!-- <td>{{$lead->manager}} </td> -->
                         
                        </tr>

                    @endforeach

                </table>


                {!! $leads->appends(request()->input())->links() !!}

            @else
                {!! no_data() !!}
            @endif

        </form>

     

    </div>

<!-- modal -->
<div class="sb-model">
  <div class="modal fade" id="add_lead" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
     
        <form method="get" action="{{route('add_lead')}}">
          <div class="modal-header">
            <h5 class="modal-title">Add New Lead</h5>
            <div class="clearfix"></div>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span> </button>
          </div>
          <div class="modal-body p-4">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="fname">Date <span>*</span></label>
                  <input type="date" class="form-control" name="l_date" required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="fname">First Name <span>*</span></label>
                  <input type="text" class="form-control" placeholder="First name" name="l_fname" required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Last Name</label>
                  <input type="text" class="form-control" placeholder="Last Name"  name="l_lname">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" class="form-control" placeholder="Email"  name="l_email">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Phone</label>
                  <input type="text" class="form-control" placeholder="Phone No" name="l_phone">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Course <span>*</span></label>
                  <select class="custom-select form-control" name="l_course" id="l_course" required>
                      <option selected value="" data-course-level="">Choose...</option>
                      <?php
                      foreach($courses as $c)
                          {
                            ?>
                            <option value="<?php echo $c->id;?>"><?php echo $c->title;?></option>
                            <?php
                          }
                          ?>
                    </select>
                    <input type="hidden" name="awarding_body" id="awarding_body">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Source <span>*</span></label>
                  <select class="custom-select form-control" name="l_sourse" required>
                      <option selected value="">Choose...</option>
                      <option value="Brochure Request">Brochure Request</option>
                                                    <option value="Call back">Call back</option>
                                                    <option value="findcourses.co.uk ">findcourses.co.uk </option>
                                                    <option value="Google">Google</option>
                                                    <option value="hotcourses">hotcourses</option>
                                                    <option value="jotform">jotform</option>
                                                    <option value="keystone">keystone</option>
                                                    <option value="Reed.co.uk">Reed.co.uk</option>
                                                    <option value="Request Info">Request Info</option>
                                                    <option value="sbl reception">sbl reception</option>
                                                    <option value="tawk.to">tawk.to</option>
                    </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Manager <span>*</span></label>
                  <select class="custom-select form-control" name="l_manager" required>
                      <option selected value="">Choose...</option>
                      <option value="Nikitha">Nikitha</option>
                          <option value="Lindhina">Lindhina</option>
                          <option value="Arya">Arya</option>
                          <option value="Syndia">Syndia</option>
                          <option value="Kavya">Kavya</option>
                          <option value="Shilpa">Shilpa</option>
                          <option value="Neethu">Neethu</option>
                          <option value="Leema">Leema</option>
                    </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Status</label>
                  <select class="selectpicker form-control" name="l_status">
                    <option value=""> choose...</option>
                    <option value="converted">Converted</option>
                    <option value="possible">Possible</option>
                    <option value="highlypossible">Highly Possible</option>
                    <option value="maybe">Maybe</option>
                    <option value="nointerest">Not Prospective</option>
                    <option value="notprospective" >No Interest</option>
                         
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Follow Up</label>
                  <select class="custom-select form-control" name="follow_up">
                    <option value="">Choose...</option>
                    <option>Level-1</option>
                    <option>Level-2</option>
                    <option>Level-3</option>
                    <option>Level-4</option>
                    <option>Level-5</option>
                    <option>Level-6</option>
                    <option>Level-7</option>
                  </select>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label>Message</label>
                  <textarea class="form-control" name="message"></textarea>
                </div>
              </div>

            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-primary" type="button" data-dismiss="modal">Cancel</button>
            <input type="submit" class="btn btn-danger" name="add_new_lead" value="save"/>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
<script>

  function srch(){
    var value = $('#myInput').val().toLowerCase();
   $("#myTable tr").filter(function() {

    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
       
    });

  }




  function change_status(lid)
    {
        var status=$("#"+lid).val();  
         var lead_id=lid;
         var data = {
            "status":status,"lid":lead_id      
         };
        data = $( this ).serialize() + "&" + $.param( data );
        if(status=="blank"){
         alert("Not Changed");
         }else
        {
          
            $.ajax({
               type: "GET",
               datatype:"json",
               url:'{{route('edit_lead')}}',
               data: data,
               success: function ( data ) {
               // alert("Status Changed");
  }
            });
        }
    }

function change_manager(lid){
    var manager=$("#mg"+lid).val();  

         var lead_id=lid;
         var data = {
            "manager":manager,"lid":lead_id      
         };

         data = $( this ).serialize() + "&" + $.param( data );

         $.ajax({
               type: "GET",
               datatype:"json",
               url:'{{route('edit_manager_lead')}}',
               data: data,
               success: function ( data ) {
              //  alert("Manager Updated");
  }
            });



}
function change_follow_up(lid){
    var follow_up=$("#follow"+lid).val();  

var lead_id=lid;
var data = {
   "follow_up":follow_up,"lid":lead_id      
};

data = $( this ).serialize() + "&" + $.param( data );
$.ajax({
               type: "GET",
               datatype:"json",
               url:'{{route('edit_follow_lead')}}',
               data: data,
               success: function ( data ) {
               // alert("Follow up Updated");
  }
            });
}
function savetext(lid){
    var description=$("#notes"+lid).val();  
    var lead_id=lid;
    var data = {
   "notes":description,"lid":lead_id      
};
    $.ajax({
               type: "GET",
               datatype:"json",
               url:'{{route('edit_notes_lead')}}',
               data: data,
               success: function ( data ) {
                //alert("Notes Updated");
  }
            });
   
}
function selectManagers(){
     var manager = $("#s_manager").val();


   
        $("#myTable tbody tr").each(function(){
          var tr = $(this);
	  tr.show();
          if (! tr.hasClass(manager)){
            tr.hide();
          }
        });


    // $("#myTable").closest("tr").find(attr("data-id")).show();
   
   }


   function selectStatus(){
     var status = $("#s_status").val();


   
        $("#myTable tbody tr").each(function(){
          var tr = $(this);
	  tr.show();
          if (! tr.hasClass(status)){
            tr.hide();
          }
        });


    // $("#myTable").closest("tr").find(attr("data-id")).show();
   
   }
</script>
