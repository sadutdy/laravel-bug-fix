@extends('layouts.admin')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">

@section('page-header-right')
    <a href="#" data-toggle="modal" data-target="#add_agent" class="btn btn-dark ml-2" > <i class="la la-plus"></i> Add</a>
@endsection

@section('content')

    <div class="withdraws-list-wrap">

        <form action="" method="get">

     
            @if($agents->count() > 0)

                <div class="row">
              
                  
                    <div class="col-md-5">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search for..." id="myInput" onkeyup="srch();">
        </div>
      </div>
                </div>



                <p class="text-muted my-3"> <small>Showing {{$agents->count()}} from {{$agents->total()}} results</small> </p>



                <table class="table table-bordered table-striped" id="myTable">
                    <tr>
                        <th>id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>No of Students</th>
                        <th>Edit</th>
                    </tr>

                    @foreach($agents as $agent)

                        <tr>
                            <td>{{$agent->id }}</td>
                            <td>{{$agent->name}} </td>
                            <td>{{$agent->email}} </td>
                            <td>{{$agent->contact}} </td>
                            <td> </td>
                            <td>
                            <a href="#" data-toggle="modal" data-target="#update_agent" id="<?php echo $agent->id;?>" class="update" title="Edit" onclick="updateFunction(<?php echo $agent->id;?>)"><i class="la la-edit"></i></a>
                            <a href="{{route('deleteagent',$agent->id)}}" class="delete"><i class="la la-trash"></i></a>
                            </td>
                         
                        </tr>

                    @endforeach

                </table>


                {!! $agents->appends(request()->input())->links() !!}

            @else
                {!! no_data() !!}
            @endif

        </form>



    </div>
    <div class="sb-model">

  <div class="modal fade" id="add_agent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

    <div class="modal-dialog" role="document">

      <div class="modal-content">

        <div class="modal-header">

          <h5 class="modal-title" id="exampleModalLabel">Add Agent</h5>

          <div class="clearfix"></div>

          <button class="close" type="button" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span> </button>

        </div>

        
        <form method="get" action="{{route('add_agent')}}">
        <div class="modal-body">          

            <table class="table table-bordered">

              <tbody>

                <tr>

                  <td>Agent Name</td>

                  <td><div class="input-group">

                      <input type="text" name="agent_name" class="form-control" placeholder="Agent Name" required>

                    </div></td>

                </tr>

                <tr>

                  <td>Email</td>

                  <td><div class="input-group">

                      <input type="email" name="email"  class="form-control" placeholder="abc@exmaple.com"  required>

                    </div></td>

                </tr>
                <tr>
                  <td>Phone Number</td>

                  <td><div class="input-group">
                      <input type="text" name="phone"  class="form-control" placeholder="Phone Number" onkeypress="return restrictInput(this, event, integerOnly);" required>
                    </div></td>
                </tr>

                <tr>
                  <td>Other Details</td>
                  <td><div class="input-group">
                      <input type="text" name="other" class="form-control" placeholder="Other Details">
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

<div class="modal fade" id="update_agent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog" role="document">

    <div class="modal-content">

      <div class="modal-header">

        <h5 class="modal-title" id="exampleModalLabel">Agent</h5>

        <div class="clearfix"></div>

        <button class="close" type="button" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span> </button>

      </div>

      
      <form method="get"  id="add_course"  action="{{route('update_agent')}}">
      <div class="modal-body">          

          <table class="table table-bordered">

            <tbody>

              <tr>

                <td>Agent Name</td>

                <td><div class="input-group">

                    <input type="text" name="agent_name1" id="agent_name" class="form-control" placeholder="Agent Name" required>

                  </div></td>

              </tr>

              <tr>

                <td>Email</td>

                <td><div class="input-group">

                    <input type="email" name="email1" id="email" class="form-control" placeholder="abc@exmaple.com"  required>

                  </div></td>

              </tr>
              <tr>
                <td>Phone Number</td>

                <td><div class="input-group">
                    <input type="text" name="phone1" id="phone" class="form-control" placeholder="Phone Number" onkeypress="return restrictInput(this, event, integerOnly);" required>
                  </div></td>
              </tr>

              <tr>
                <td>Other Details</td>
                <td><div class="input-group">
                    <input type="text" name="other1" id="other" class="form-control" placeholder="Other Details">
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
  function updateFunction(aid)
 {  
   
    $.ajax({
               type: "GET",
               datatype:"json",
               url:'{{route('edit_agent')}}',
               data: {id:aid},
               success: function ( data ) {
                   
      var values=data;
      var res=values.split("--");
      $("#aid").val(res[0]);
      $("#agent_name").val(res[1]);
      $("#email").val(res[2]);
      $("#phone").val(res[3]);
      $("#other").val(res[4]);
  }
            });
   
   }
</script>
