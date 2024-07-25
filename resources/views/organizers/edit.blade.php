<!DOCTYPE html>
<html>
<head>
    <title>Edit Organizer</title>
</head>
<body>
<h1>Edit Organizer</h1>
<form action="{{route('organizers.update', $organizer->id)}}" method="POST">
    @csrf
    @method('PUT')
    <label>Name:
        <input type="text" name="name" value="{{$organizer->name}}" required>
    </label>

    <label>Email:
        <input type="email" name="email" value="{{$organizer->email}}" required>
    </label>

    <label>Phone:
        <input type="text" name="phone" value="{{$organizer->phone}}" required>
    </label>

    <button type="submit">Update</button>
</form>
</body>
</html>
