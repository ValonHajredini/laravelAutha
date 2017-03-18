<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/lightbox.css') }}" rel="stylesheet">
    <link href="{{ asset('css/client.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
<div class="uucltd">
    <!-- The navigation -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-2 col-xs-12  col-ss-12" style="margin-bottom:15px;">
            <a href="{{ route('client.root') }}" id="logo"><img src="images/logo.png" alt="" style="margin:0px auto"></a>
        </div>
        <div class="col-md-9 col-sm-10 col-xs-12">
            <nav class="navbar navbar-default main_nav">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" style="background-color: #9db668;" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar" style="color:#ffffff"></span>
                            <span class="icon-bar" style="color:#ffffff"></span>
                            <span class="icon-bar" style="color:#ffffff"></span>
                            <span class="icon-bar" style="color:#ffffff"></span>
                        </button>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse full_nav" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="{{ Request::path() == '/' ? 'in_active' : '' }}"><a href="{{ route('client.root') }}">Home <span class="sr-only">(current)</span></a></li>
                            <li class="{{ Request::path() == 'gallery' ? 'in_active' : '' }}"><a href="{{ route('client.gallery') }}">Gallery</a></li>
                            <li class="{{ Request::path() == 'aboutUs' ? 'in_active' : '' }}"><a href="{{ route('client.aboutUs') }}">About us</a></li>
                            <li class="{{ Request::path() == 'services' ? 'in_active' : '' }}"><a href="{{ route('client.services') }}">Services</a></li>
                            <li class="{{ Request::path() == 'CustomerFeedback' ? 'in_active' : '' }}"><a href="{{ route('client.customerfeedback') }}">Customer feedback</a></li>
                            <li class="{{ Request::path() == 'Contact' ? 'in_active' : '' }}"><a href="{{ route('client.contact') }}">Contact</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </div>
    </div>
</div>
<div class="under_nav"></div>
@yield('content')
</div>

<footer>
    <div class="footer" id="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3  col-md-3 col-sm-6 col-xs-12 ">
                    <h3> Find us at</h3>
                    <ul class="social">
                        <li> <a href="http://facebook.com/UandUConstruction/"> <i class=" fa fa-facebook"> &nbsp; </i> </a> </li>
                        <li> <a href="http://twitter.com"> <i class="fa fa-twitter"> &nbsp; </i> </a> </li>
                        <li> <a href="https://plus.google.com/" class="lineCenter"> <i class="fa fa-google-plus"> &nbsp; </i> </a> </li>
                    </ul>
                </div>
            </div>
            <!--/.row-->
        </div>
        <!--/.container-->
    </div>
    <!--/.footer-->

    <div class="footer-bottom">
        <div class="container">
            <p class="pull-left"> Copyright © <strong>U &amp; U Constraction Ltd.</strong> </p>
        </div>
    </div>
    <!--/.footer-bottom-->
</footer>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/lightbox.js') }}"></script>
    <script src="{{ asset('js/form.js') }}"></script>
@include('flashy::message');
</body>
</html>
