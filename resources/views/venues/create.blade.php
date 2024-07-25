<!DOCTYPE html>
<html>
<head>
    <title>Create Venue</title>
</head>
<body>
<h1>Create Venue</h1>
<form action="{{route('venues.store')}}" method="POST">
    @csrf
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>
    <label for="address">Address:</label>
    <input type="text" id="address" name="address" required>
    <label>Capacity:
        <input type="number" name="capacity" required>
    </label>
    <button type="submit">Create</button>
</form>
</body>
</html>
