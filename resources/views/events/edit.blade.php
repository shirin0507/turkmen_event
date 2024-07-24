@extends('layouts.app')
@section('content')
    <h1>Edit Event</h1>
    <form action="{{route('events.update', ['event' => $event->id])}}"
          method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title"
                   class="form-control" value="{{$event->title}}" required>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea id="description" name="description" class="form-control"
                      rows="4" required>{{$event->description}}"
            </textarea>
        </div>
        <div class="form-group">
            <label for="start_time">Start Time:</label>
            <input type="datetime-local" id="start_time"
                   name="start_time" class="form-control"
                   value="{{date('Y-m-d\TH:i', strtotime($event->start_time))}}"
                   required>
        </div>
        <div class="form-group">
            <label for="end_time">End Time:</label>
            <input type="datetime-local" id="end_time"
                   name="end_time" class="form-control"
                   value="{{date('Y-m-d\TH:i', strtotime($event->end_time))}}"
                   required>
        </div>
        <div class="form-group">
            <label for="venue_id">Venue:</label>
            <select id="venue_id" name="venue_id"
                    class="form-control" required>
                @foreach($venues as $venue)
                    <option value="{{$venue->id}}"
                            @if($venue->id == $event->venue_id)
                            selected @endif>
                        {{$venue->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="category_id">Category:</label>
            <select id="category_id" name="category_id"
                    class="form-control" required>
                @foreach($categories as $category)
                    <option value="{{$category->id}}"
                            @if($category->id == $event->category_id)
                            selected @endif>
                        {{$category->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="organizer_id">Organizer:</label>
            <select id="organizer_id" name="organizer_id"
                    class="form-control" required>
                @foreach($organizers as $organizer)
                    <option value="{{$organizer->id}}"
                            @if($organizer->id == $event->organizer_id)
                            selected @endif>
                        {{$organizer->name}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">
            Update Event
        </button>
    </form>
@endsection
