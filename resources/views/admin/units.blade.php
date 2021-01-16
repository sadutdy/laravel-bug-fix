@extends('layouts.admin')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">

@section('page-header-right')
<a href="{{route('units')}}" class="btn btn-dark ml-2" > <i class="la la-book"></i> All</a>
    <a href="#" data-toggle="modal" data-target="#add_unit" class="btn btn-dark ml-2" > <i class="la la-plus"></i> Add Units</a>
@endsection

@section('content')

    <div class="withdraws-list-wrap">

        <form action="" method="get">

     
            @if($units->count() > 0)

                <div class="row">
              
                <div class="col-sm-2">
                        <div class="input-group">
                            <button type="submit" name="bulk_action_btn" value="delete" class="btn btn-danger delete_confirm"> <i class="la la-trash"></i> {{__a('delete')}}</button>
                        </div>
                        
                    </div>
                    <div class="col-md-2">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for..." id="myInput" onkeyup="srch();">
                  </div>
                </div>
                <div class="col-md-5">
                  <div class="input-group">
                    <select class="custom-select form-control" id="s_course" onchange="selectUnits();">
                    <option selected value="" data-course-level="">Choose Course</option>
                     <?php
                      foreach($courses as $c)
                          {
                            ?>
                            <option value="<?php echo $c->id;?>"><?php echo $c->title;?></option>
                            <?php
                          }
                          ?>

                      
                    </select>
        </div>
      </div>
                </div>



                <p class="text-muted my-3"> <small>Showing {{$units->count()}} from {{$units->total()}} results</small> </p>



                <table class="table table-bordered table-striped" id="myTable">
                    <tr>
                    <th><input class="bulk_check_all" type="checkbox" /></th>
                        <th>id</th>
                        <th>Course</th>
                        <th>Unit</th>
                        <th>Subject Name</th>
                        <th>TQT</th>
                        <th>Credits</th>
                        <th>Description</th>
                        <th>Edit</th>
                    </tr>

                    @foreach($units as $unit)

                        <tr class="{{$unit->course_id}}">
                        <td>  <input class="check_bulk_item" name="bulk_ids[]" type="checkbox" value="{{$unit->id}}" /></td>

                            <td>{{$unit->id }}</td>
                            <td data-id="{{$unit->course_id}}">{{$unit['course']->title}}</td>
                            <td>{{$unit->unit_no}}</td>
                            <td>{{$unit->subject_name}}</td>
                            <td>{{$unit->TQT}}</td>
                            <td>{{$unit->credit}}</td>
                            <td>{{$unit->unit_description}}</td>
                            <td><a href="#" data-toggle="modal" data-target="#update_unit" id="<?php echo $unit->id;?>" class="update" title="Edit" onclick="updateUnit(<?php echo $unit->id;?>)"><i class="la la-edit"></i></a>
                            <a href="{{route('deleteunit',$unit->id)}}" class="delete"><i class="la la-trash"></i></a>
                            </td>
                         
                        </tr>

                    @endforeach

                </table>


                {!! $units->appends(request()->input())->links() !!}

            @else
                {!! no_data() !!}
            @endif

        </form>



    </div>
    <div class="sb-model">

  <div class="modal fade" id="add_unit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

    <div class="modal-dialog" role="document">

      <div class="modal-content">

        <div class="modal-header">

          <h5 class="modal-title" id="exampleModalLabel">Add Agent</h5>

          <div class="clearfix"></div>

          <button class="close" type="button" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span> </button>

        </div>

        
        <form method="get" action="{{route('add_unit')}}">
        <div class="modal-body">          

            <table class="table table-bordered">

              <tbody>

                <tr>

                  <td>Course</td>

                  <td><div class="input-group">

                     <select name="unit_course" id="unit_course" class="form-control" required>
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


                    </div></td>

                </tr>

                <tr>

                  <td>Unit No</td>

                  <td><div class="input-group">

                      <input type="text" name="unit_no"  class="form-control" placeholder="Unit No"  required>

                    </div></td>

                </tr>
                <tr>
                  <td>Subject</td>

                  <td><div class="input-group">
                      <input type="text" name="unit_subject"  class="form-control" placeholder="Subject" required>
                    </div></td>
                </tr>
                <tr>
                  <td>TQT</td>

                  <td><div class="input-group">
                      <input type="text" name="unit_TQT"  class="form-control" placeholder="TQT" required>
                    </div></td>
                </tr>
                <tr>
                  <td>Credit</td>

                  <td><div class="input-group">
                      <input type="text" name="unit_credit"  class="form-control" placeholder="Credit" required>
                    </div></td>
                </tr>

                <tr>
                  <td>Description</td>
                  <td><div class="input-group">
                    <textarea class="form-control" name="unit_description"></textarea>
                    </div></td>
                </tr>

            
              </tbody>

            </table>

       

        </div>

        <div class="modal-footer">

          <button class="btn btn-primary" type="reset" data-dismiss="modal">Cancel</button>

          <input class="btn btn-danger" type="submit" name="save" id="save" value="Save">  

        </div>

        </form>

      </div>

    </div>

  </div>

