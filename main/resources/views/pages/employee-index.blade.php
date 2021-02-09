@extends('layouts.main-layout')

@section('content')

    @foreach($emp as $e)
    <a href="{{route('employee-show' , $e-> id)}}">{{$e -> name}}</a>
    <br>
    @endforeach
@endsection
