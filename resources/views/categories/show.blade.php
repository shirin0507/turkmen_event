<!DOCTYPE html>
<html>
<head>
    <title>{{$category->name}}</title>
</head>
<body>
<h1>{{$category->name}}</h1>
<p>{{$category->description}}</p>
<a href="{{route('categories.edit', $category->id)}}">Edit</a>
<form action="{{route('categories.destroy', $category->id)}}" method="POST" style="display: inline;">
    @csrf
    @method('DELETE')
    <button
        type="submit" onclick="return confirm('Are you sure?')">Delete
    </button>
</form>
</body>
</html>
