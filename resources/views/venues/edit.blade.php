<!DOCTYPE html>
<html>
<head>
    <title>Edit Venue</title>
</head>
<body>
<h1>Edit Venue</h1>
<form action="{{route('venues.update', $venue->id)}}" method="POST">
    @csrf
    @method('PUT')
    <label>Name:
        <input type="text" name="name" value="{{$venue->name}}" required>
    </label>
    <label>Address:
        <input type="text" name="address" value="{{$venue->address}}" required>
    </label>
    <label>Capacity:
        <input type="number" name="city" value="{{$venue->capacity}}" required>
    </label>
    <button type="submit">Update</button>
</form>
</body>
</html>
