<!DOCTYPE html>
<html>
<head>
    <title>Brand</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link href="/themes/inspinia/css/bootstrap.min.css" rel="stylesheet">
    <link href="/themes/inspinia/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="/themes/inspinia/css/animate.css" rel="stylesheet">
    <link href="/themes/inspinia/css/plugins/bootstrapSocial/bootstrap-social.css" rel="stylesheet">
    <link href="/themes/inspinia/css/style.css" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
</head>
<body class="top-navigation">
<div id="wrapper">
    <div id="page-wrapper" class="white-bg">
        @section('nav')
            <div class="row border-bottom white-bg">
                <nav class="navbar navbar-static-top" role="navigation">
                    <div class="navbar-header">
                        <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                            <i class="fa fa-reorder"></i>
                        </button>
                        <a href="{{ route('home') }}" class="navbar-brand">Brand</a>
                    </div>
                    <div class="navbar-collapse collapse" id="navbar">
                        {{--<ul class="nav navbar-nav">--}}
                            {{--<li class="active">--}}
                                {{--<a aria-expanded="false" role="button" href="layouts.html"> Back to main Layout page</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                        <ul class="nav navbar-top-links navbar-right">
                            @if(\Illuminate\Support\Facades\Auth::user())
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        {{ \Illuminate\Support\Facades\Auth::user()->username }} <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href={{ route('dashboard') }}>Dashboard</a></li>
                                        <li><a href={{ route('settings.profile') }}>Settings</a></li>
                                        <li>
                                            <a id="btn-logout" href=>Logout</a>
                                            <form id="logout-form" class="hidden" >
                                                {{ csrf_field() }}
                                            </form>

                                        </li>
                                    </ul>
                                </li>
                            @else
                                <li><a href data-toggle="modal" data-target="#login-modal">Login</a></li>
                                <li><a href data-toggle="modal" data-target="#sign-up-modal">Sign Up</a></li>
                            @endif
                        </ul>
                    </div>
                </nav>
            </div>
        @show
        <div class="content-wrapper">
            @yield('content')
        </div>
        <div class="footer">
        <div>
            <strong>Copyright</strong> Example Company © 2014-2017
        </div>
        </div>
         @include('components/loader')
    </div>
</div>
@if(!in_array(Route::current()->getName(),['login','register']))
    @include('modals/login')
    @include('modals/signup')
@endif
</body>
<script src="/js/bootstrap.js"></script>
<!-- Mainly scripts -->
<script src="/themes/inspinia/js/jquery-2.1.1.js"></script>
<script src="/themes/inspinia/js/bootstrap.min.js"></script>
<script src="/themes/inspinia/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="/themes/inspinia/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="/themes/inspinia/js/plugins/pace/pace.min.js"></script>
<script src="/themes/inspinia/js/inspinia.js"></script>
<script>
    var route = '{!! Route::current()->getName() !!}';
</script>
<!-- Chosen -->
<script src="/js/app.js"></script>

</html>
