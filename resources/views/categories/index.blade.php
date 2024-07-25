<!DOCTYPE html>
<html>
<head>
    <title>Categories</title>
</head>
<body>
<h1>Categories List</h1>
@foreach($categories as $category)
    <div>
        <h2>{{$category->name}}</h2>
        <p>{{$category->description}}</p>
        <a href="{{route('categories.show', $category->id)}}">View Details</a>
    </div>
@endforeach
</body>
</html>
