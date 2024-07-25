<!DOCTYPE html>
<html>
<head>
    <title>Edit Category</title>
</head>
<body>
<h1>Edit Category</h1>
<form action="{{route('categories.update', $category->id)}}" method="POST">
    @csrf
    @method('PUT')
    <label>Name:
        <input type="text" name="name" value="{{$category->name}}" required>
    </label>
    <label>Description:
        <textarea name="description" required>{{$category->description}}</textarea>
    </label>
    <button type="submit">Update</button>
</form>
</body>
</html>
