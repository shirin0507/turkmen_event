<!DOCTYPE html>
<html>
<head>
    <title>Create Ticket</title>
</head>
<body>
<h1>Create Ticket</h1>
<form action="{{route('tickets.store')}}" method="POST">
    @csrf
    <label for="price">Price:
        <input type="number" name="price" required>
    </label>

    <label for="quantity">Quantity:
        <input type="number" name="quantity" required>
    </label>

    <label for="status">Status:
        <input type="text" name="status" required>
    </label>

    <label>Event:
        <select name="event_id" required>
            @foreach($events as $event)
                <option value="{{$event->id}}">
                    {{$event->name}}</option>
            @endforeach
        </select>
    </label>

    <label>User:
        <select name="user_id" required>
            @foreach($users as $user)
                <option value="{{$user->id}}">
                    {{$user->name}}</option>
            @endforeach
        </select>
    </label>

    <button type="submit">Create</button>
</form>
</body>
</html>
