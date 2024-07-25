<!DOCTYPE html>
<html>
<head>
    <title>Edit Review</title>
</head>
<body>
<h1>Edit Review</h1>
<form action="{{route('reviews.update', $review->id)}}" method="POST">
    @csrf
    @method('PUT')
    <label>Event:
        <select name="event_id" required>
            @foreach($events as $event)
                <option value="{{$event->id}}" {{$review->event_id == $event->id ? 'selected' : ''}}>
                    {{$event->name}}</option>
            @endforeach
        </select>
    </label>

    <label>User:
        <select name="user_id" required>
            @foreach($users as $user)
                <option value="{{$user->id}}" {{$review->user_id == $user->id ? 'selected' : ''}}>
                    {{$user->name}}</option>
            @endforeach
        </select>
    </label>

    <label>Rating:
        <input type="number" name="rating" min="1" max="5" value="{{$review->rating}}" required>
    </label>

    <label>Comment:
        <textarea name="comment" required>{{$review->comment}}</textarea>
    </label>

    <button type="submit">Update</button>
</form>
</body>
</html>
