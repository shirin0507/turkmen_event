<!DOCTYPE html>
<html>
<head>
    <title>Create Category</title>
</head>
<body>
<h1>Create Category</h1>
<form action="{{route('categories.store')}}" method="POST">
    @csrf
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>
    <label>Description:
        <textarea name="description" required></textarea>
    </label>
    <button type="submit">Create</button>
</form>
</body>
</html>
