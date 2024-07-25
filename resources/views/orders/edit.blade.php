<!DOCTYPE html>
<html>
<head>
    <title>Edit Order</title>
</head>
<body>
<h1>Edit Order</h1>
<form action="{{route('orders.update', $order->id)}}" method="POST">
    @csrf
    @method('PUT')
    <label>User:
        <select name="user_id" required>
            @foreach($users as $user)
                <option value="{{$user->id}}" {{$order->user_id == $user->id ? 'selected' : ''}}>
                    {{$user->name}}</option>
            @endforeach
        </select>
    </label>

    <label>Event:
        <select name="event_id" required>
            @foreach($events as $event)
                <option value="{{$event->id}}" {{$order->event_id == $event->id ? 'selected' : ''}}>
                    {{$event->name}}</option>
            @endforeach
        </select>
    </label>

    <label>Quantity:
        <input type="number" name="quantity" value="{{$order->quantity}}" required>
    </label>

    <label>Total Price:
        <input type="text" name="total_price" value="{{$order->total_price}}" required>
    </label>

    <button type="submit">Update</button>
</form>
</body>
</html>
