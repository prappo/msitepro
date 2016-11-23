@extends('layouts.admin')
@section('title','Add new User')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN PROFILE SIDEBAR -->

            <!-- END BEGIN PROFILE SIDEBAR -->
            <!-- BEGIN PROFILE CONTENT -->


            <div class="col-md-12">
                <div class="portlet light">
                    <div class="portlet-title tabbable-line">
                        <div class="caption caption-md">
                            <i class="icon-globe theme-font hide"></i>
                            <span class="caption-subject font-blue-madison bold uppercase">New User</span>
                        </div>
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#tab_1_1" data-toggle="tab" aria-expanded="true">User Details</a>
                            </li>

                        </ul>
                    </div>
                    <div class="portlet-body">
                        <div class="tab-content">
                            <!-- PERSONAL INFO TAB -->
                            <div class="tab-pane active" id="tab_1_1">
                                <form role="form" action="#">
                                    <div class="form-group">
                                        <label class="control-label">Name</label>
                                        <input required id="name" type="text" placeholder="User name"
                                               value=""
                                               class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Email</label>
                                        <input required id="email" type="email" placeholder="User Email"
                                               value=""
                                               class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Password</label>
                                        <input required id="pass" type="password" placeholder="User Password"
                                               value=""
                                               class="form-control">
                                    </div>


                                    <div class="margiv-top-10">
                                        <a id="addUser" class="btn green-haze">
                                            Add User </a>

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
        $('#addUser').click(function () {
            $.ajax({
                type:'POST',
                url:'{{url('/admin/user/add')}}',
                data:{
                    'name':$('#name').val(),
                    'email':$('#email').val(),
                    'pass':$('#pass').val(),
                    '_token': '{{csrf_token()}}'
                },success:function (data) {
                    if(data=='success'){
                        swal('Success','New user created','success');
                        location.reload();
                    }else{
                        swal('Error',data,'error');
                    }
                },
                error:function (data) {
                    swal('Something went wrong please check console message');
                    console.log(data.responseText);
                }
            })
        })
    </script>
@endsection