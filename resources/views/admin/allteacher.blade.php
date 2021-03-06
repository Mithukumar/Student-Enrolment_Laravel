@extends('layout')
@section('content')
                  <div class="card">
            <div class="card-body">
              <h2 class="card-title">Data table</h2>
               <p class=" alert-success">
                           <?php
                              $message=Session::get('message');

                              if ($message)
                                {
                                  echo $message;
                                  Session::put('message',null);
                                }
                              ?></p>
              <div class="row">
                <div class="col-12">
                  <table id="order-listing" class="table table-striped" style="width:100%;">
                    <thead>
                      <tr>
                          <th>Teacher Name</th>
                          <th> Teacher Phone </th>
                          <th>Teacher Address</th>
                          <th>Teacher Image</th>
                          <th>Department</th>
                          <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                     @foreach($all_teacher_info as $v_teacher)	 
                      <tr>
                          <td>{{$v_teacher->teachers_name}}</td>
                          <td>{{$v_teacher->teachers_phone}}</td>
                          <td>{{$v_teacher->teachers_address}}</td>
                          <td><img src="{{URL::to($v_teacher->teachers_image)}}"  height="80" width="100" style="border-radius: 50%;" ></td>
                          <td> 
	                          	@if ($v_teacher->teachers_department== 1)           
	                               <span class="label label-success">{{'CSE'}}</span>
	                            @elseif($v_teacher->teachers_department== 2) 
	                            <span class="label label-primary">{{'BBA'}}</span> 
	                            @elseif($v_teacher->teachers_department== 3) 
	                            <span class="label label-warning">{{'EEE'}}</span> 
	                            @elseif($v_teacher->teachers_department== 4) 
	                            <span class="label label-info">{{'ECE'}}</span>
	                            @else
	                            <span class="label label-important">{{'Not defined'}}</span>
	                            @endif
                        </td>
                       <td>
                            
                          <a href="{{ URL::to('/teacher_delete',$v_teacher->teachers_id) }}" id="delete"><button class="btn btn-outline-danger">Delete</button></a>
                          </td>
              @endforeach 
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

@endsection