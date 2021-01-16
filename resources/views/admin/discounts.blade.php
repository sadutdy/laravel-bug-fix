@extends('layouts.admin')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">

@section('page-header-right')
    <!-- <a href="#" data-toggle="modal" data-target="#add_discount" class="btn btn-dark ml-2" > <i class="la la-plus"></i> Add</a> -->
@endsection

@section('content')

    <div class="withdraws-list-wrap">

        <form action="" method="get">

     
            @if($discounts->count() > 0)

                <div class="row">
              
                  
                    <div class="col-md-5">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search for..." id="myInput" onkeyup="srch();">
        </div>
      </div>
                </div>



                <p class="text-muted my-3"> <small>Showing {{$discounts->count()}} from {{$discounts->total()}} results</small> </p>



                <table class="table table-bordered table-striped" id="myTable">
                    <tr>
                        <th>id</th>
                        <th>Name</th>
                        <th>One time Discount</th>
                        <th>Monthly Discount</th>
                        <th>SAVE</td>
                    </tr>

                    @foreach($discounts as $discount)

                        <tr>
                            <td>{{$discount->id }}</td>
                            <td>{{$discount->name}} </td>
                            <td><input type="text" class="one_time" id="onetime{{$discount->id }}" value="{{$discount->one_time_discount}}"> </td>
                            <td><input type="text" class="monthly" id="monthly{{$discount->id }}" value="{{$discount->monthly_discount}}"> </td>
                            <td><button onclick="saveChanges({{$discount->id }})"><i class="la la-check"></i></button></td>
                         
                        </tr>

                    @endforeach

                </table>


                {!! $discounts->appends(request()->input())->links() !!}

            @else
                {!! no_data() !!}
            @endif

        </form>



    </div>
   

@endsection
<script>

function srch(){
    var value = $('#myInput').val().toLowerCase();
   $("#myTable tr").filter(function() {

    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
       
    });

  }
function saveChanges(id){
 
  var monthly = $("#monthly"+id).val();
  var onetime = $("#onetime"+id).val();
  var data = {
    "id":id,"onetime":onetime,"monthly":monthly      
};

data = $( this ).serialize() + "&" + $.param( data );
$.ajax({
               type: "GET",
               datatype:"json",
               url:'{{route('edit_discount')}}',
               data: data,
               success: function ( data ) {
                alert(data);
                console.log(data);
  }
            });
}
</script>
