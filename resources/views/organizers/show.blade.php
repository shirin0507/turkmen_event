@extends('layouts.app')
@section('content')
    <h1>{{$organizer->name}}</h1>
    <p>
        <strong>Email:</strong>
        {{$organizer->email}}
    </p>
    <p>
        <strong>Phone:</strong>
        {{$organizer->phone}},
    </p>
@endsection