<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> @yield('title', 'CrossLink') </title>
    <!-- Scripts & Styles -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="grid-container">
    <div class="grid-x">
        <div class="top-bar small-12 medium-12 large-12 ">
            <div class="top-bar-left">
                <ul class="dropdown menu" data-dropdown-menu>
                    <li>
                        <a href="/">
                            <img src="{{asset('images/logo.png')}}">
                        </a>
                    </li>
                    <li class="menu-text">@yield('title', 'CrossLink')</li>
                    <li>
                        <a href="/">Home</a>
                    </li>
                    <li><a href="/bookmarks">Bookmarks</a></li>
                    <li><a href="/tags">Tags</a></li>
                </ul>
            </div>
            <div class="top-bar-right flex-center position-ref full-height">
                @if (Route::has('login'))
                    <div class="top-right links">
                        @auth
                            <a href="{{url('/profiles')}}">Profile</a>
                            {{--/, [$user->id]) - This is the code I tried to use to get to the following URL: /profiles/{user_id}
                            {{--<a href="{{ url('/profile') }}">Profile</a>--}}
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
                        @else
                            <a href="{{ route('login') }}">Login</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
            <!--<div class="top-bar-right">
                <ul class="menu vertical medium-horizontal">
                    <li><input type="search" placeholder="Search"></li>
                    <li>
                        <button type="button" class="button">Search</button>
                    </li>
                </ul>
            </div>-->
        </div>
        <div class="padding-top-1 large-12 medium-12 small-12">
            @yield('content')
        </div>
        <footer class="large-12 medium-12 small-12">
            <div class="callout">
                <p class="text-center">
                    Created by Jon-Luke Willemsen - 2019 Diploma of Software Development Student
                </p>
            </div>
        </footer>

    </div>
</div>
</body>
</html>
