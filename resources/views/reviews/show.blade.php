<!DOCTYPE html>
<html>
<head>
    <title>Review by {{$review->user->name}}</title>
</head>
<body>
<h1>Review by{{$review->user->name}}</h1>
<p>
    <strong>Event:</strong> {{$review->event->name}}
</p>
<p>
    <strong>Rating:</strong> {{$review->rating}},
</p>
<p>Rating:{{$review->comment}}</p>
<a href="{{route('reviews.edit', $review->id)}}">Edit</a>
<form action="{{route('reviews.destroy', $review->id)}}" method="POST" style="display: inline;">
    @csrf
    @method('DELETE')
    <button
        type="submit" onclick="return confirm('Are you sure?')">Delete
    </button>
</form>
</body>
</html>
