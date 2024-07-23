@extends('layouts.app')
@section('content')
    <h1>Edit Ticket</h1>
    <form action="{{route('tickets.update', ['ticket' => $ticket->id])}}" method="POST">
        @csrf
        <label for="type">Type:</label>
        <input type="text" id="type" name="type" value="{{$ticket->type}}"
               required><br><br>
        <label for="price">Price:</label>
        <input type="number" id="price" name="price" value="{{$ticket->price}}" step="0.01"
               required><br><br>
        <label for="quantity">Quantity:</label>
        <input type="number" id="quantity" name="quantity" value="{{$ticket->quantity}}"
               required><br><br>
        <button type="submit">Update Ticket</button>
    </form>
@endsection
