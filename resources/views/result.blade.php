@extends('layouts.app')
@section('title','Verify')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Verification</div>
                    <div class="panel-body">
                        @if($status == "error")
                            <div class="panel panel-danger">
                                <div class="panel-heading"><h3 class="panel-title">Error</h3></div>
                                <div class="panel-body"> {{$message}}</div>
                            </div>
                        @else
                            <div class="panel panel-success">
                                <div class="panel-heading"><h3 class="panel-title">Success</h3></div>
                                <div class="panel-body"> {{$message}}
                                <br>
                                    Go to your profile <a class="btn btn-primary" href="{{url('/profile')}}">Click here</a>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
