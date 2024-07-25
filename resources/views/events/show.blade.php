<!DOCTYPE html>
<html>
<head>
    <title>Event Details</title>
</head>
<body>
<h1>{{$event->name}}</h1>
<p>{{$event->description}}</p>
<p>
    <strong>Date:</strong>{{$event->date}}
</p>
<p>
    <strong>Location:</strong>
    {{$event->location}}
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
<a href="{{route('events.edit', $event->id)}}">Edit</a>
<form action="{{route('events.destroy', $event->id)}}" method="POST">
    @csrf
    @method('DELETE')
    <button
        type="submit" onclick="return confirm('Are you sure?')">Delete
    </button>
</form>
<a href="{{route('events.index')}}"
   class="btn btn-secondary">Back</a>
</body>
</html>
