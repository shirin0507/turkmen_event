<!DOCTYPE html>
<html>
<head>
    <title>Venues</title>
</head>
<body>
<h1>Venues List</h1>
@foreach($venues as $venue)
    <div>
        <h2>{{$venue->name}}</h2>
        <p>{{$venue->address}}</p>
        <p>
            <strong>Capacity:</strong>{{$venue->capacity}}
        </p>
        <a href="{{route('venues.show', $venue->id)}}">View Details</a>
    </div>
@endforeach
</body>
</html>
