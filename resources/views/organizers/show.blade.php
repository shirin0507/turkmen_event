<!DOCTYPE html>
<html>
<head>
    <title>{{$organizer->name}}</title>
</head>
<body>
<h1>{{$organizer->name}}</h1>
<p>
    <strong>Email:</strong> {{$organizer->email}}
</p>
<p>
    <strong>Phone:</strong> {{$organizer->phone}},
</p>
<a href="{{route('organizers.edit', $organizer->id)}}">Edit</a>
<form action="{{route('organizers.destroy', $organizer->id)}}" method="POST" style="display: inline;">
    @csrf
    @method('DELETE')
    <button
        type="submit" onclick="return confirm('Are you sure?')">Delete
    </button>
</form>
</body>
</html>
