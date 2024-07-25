@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Contact Us</h1>
        <p>If you have any questions, suggestions, or need support, please feel free to contact us using the form below.
            We would love to hear from you!</p>
        <form action="{{route('contact.send')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" id="message" name="message" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Send Message</button>
        </form>
    </div>
@endsection
