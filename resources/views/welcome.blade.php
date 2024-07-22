<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome to Turkmen Event</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<div class="welcome-container">
    <h1>Welcome to Turkmen Event</h1>
    <p>Your go-to platform for discovering and
        organizing events in Turkmenistan.</p>
    <div class="actions">
        @auth
            <a href="{{route('events.index')}}">
                Browse Events</a>
        @else
            <a href="{{route('login')}}">
                Login</a>
            <a href="{{route('register')}}">
                Register</a>
        @endauth
    </div>
</div>
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
