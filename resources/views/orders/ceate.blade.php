<!DOCTYPE html>
<html>
<head>
    <title>Create Order</title>
</head>
<body>
<h1>Create Order</h1>
<form action="{{route('orders.store')}}" method="POST">
    @csrf
    <label>User:
        <select name="user_id" required>
            @foreach($users as $user)
                <option value="{{$user->id}}">
                    {{$user->name}}</option>
            @endforeach
        </select>
    </label>

    <label>Event:
        <select name="event_id" required>
            @foreach($events as $event)
                <option value="{{$event->id}}">
                    {{$event->name}}</option>
            @endforeach
        </select>
    </label>

    <label>Quantity:
        <input type="number" name="quantity" required>
    </label>

    <label>Total Price:
        <input type="text" name="total_price" required>
    </label>

    <button type="submit">Create</button>
</form>
</body>
</html>
