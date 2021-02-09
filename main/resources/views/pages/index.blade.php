@extends('layouts.main-layout')

@section('content')

    <a href="{{route('employee-index')}}">Employee</a>
    <a href="{{route('task-index')}}">Task</a>
    <a href="{{route('typology-index')}}">Typology</a>
@endsection
