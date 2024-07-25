<!DOCTYPE html>
<html>
<head>
    <title>{{$venue->name}}</title>
</head>
<body>
<h1>{{$venue->name}}</h1>
<p>
    <strong>Address:</strong>{{$venue->address}}
</p>
<p>
    <strong>Country:</strong>{{$venue->country}}
</p>
<p>
    <strong>Capacity:</strong>{{$venue->capacity}}
</p>
<a href="{{route('venues.edit', $venue->id)}}">Edit</a>
<form action="{{route('venues.destroy', $venue->id)}}" method="POST" style="display: inline;">
    @csrf
    @method('DELETE')
    <button
        type="submit" onclick="return confirm('Are you sure?')">Delete
    </button>
</form>
</body>
</html>
