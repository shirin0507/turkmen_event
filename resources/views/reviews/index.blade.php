@extends('layouts.app')
@section('content')
    <h1>Reviews</h1>
    <ul>
        @foreach($reviews as $review)
            <li>
                {{$review->user->name}} - {{$ticket->review}} - Rating:{{$raview->rating}}
            </li>
        @endforeach
    </ul>
@endsection
