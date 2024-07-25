<!DOCTYPE html>
<html>
<head>
    <title>Organizers</title>
</head>
<body>
<h1>Organizers List</h1>
@foreach($organizers as $organizer)
    <div>
        <h2>{{$organizer->name}}</h2>
        <p>
            <strong>Email:</strong>{{$organizer->email}}
        </p>
        <p>
            <strong>Phone:</strong>{{$organizer->phone}}
        </p>
        <a href="{{route('organizers.show', $organizer->id)}}">View Details</a>
    </div>
@endforeach
</body>
</html>
