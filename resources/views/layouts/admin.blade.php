

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Dark Admin</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{--<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />--}}
    {{--<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />--}}
    <link href="{{ asset('admin/css/font-awesome.min.css') }}" rel="stylesheet">
    {{--<link rel="stylesheet" type="text/css" href="css/local.css" />--}}
    <link href="{{ asset('admin/css/local.css') }}" rel="stylesheet">

    {{--<script src="{{ asset('js/app.js') }}"></script>--}}
    <script src="{{ asset('admin/js/jquery-1.10.2.min.js') }}"></script>
    <script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>

    <!-- you need to include the shieldui css and js assets in order for the charts to work -->
    {{--<link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/light-bootstrap/all.min.css" />--}}
    {{--<link id="gridcss" rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/dark-bootstrap/all.min.css" />--}}
    {{--<script src="{{ asset('admin/js/all.min.css') }}"></script>--}}

    {{--<script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>--}}
    <script src="{{ asset('admin/js/shieldui-all.min.js') }}"></script>
    {{--<script type="text/javascript" src="http://www.prepbootstrap.com/Content/js/gridData.js"></script>--}}
    {{--<script type="text/javascript" src="http://www.prepbootstrap.com/Content/js/gridData.js"></script>--}}
</head>
<body>
<div id="wrapper">
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">Admin Panel</a>
        </div>
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul id="active" class="nav navbar-nav side-nav">
                <li class="{{ Request::path() == 'admin/dashboard' ? 'selected' : '' }}"><a href="{{ route('admin.root') }}"><i class="fa fa-bullseye"></i> Dashboard</a></li>
                <li class="{{ Request::path() == 'admin/dashboard/Home' ? 'selected' : '' }}"><a href="{{ route('admin.home') }}"><i class="fa fa-home" aria-hidden="true"></i> Home page</a></li>
                <li class="{{ Request::path() == 'admin/dashboard/Gallery' ? 'selected' : '' }}"><a href="{{ route('admin.gallery') }}"><i class="fa fa-picture-o" aria-hidden="true"></i> Gallery</a></li>
                <li class="{{ Request::path() == 'admin/dashboard/Services' ? 'selected' : '' }}"><a href="{{ route('admin.services') }}"><i class="fa fa-globe"></i> Services</a></li>
                <li class="{{ Request::path() == 'admin/dashboard/CustomerFeetback' ? 'selected' : '' }}"><a href="{{ route('admin.customerFeetback') }}"><i class="fa fa-commenting-o" aria-hidden="true"></i> Customer Feetback</a></li>
                <li class="{{ Request::path() == 'admin/dashboard/Contact' ? 'selected' : '' }}"><a href="{{ route('admin.contact') }}"><i class="fa fa-volume-control-phone" aria-hidden="true"></i> Contact</a></li>
                <li class="{{ Request::path() == 'admin/dashboard/AboutUs' ? 'selected' : '' }}"><a href="{{ route('admin.aboutUs') }}"><i class="fa fa-briefcase" aria-hidden="true"></i> About Us</a></li>
                {{--<li><a href="forms.html"><i class="fa fa-list-ol"></i> Forms</a></li>--}}
                {{--<li><a href="typography.html"><i class="fa fa-font"></i> Typography</a></li>--}}
                {{--<li><a href="bootstrap-elements.html"><i class="fa fa-list-ul"></i> Bootstrap Elements</a></li>--}}
                {{--<li><a href="bootstrap-grid.html"><i class="fa fa-table"></i> Bootstrap Grid</a></li>--}}
            </ul>
            <ul class="nav navbar-nav navbar-right navbar-user">
                <li class="dropdown messages-dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> Messages <span class="badge">2</span> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-header">2 New Messages</li>
                        <li class="message-preview">
                            <a href="#">
                                <span class="avatar"><i class="fa fa-bell"></i></span>
                                <span class="message">Security alert</span>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li class="message-preview">
                            <a href="#">
                                <span class="avatar"><i class="fa fa-bell"></i></span>
                                <span class="message">Security alert</span>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="#">Go to Inbox <span class="badge">2</span></a></li>
                    </ul>
                </li>
                <li class="dropdown user-dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Steve Miller<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
                        <li><a href="#"><i class="fa fa-gear"></i> Settings</a></li>
                        <li class="divider"></li>
                        <li>
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <i class="fa fa-power-off"></i>
                                Log Out
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>

                    </ul>
                </li>
                <li class="divider-vertical"></li>
                <li>
                    <form class="navbar-search">
                        <input type="text" placeholder="Search" class="form-control">
                    </form>
                </li>
            </ul>
        </div>
    </nav>

    <div id="page-wrapper">
        @yield('content')
    </div>
</div>
<!-- /#wrapper -->

<script type="text/javascript">
    jQuery(function ($) {
        var performance = [12, 43, 34, 22, 12, 33, 4, 17, 22, 34, 54, 67],
            visits = [123, 323, 443, 32],
            traffic = [
                {
                    Source: "Direct", Amount: 323, Change: 53, Percent: 23, Target: 600
                },
                {
                    Source: "Refer", Amount: 345, Change: 34, Percent: 45, Target: 567
                },
                {
                    Source: "Social", Amount: 567, Change: 67, Percent: 23, Target: 456
                },
                {
                    Source: "Search", Amount: 234, Change: 23, Percent: 56, Target: 890
                },
                {
                    Source: "Internal", Amount: 111, Change: 78, Percent: 12, Target: 345
                }];


        $("#shieldui-chart1").shieldChart({
            theme: "dark",

            primaryHeader: {
                text: "Visitors"
            },
            exportOptions: {
                image: false,
                print: false
            },
            dataSeries: [{
                seriesType: "area",
                collectionAlias: "Q Data",
                data: performance
            }]
        });

        $("#shieldui-chart2").shieldChart({
            theme: "dark",
            primaryHeader: {
                text: "Traffic Per week"
            },
            exportOptions: {
                image: false,
                print: false
            },
            dataSeries: [{
                seriesType: "pie",
                collectionAlias: "traffic",
                data: visits
            }]
        });

        $("#shieldui-grid1").shieldGrid({
            dataSource: {
                data: traffic
            },
            sorting: {
                multiple: true
            },
            rowHover: false,
            paging: false,
            columns: [
                { field: "Source", width: "170px", title: "Source" },
                { field: "Amount", title: "Amount" },
                { field: "Percent", title: "Percent", format: "{0} %" },
                { field: "Target", title: "Target" },
            ]
        });
    });
</script>
@include('flashy::message');
</body>
</html>