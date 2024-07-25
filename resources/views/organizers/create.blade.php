<!DOCTYPE html>
<html>
<head>
    <title>Create Organizer</title>
</head>
<body>
<h1>Create Organizer</h1>
<form action="{{route('organizers.store')}}" method="POST">
    @csrf
    <label>Name:
        <input type="text" name="name" required>
    </label>

    <label>Email:
        <input type="email" name="email" required>
    </label>

    <label>Phone:
        <input type="text" name="phone" required>
    </label>

    <button type="submit">Create</button>
</form>
</body>
</html>
