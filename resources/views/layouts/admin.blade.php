<!DOCTYPE html>
<!--[if IE 8]>
<html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
@if(Auth::user()->status != 'active')
    {{die("Your Account is not activated . Please active your account <a href='".url('/verification')."'>Here </a>")}}
@endif
<head>
    <meta charset="utf-8"/>
    <title>@yield('title')</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta content="" name="description"/>
    <meta content="" name="author"/>
    <meta name="_token" content="{{csrf_token()}}"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet"
          type="text/css"/>
    <link href="{{url('/assets/global/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{url('/assets/global/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{url('/assets/global/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{url('/assets/global/plugins/uniform/css/uniform.default.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{url('/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css')}}" rel="stylesheet"
          type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
    <link href="{{url('/assets/global/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{url('/assets/global/plugins/fullcalendar/fullcalendar.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{url('/assets/global/plugins/jqvmap/jqvmap/jqvmap.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{url('/assets/global/plugins/morris/morris.css')}}" rel="stylesheet" type="text/css">

    <!-- END PAGE LEVEL PLUGIN STYLES -->
    <!-- BEGIN PAGE STYLES -->
    <link href="{{url('/assets/admin/pages/css/tasks.css')}}" rel="stylesheet" type="text/css"/>
    <!-- END PAGE STYLES -->
    <!-- BEGIN THEME STYLES -->
    <!-- DOC: To use 'rounded corners' style just load 'components-rounded.css' stylesheet instead of 'components.css' in the below style tag -->
    <link href="{{url('/assets/global/css/components-rounded.css')}}" id="style_components" rel="stylesheet"
          type="text/css"/>
    <link href="{{url('/assets/global/css/plugins.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{url('/assets/admin/layout4/css/layout.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{url('/assets/admin/layout4/css/themes/light.css')}}" rel="stylesheet" type="text/css"
          id="style_color"/>
    <link href="{{url('/assets/admin/layout4/css/custom.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{url('/assets/admin/pages/css/profile.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{url('/assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css')}}"/>
    <link href="{{url('/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css')}}"
          rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="{{url('/css/sweetalert.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('/assets/global/plugins/bootstrap-summernote/summernote.css')}}" type="text/css">
    <!-- END THEME STYLES -->
    <link rel="shortcut icon" href="favicon.ico"/>
</head>

