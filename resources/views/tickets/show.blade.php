@extends('layouts.app')
@section('content')
    <h1>{{$ticket->type}}</h1>
    <p><strong>Price:</strong>
        {{$ticket->price}}</p>
@endsection
