<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Macasu Website') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md   fixed-top" id="nav_bar">
            <div class="container">
                <a class="navbar-brand text-white" id="logo" href="{{ url('/') }}">
                    <!-- {{ config('app.name', 'Macasu Website') }} -->
                    Macasu Website
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <li><a href="#" target="_blank" class="nav-link text-white">InSideDashboard</a></li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li>
                                <a href="#" class="nav-link dropdown-toggle text-white" id="navbarDropdown"data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"v-pre>About</a>
                                <div class="dropdown-menu dropdown-position" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">About Macasu</a>
                                    <a class="dropdown-item" href="#">Community Members</a>
                                    <a class="dropdown-item" href="#">Leadership</a>
                                    {{-- <li><hr class="dropdown-divider"></li> --}}
                                    <a class="dropdown-item" href="#">Contacts</a>
                                </div>
                            </li>
                            <li><a href="#" class="nav-link text-white">Services</a></li>
                            <li><a href="#" class="nav-link text-white">Contacts</a></li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end " aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item text-black" href="{{ route('logout') }}"
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
        <main>
            @yield('content')
        </main>
        {{-- <section>

        </section> --}}
    </div>
    <script>
        window.onscroll = function() {scrollFunction()};
        // #1a1919c7
        function scrollFunction() {
            if (document.body.scrollTop > 30 || document.documentElement.scrollTop > 30) {
                document.getElementById("nav_bar").style.padding = "15px 0px";
                // document.getElementById("logo").style.fontSize = "20px";
                document.getElementById("nav_bar").style.backgroundColor = "green";
                document.getElementById("nav_bar").style.fontSize = "18px";
            } else {
                document.getElementById("nav_bar").style.padding = "25px 0px";
                document.getElementById("logo").style.fontSize = "25px";
                document.getElementById("nav_bar").style.backgroundColor = "rgba(0,0,0,0.1) !important";
            }
        }
    </script>
</body>
</html>
