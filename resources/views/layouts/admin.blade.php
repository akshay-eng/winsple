<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Favicon -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet" />
		<link rel="icon" href="" type="image/x-icon"/>
		<link rel="shortcut icon" type="image/x-icon" href="" />

		<!-- Title -->
		<title> Winsple</title>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	 <link href="assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet" />

		<!-- Style css -->
		<link href="assets/css/style.css" rel="stylesheet" />

		<!-- Font-awesome  css -->
		<link href="assets/css/icons.css" rel="stylesheet"/>

		<!--Select2 css -->
		<link href="assets/plugins/select2/select2.css" rel="stylesheet" />

		<!-- Cookie css -->
		<link href="assets/plugins/cookie/cookie.css" rel="stylesheet">

		<!-- Owl Theme css-->
		<link href="assets/plugins/owl-carousel/owl.carousel.css" rel="stylesheet" />

		<!--Jquery flexdatalist  css -->
		<link href="assets/plugins/jquery.flexdatalist/jquery.flexdatalist.css" rel="stylesheet">

		<!-- Switcher css -->
		<link  href="assets/switcher/css/switcher.css" rel="stylesheet" id="switcher-css" type="text/css" media="all"/>

		<!-- Color Skin css -->
		<link id="theme" rel="stylesheet" type="text/css" media="all" href="assets/color-skins/color.css" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <main class="py-4">
 
            @auth
                
     
            <div class="container">
                @if(session( )->has('success'))
                <div class="alert alert-success">
                    {{session()->get('success')}}
                </div>
    @endif
            <div class="row">
                <div class="col-md-4">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <a href="">courses</a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{route('categories.index')}}">Category</a>
                        </li>
                        <li class="list-group-item">
                            <a href="">Tags</a>
                        </li>
                    </ul>
        
                </div>
                <div calss="col-md-8">
                   
                        @yield('content')
                    
                </div>
            </div>
           
            @else
            @yield('content')
            @endauth
            </div>
        </main>

      
    </div>
</body>
</html>

