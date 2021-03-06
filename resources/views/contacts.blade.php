@extends('layouts.admin')
@section('title','Contact list')
@section('content')
    <div class="row">

        <div class="col-md-12">
            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-globe"></i>Your Contact Lists
                    </div>
                    <div class="tools"></div>
                </div>
                <div class="portlet-body">
                    <table class="table table-striped table-bordered table-hover" id="sample_2">
                        <thead>
                        <tr>
                            <th> Name</th>
                            <th> Mobile</th>
                            <th> District</th>
                            <th> Area</th>
                            <th> Facebook ID</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($datas as $data)
                            <tr>
                                <td> {{$data->name}}</td>
                                <td> {{$data->mobile}}</td>
                                <td> {{$data->district}}</td>
                                <td> {{$data->area}}</td>
                                <td> {{$data->facebookId}}</td>
                            </tr>

                        @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
