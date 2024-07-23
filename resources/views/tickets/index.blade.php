@extends('layouts.app')
@section('content')
    <h1>Tickets</h1>
    <ul>
        @foreach($tickets as $ticket)
            <li>
                {{$ticket->type}} - {{$ticket->price}}
            </li>
        @endforeach
    </ul>
@endsection
