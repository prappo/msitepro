@extends('layouts.admin')
@section('title','Add new Video')
@section('content')
    <div class="row">
        <div class="col-md-12">

            <div class="col-md-12">
                <div class="portlet light">
                    <div class="portlet-title tabbable-line">
                        <div class="caption caption-md">
                            <i class="icon-globe theme-font hide"></i>
                            <span class="caption-subject font-blue-madison bold uppercase">New Video</span>
                        </div>
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#tab_1_1" data-toggle="tab" aria-expanded="true">Video Details</a>
                            </li>

                        </ul>
                    </div>
                    <div class="portlet-body">
                        <div class="tab-content">
                            <!-- PERSONAL INFO TAB -->
                            <div class="tab-pane active" id="tab_1_1">
                                <form role="form" action="#">
                                    <div class="form-group">
                                        <label class="control-label">Title</label>
                                        <input id="title" type="text" placeholder="Video Title"
                                               value=""
                                               class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Category</label>
                                        <select class="form-control" id="cat">
                                            @foreach(\App\VideoCat::all() as $cat)
                                                <option value="{{$cat->id}}">{{$cat->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Content</label>
                                        <textarea placeholder="Video Content" rows="3" id="content"
                                                  class="form-control"></textarea>
                                    </div>



                                    <div class="margiv-top-10">
                                        <a id="addVideo" class="btn green-haze">
                                            Add Video </a>

                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


        </div>
        <!-- END PROFILE CONTENT -->
    </div>

@endsection
@section('js')
    <script>
        $('#addVideo').click(function () {
            $.ajax({
                type: 'POST',
                url: '{{url('/admin/user/video')}}',
                data: {
                    'title': $('#title').val(),
                    'data': $('#content').val(),
                    'cat': $('#cat').val(),
                    '_token': '{{csrf_token()}}'
                },
                success: function (data) {
                    if (data == 'success') {
                        swal('Success', 'New Video added','success');
                    }else{
                        swal('Error',data,'error');
                    }
                },
                error:function (data) {
                    swal('Error','Something went wrong please check console log','error');
                    console.log(data.responseText);
                }
            });
        })
    </script>
@endsection