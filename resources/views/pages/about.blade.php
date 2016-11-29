@extends('app')

@section('content')
    <h1>About</h1>

    <h3>People i like</h3>

    @if(count($names))
    <ul>

        @foreach($names as $name)
            <li>{{$name}}</li>
        @endforeach


    </ul>
    @endif
@stop
