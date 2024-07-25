<!DOCTYPE html>
<html>
<head>
    <title>Create Event</title>
</head>
<body>
<h1>Create Event</h1>
<form action="{{route('events.store')}}" method="POST">
    @csrf
    <label>Name:
        <input type="text" name="name" required>
    </label>

    <label>Description:
        <textarea name="description" required>
            </textarea>
    </label>

    <label>Date:
        <input type="date" name="date" required>
    </label>

    <label>Location:
        <input type="text" name="location" required>
    </label>

    <label>Venue:
        <select name="venue_id" required>
            @foreach($venues as $venue)
                <option value="{{$venue->id}}">
                    {{$venue->name}}</option>
            @endforeach
        </select>
    </label>

    <label>Category:
        <select name="category_id" required>
            @foreach($categories as $category)
                <option value="{{$category->id}}">
                    {{$category->name}}</option>
            @endforeach
        </select>
    </label>

    <label>Organizer:
        <select name="organizer_id" required>
            @foreach($organizers as $organizer)
                <option value="{{$organizer->id}}">
                    {{$organizer->name}}</option>
            @endforeach
        </select>
    </label>
    <button type="submit">Create</button>
</form>
</body>
</html>
