<!DOCTYPE html>
<html>
<head>
    <title>Order Details</title>
</head>
<body>
<h1>Order{{$order->id}}</h1>
<p>
    <strong>User:</strong>{{$order->user->name}}
</p>
<p>
    <strong>Event:</strong>{{$order->event->name}}
</p>
<p>
    <strong>Quantity:</strong>{{$order->quantity}}
</p>
<p>
    <strong>Total Price:</strong>{{$order->total_price}}
</p>
</div>
<a href="{{route('orders.edit', $order->id)}}">Edit</a>
<form action="{{route('orders.destroy', $order->id)}}" method="POST">
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
