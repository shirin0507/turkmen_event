<!DOCTYPE html>
<html>
<head>
    <title>Orders</title>
</head>
<body>
<h1>Orders List</h1>
@foreach($orders as $order)
    <div>
        <h2>Order#{{$order->id}}</h2>
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
@endforeach
</body>
</html>
