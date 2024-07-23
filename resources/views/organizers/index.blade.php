@extends('layouts.app')
@section('content')
    <h1>Organizers</h1>
    <ul>
        @foreach($organizers as $organizer)
            <li>
                {{$organizer->name}} - {{$organizer->email}}
            </li>
        @endforeach
    </ul>
@endsection
