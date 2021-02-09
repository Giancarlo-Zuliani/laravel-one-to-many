@extends('layouts.main-layout')

@section('content')
    @foreach($tsk as $t)

    <a href="{{route('task-show' , $t -> id)}}">{{$t-> title}}</a>
    <br>
    @endforeach
    @endsection