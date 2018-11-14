<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
</head>
<body>

   






    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
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
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        
        

        
        





    </div>


    <div class="container ml-5">
            <div class="row">
            <div class="wrapper mt-4 col-md-3 col-lg-3">
                    <!-- Sidebar -->
                    <nav id="sidebar">
                        <div class="sidebar-header">
                            <h3>Navigation</h3>
                        </div>
                
                        <ul class="list-unstyled components">
                            <p></p>
                            <li class="active">
                                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Reports</a>
                                <ul class="collapse list-unstyled" id="homeSubmenu">
                                    <li>
                                        <a href="#">Monthly Reports</a>
                                    </li>
                                    <li>
                                        <a href="#">Sectional Reports</a>
                                    </li>
                                    <li>
                                        <a href="#">Individual Reports</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="/dispatch">View your Entries</a>
                            </li>
                            <li>
                                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pending Letters</a>
                                <ul class="collapse list-unstyled" id="pageSubmenu">
                                    <li>
                                        <a href="#">Section wise</a>
                                    </li>
                                    <li>
                                        <a href="#">Individual wise</a>
                                    </li>
                                    <li>
                                        <a href="#">Month wise</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="/dispatch/create">Make an Entry</a>
                            </li>
                            <li>
                                <a href="#">Find details</a>
                            </li>
                        </ul>
                    </nav>
                
                </div>



    <main class="py-4 col-md-8 col-lg-8">
            @include('message')
            @yield('content')
    </main>
    </div>
</div>
</body>
</html>
