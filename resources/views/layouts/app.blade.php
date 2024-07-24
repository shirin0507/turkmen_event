<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Turkmen Event') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"/>

    <!-- Styles -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet"/>
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{url('/')}}">
                {{config('app.name', 'Turkmen Event')}}
            </a>
            <button
                class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-expanded="false" aria-label="{{__('Toggle navigation')}}">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <!--Left Side Of Navbar -->

                <ul class="navbar-nav nr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('events.index')}}">Events</a>
                    </li>
                    <li><a href="{{route('venues.index')}}">
                            Venues</a></li>
                    <li><a href="{{route('categories.index')}}">
                            Categories</a></li>
                    <li><a href="{{route('organizers.index')}}">
                            Organizers</a></li>
                    <li><a href="{{route('tickets.index')}}">
                            Tickets</a></li>
                    <li><a href="{{route('orders.index')}}">
                            Orders</a></li>
                    <li><a href="{{route('reviews.index')}}">
                            Reviews</a></li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('about')}}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('contact')}}">Contact</a>
                    </li>
                </ul>

                <!--Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('login')}}">{{__('Login')}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('register')}}">{{__('Register')}}</a>
                        </li>
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{\Illuminate\Support\Facades\Auth::user()->name}} <span class="caret"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{route('dashboard')}}">
                                    {{__('Dashboard')}}
                                </a>
                                <a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault();
document.getElementById('logout-form').submit();">
                                    {{__('Logout')}}
                                </a>
                                <form id="logout-form" action="{{route('logout')}}" method="POST"
                                      style="display: none;">
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
        @yield('content')
    </main>
</div>
<script src="{{asset('js/app.js')}}" defer></script>
</body>
</html>
