@extends('layouts.main-layout')

@section('content')

    @foreach($emp as $e)
    <h5>{{$e -> name}}</h5>
    @endforeach
@endsection
