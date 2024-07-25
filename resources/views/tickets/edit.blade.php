<!DOCTYPE html>
<html>
<head>
    <title>Edit Ticket</title>
</head>
<body>
<h1>Edit Ticket</h1>
<form action="{{route('tickets.update', $ticket->id)}}" method="POST">
    @csrf
    @method('PUT')
    <label for="price">Price:
        <input type="number" name="price" value="{{$ticket->price}}" required>
    </label>

    <label for="quantity">Quantity:
        <input type="number" name="quantity" value="{{$ticket->quantity}}" required>
    </label>

    <label for="status">Status:
        <input type="text" name="status" value="{{$ticket->status}}" required>
    </label>

    <label>Event:
        <select name="event_id" required>
            @foreach($events as $event)
                <option value="{{$event->id}} {{$ticket->event_id == $event->id ? 'selected' : ''}}">
                    {{$event->name}}</option>
            @endforeach
        </select>
    </label>

    <label>User:
        <select name="user_id" required>
            @foreach($users as $user)
                <option value="{{$user->id}} {{$ticket->user_id == $user->id ? 'selected' : ''}}">
                    {{$user->name}}</option>
            @endforeach
        </select>
    </label>

    <button type="submit">Update</button>
</form>
</body>
</html>
