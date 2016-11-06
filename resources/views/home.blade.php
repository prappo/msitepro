@extends('layouts.admin')
@section('title','Dashboard')
@section('content')



    <div class="row margin-top-10">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="dashboard-stat2">
                <div class="display">
                    <div class="number">
                        <h3 class="font-green-sharp">7800</h3>
                        <small>TOTAL CONTENTS</small>
                    </div>
                    <div class="icon">
                        <i class="icon-docs"></i>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="dashboard-stat2">
                <div class="display">
                    <div class="number">
                        <h3 class="font-red-haze">1349</h3>
                        <small>TOTAL SONGS</small>
                    </div>
                    <div class="icon">
                        <i class="icon-music-tone"></i>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="dashboard-stat2">
                <div class="display">
                    <div class="number">
                        <h3 class="font-blue-sharp">567</h3>
                        <small>TOTAL VIDEOS</small>
                    </div>
                    <div class="icon">
                        <i class="icon-camrecorder"></i>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="dashboard-stat2">
                <div class="display">
                    <div class="number">
                        <h3 class="font-purple-soft">276</h3>
                        <small>TOTAL EVENT</small>
                    </div>
                    <div class="icon">
                        <i class="icon-calendar"></i>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 col-sm-12">
            <!-- BEGIN PORTLET-->
            <div class="portlet light ">
                <div class="portlet-title">
                    <div class="caption caption-md">
                        <i class="icon-bar-chart theme-font-color hide"></i>
                        <span class="caption-subject theme-font-color bold uppercase">Users</span>

                    </div>

                </div>
                <div class="portlet-body">
                    <div class="row number-stats margin-bottom-30">
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <div class="stat-left">
                                <div class="stat-chart">
                                    <!-- do not line break "sparkline_bar" div. sparkline chart has an issue when the container div has line break -->
                                    <div id="sparkline_bar">
                                        <canvas width="90" height="45"
                                                style="display: inline-block; width: 90px; height: 45px; vertical-align: top;"></canvas>
                                    </div>
                                </div>
                                <div class="stat-number">
                                    <div class="title">
                                        Total
                                    </div>
                                    <div class="number">
                                        2
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <div class="stat-right">
                                <div class="stat-chart">
                                    <!-- do not line break "sparkline_bar" div. sparkline chart has an issue when the container div has line break -->
                                    <div id="sparkline_bar2">
                                        <canvas width="90" height="45"
                                                style="display: inline-block; width: 90px; height: 45px; vertical-align: top;"></canvas>
                                    </div>
                                </div>
                                <div class="stat-number">
                                    <div class="title">
                                        New
                                    </div>
                                    <div class="number">
                                        2
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-scrollable table-scrollable-borderless">
                        <table class="table table-hover table-light">
                            <thead>
                            <tr class="uppercase">
                                <th colspan="2">
                                    Name
                                </th>
                                <th>
                                    Posts
                                </th>
                                <th>
                                    Songs
                                </th>
                                <th>
                                    Videos
                                </th>
                                <th>
                                    Events
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="fit">
                                    <img class="user-pic" src="{{url('/img/me.jpg')}}">
                                </td>
                                <td>
                                    <a href="javascript:;" class="primary-link">Prappo Prince</a>
                                </td>
                                <td>
                                    34
                                </td>
                                <td>
                                    45
                                </td>
                                <td>
                                    124
                                </td>
                                <td>
                                    34
                                </td>
                            </tr>
                            <tr>
                                <td class="fit">
                                    <img class="user-pic" src="{{url('/img/mehedi.jpg')}}">
                                </td>
                                <td>
                                    <a href="javascript:;" class="primary-link">Mehedi Hassan</a>
                                </td>
                                <td>
                                    34
                                </td>
                                <td>
                                    45
                                </td>
                                <td>
                                    124
                                </td>
                                <td>
                                    34
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- END PORTLET-->
        </div>
        <div class="col-md-6 col-sm-12">
            <!-- BEGIN PORTLET-->
            <div class="portlet light">
                <div class="portlet-title tabbable-line">
                    <div class="caption caption-md">
                        <i class="icon-globe theme-font-color hide"></i>
                        <span class="caption-subject theme-font-color bold uppercase">Feeds</span>
                    </div>
                    <ul class="nav nav-tabs">

                        <li class="active">
                            <a href="#tab_1_2" data-toggle="tab" aria-expanded="false">
                                Activities </a>
                        </li>
                    </ul>
                </div>
                <div class="portlet-body">
                    <!--BEGIN TABS-->
                    <div class="tab-content">

                        <div class="tab-pane active" id="tab_1_2">
                            <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 337px;"><div class="scroller" style="height: 337px; overflow: hidden; width: auto;" data-always-visible="1" data-rail-visible1="0" data-handle-color="#D7DCE2" data-initialized="1">
                                    <ul class="feeds">
                                        <li>
                                            <a href="javascript:;">
                                                <div class="col1">
                                                    <div class="cont">
                                                        <div class="cont-col1">
                                                            <div class="label label-sm label-success">
                                                                <i class="fa fa-bell-o"></i>
                                                            </div>
                                                        </div>
                                                        <div class="cont-col2">
                                                            <div class="desc">
                                                                New user registered
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col2">
                                                    <div class="date">
                                                        Just now
                                                    </div>
                                                </div>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="javascript:;">
                                                <div class="col1">
                                                    <div class="cont">
                                                        <div class="cont-col1">
                                                            <div class="label label-sm label-success">
                                                                <i class="fa fa-bell-o"></i>
                                                            </div>
                                                        </div>
                                                        <div class="cont-col2">
                                                            <div class="desc">
                                                                New user registered
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col2">
                                                    <div class="date">
                                                        Just now
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <div class="col1">
                                                    <div class="cont">
                                                        <div class="cont-col1">
                                                            <div class="label label-sm label-success">
                                                                <i class="fa fa-bell-o"></i>
                                                            </div>
                                                        </div>
                                                        <div class="cont-col2">
                                                            <div class="desc">
                                                                New user registered
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col2">
                                                    <div class="date">
                                                        Just now
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <div class="col1">
                                                    <div class="cont">
                                                        <div class="cont-col1">
                                                            <div class="label label-sm label-success">
                                                                <i class="fa fa-bell-o"></i>
                                                            </div>
                                                        </div>
                                                        <div class="cont-col2">
                                                            <div class="desc">
                                                                New user registered
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col2">
                                                    <div class="date">
                                                        Just now
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <div class="col1">
                                                    <div class="cont">
                                                        <div class="cont-col1">
                                                            <div class="label label-sm label-success">
                                                                <i class="fa fa-bell-o"></i>
                                                            </div>
                                                        </div>
                                                        <div class="cont-col2">
                                                            <div class="desc">
                                                                New user registered
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col2">
                                                    <div class="date">
                                                        Just now
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <div class="col1">
                                                    <div class="cont">
                                                        <div class="cont-col1">
                                                            <div class="label label-sm label-success">
                                                                <i class="fa fa-bell-o"></i>
                                                            </div>
                                                        </div>
                                                        <div class="cont-col2">
                                                            <div class="desc">
                                                                New user registered
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col2">
                                                    <div class="date">
                                                        Just now
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <div class="col1">
                                                    <div class="cont">
                                                        <div class="cont-col1">
                                                            <div class="label label-sm label-success">
                                                                <i class="fa fa-bell-o"></i>
                                                            </div>
                                                        </div>
                                                        <div class="cont-col2">
                                                            <div class="desc">
                                                                New user registered
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col2">
                                                    <div class="date">
                                                        Just now
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div><div class="slimScrollBar" style="width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px; background: rgb(215, 220, 226);"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; opacity: 0.2; z-index: 90; right: 1px; background: rgb(234, 234, 234);"></div></div>
                        </div>
                    </div>
                    <!--END TABS-->
                </div>
            </div>
            <!-- END PORTLET-->
        </div>
    </div>



@endsection
