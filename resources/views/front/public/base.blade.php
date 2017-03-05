<html>
<head lang="en">
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/bootstrap-3.3.4.css')}}">
    <link href="{{asset('front/css/index.css')}}" rel="stylesheet" type="text/css">
    @yield('css')
    <script src="{{asset('front/js/jquery-1.9.1.min.js')}}"></script>
    <script src="{{asset('front/js/bootstrap.js')}}"></script>
</head>

<body>
<div>
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="http://127.0.0.1:1000">
                    Laravel
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    &nbsp;
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    <li><a href="http://127.0.0.1:1000/login">Login</a></li>
                    <li><a href="http://127.0.0.1:1000/register">Register</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="col-md-1"></div>
    <div class="col-md-10">
        <div class="content">
            @yield('content')
            </div>
        </div>
    </div>
</div>
<div class="col-md-1"></div>
</div>
@yield('js')
</body>
</html>
