<!DOCTYPE html>
<html>
<head>
    <title>Edit Event</title>
</head>
<body>
<h1>Edit Event</h1>
<form action="{{route('events.update', $event->id)}}" method="POST">
    @csrf
    @method('PUT')
    <label>Name:
        <input type="text" name="name" value="{{$event->name}}" required>
    </label>

    <label>Description:
        <textarea name="description" required>{{$event->description}}"
            </textarea>
    </label>

    <label>Date:
        <input type="date" name="date" value="{{date($event->date)}}" required>
    </label>

    <label>Location:
        <input type="text" name="location" value="{{date($event->location)}}" required>
    </label>

    <label>Venue:
        <select name="venue_id" required>
            @foreach($venues as $venue)
                <option value="{{$venue->id}}"{{$event->venue_id == $venue->id ? 'selected' : ''}}>
                    {{$venue->name}}</option>
            @endforeach
        </select>
    </label>

    <label>Category:
        <select name="category_id" required>
            @foreach($categories as $category)
                <option value="{{$category->id}}" {{$event->category_id == $category->id ? 'selected' : ''}}>
                    {{$category->name}}</option>
            @endforeach
        </select>
    </label>

    <label>Organizer:
        <select name="organizer_id" required>
            @foreach($organizers as $organizer)
                <option value="{{$organizer->id}}" {{$event->organizer_id == $organizer->id ? 'selected' : ''}}>
                    {{$organizer->name}}</option>
            @endforeach
        </select>
    </label>
    <button type="submit">Update</button>
</form>
</body>
</html>
