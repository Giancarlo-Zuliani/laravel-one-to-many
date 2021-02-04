@extends('layouts.main-layout')

@section('content')

    <h1>{{$emp -> name}}</h1>
    <ul>
        @foreach($emp -> tasks as $t)
        <li>{{$t -> title}}</li>
        @endforeach
    </ul>

 
@endsection


