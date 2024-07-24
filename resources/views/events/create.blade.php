@extends('layouts.app')
@section('content')
    <h1>Create Event</h1>
    <form action="{{route('events.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title"
                   class="form-control" required>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea id="description" name="description"
                      class="form-control" rows="4" required>
            </textarea>
        </div>
        <div class="form-group">
            <label for="start_time">Start Time:</label>
            <input type="datetime-local" id="start_time"
                   name="start_time" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="end_time">End Time:</label>
            <input type="datetime-local" id="end_time"
                   name="end_time" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="venue_id">Venue:</label>
            <select id="venue_id" name="venue_id"
                    class="form-control" required>
                @foreach($venues as $venue)
                    <option value="{{$venue->id}}">
                        {{$venue->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="category_id">Category:</label>
            <select id="category_id" name="category_id"
                    class="form-control" required>
                @foreach($categories as $category)
                    <option value="{{$category->id}}">
                        {{$category->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="organizer_id">Organizer:</label>
            <select id="organizer_id" name="organizer_id"
                    class="form-control" required>
                @foreach($organizers as $organizer)
                    <option value="{{$organizer->id}}">
                        {{$organizer->name}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">
            Create Event</button>
    </form>
@endsection
