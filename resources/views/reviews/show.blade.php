@extends('layouts.app')
@section('content')
    <h1>Review by{{$review->user->name}}</h1>
    <p>{{$review->review}}</p>
    <p>Rating:{{$review->rating}}</p>
@endsection
