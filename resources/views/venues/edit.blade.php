@section('content')
    <h1>Edit Venue</h1>
    <form action="{{route('venues.update', ['venue' => $venue->id])}}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{$venue->name}}" required><br><br>
        <label for="address">Address:</label>
        <input type="text" id="address" name="address" value="{{$venue->address}}" required><br><br>
        <label for="city">City:</label>
        <input type="text" id="city" name="city" value="{{$venue->city}}" required><br><br>
        <label for="country">Country:</label>
        <input type="text" id="country" name="country" value="{{$venue->country}}" required><br><br>
        <button type="submit">Update Venue</button>
    </form>
@endsection
