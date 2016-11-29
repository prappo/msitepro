@extends('layouts.admin')
@section('title','Posts list')
@section('content')
    <div class="row">

        <div class="col-md-12">
            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-globe"></i>Your Posts
                    </div>
                    <div class="tools"></div>
                </div>
                <div class="portlet-body">
                    <table class="table table-striped table-bordered table-hover" id="sample_2">
                        <thead>
                        <tr>
                            <th> Title</th>
                            <th> Content</th>
                            <th> Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($datas as $data)
                            <tr>
                                <td> {{$data->title}}</td>
                                <td> {!! $data->content !!}</td>
                                <td> <div class="btn-group"><button class="btn btn-small btn-danger"> <i class="fa fa-trash"></i> Delete</button> </div> </td>
                            </tr>

                        @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
