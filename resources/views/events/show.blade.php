@extends('layouts.app')
@section('content')
    <h1>{{$event->title}}</h1>
    <p>{{$event->description}}</p>
    <p>
        <strong>Start Time:</strong>
        {{$event->start_time}}
    </p>
    <p>
        <strong>End Time:</strong>
        {{$event->end_time}}
    </p>
    <p>
        <strong>Venue:</strong>
        {{$event->venue->name}}
    </p>
    <p>
        <strong>Category:</strong>
        {{$event->category->name}}
    </p>
    <p>
        <strong>Organizer:</strong>
        {{$event->organizer->name}}
    </p>
    <a href="{{route('events.edit', ['event' => $event->id])}}"
       class="btn btn-warning">Edit</a>
    <form action="{{route('events.destroy', ['event' => $event->id])}}"
          method="POST" style="display: inline-block">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger"
                onclick="return confirm('Are you sure?')">Delete
        </button>
    </form>
    <a href="{{route('events.index')}}"
       class="btn btn-secondary">Back</a>
@endsection
