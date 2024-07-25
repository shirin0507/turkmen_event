<!DOCTYPE html>
<html>
<head>
    <title>Reviews</title>
</head>
<body>
<h1>Reviews List</h1>
@foreach($reviews as $review)
    <div>
        <h2>{{$review->user->name}}'s Review</h2>
        <p>
            <strong>Event:</strong>{{$review->event->name}}
        </p>
        <p>
            <strong>Rating:</strong>{{$review->rating}}
        </p>
        <p>{{$review->comment}}</p>
        <a href="{{route('reviews.show', $review->id)}}">View Details</a>
    </div>
@endforeach
</body>
</html>
