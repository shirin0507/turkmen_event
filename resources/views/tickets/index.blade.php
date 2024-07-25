<!DOCTYPE html>
<html>
<head>
    <title>Tickets</title>
</head>
<body>
<h1>Tickets List</h1>
@foreach($tickets as $ticket)
    <div>
        <h2>
            {{$ticket->event->name}}
        </h2>
        <p>
            <strong>Price:</strong>{{$ticket->price}}
        </p>
        <p>
            <strong>Quantity:</strong>{{$ticket->quantity}}
        </p>
        <p>
            <strong>Status:</strong>{{$ticket->status}}
        </p>
        <a href="{{route('tickets.show', $ticket->id)}}">View Details</a>
    </div>
@endforeach
</body>
</html>
