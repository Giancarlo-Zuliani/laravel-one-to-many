@extends('layouts.main-layout')

@section('content')

    <a href="{{route('employee-index')}}">Employee</a>
    <a href="{{route('task-index')}}">Task</a>
    <a href="{{route('typology-index')}}">Typology</a>
    <br>
    <a href="{{route('employee-create')}}">create new employee</a>
    <a href="{{route('task-create')}}">create a new task</a>
    <a href="{{route('typology-create')}}">create a new typology</a>
    @endsection