</div>
    <div class="sb-model">

<div class="modal fade" id="update_unit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog" role="document">

    <div class="modal-content">

      <div class="modal-header">

        <h5 class="modal-title" id="exampleModalLabel">Unit</h5>

        <div class="clearfix"></div>

        <button class="close" type="button" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span> </button>

      </div>

      
      <form method="get"  id="update_unit" action="{{route('update_unit')}}">
      <div class="modal-body">          

          <table class="table table-bordered">

            <tbody>

              <tr>

                <td>Course Name</td>

                <td><div class="input-group">
                <select class="custom-select form-control" name="edit_course_name" id="edit_course_name" required>
                <?php
                      foreach($courses as $c)
                          {
                            ?>
                            <option value="<?php echo $c->id;?>" ><?php echo $c->title;?></option>
                            <?php
                          }
                          ?>
                    </select>
                   
                  </div></td>

              </tr>

              <tr>

                <td>Unit No</td>

                <td><div class="input-group">

                    <input type="text" name="edit_unit_no" id="edit_unit_no" class="form-control" placeholder="Unit No"  required>

                  </div></td>

              </tr>
              <tr>
                <td>Subject Name</td>

                <td><div class="input-group">
                    <input type="text" name="edit_subject_name" id="edit_subject_name" class="form-control" placeholder="Subject Name"  required>
                  </div></td>
              </tr>
              <tr>
                <td>TQT</td>

                <td><div class="input-group">
                    <input type="text" name="edit_TQT" id="edit_TQT" class="form-control" placeholder="TQT"  required>
                  </div></td>
              </tr>
              <tr>
                <td>Credit</td>

                <td><div class="input-group">
                    <input type="text" name="edit_credit" id="edit_credit" class="form-control" placeholder="Credit" required>
                  </div></td>
              </tr>

              <tr>
                <td>Description</td>
                <td><div class="input-group">
                    <input type="text" name="edit_description" id="edit_description" class="form-control" placeholder="Description">
                  </div></td>
              </tr>

          
            </tbody>

          </table>

     

      </div>

      <div class="modal-footer">

        <input type="hidden" name="aid" id="aid">

        <button class="btn btn-primary" type="reset" data-dismiss="modal">Cancel</button>

        <input class="btn btn-danger" type="submit" name="update" value="Update">  

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
  function updateUnit(aid)
 {  
   
    $.ajax({
               type: "GET",
               datatype:"json",
               url:'{{route('edit_units')}}',
               data: {id:aid},
               success: function ( data ) {
              
      var values=data;
      var res=values.split("--");
      $("#aid").val(res[0]);
    //  $("#selected_course").val(res[1]);
      $("#edit_course_name").val(res[1]);
      $("#edit_unit_no").val(res[2]);
      $("#edit_subject_name").val(res[3]);
      $("#edit_description").val(res[4]);
      $("#edit_TQT").val(res[5]);
      $("#edit_credit").val(res[6]);
  }
            });
   
   }
   function selectUnits(){
     var course_id = $("#s_course").val();

        $("#myTable tbody tr").each(function(){
          var tr = $(this);
	  tr.show();
          if (! tr.hasClass(course_id)){
            tr.hide();
          }
        });


    // $("#myTable").closest("tr").find(attr("data-id")).show();
   
   }
  
</script>
