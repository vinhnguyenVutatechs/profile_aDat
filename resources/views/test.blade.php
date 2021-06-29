<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="admin-themes-lab">
    <meta name="author" content="themes-lab">
    <link rel="shortcut icon" href="{{asset('public/admins/assets/global/images/favicon.png')}}" type="image/png">
    <title>Phạm Tiến Đạt | Dịch vụ Facebook</title>
    <link href="{{asset('public/admins/assets/global/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('public/admins/assets/global/css/theme.css')}}" rel="stylesheet">
    <link href="{{asset('public/admins/assets/global/css/ui.css')}}" rel="stylesheet">
    <link href="{{asset('public/admins/assets/admin/layout1/css/layout.css')}}" rel="stylesheet">
    <!-- BEGIN PAGE STYLE -->
    <link href="{{asset('public/admins/assets/global/plugins/metrojs/metrojs.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/admins/assets/global/plugins/maps-amcharts/ammap/ammap.css')}}" rel="stylesheet">
    <!-- END PAGE STYLE -->
    <script src="{{asset('public/admins/assets/global/plugins/modernizr/modernizr-2.6.2-respond-1.1.0.min.js')}}"></script>
</head>

<body class="fixed-topbar fixed-sidebar theme-sdtl color-default dashboard">
    <!--[if lt IE 7]>
    <![endif]-->
    <section>
    <!-- BEGIN SIDEBAR -->
    <div class="sidebar">
        <div class="logopanel">
        <h1>
            <a href="dashboard.html"></a>
        </h1>
        </div>
        <div class="sidebar-inner">
        <div class="sidebar-top">
            <form action="http://themes-lab.com/make/admin/layout1/search-result.html" method="post" class="searchform" id="search-results">
            <input type="text" class="form-control" name="keyword" placeholder="Search...">
            </form>
            <div class="userlogged clearfix">
            <i class="icon icons-faces-users-01"></i>
            <div class="user-details">
                <h4>Mike Mayers</h4>
                <div class="dropdown user-login">
                <button class="btn btn-xs dropdown-toggle btn-rounded" type="button" data-toggle="dropdown" data-hover="dropdown" data-close-others="true" data-delay="300">
                <i class="online"></i><span>Available</span><i class="fa fa-angle-down"></i>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="#"><i class="busy"></i><span>Busy</span></a></li>
                    <li><a  href="#"><i class="turquoise"></i><span>Invisible</span></a></li>
                    <li><a href="#"><i class="away"></i><span>Away</span></a></li>
                </ul>
                </div>
            </div>
            </div>
        </div>
        <div class="menu-title">
            Navigation 
            <div class="pull-right menu-settings">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true" data-delay="300"> 
            <i class="icon-settings"></i>
            </a>
            <ul class="dropdown-menu">
                <li><a href="#" id="reorder-menu" class="reorder-menu">Reorder menu</a></li>
                <li><a href="#" id="remove-menu" class="remove-menu">Remove elements</a></li>
                <li><a href="#" id="hide-top-sidebar" class="hide-top-sidebar">Hide user &amp; search</a></li>
            </ul>
            </div>
        </div>
        <ul class="nav nav-sidebar">
            <li class=" nav-active active">
            <a href="/">
                <i class="icon-home"></i>
                <span>Dashboard</span>
            </a>
            </li>

            <li class="nav-parent">
                <a><i class="icon-note"></i><span>Quản lý Thư</span> <span class="fa arrow"></span></a>
                <ul class="children collapse">
                    <li><a href="{{route('Email', 'hoan-thanh')}}">Thư đã hoàn thành</a></li>
                    <li><a href="{{route('Email', 'chua-hoan-thanh')}}">Thư chưa hoàn thành</a></li>
                </ul>
            </li>

            <li class="">
                <a href="{{route('Categories')}}">
                    <i class="icon-home"></i>
                    <span>Quản lý danh mục</span>
                </a>
            </li>

             <li class="">
                <a href="#">
                    <i class="icon-home"></i>
                    <span>Quản lý Blog</span>
                </a>
            </li>

            <li class="nav-parent">
                <a><i class="icon-bulb"></i><span>Settings</span> <span class="fa arrow"></span></a>
                <ul class="children collapse">
                    <li><a href="{{route('Mail', 'cong-dong')}}">Community</a></li>
                    <li><a href="{{route('Mail', 'cau-hinh')}}">Widget</a></li>
                </ul>
            </li>
        {{-- TRUE --}}
            <li class="nav-parent">
            <a href="#"><i class="fa fa-table"></i><span>Tables</span><span class="fa arrow"></span></a>
            <ul class="children collapse">
                <li><a href="tables.html"> Tables Styling</a></li>
                <li><a href="tables-dynamic.html"> Tables Dynamic</a></li>
                <li><a href="tables-filter.html"> Tables Filter</a></li>
                <li><a href="tables-editable.html"> Tables Editable</a></li>
            </ul>
            </li>
            <li class="nav-parent">
                <a href="#"><i class="fa fa-table"></i><span>Danh sách chung</span></a>
            </li>
            <li class="nav-parent">
                <a href="#"><i class="fa fa-table"></i><span>Quản lý danh mục</span></a>
            </li>
            
        </ul>
        </div>
    </div>
    <div class="main-content">
        <!-- BEGIN TOPBAR -->
        <div class="topbar">
        <div class="header-left">
            <div class="topnav">
            <a class="menutoggle" href="#" data-toggle="sidebar-collapsed"><span class="menu__handle"><span>Menu</span></span></a>
            <ul class="nav nav-icons">
                <li><a class="toggle-sidebar-top"><span class="icon-user-following"></span></a></li>
                <li><a href="{{route('Mail', 'cau-hinh')}}"><span class="octicon octicon-mail-read"></span></a></li>
            </ul>
            </div>
        </div>
        <div class="header-right">
            <ul class="header-menu nav navbar-nav">
            <li class="dropdown" id="messages-header">
                <a href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                <i class="icon-paper-plane"></i>
                <span class="badge badge-primary badge-header">
                {{$alert_new->count()}}
                </span>
                </a>
                <ul class="dropdown-menu">
                <li class="dropdown-header clearfix">
                    <p class="pull-left">
                    You have {{$alert_new->count()}} Messages
                    </p>
                </li>

                <li class="dropdown-body">
                    <ul class="dropdown-menu-list withScroll" data-height="220">
                        @foreach ($alert_new as $value)
                        <li class="clearfix">
                            <span class="pull-left p-r-5">
                            </span>
                            <div class="clearfix">
                            <div>
                                <strong>{{$value->name}}</strong> 
                                <small class="pull-right text-muted">
                                {{Carbon\Carbon::parse($value->created_at)->toFormattedDateString()}}
                                </small>
                            </div>
                            <p>{{Str::substr($value->content, 0, 100)}}...</p>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </li>
                <li class="dropdown-footer clearfix">
                    <a href="#" class="pull-left">Xem tất cả</a>
                    <a href="#" class="pull-right">
                    <i class="icon-settings"></i>
                    </a>
                </li>
                </ul>
            </li>
            <!-- END MESSAGES DROPDOWN -->
            <!-- BEGIN USER DROPDOWN -->
            <li class="dropdown" id="user-header">
                <a href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                <span class="username">Hi, {{Auth::user()->name}}</span>
                </a>
                <ul class="dropdown-menu">
                <li>
                    <a href="#"><i class="icon-user"></i><span>My Profile</span></a>
                </li>
                <li>
                    <a href="#"><i class="icon-calendar"></i><span>My Calendar</span></a>
                </li>
                <li>
                    <a href="#"><i class="icon-settings"></i><span>Account Settings</span></a>
                </li>
                <li>
                    <a href="{{route('Logout')}}"><i class="icon-logout"></i><span>Logout</span></a>
                </li>
                </ul>
            </li>
            <!-- END USER DROPDOWN -->
            <!-- CHAT BAR ICON -->
            <li id="quickview-toggle"><a href="#"><i class="icon-bubbles"></i></a></li>
            </ul>
        </div>
        <!-- header-right -->
        </div>