<!DOCTYPE html>
<html>
<head>
    <title>Events</title>
</head>
<body>
<h1>Events List</h1>
@foreach($events as $event)
    <div>
        <h2>{{$event->name}}</h2>
        <p>{{$event->description}}</p>
        <p>
            <strong>Date:</strong>{{$event->date}}
        </p>
        <p>
            <strong>Location:</strong>{{$event->location}}
        </p>
        <p>
            <strong>Venue:</strong>
            @if($event->venue)
                {{$event->venue->name}}
            @else
                N/A
            @endif
        </p>
        <p>
            <strong>Category:</strong>
            @if($event->category)
                {{$event->category->name}}
            @else
                N/A
            @endif
        </p>
        <p>
            <strong>Organizer:</strong>
            @if($event->organizer)
                {{$event->organizer->name}}
            @else
                N/A
            @endif
        </p>
        <a href="{{route('events.show', $event->id)}}">View Details</a>
    </div>
@endforeach
</body>
</html>

