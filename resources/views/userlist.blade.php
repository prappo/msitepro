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
                                <td> <img height="80" width="80" class="img-circle" src="@if($data->image == null){{url('/img/me.jpg')}}@else{{url('/uploads')}}/{{$data->image}}@endif"> </td>
                                <td>@if($data->status == 'active')<span class="label label-success">Active</span>@else<span class="label label-danger">Deactive</span> @endif</td>
                                <td> <button id="active" class="btn btn-success">Active</button> <button id="deactive" class="btn btn-danger">Deactive</button> </td>

                            </tr>

                        @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
