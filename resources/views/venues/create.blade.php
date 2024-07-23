@extends('layouts.app')
@section('content')
    <h1>Create Venue</h1>
    <form action="{{route('venues.store')}}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        <label for="address">Address:</label>
        <input type="text" id="address" name="address" required><br><br>
        <label for="city">City:</label>
        <input type="text" id="city" name="city" required><br><br>
        <label for="country">Country:</label>
        <input type="text" id="country" name="country" required><br><br>
        <button type="submit">Create Venue</button>
    </form>
@endsection
