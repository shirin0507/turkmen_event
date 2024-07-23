@section('content')
    <h1>Venues</h1>
    <ul>
        @foreach($venues as $venue)
            <li>
                {{$venue->name}} - {{$venue->city}}, {{$venue->country}}
            </li>
        @endforeach
    </ul>
@endsection
