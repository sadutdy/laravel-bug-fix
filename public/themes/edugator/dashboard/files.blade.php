@extends(theme('dashboard.layout'))

@section('content')
                                                <form method="post" enctype="multipart/form-data" action="{{route('studentDocument')}}">
                                                    {{ csrf_field() }}
                                                    <div class="profile-basic-info bg-white p-3">

                                                    <div class="form-row">

                                                    <div class="form-group col-md-4">
                                                        <label>Upload</label>
                                                    
                                                        <input type="file" class="form-control" id="image" name="image">
                                                    </div>
                                                    </div>
                                                    <div class="form-row">
                                                    <div class="form-group col-md-4">
                                                        <label>Type of Document</label>
                                                        <select class="form-control"  name="type_of_document" >
                                                    <option value="ID">ID Card</option>
                                                    <option value="CV">CV</option>
                                                    <option value="Education Qualification">Education Qualification</option>
                                                    <option value="Driving Licence">Driving Licence</option>
                                                    <option value="Passport">Passport</option>
                                                    </select>
                                                    </div>
                                                    </div>

                                                    <div class="form-group col-md-6">
                                                    <button type="submit" name="upload" value="upload" class="btn btn-primary">SAVE</button>
                                                        <!-- <input type="submit" name="upload" value="upload" class="input"> -->
                                                    </div>

                                                    </div>

                                                  
                                                    </form>



                                                    <table class="table table-bordered dataTable">
                                                    <thead>

                                                        <tr>

                                                        <th>Sl. No.</th>

                                                        <!-- <th>Documents / Attatchments</th> -->

                                                        <th>Document Type</th>

                                                        <th colspan="3">File options</th>

                                                        </tr>

                                                        </thead>
                                                        <tbody>
                                                        <?php $i=0; ?>
                                                        @foreach($documents as $document)
                                                        <?php $i =$i+1; ?>
                                                        <tr>
                                                     
                                                        <td>{{$i}}</td>
                                                        <!-- <td>{{$document->document_name}}</td> -->
                                                        <!-- <td>{{$document->document_url}}</td> -->
                                                        <td>{{$document->type}}</td>
                                                        <td><a href="{{ asset($document->document_url) }}" target="_blank"><img style="width: 30px;height: 30px;" src="{{theme_asset('images/preview.png')}}"></a>
                                                        <a href="{{route('downloadStudentFile',$document->id)}}"><img style="width: 30px;height: 30px;" src="{{theme_asset('images/download (1).png')}}"></a>
                                                        <a href="{{route('deleteStudentDocument',$document->id)}}"><img style="width: 30px;height: 30px;" src="{{theme_asset('images/delete.png')}}"></a>
                                                        </td>
                                                        </tr>
                                                        @endforeach
                                                        </tbody>


                                                    </table>

                                                    @endsection