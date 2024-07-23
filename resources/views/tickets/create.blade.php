@extends('layouts.app')
@section('content')
    <h1>Create Ticket</h1>
    <form action="{{route('tickets.store')}}" method="POST">
        @csrf
        <label for="type">Type:</label>
        <input type="text" id="type" name="type" required><br><br>
        <label for="price">Price:</label>
        <input type="number" id="price" name="price" step="0.01" required><br><br>
        <label for="quantity">Quantity:</label>
        <input type="number" id="quantity" name="quantity" required><br><br>
        <button type="submit">Create Ticket</button>
    </form>
@endsection
