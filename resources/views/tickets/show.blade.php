<!DOCTYPE html>
<html>
<head>
    <title>Ticket for {{$ticket->event->name}}</title>
</head>
<body>
<h1>Ticket for {{$ticket->event->name}}</h1>
<p><strong>Price:</strong>{{$ticket->price}}
</p>
<p>
    <strong>Quantity:</strong>{{$ticket->quantity}}
</p>
<p>
    <strong>Status:</strong>{{$ticket->status}}
</p>
<p>
    <strong>User:</strong>{{$ticket->user->name}}
</p>
<a href="{{route('tickets.edit', $ticket->id)}}">Edit</a>
<form action="{{route('tickets.destroy', $ticket->id)}}" method="POST" style="display: inline;">
    @csrf
    @method('DELETE')
    <button
        type="submit" onclick="return confirm('Are you sure?')">Delete
    </button>
</form>
</body>
</html>
