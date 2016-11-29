@extends('layouts.admin')
@section('title','Contact list')
@section('content')
    <div class="row">

        <div class="col-md-12">
            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-globe"></i>User Lists
                    </div>
                    <div class="tools"></div>
                </div>
                <div class="portlet-body">
                    <table class="table table-striped table-bordered table-hover" id="sample_2">
                        <thead>
                        <tr>
                            <th> Name</th>
                            <th> Email</th>
                            <th> Image</th>
                            <th> Status</th>
                            <th> Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($datas as $data)
                            <tr>
                                <td> {{$data->name}}</td>
                                <td> {{$data->email}}</td>
                                <td><img height="80" width="80" class="img-circle"
                                         src="@if($data->image == null){{url('/img/me.jpg')}}@else{{url('/uploads')}}/{{$data->image}}@endif">
                                </td>
                                <td>@if($data->status == 'active')<span class="label label-success">Active</span>@else
                                        <span class="label label-danger">Deactive</span> @endif</td>
                                <td>
                                    <button @if($data->status == 'active') disabled @endif data-id="{{$data->id}}" id="active" class="btn btn-success">Active</button>
                                    <button @if($data->status != 'active') disabled @endif data-id="{{$data->id}}" id="deactive" class="btn btn-danger">Deactive
                                    </button>
                                </td>

                            </tr>

                        @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('js')
    <script>
        $('.btn-success').click(function () {
            var id = $(this).attr('data-id');
            $.ajax({
                type: 'POST',
                url: '{{url('/admin/user/status')}}',
                data: {
                    'id': id,
                    'status': 'active',
                    '_token':'{{csrf_token()}}'
                },
                success: function (data) {
                    if (data == 'success') {
                        swal('Success', 'User activated', 'success');
                        location.reload();
                    } else {
                        swal('Error', data, 'error');
                    }
                },
                error: function (data) {
                    swal('Error', 'Something went wrong , Please check the console message', 'error');
                    console.log(data.responseText);
                }
            });
        });

        $('.btn-danger').click(function () {
            var id = $(this).attr('data-id');
            $.ajax({
                type: 'POST',
                url: '{{url('/admin/user/status')}}',
                data: {
                    'id': id,
                    'status': 'deactive',
                    '_token':'{{csrf_token()}}'
                },
                success: function (data) {
                    if (data == 'success') {
                        swal('Success', 'User Deactivated', 'success');
                        location.reload();
                    } else {
                        swal('Error', data, 'error');
                    }
                },
                error: function (data) {
                    swal('Error', 'Something went wrong , Please check the console message', 'error');
                    console.log(data.responseText);
                }
            });
        });
    </script>
@endsection