<body class="page-header-fixed page-sidebar-closed-hide-logo page-sidebar-closed-hide-logo">
<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
    <!-- BEGIN HEADER INNER -->
    <div class="page-header-inner">
        <!-- BEGIN LOGO -->
        <div class="page-logo">
            <a href="{{url('/home')}}">

            </a>
            <div class="menu-toggler sidebar-toggler">
                <!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
            </div>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
        <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse"
           data-target=".navbar-collapse">
        </a>
        <!-- END RESPONSIVE MENU TOGGLER -->
        <!-- BEGIN PAGE ACTIONS -->
        <!-- DOC: Remove "hide" class to enable the page header actions -->
        <div class="page-actions">
            <div class="btn-group">
                <button type="button" class="btn red-haze btn-sm dropdown-toggle" data-toggle="dropdown"
                        data-hover="dropdown" data-close-others="true">
                    <span class="hidden-sm hidden-xs">Actions&nbsp;</span><i class="fa fa-angle-down"></i>
                </button>
                <ul class="dropdown-menu" role="menu">
                    <li>
                        <a href="{{url('/admin/user/post/create')}}">
                            <i class="icon-plus"></i> New Post </a>
                    </li>
                    <li>
                        <a href="{{url('/admin/user/song/create')}}">
                            <i class="icon-plus"></i> Add Song </a>
                    </li>
                    <li>
                        <a href="{{url('/admin/user/video/create')}}">
                            <i class="icon-plus"></i> Add Video </a>
                    </li>

                    <li>
                        <a href="{{url('/admin/user/event/create')}}">
                            <i class="icon-plus"></i> Add event </a>
                    </li>

                    <li class="divider">
                    </li>

                    <li>
                        <a href="{{url('/admin/user/posts')}}">
                            <i class="icon-docs"></i> Posts <span class="badge badge-danger">{{\App\Post::where('userId',Auth::user()->id)->count()}}</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{url('/admin/user/song/')}}">
                            <i class="icon-music-tone-alt"></i> Songs <span class="badge badge-success">{{\App\Song::where('userId',Auth::user()->id)->count()}}</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/admin/user/video/')}}">
                            <i class="icon-camcorder"></i> Videos <span class="badge badge-primary">{{\App\Video::where('userId',Auth::user()->id)->count()}}</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/admin/user/event/')}}">
                            <i class="icon-calendar"></i> Events <span class="badge badge-warning">{{\App\Event::where('userId',Auth::user()->id)->count()}}</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- END PAGE ACTIONS -->
        <!-- BEGIN PAGE TOP -->
        <div class="page-top">
            <!-- BEGIN HEADER SEARCH BOX -->
            <!-- DOC: Apply "search-form-expanded" right after the "search-form" class to have half expanded search box -->
            <form class="search-form" action="extra_search.html" method="GET">
                <div class="input-group">
                    <input type="text" class="form-control input-sm" placeholder="Search..." name="query">
                    <span class="input-group-btn">
					<a href="javascript:;" class="btn submit"><i class="icon-magnifier"></i></a>
					</span>
                </div>
            </form>
            <!-- END HEADER SEARCH BOX -->
            <!-- BEGIN TOP NAVIGATION MENU -->
            <div class="top-menu">
                <ul class="nav navbar-nav pull-right">
                    <li class="separator hide">
                    </li>
                    <!-- BEGIN NOTIFICATION DROPDOWN -->
                    <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                    <li class="dropdown dropdown-extended dropdown-notification dropdown-dark"
                        id="header_notification_bar">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                           data-close-others="true">
                            <i class="icon-bell"></i>
                            <span class="badge badge-success">
						7 </span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="external">
                                <h3><span class="bold">12 pending</span> notifications</h3>
                                <a href="#">view all</a>
                            </li>
                            <li>
                                <ul class="dropdown-menu-list scroller" style="height: 250px;"
                                    data-handle-color="#637283">
                                    <li>
                                        <a href="javascript:;">
                                            <span class="time">just now</span>
                                            <span class="details">
										<span class="label label-sm label-icon label-success">
										<i class="fa fa-plus"></i>
										</span>
										New user registered. </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="time">3 mins</span>
                                            <span class="details">
										<span class="label label-sm label-icon label-danger">
										<i class="fa fa-bolt"></i>
										</span>
										Server #12 overloaded. </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="time">10 mins</span>
                                            <span class="details">
										<span class="label label-sm label-icon label-warning">
										<i class="fa fa-bell-o"></i>
										</span>
										Server #2 not responding. </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="time">14 hrs</span>
                                            <span class="details">
										<span class="label label-sm label-icon label-info">
										<i class="fa fa-bullhorn"></i>
										</span>
										Application error. </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="time">2 days</span>
                                            <span class="details">
										<span class="label label-sm label-icon label-danger">
										<i class="fa fa-bolt"></i>
										</span>
										Database overloaded 68%. </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="time">3 days</span>
                                            <span class="details">
										<span class="label label-sm label-icon label-danger">
										<i class="fa fa-bolt"></i>
										</span>
										A user IP blocked. </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="time">4 days</span>
                                            <span class="details">
										<span class="label label-sm label-icon label-warning">
										<i class="fa fa-bell-o"></i>
										</span>
										Storage Server #4 not responding dfdfdfd. </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="time">5 days</span>
                                            <span class="details">
										<span class="label label-sm label-icon label-info">
										<i class="fa fa-bullhorn"></i>
										</span>
										System Error. </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="time">9 days</span>
                                            <span class="details">
										<span class="label label-sm label-icon label-danger">
										<i class="fa fa-bolt"></i>
										</span>
										Storage server failed. </span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <!-- END NOTIFICATION DROPDOWN -->
                    <li class="separator hide">
                    </li>


                    <li class="separator hide">
                    </li>

                    <!-- END TODO DROPDOWN -->
                    <!-- BEGIN USER LOGIN DROPDOWN -->
                    <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                    <li class="dropdown dropdown-user dropdown-dark">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                           data-close-others="true">
						<span class="username username-hide-on-mobile">
						{{Auth::user()->name}} </span>
                            <!-- DOC: Do not remove below empty space(&nbsp;) as its purposely used -->
                            <img alt="" class="img-circle"
                                 src="@if(Auth::user()->image == ""){{url('/img/me.jpg')}} @else {{url('/uploads')."/".Auth::user()->image}} @endif"/>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-default">
                            <li>
                                <a href="{{url('/profile')}}">
                                    <i class="icon-user"></i> My Profile </a>
                            </li>

                            <li class="divider">
                            </li>

                            <li>
                                <a href="{{url('/logout')}}">
                                    <i class="icon-key"></i> Log Out </a>

                            </li>
                        </ul>
                    </li>
                    <!-- END USER LOGIN DROPDOWN -->
                    <!-- BEGIN USER LOGIN DROPDOWN -->
                    <li class="dropdown dropdown-extended quick-sidebar-toggler">
                        <span class="sr-only">Toggle Quick Sidebar</span>
                        <i class="icon-logout"></i>
                    </li>
                    <!-- END USER LOGIN DROPDOWN -->
                </ul>
            </div>
            <!-- END TOP NAVIGATION MENU -->
        </div>
        <!-- END PAGE TOP -->
    </div>
    <!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
    <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar-wrapper">
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <div class="page-sidebar navbar-collapse collapse">
            <!-- BEGIN SIDEBAR MENU -->

            <ul class="page-sidebar-menu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                <li class="start active ">
                    <a href="{{url('/home')}}">
                        <i class="icon-home"></i>
                        <span class="title">Dashboard</span>
                    </a>
                </li>


                <li>
                    <a href="javascript:;">
                        <i class="icon-envelope-open"></i>
                        <span class="title">Contact</span>
                        <span class="arrow "></span>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="{{url('/contact/create')}}">
                                <i class="icon-plus"></i>
                                Add new Contact</a>
                        </li>
                        <li>
                            <a href="{{url('/contact')}}">
                                <i class="icon-list"></i>
                                <span class="badge badge-warning">{{\App\Contacts::where('parent',Auth::user()->email)->count()}}</span>All Contacts</a>
                        </li>

                    </ul>
                </li>
                @if(Auth::user()->type == 'admin')
                    <li>
                        <a href="javascript:;">
                            <i class="icon-users"></i>
                            <span class="title">Users</span>
                            <span class="arrow "></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="{{url('/admin/user/add')}}">
                                    <i class="icon-user-follow"></i>
                                    Add New User</a>
                            </li>
                            <li>
                                <a href="{{url('/admin/user/list')}}">
                                    <i class="icon-users"></i>
                                    <span class="badge badge-danger">{{\App\User::all()->count()}}</span>All User</a>
                            </li>

                            {{--<li>--}}
                                {{--<a href="{{url('/user/requests')}}">--}}
                                    {{--<i class="icon-share"></i>--}}
                                    {{--<span class="badge badge-warning">5</span>User Requests</a>--}}
                            {{--</li>--}}

                        </ul>
                    </li>
                @endif

                <li>
                    <a href="{{url('/profile')}}">
                        <i class="icon-user"></i>
                        <span class="title">Profile</span>

                    </a>

                </li>
                @if(Auth::user()->type == 'admin')
                    <li>
                        <a href="{{url('/settings')}}">
                            <i class="icon-settings"></i>
                            <span class="title">Settings</span>

                        </a>

                    </li>
                @endif

            </ul>
            <!-- END SIDEBAR MENU -->
        </div>
    </div>
    <!-- END SIDEBAR -->
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <div class="page-content">

            @yield('content')
        </div>
    </div>
    <!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="page-footer">
    <div class="page-footer-inner">
        2016 &copy; <a
                href="http://trinolab.website"
                title="Officials trinolab site" target="_blank">TrinoLab</a>
    </div>
    <div class="scroll-to-top">
        <i class="icon-arrow-up"></i>
    </div>
