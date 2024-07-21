<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title', 'Turkmen Event')</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
        <nav>
            <ul>
                <li><a href="{{route('events.index')}}">
                        Events</a></li>
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
            </ul>
        </nav>
        <div class="container">
            @yield('content')
        </div>
        <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>
