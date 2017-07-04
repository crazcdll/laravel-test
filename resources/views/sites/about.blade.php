@extends('app')
@section('content')
    <h1>About me {{$first}} {{$last}}</h1>
    <h2>People I admire</h2>
    @if(count($people) > 0)
        <ul>
            @foreach($people as $person)
                <li>{{ $person }}</li>
            @endforeach
        </ul>
    @endif
@endsection