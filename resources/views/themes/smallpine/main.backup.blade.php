<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Default Theme</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="{{URL::to('/')}}/assets/fontawesome/css/font-awesome.min.css">
    {{--<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">--}}

    <!-- Styles -->
    <link rel="stylesheet" href="{{URL::to('/')}}/assets/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{URL::to('/themes/smallpine')}}/css/style.css">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    @stack('style-top')
    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">
    <nav class="navbar navbar-blue navbar-static-top">
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
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{Theme::option('general','logo')}}
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    {!!html_entity_decode(Helper::menu())!!}
                </ul>
             
            </div>
        </div>
    </nav>
    @extends('themes.smallpine.'.Theme::option('layouts','layout_style'))

  @yield('content')

  <hr/>
    

    <!-- JavaScripts -->
    <script src="{{URL::to('/')}}/assets/jquery/dist/jquery.min.js"></script>
    <script src="{{URL::to('/')}}/assets/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="{{URL::to('/')}}/assets/js/bootstrap-submenu.min.js"></script>
    <script src="{{URL::to('/')}}/assets/js/main.js"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
    @stack('scripts')
</body>
</html>
    
  