</div>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<script src="{{url('/assets/global/plugins/jquery.min.js')}}" type="text/javascript"></script>
<!--[if lt IE 9]>
<script src="{{url('/assets/global/plugins/respond.min.js')}}"></script>
<script src="{{url('/assets/global/plugins/excanvas.min.js')}}"></script>
<![endif]-->

<script src="{{url('/assets/global/plugins/jquery-migrate.min.js')}}" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="{{url('/assets/global/plugins/jquery-ui/jquery-ui.min.js')}}" type="text/javascript"></script>
<script src="{{url('/assets/global/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{url('/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js')}}"
        type="text/javascript"></script>
<script src="{{url('/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}"
        type="text/javascript"></script>
<script src="{{url('/assets/global/plugins/jquery.blockui.min.js')}}" type="text/javascript"></script>
<script src="{{url('/assets/global/plugins/jquery.cokie.min.js')}}" type="text/javascript"></script>
<script src="{{url('/assets/global/plugins/uniform/jquery.uniform.min.js')}}" type="text/javascript"></script>
<script src="{{url('/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}"
        type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->

<!-- IMPORTANT! fullcalendar depends on jquery-ui.min.js for drag & drop support -->
<script src="{{url('/assets/global/plugins/morris/morris.min.js')}}" type="text/javascript"></script>
<script src="{{url('/assets/global/plugins/morris/raphael-min.js')}}" type="text/javascript"></script>
<script src="{{url('/assets/global/plugins/jquery.sparkline.min.js')}}" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{url('/assets/global/scripts/metronic.js')}}" type="text/javascript"></script>
<script src="{{url('/assets/admin/layout4/scripts/layout.js')}}" type="text/javascript"></script>
<script src="{{url('/assets/admin/layout2/scripts/quick-sidebar.js')}}" type="text/javascript"></script>
<script src="{{url('/assets/admin/layout4/scripts/demo.js')}}" type="text/javascript"></script>
<script src="{{url('/assets/admin/pages/scripts/index3.js')}}" type="text/javascript"></script>
<script src="{{url('/assets/admin/pages/scripts/tasks.js')}}" type="text/javascript"></script>
<script src="{{url('/assets/global/plugins/datatables/all.min.js')}}" type="text/javascript"></script>
<script src="{{url('/assets/global/plugins/bootstrap-summernote/summernote.min.js')}}" type="text/javascript"></script>
<script src="{{url('/js/sweetalert.min.js')}}"></script>


<!-- END PAGE LEVEL SCRIPTS -->
<script>
    jQuery(document).ready(function () {
        Metronic.init(); // init metronic core componets
        Layout.init(); // init layout
        Demo.init(); // init demo features
        QuickSidebar.init(); // init quick sidebar
        Index.init(); // init index page
        Tasks.initDashboardWidget(); // init tash dashboard widget
    });
</script>
@yield('js')
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>