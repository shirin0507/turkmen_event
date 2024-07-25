<!DOCTYPE html>
<html>
<head>
    <title>Create Review</title>
</head>
<body>
<h1>Create Review</h1>
<form action="{{route('reviews.store')}}" method="POST">
    @csrf
    <label>Event:
        <select name="event_id" required>
            @foreach($events as $event)
                <option value="{{$event->id}}">
                    {{$event->name}}</option>
            @endforeach
        </select>
    </label>

    <label>User:
        <select name="user_id" required>
            @foreach($users as $user)
                <option value="{{$user->id}}">
                    {{$user->name}}</option>
            @endforeach
        </select>
    </label>

    <label>Rating:
        <input type="number" name="rating" min="1" max="5" required>
    </label>

    <label>Comment:
        <textarea name="comment" required></textarea>
    </label>

    <button type="submit">Create</button>
</form>
</body>
</html>
